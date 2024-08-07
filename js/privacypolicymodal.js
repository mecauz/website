      // Delayed Modal Display + Cookie On Click
      $(document).ready(function() {
  
        // If no cookie with our chosen name (e.g. no_thanks)...
        if ($.cookie("no_thanks") == null) {
  
          // Show the modal, with delay func.
          $('#myModal').appendTo("body");
          function show_modal(){
            $('#myModal').modal();
          }
  
          // Set delay func. time in milliseconds
          window.setTimeout(show_modal, 100);
          }
  
        // On click of specified class (e.g. 'nothanks'), trigger cookie, which expires in 100 years
        $(".nothanks").click(function() {
          $.cookie('no_thanks', 'true', { expires: 36500, path: '/' });
        });
      });