<?php
	//inicializar las variables que utilizaremos para las etiqutas img
	$imagen=null;
	$arrayMonedas= array();
	//bucle for para generar  10 monedas
	//construir una etiqueta <img> con las dos coordenadas aleatorias
	for ($i=0; $i<10;$i++) {
		//coordenada aleatoria top
		$arrayMonedas[$i]['top']=rand(0,483)."px";
		//coordenada aleatoria left
		$arrayMonedas[$i]['left']=rand(0,725)."px";
		
	}
	print_r($arrayMonedas);	

	//cuando salgamos del for tendremos una variable con 10 etiquetas >img> cada una de ellas con las coordenadas distintas
	foreach ($arrayMonedas as $k => $valor) {
			$imagen.="<img src='img/goldCoin.png' style=";
	}

	




?>
<html>
<head>
	<title></title>
	<style>
		div {width:725px; height:483px; background: url(img/Bluemap.jpg); margin:auto; overflow:hidden; position:relative}
		
		img {width:50px;position:absolute;}
	</style>
</head>
<body>
	<div>
		<?=$imagen;?>
	</div>
</body>
</html>