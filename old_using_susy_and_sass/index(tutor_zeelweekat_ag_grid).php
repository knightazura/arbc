<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Susy 2</title>
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" >
</head>
<body>
<div class="container">
	<h1>The 10 column complex nested grid AG test</h1>

	<div class="ag ag1">
		<h2>AG 1</h2>
	</div>
	<!-- /ag1 -->

	<!-- ag4 to ag7 are nested within ag2 -->
	<div class="ag ag2">
		<h2>AG 2</h2>

		<div class="ag ag4">
			<h2>AG 4</h2>
		</div>

		<div class="ag ag5">
			<h2>AG 5</h2>
		</div>

		<div class="ag ag6">
			<h2>AG 6</h2>
		</div>

		<!-- ag8, ag9 and ag10 are nested within ag7 -->
		<div class="ag ag7">
			<h2>AG 7</h2>

			<div class="ag ag8">
				<h2>AG 8</h2>
			</div>

			<div class="ag ag9">
				<h2>AG 9</h2>
			</div>

			<div class="ag ag10">
				<h2>AG 10</h2>
			</div>

		</div>
		<!-- /ag7 -->

	</div>
	<!-- /ag2 -->

	<div class="ag ag3">
		<h2>AG 3</h2>
	</div>

</div>
<!-- /container -->
</body>
</html>