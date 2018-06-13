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



      /**** IMAGE CHANGE OP KLEIN FORMAAT ****/

      /* Contact astronaut */
      if (window.matchMedia("(max-width: 768px)").matches) {

        $(".col-6.astronaut img").attr('src', '/img/astronaut-small.png');

      }


      /* header pruik  */

      if (window.matchMedia("(max-width: 540px)").matches) {

        $("#header-achtergrond-pruik").attr('src', '/img/pruik-achtergrond-klein.jpg');

      }




});
