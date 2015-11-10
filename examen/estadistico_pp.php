<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Datos estadisticos</title>
<?php session_start();?>
</head>

<body>
<h1>Datos estadisticos</h1>
<?php 
$votos=0;
$aux=-1;
for($i =0; $i < count($_SESSION['votos']); $i++)
	{
		for($j =1; $j < count($_SESSION['votos'][$i]); $j++)
		{
		foreach(($_SESSION['votos'][$i][$j]) as $mesa => $voto)
				{
					if(is_numeric($voto))
					{
					$votos = $votos + $voto;
					}
					else
					{
						if($i!=$aux)
						{
						$aux=$i;
						$resultado[] = array("provincia"=>$_SESSION['votos'][$i][0],$_SESSION['votos'][$i][$j]["pp"] => $votos);
						$votos=0;
						}
						else
						{
							$resultado[] = array($_SESSION['votos'][$i][$j]["pp"] => $votos);
							$votos=0;
						}
					}
				}
		}
	}
$p1=0;	
$p2=0;
$p3=0;
for($i =0; $i < count($resultado); $i++)
	{
	foreach($resultado[$i] as $pp => $voto)
				{
					if($pp=="pp1")
					{
						$p1 = $p1+$voto;
					}
					if($pp=="pp2")
					{
						$p2 = $p2+$voto;
					}
					if($pp=="pp3")
					{
						$p3 = $p3+$voto;
					}
				}
	}
	echo "pp1 " . $p1. "<br/> pp2 " . $p2. "<br/> pp3 " . $p3;
?>
</body>
</html>