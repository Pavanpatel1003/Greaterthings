function initSlider() {
    const container = document.getElementById('partnerContainer');
    container.innerHTML = ''; // Clear old content

    function toRoman(num) {
        const romanMap = [
            [1000, "M"], [900, "CM"], [500, "D"], [400, "CD"],
            [100, "C"], [90, "XC"], [50, "L"], [40, "XL"],
            [10, "X"], [9, "IX"], [5, "V"], [4, "IV"], [1, "I"]
        ];
        let result = "";
        for (const [value, numeral] of romanMap) {
            while (num >= value) {
                result += numeral;
                num -= value;
            }
        }
        return result;
    }

    collectionData.forEach((org, index) => {
        const orgBox = document.createElement('div');
        orgBox.classList.add('slider-item');

        const hasImage = org.collections.length > 0 && org.collections[0].collection_img?.length > 0;
        const imgPath = hasImage ? org.collections[0].collection_img[0] : '';
        const imgDataAttr = hasImage ? `data-img="${imgPath}"` : '';

        const redirectUrl = org.collections.length === 1
            ? `./individual_collection.html?orgid=${org.organization_id}&collection_id=${org.collections[0].collection_id}`
            : `./individual_purchase.html?orgid=${org.organization_id}`;

        orgBox.setAttribute('onclick', `window.location.href='${redirectUrl}'`);

        const collectionList = org.collections.map(col => `
            <li><span class="me-2"><i class="fa-solid fa-xmark"></i></span> ${col.collection_name}</li>
        `).join('');

        orgBox.innerHTML = `
            <div class="grid-item grid-items highlighted textclass highlighted${index + 1}" ${imgDataAttr}>
                <p class="fig-title">Fig. ${toRoman(index + 1)}</p>
                <p class="main-title">${org.organization_name}</p>
                <div class="purchase-feature">
                    <ul class="feature-list">${collectionList}</ul>
                </div>
            </div>
        `;

        container.appendChild(orgBox);
    });

    applyImageEffects();

    if (window.innerWidth > 767) {
        applyScrollSlider();
    }
}

function applyScrollSlider() {
    const slider = document.querySelector('.slider-wrapper');
    if (!slider) return;

    let isDown = false;
    let startX, startY, scrollLeft, scrollTop;

    // Mouse drag
    slider.addEventListener("mousedown", (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        startY = e.pageY - slider.offsetTop;
        scrollLeft = slider.scrollLeft;
        scrollTop = slider.scrollTop;
    });

    slider.addEventListener("mouseleave", () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener("mouseup", () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener("mousemove", (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const y = e.pageY - slider.offsetTop;
        const walkX = (x - startX) * 1.5;
        const walkY = (y - startY) * 1.5;
        slider.scrollLeft = scrollLeft - walkX;
        slider.scrollTop = scrollTop - walkY;
    });

    // Touch drag
    slider.addEventListener("touchstart", (e) => {
        startX = e.touches[0].pageX;
        startY = e.touches[0].pageY;
        scrollLeft = slider.scrollLeft;
        scrollTop = slider.scrollTop;
    });

    slider.addEventListener("touchmove", (e) => {
        const x = e.touches[0].pageX;
        const y = e.touches[0].pageY;
        const walkX = (x - startX) * 1.5;
        const walkY = (y - startY) * 1.5;
        slider.scrollLeft = scrollLeft - walkX;
        slider.scrollTop = scrollTop - walkY;
    });

    // Wheel scroll – keep this if you want scroll wheel to also move horizontally
    slider.addEventListener("wheel", (e) => {
        if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) {
            e.preventDefault();
            slider.scrollLeft += e.deltaY;
        }
    }, { passive: false });
}



function applyImageEffects() {
    const isMobile = window.innerWidth <= 767;
    document.querySelectorAll('.grid-item').forEach(item => {
        const img = item.getAttribute('data-img');
        if (!img) return;

        item.style.backgroundRepeat = 'no-repeat';
        item.style.backgroundSize = 'cover';
        item.style.backgroundPosition = 'center center';
        item.style.backgroundAttachment = 'scroll';
        item.style.transition = 'all 0.3s ease';
        item.style.cursor = 'pointer';

        if (isMobile) {
            item.style.backgroundImage = `linear-gradient(to right, rgb(50 33 0), rgba(255, 255, 255, 0.73)),url('${img}')`;
            item.style.backgroundColor = 'rgba(51, 34, 2, 0.81)';
            item.style.backgroundBlendMode = 'overlay';
            item.style.color = 'white';
        } else {
            item.addEventListener('mouseenter', () => {
                item.style.backgroundImage = `url('${img}')`;
                item.style.backgroundColor = 'rgba(51, 34, 2, 0.81)';
                item.style.backgroundBlendMode = 'overlay';
                item.style.color = 'white';
            });
            item.addEventListener('mouseleave', () => {
                item.style.backgroundImage = 'none';
                item.style.backgroundColor = 'transparent';
                item.style.backgroundBlendMode = 'normal';
                item.style.color = '';
            });
        }
    });
}

// ✅ Page ready
window.onload = () => {
    requestAnimationFrame(() => {
        initSlider();
    });
};

// ✅ Resize refresh
window.addEventListener('resize', () => {
    requestAnimationFrame(() => {
        initSlider();
    });
});
