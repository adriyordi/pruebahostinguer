<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Datos estadisticos provincia</title>
<?php session_start();?>
</head>

<body>
<h1>Datos estadisticos provincias</h1>
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
	
for($i =0; $i < count($resultado); $i++)
	{
	foreach($resultado[$i] as $pp => $voto)
				{
					echo $pp ." ".$voto."<br/>";
				}
	}
?>
</body>
</html>