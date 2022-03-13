(function( $ ){
    $(function(){
         /**/
         $('#fullpage').fullpage({
             licenseKey: 'CBAFCEAD-E1AB493B-8EC1A2E5-2AF1FCB4', //kimseyoung
            anchors: ['page1', 'page2', 'page3','page4', 'page5'],
            fitToSection:false,
            menu:'#fix-nav',
            // scrollBar: true,
            responsiveWidth: 1024, 
            // // css3: true,
            fitToSection: false,
            // responsiveHeight: 960,
            // autoScrolling: true,
            // scrollOverflow: true,
            // // scrollOverflowOptions
            // mouseWheel: true,
            // hideScrollbars: false,
            // fadeScrollbars: false,
            // disableMouse: true,
            afterResponsive: function(isResponsive){
            },
            onLeave: function(index, nextIndex, direction){	
                $('#header').addClass('h_scroll');
            },
            afterLoad: function(anchorLink, index){	
    
                $('#header').attr('h_scroll');
                $('.fp-viewing-page1 #header').removeClass('h_scroll');

                // if (screen && screen.width < 768)  {
                //     $('.fp-viewing-page1 #header').css('display','block');
                // }
                
            },
            
        });
    });
    
    })( jQuery );


    
    
// if (screen && screen.width > 768) {
// document.write('<script type="text/javascript" src="js/jquery.fullPage.js"><\/script>');
// }
// </script>
// <script type="text/javascript">
// $(document).ready(function() {
// $('#fullpage').fullpage({
// anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
// css3: true,
// fitToSection: false,
// autoScrolling: true,
// scrollOverflow: true,
// scrollOverflowOptions: {
// scrollbars: true,
// mouseWheel: true,
// hideScrollbars: false,
// fadeScrollbars: false,
// disableMouse: true
// }
// });
// });
