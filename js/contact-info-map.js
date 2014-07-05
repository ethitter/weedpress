
if (jQuery) {

	jQuery().ready(function() {

		var map;
		// get lat and lon from hidden input values
		var lat = jQuery("#contact-info-map-lat").val();
		var lon = jQuery("#contact-info-map-lon").val();
		var lat_lon = new google.maps.LatLng(lat, lon);
		var mapOptions = {
			zoom: 16,
			center: lat_lon,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		map = new google.maps.Map(document.getElementById('contact-info-map-canvas'), mapOptions);

		var marker = new google.maps.Marker({
			map: map,
			position: lat_lon
		});

	});

};
