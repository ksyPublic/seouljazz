(function($) { // Begin jQuery
    $(function() { // DOM ready
      // If a link has a dropdown, add sub menu toggle.
      $('nav ul li a:not(:only-child)').click(function(e) {
        $(this).siblings('.nav-dropdown').toggle();
        // Close one dropdown when selecting another
        $('.nav-dropdown').not($(this).siblings()).hide();
        e.stopPropagation();
      });
      // Clicking away from dropdown will remove the dropdown class
      $('html').click(function() {
        $('.nav-dropdown').hide();
      });
      // Toggle open and close nav styles on click
      $('#nav-toggle').click(function() {
        $('nav ul').css("right", "0");
      });

      $("#sidenav").click(function() {
        $(".ly-hd-menu ul.in-none").css("right", "-200px");
        //  this.classList.toggle('active');
    });
      
      // Hamburger to X toggle
    //   $('#nav-toggle').on('click', function() {
    //     // if (location.hash != "#open") {
    //     //     $(".page_cover").removeClass("open");
    //     //  }
    //     this.classList.toggle('active');
    //   });

    //   $("#onMbtn").click(function() {
    //     $("#menu,.page_cover,html").addClass("open");
    //     window.location.hash = "#open";
    //   });
      
    //   window.onhashchange = function() {
    //     if (location.hash != "#open") {
    //       $("#menu,.page_cover,html").removeClass("open");
    //     }
    //   };

    }); // end DOM ready
  })(jQuery); // end jQuery