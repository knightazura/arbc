<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Asean Reusable Bag Campaign</title>
	<script src="js/jquery-1.9.1.js"></script>
	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script> -->

	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" >

	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['home', 'about', 'whatwedo', 'future', 'contact'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['Landing', 'About ARBC', 'What We and You will do!', 'In the Future', 'Contact Us'],
				responsiveWidth: 900,
				responsiveHeight: 600,
				afterRender: function() {
					$('video').get(0).play();
				}
			});
		});
	</script>
</head>
<body>
	<div id="fullpage">

		<div class="section part1">
			<video autoplay loop muted id="myVideo">
				<source src="media/flowers.mp4" type="video/mp4">
				<source src="media/flowers.webm" type="video/webm">
			</video>
			<div class="layer">
				<h1>Asean Reusable Bag Campaign</h1>
			</div>
		</div>
		<div class="section part2"></div>
		<div class="section part3"></div>
		<div class="section part4"></div>
		<div class="section part5"></div>

	</div>
</body>
</html>