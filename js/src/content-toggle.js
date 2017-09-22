/*global jQuery */
if (jQuery) {
	(function($) {
		"use strict";

		// Set toggle indicators and add ARIA attributes on page load.
		$( "#page .toggle-container" ).each( function( i, item ){
			var expanded = $( item ).hasClass( "toggle-open" ),
				trigger  = $( item ).find( ".toggle-trigger" ),
				content  = $( item ).find( ".toggle-content" ),
				hash     = new Date().getTime() + "-" + i;

			// Set the toggle indicator arrows.
			if ( expanded ) {
				$( item ).find( ".arrow" ).addClass( "arrow-down" );
			} else {
				$( item ).find( ".arrow" ).addClass( "arrow-right" );
			}

			// Make sure that the content container has a unique ID.
			if ( ! content.attr( "id" ) ) {
				content.attr( "id", "toggleable-content-container-" + hash );
			}

			// Make sure that the content trigger has a unique ID.
			if ( ! trigger.attr( "id" ) ) {
				trigger.attr( "id", "toggleable-content-trigger-" + hash );
			}

			// Add the labelled by attribute.
			content.not( "[aria-labelledby]" )
				.attr( "aria-labelledby", trigger.attr( "id" ) );

			// Let screen readers know that the trigger controls the content
			trigger.attr({
				"aria-controls": content.attr( "id" ),
				"aria-expanded": expanded,
			});

		});

		// Open and close the content container on click.
		$( "#page" ).on( "click", ".toggle-trigger", function(e) {
			e.preventDefault();
			var toggleable = $( this ).closest( ".toggle-container" ),
				was_expanded   = toggleable.hasClass( "toggle-open" );

			if ( was_expanded ) {
				toggleable.removeClass( "toggle-open" ).addClass( "toggle-closed" );
				toggleable.find( ".arrow" ).removeClass( "arrow-down" ).addClass( "arrow-right" );
			} else {
				toggleable.removeClass( "toggle-closed" ).addClass( "toggle-open" );
				toggleable.find( ".arrow" ).removeClass( "arrow-right" ).addClass( "arrow-down" );
			}

			$( this ).attr(	"aria-expanded", ! was_expanded );
		});

		function add_unique_id( element, i ) {
			element = $(element);
			var settings = this.settings;
			if ( ! element.attr( "id" ) ) {
				element.attr( "id", "toggleable-content-container-" + new Date().getTime() + "-" + i );
			}
		};
	}(jQuery));
}