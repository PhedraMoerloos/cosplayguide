$( document ).ready(function() {


      /* UPLOAD FILES FILL SPAN MET NAAM OF AANTAL BESTANDEN */
    	$( '.inputfile' ).each( function()
    	{
    		var $input	 = $( this ),
    			$label	 = $input.next( 'label' ),
    			labelVal = $label.html();

    		$input.on( 'change', function( e )
    		{
    			var fileName = '';

    			if( this.files && this.files.length > 1 )
    				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
    			else if( e.target.value )
    				fileName = e.target.value.split( '\\' ).pop();

    			if( fileName )
    				$label.find( 'span' ).html( fileName );
    			else
    				$label.html( labelVal );
    		});

    		// Firefox bug fix
    		$input
    		.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
    		.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
  	   });




       /* PROGRESS HOVER ONDERDELEN */
       if (window.matchMedia("(max-width: 992px)").matches) {



         $( ".onderdeel-title" ).mouseenter(

           function() {
             $(this).siblings("a").children(".overlay-grijs").css('display', 'none');

         });


         $( ".onderdeel-title" ).mouseleave(

           function() {
             $(this).siblings("a").children(".overlay-grijs").css('display', 'none');

         });




       } else {



          $( ".onderdeel-title" ).mouseenter(

            function() {
              $(this).siblings("a").children(".overlay-grijs").hide();

          });


          $( ".onderdeel-title" ).mouseleave(

            function() {
              $(this).siblings("a").children(".overlay-grijs").show();

          });


      }




      /* FOOTER ACHTERGROND */
      $(".footer-background").attr('src', '/img/footer.jpg');
      $(".footer-background-earth").attr('src', '/img/footer-earth.jpg');



      /* PROGRESS STATUSBALK */
      $("ul.status li a img.active").parents( "li" ).prevAll().css( "border-color", "#d5d3d3" );


      /* MEER INFO SCROLL */
      $('.button-meer-info').click(function(e) {
        e.preventDefault();

        $('html, body').animate({
          scrollTop: $('.meer-info-target').offset().top
        }, 500);
      });


      /* STAPPEN ABOUT SCROLL */
      $('.naar-stap-twee').click(function(e) {
        e.preventDefault();

        $('html, body').animate({
          scrollTop: $('.stap-twee').offset().top
        }, 500);
      });


      $('.naar-stap-drie').click(function(e) {
        e.preventDefault();

        $('html, body').animate({
          scrollTop: $('.stap-drie').offset().top
        }, 500);
      });


      /**** IMAGE CHANGE OP KLEIN FORMAAT ****/

      /* Contact astronaut */
      if (window.matchMedia("(max-width: 768px)").matches) {

        $(".col-6.astronaut img").attr('src', '/img/astronaut-small.png');

      }


      /* header pruik  */

      if (window.matchMedia("(max-width: 540px)").matches) {

        $("#header-achtergrond-pruik").attr('src', '/img/pruik-achtergrond-klein.jpg');
        $("#header-achtergrond-grime").attr('src', '/img/grime-achtergrond-klein.jpg');
        $("#header-achtergrond-stoffen").attr('src', '/img/stoffen-achtergrond-klein.jpg');

      }


      /* links image */

      if (window.matchMedia("(min-width: 1348px)").matches) {

        $(".links-image-rechts img").attr('src', '/img/pruik-links-groot.jpg');
        $(".worbla .links-image-rechts img").attr('src', '/img/worbla-arm-rechts-groot.png');
        $(".beginnertips-foto-rechts").attr('src', '/img/beginnertips-links-groot.jpg');
        $(".lenzen-foto-rechts").attr('src', '/img/lenzen-links-groot.jpg');
        $(".grime-foto-rechts").attr('src', '/img/grime-links-groot.jpg');
        $(".armor-foto-rechts").attr('src', '/img/armor-links-groot.jpg');
        $(".voorwerp-foto-rechts").attr('src', '/img/voorwerp-links-groot.jpg');
        $(".stoffen-foto-rechts").attr('src', '/img/stoffen-links-groot.jpg');


      }


      if (window.matchMedia("(max-width: 960px)").matches) {

        $(".links-image-rechts img").attr('src', '/img/pruik-links-medium.jpg');
        $(".worbla .links-image-rechts img").attr('src', '/img/worbla-arm-rechts-medium.png');
        $(".beginnertips-foto-rechts").attr('src', '/img/beginnertips-links-medium.jpg');
        $(".grime-foto-rechts").attr('src', '/img/grime-links-medium.png');
        $(".lenzen-foto-rechts").attr('src', '/img/lenzen-links-medium.png');
        $(".stoffen-foto-rechts").attr('src', '/img/stoffen-links-medium.png');

      }

      if (window.matchMedia("(max-width: 768px)").matches) {

        $(".links-image-rechts img").attr('src', '/img/pruik-links-small.jpg');
        $(".worbla .links-image-rechts img").attr('src', '/img/worbla-arm-rechts-small.png');
        $(".beginnertips-foto-rechts").attr('src', '/img/beginnertips-links-small.jpg');
        $(".grime-foto-rechts").attr('src', '/img/grime-links-small.jpg');
        $(".lenzen-foto-rechts").attr('src', '/img/lenzen-links-small.jpg');
        $(".stoffen-foto-rechts").attr('src', '/img/stoffen-links-small.jpg');

      }


      /* Remove br elementen in h1 Worbla & Foam */
      if (window.matchMedia("(max-width: 768px)").matches) {

        $("br").remove();

      }





});
