
    // Check if the entire page is already loaded
    $( document ).ready(function() {

        // Set the interval for the window refresh
        window.setInterval(function() {
            
            $(".table-container").load(" .table-container > *");
        }, 60000);
           
    });    