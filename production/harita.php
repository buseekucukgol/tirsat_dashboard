<!DOCTYPE HTML>
<html >
<head>
	<meta charset="UTF-8">
	<title>Harita</title>
	<link rel="stylesheet" href="jquery-map/jqvmap.css" />
	
	<script type="text/javascript" src="jquery-map/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="jquery-map/jquery.vmap.min.js"></script>
	<script type="text/javascript" src="jquery-map/jquery.vmap.world.js"></script>
	<script type="text/javascript" src="jquery-map/jquery.vmap.sampledata.js"></script>
	<script type="text/javascript">
		$(function(){
			jQuery('#harita1').vectorMap({

				map: 'world_en',

				backgroundColor: '#fff',

				color: '#9dccff',

				hoverOpacity: 0.7,

				selectedColor: '#85728f',

				enableZoom: true,

				showTooltip: true,

				values: sample_data,

				scaleColors: ['#6d4a80', '#36267e'],

				normalizeFunction: 'polynomial',

				onRegionClick: function(element, code, ulke){ alert(ulke+"-"+code);}
			});
		})
	</script>
	<style type="text/css">
		*{margin:0;padding:0;}
		.harita{width:100%;height:600px;}
	</style>
</head>
<body>
	<div id="harita1" class="harita"></div>
<div class="buttons">
	<a href="ulke.php"><button type="button"  style="color:000000; width: 220px; height: 40px; position:absolute; left: 650px; top: 600px;" class="btn btn-success btn-lg">ÜLKELER & SİPARİŞ SAYISI'na git</button></a>
</div>
</body>
</html>