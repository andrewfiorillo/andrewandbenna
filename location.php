<html>
<head>
	<?
		$page = "location";
		$page_title = "Location";
	?>
		
	<? include("include/header.php") ?>
</head>
<body>
	
	<? include("include/nav.php") ?>
	
	<div class="main">
		<div id="map" style="width:100%;height:350px;"></div>
	</div>
	<script type="text/javascript">
		function initMap() {

			var myLatLng = {lat: 42.5143953, lng: -71.5344247};
			var mapCenter = {lat: 42.47, lng: -71.3};

			var map = new google.maps.Map(document.getElementById('map'), {
				zoom: 4,
				center: mapCenter,
				zoom:9,
				disableDefaultUI: true,
				zoomControl: true,
				styles: [
					{
						"elementType": "geometry",
						"stylers": [
						{
							"color": "#f5f5f5"
						}
						]
					},
					{
						"elementType": "labels.icon",
						"stylers": [
						{
							"visibility": "off"
						}
						]
					},
					{
						"elementType": "labels.text.fill",
						"stylers": [
						{
							"color": "#616161"
						}
						]
					},
					{
						"elementType": "labels.text.stroke",
						"stylers": [
						{
							"color": "#f5f5f5"
						}
						]
					},
					{
						"featureType": "administrative.land_parcel",
						"elementType": "labels.text.fill",
						"stylers": [
						{
							"color": "#bdbdbd"
						}
						]
					},
					{
						"featureType": "poi",
						"elementType": "geometry",
						"stylers": [
						{
							"color": "#eeeeee"
						}
						]
					},
					{
						"featureType": "poi",
						"elementType": "labels.text.fill",
						"stylers": [
						{
							"color": "#757575"
						}
						]
					},
					{
						"featureType": "poi.park",
						"elementType": "geometry",
						"stylers": [
						{
							"color": "#e5e5e5"
						}
						]
					},
					{
						"featureType": "poi.park",
						"elementType": "labels.text.fill",
						"stylers": [
						{
							"color": "#9e9e9e"
						}
						]
					},
					{
						"featureType": "road",
						"elementType": "geometry",
						"stylers": [
						{
							"color": "#ffffff"
						}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "labels.text.fill",
						"stylers": [
						{
							"color": "#757575"
						}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "geometry",
						"stylers": [
						{
							"color": "#dadada"
						}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "labels.text.fill",
						"stylers": [
						{
							"color": "#616161"
						}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "labels.text.fill",
						"stylers": [
						{
							"color": "#9e9e9e"
						}
						]
					},
					{
						"featureType": "transit.line",
						"elementType": "geometry",
						"stylers": [
						{
							"color": "#e5e5e5"
						}
						]
					},
					{
						"featureType": "transit.station",
						"elementType": "geometry",
						"stylers": [
						{
							"color": "#eeeeee"
						}
						]
					},
					{
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [
						{
							"color": "#c9c9c9"
						}
						]
					},
					{
						"featureType": "water",
						"elementType": "labels.text.fill",
						"stylers": [
						{
							"color": "#9e9e9e"
						}
						]
					}
				]
			});

			var marker = new google.maps.Marker({
				position: myLatLng,
				map: map,
				title: "Hello World!"
			});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCHEikZR_AYOrZfjLYdo8zDJvtnahICfc8&callback=initMap"></script>
</body>
</html>