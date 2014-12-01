<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>VIAnime: Necesitas PHP 5.3.1 o superior</title>
    
    <!-- Style -->
    <style type="text/css">
    body {
		background:url(<?php echo 'vianime/common/images/VIStandBGpHpErr.jpg' ?>) no-repeat center;
		background-size:cover;
		background-attachment:fixed;
		padding-top:3em;
		color:rgba(229,229,229,1.00);
		text-shadow:0px 0px 3px rgba(59,59,59,1.00);
		font-family:"Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
	}
    </style>
</head>
<body>
    <center>
        <img src="vianime/common/images/9955043.png" title="VIAnime PHP Versión"><br>
        <?php
		printf('<strong>VIAnime:</strong> Necesitas como mínimo PHP 5.3.1 o una versión superior para ejecutar esta aplicación correctamente. Usted está usando la versión <strong>%s</strong>', phpversion());
		?>
    </center>
</body>
</html>
