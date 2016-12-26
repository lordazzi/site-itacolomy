<?php
require_once("plugins/php/function.php");
require_once("header.php");
?>

<script type="text/javascript" src="plugins/js/jquery.nivo.slider.js"></script>
<link rel="stylesheet" href="plugins/css/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="plugins/css/nivo-slider-theme.css" type="text/css" media="screen" />

<div class="slider-wrapper theme-default">
	<div id="slider" class="nivoSlider">
		<img src="plugins/slide/001.jpg" data-thumb="plugins/slide/001.jpg" alt="" title="Cortinas que loren ipsun" />
		<img src="plugins/slide/002.jpg" data-thumb="plugins/slide/002.jpg" alt="" title="Conforto e loren ipuson orem" />
		<img src="plugins/slide/003.jpg" data-thumb="plugins/slide/003.jpg" alt=""  />
		<img src="plugins/slide/004.jpg" data-thumb="plugins/slide/004.jpg" alt="" />
		<img src="plugins/slide/004.jpg" data-thumb="plugins/slide/005.jpg" alt="" />
	</div>
</div>

<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
</script>
<?php require_once("footer.php"); ?>