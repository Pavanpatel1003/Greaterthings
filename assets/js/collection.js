window.onload = function () {
    const container = document.getElementById('collectionContainer');
    let count = 1;

    // First render all grid items
    collectionData.forEach(org => {
        org.collections.forEach((col) => {
            const colBox = document.createElement('div');
            colBox.classList.add('col', 'custom-box');

            colBox.setAttribute('onclick', `window.location.href='./individual_collection.html?orgid=${org.organization_id}&collection_id=${col.collection_id}'`);

            const hasImage = col.collection_img && col.collection_img.length > 0;
            const imgPath = hasImage ? `./${col.collection_img[0]}` : null;

            const imgDataAttr = hasImage ? `data-img="${imgPath}"` : '';

            colBox.innerHTML = `
                <div class="grid-item highlighted textcollection" ${imgDataAttr}>
                    <p class="fig-title">No. ${toRoman(count)}</p>
                    <p>${col.collection_name}</p>
                    <!-- Display Organization Name -->
                    <p class="org-name org-name-wrap">${org.organization_name}</p>
                </div>
                <div class="bottom-line"></div>
            `;

            container.appendChild(colBox);
            count++;
        });
    });

    applyImageBehavior();

    // Apply behavior on resize too
    window.addEventListener('resize', applyImageBehavior);

    // Roman numeral conversion function
    function toRoman(num) {
        const lookup = [
            { value: 1000, numeral: 'M' },
            { value: 900, numeral: 'CM' },
            { value: 500, numeral: 'D' },
            { value: 400, numeral: 'CD' },
            { value: 100, numeral: 'C' },
            { value: 90, numeral: 'XC' },
            { value: 50, numeral: 'L' },
            { value: 40, numeral: 'XL' },
            { value: 10, numeral: 'X' },
            { value: 9, numeral: 'IX' },
            { value: 5, numeral: 'V' },
            { value: 4, numeral: 'IV' },
            { value: 1, numeral: 'I' }
        ];
        let result = '';
        for (const { value, numeral } of lookup) {
            while (num >= value) {
                result += numeral;
                num -= value;
            }
        }
        return result;
    }

    // Apply image behavior based on screen size
    function applyImageBehavior() {
        const isMobile = window.innerWidth <= 991;

        document.querySelectorAll('.grid-item').forEach(item => {
            const img = item.getAttribute('data-img');

            if (!img) return;

            // Remove any previously set hover handlers
            item.onmouseenter = null;
            item.onmouseleave = null;

            if (isMobile) {
                // Directly show image on mobile
                item.style.backgroundImage = `linear-gradient(to right, rgb(50 33 0), rgba(255, 255, 255, 0.73)),url('${img}')`;
                item.style.backgroundColor = 'rgb(51 34 2 / 81%)';
                item.style.backgroundBlendMode = 'overlay';
                item.style.transition = 'background-color 1.5s ease';
            } else {
                // Clear background image for desktop (initially)
                item.style.backgroundImage = 'none';
                item.style.backgroundColor = 'transparent';
                item.style.backgroundBlendMode = 'normal';

                // Add hover events
                item.addEventListener('mouseenter', () => {
                    item.style.backgroundImage = `url('${img}')`;
                    item.style.backgroundColor = 'rgb(51 34 2 / 81%)';
                    item.style.backgroundBlendMode = 'overlay';
                });
                item.addEventListener('mouseleave', () => {
                    item.style.backgroundImage = 'none';
                    item.style.backgroundColor = 'transparent';
                    item.style.backgroundBlendMode = 'normal';
                });
            }
        });
    }
};
