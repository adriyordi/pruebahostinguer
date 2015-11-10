<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Inicio</title>
<?php session_start();?>
</head>

<body>
<?php 

$_SESSION['votos']=$votos = array
	(
	array("Huelva",array("pp"=>"pp1","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp2","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp3","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000))),
	array("Sevilla",array("pp"=>"pp1","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp2","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp3","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000))),
	array("Cadiz",array("pp"=>"pp1","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp2","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp3","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000))),
	array("Granada",array("pp"=>"pp1","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp2","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp3","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000))),
	array("Cordova",array("pp"=>"pp1","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp2","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp3","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000))),
	array("Jaen",array("pp"=>"pp1","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp2","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp3","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000))),
	array("Malaga",array("pp"=>"pp1","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp2","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp3","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000))),
	array("Almeria",array("pp"=>"pp1","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp2","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000)),array("pp"=>"pp3","mesa1"=>rand(0,1000), "mesa2"=>rand(0,1000), "mesa3"=>rand(0,1000), "mesa4"=>rand(0,1000))),
	);
?>
<a href="estadistico_provincia.php">Estadistico provincia</a><br />
<a href="estadistico_pp.php">Estadistico</a><br />
<a href="Estadistico.php">Estadistico partidos politico</a>
</body>
</html>