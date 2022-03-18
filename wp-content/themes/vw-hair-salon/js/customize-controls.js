( function( api ) {

	// Extends our custom "vw-hair-salon" section.
	api.sectionConstructor['vw-hair-salon'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );