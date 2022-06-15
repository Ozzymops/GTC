<!DOCTYPE HTML>
<html>
	<head>
		<title>Gulpener Turnclub</title>
	</head>
	<body>
		<?php
			require("master-header.php");
		?>
		<div class="div-center">
			<h1>Welkom bij de Gulpener Turnclub</h1>
			<h3>Opgericht 1877</h3>
		</div>
		<div class="div-left">
			<img class="image-left" src="img/placeholder.png">
			<?php
				require("loremipsum.php");
			?>
		</div>
		<div class="div-right">
			<?php
				require("loremipsum.php");
			?>
			<img class="image-right" src="img/placeholder.png">
		</div>
		<div class="div-left">
			<img class="image-left" src="img/placeholder.png">
			<?php
				require("loremipsum.php");
			?>
		</div>
		<?php
			require("master-footer.php");
		?>
	</body>
</html>
<script>
	headerButtons[0].className += " active";
</script>