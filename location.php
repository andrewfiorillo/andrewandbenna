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
	<h2>The Venue</h2>
		<img src="/assets/images/fc/hero.jpg" alt=""><br><br>
		<!-- <div id="map" style="width:100%;height:350px;"></div><br> -->
		<p>
			<strong>Friendly Crossways</strong><br>
			247 Littleton County Rd</br>
			Harvard, MA 01451<br>
			<a href="">Map it</a>
		</p>
		<p><a href="https://www.friendlycrossways.com/" target="_blank">Friendly Crossways</a> is a family owned retreat center located 30 miles northwest of Boston in the rural town of Harvard.</p>

		<h2>Getting Here</h2>
		<!-- <div id="map" style="width:100%;height:350px;"></div><br> -->
		<p>
			<strong>Trains from Boston</strong><br>
			There are commuter trains that run go from Boston to a station nearby the venue. If you get there, I'm sure we can arrange for someone to pick you up from that station. If you're flying in, you'll first have get yourself into 
		</p>
		<p>
			<strong>Ride-Sharing Apps</strong><br>
			don't feel like navigating public transportation, this is a good bet. If you're not driving yourself, this is almost certainly the easiest and fastest option. Taking Lyft or Uber from Boston or the Boston airport should run you $40-$60, and take around 40 minutes. 
		</p>
		<!-- <div id="map" style="width:100%;height:350px;"></div> -->
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