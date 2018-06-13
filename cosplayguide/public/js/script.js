$( document ).ready(function() {



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


      if (window.matchMedia("(max-width: 768px)").matches) {

        $(".col-6.astronaut img").attr('src', '/img/astronaut-small.png');

      }

      else {
        $(".col-6.astronaut img").attr('src', '/img/astronaut.png');
      }

      
      $(".footer-background").attr('src', '/img/footer.jpg');
      $(".footer-background-earth").attr('src', '/img/footer-earth.jpg');




      $("ul.status li a img.active").parents( "li" ).prevAll().css( "border-color", "#d5d3d3" );





});
