$( document ).ready(function() {


    ;( function( $, window, document, undefined ){
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
     })( jQuery, window, document );




     ;( function( $, window, document, undefined ){


         $( ".onderdeel-title" ).mouseenter(

           function() {
             $(this).siblings("a").children(".overlay-grijs").hide();

         });


         $( ".onderdeel-title" ).mouseleave(

           function() {
             $(this).siblings("a").children(".overlay-grijs").show();

         });


         $("ul.status li a img.active").parents( "li" ).prevAll().css( "border-color", "#9f9d9d" );


     })( jQuery, window, document );



});
