  $(document).ready(function(){
      
      $('.deactive_status').on('click', function(e) {
    // Prevent default behaviour for <a/>
    e.preventDefault();

    var id = $(this).data("id");
    var status = $(this).data("status");
    var table = $(this).data("table");
    var action = "Update";
    
    var titles = $(this).data("val");
     var t1;
     var f1;
      var c1;
    if(titles === "Approved"){
       
        t1 = "Do you want to approved the record ?";
        f1= "Failed to approved. Please try again.";
        c1 = "The approved has been cancelled.";
    }else if(titles === "Block"){
          t1 = "Do you want to block the record ?";
        f1= "Failed to block. Please try again.";
        c1 = "The block has been cancelled.";
    }else if(titles === "Featured"){
          t1 = "Do you want to Featured No the record ?";
        f1= "Failed to Featured No. Please try again.";
        c1 = "The Featured No has been cancelled.";
    }else{
       t1 = "Do you want to deactivate the record ?";
        f1= "Failed to deactivate. Please try again.";
        c1 = "The deactivation has been cancelled.";  
        
    }

    // Use SweetAlert for the prompt 
    Swal.fire({
        title: 'Are you sure?',
        text: t1,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // If the user confirmed, proceed with the AJAX call
            if (id && table) {
                $.ajax({
                    type: 'POST',
                    url: 'Action.php',
                    data: { id: id, status: status, table: table, titles:titles,action: action },
                    success: function(html) {
                     location.reload();
                    },
                    error: function() {
                        // Handle errors if any occur during the AJAX request
                        Swal.fire({
                            title: 'Error',
                            text:f1,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            } else {
                location.reload();
            }
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // If the user canceled, simply do nothing
            Swal.fire({
                title: 'Cancelled',
                text:c1,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    }).catch((error) => {
        // Handle any errors that may occur with SweetAlert
        Swal.fire({
            title: 'Error',
            text: 'Something went wrong!',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    });
});


  
  $('.active_status').on('click', function(e) {
    // Prevent default behaviour for <a/>
    e.preventDefault();

    var id = $(this).data("id");
    var status = $(this).data("status");
    var table = $(this).data("table");
    var action = "Update";
    
     var titles = $(this).data("val");
     var t1;
     var f1;
      var c1;
    if(titles === "Rejected"){
       
        t1 = "Do you want to Rejected the record ?";
        f1= "Failed to Rejected. Please try again.";
        c1 = "The Rejected has been cancelled.";
    }else if(titles === "Unblock"){
          t1 = "Do you want to unblock the record ?";
        f1= "Failed to unblock. Please try again.";
        c1 = "The unblock has been cancelled.";
    }else if(titles === "Featured"){
          t1 = "Do you want to Featured Yes the record ?";
        f1= "Failed to Featured Yes. Please try again.";
        c1 = "The Featured Yes has been cancelled.";
    }else{
       t1 = "Do you want to active the record ?";
        f1= "Failed to active. Please try again.";
        c1 = "The active has been cancelled.";  
        
    }

    // Use SweetAlert for the prompt
    Swal.fire({
        title: 'Are you sure?',
        text:t1,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // If the user confirmed, proceed with the AJAX call
            if (id && table) {
                $.ajax({
                    type: 'POST',
                    url: 'Action.php',
                    data: { id: id, status: status, table: table, titles:titles,action: action },
                    success: function(html) {
                       location.reload();
                    },
                    error: function() {
                        // Handle errors if any occur during the AJAX request
                        Swal.fire({
                            title: 'Error',
                            text:f1,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            } else {
                location.reload();
            }
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // If the user canceled, simply do nothing
            Swal.fire({
                title: 'Cancelled',
                text:c1,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    }).catch((error) => {
        // Handle any errors that may occur with SweetAlert
        Swal.fire({
            title: 'Error',
            text: 'Something went wrong!',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    });
});


 
  
   
  $('.delete').on('click', function(e) {
    // Prevent default behaviour for <a/>
    e.preventDefault();

       var id = $(this).data('id');
        var table = $(this).data('table');
        var action = "Delete";
        var picname =$(this).data('pic');

    // Use SweetAlert for the prompt
    Swal.fire({
        title: 'Are you sure?',
        text: 'Do you want to delete the record ?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // If the user confirmed, proceed with the AJAX call
            if (id && table) {
                $.ajax({
                    type: 'POST',
                    url: 'Action.php',
                    data:{ id:id,table:table,action:action,picname:picname},
                    success: function(html) {
                       location.reload();
                    },
                    error: function() {
                        // Handle errors if any occur during the AJAX request
                        Swal.fire({
                            title: 'Error',
                            text: 'Failed to delete. Please try again.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                });
            } else {
                location.reload();
            }
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // If the user canceled, simply do nothing
            Swal.fire({
                title: 'Cancelled',
                text: 'The delete has been cancelled.',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    }).catch((error) => {
        // Handle any errors that may occur with SweetAlert
        Swal.fire({
            title: 'Error',
            text: 'Something went wrong!',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    });
});
  
  }); 
  
  