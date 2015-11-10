<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Datos estadisticos partido</title>
<?php session_start();?>
</head>

<body>
<h1>Datos estadisticos partido</h1>
<form name="polo" action="" method="post">
<!--<input type="tex" name="par"/>introduce el partido-->
Selecione el partido politico.
<select id="par" name="par">
  <option value="pp1" selected="selected">PP1</option>
  <option value="pp2">PP2</option>
  <option value="pp3">PP3</option>
</select>
<button>envia</button>
</form>

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
	if(!empty($_POST))
{
for($i =0; $i < count($resultado); $i++)
	{
	foreach($resultado[$i] as $pp => $voto)
				{
					if($pp == $_POST["par"]|| $pp=="provincia")
					{
					echo $pp ." ".$voto."<br/>";
					}
				}
	}
}
?>
</body>

</html>