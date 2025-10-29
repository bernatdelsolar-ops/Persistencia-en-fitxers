<?php


$nom = ($_POST['nom']);
$data_naix = ($_POST['data_naixament']);

$avui = getdate();


class Biorritmes
{
	public function calcul_dies($data_inicial,$data_final) {
	$dies = (strtotime($data_inicial)-strtotime($data_final))/86400;
	$dies = abs($dies); $dies = floor($dies);
	return $dies;
}

}




$dies_pasats = new Biorritmes calcul_dies($data_naix,$avui);


$fisic = sin(2*pi()*dies_pasats/23);
$emocional = sin(2*pi()*dies_pasats/28);
$intelectual = sin(2*pi()*dies_pasats/33);

$perc_fisic = $fisic * 100;
$perc_emoci = $fisic * 100;
$perc_intel = $fisic * 100;

?>

<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Document</title>

		</head>
	<body>

		<form>
			

	 <label>perc_fisic</label>

	 <textarea><?php echo "<p>El porcentaje fisico vale \$perc_fisic vale  $perc_fisic " "</p>";  ?> <textarea>
	 
	 <label>perc_emoci</label>

	  <textarea><?php echo "<p>El porcentaje emocional vale \$perc_emoci vale  $perc_fisic " "</p>";  ?> <textarea>
	 
	 <label>perc_intel</label>

 <textarea><?php echo "<p>El porcentaje de inteligencia vale \$perc_intel vale  $perc_fisic " "</p>";  ?> <textarea>


</form>


	</body>
	</html>
	