<?php  

    include 'calculo.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
<div class="container-md">    
    <p> Calcul complert </p>
<form action="index.php" method="post"> 
    <p> Hola <?php echo $nom?>! Els teus valors son: </p>
    <label>Físic:</label>
    <label type="hidden" name="percentatge_fisic"><?php echo $perc_fisic?> %</label><br>
    <label>Emocional:</label>
    <label type="hidden" name="percentatge_emocional"><?php echo $perc_emoci?> %</label><br>
    <label>Intelectual:</label>
    <label type="hidden" name="percentatge_intelectual"><?php echo $perc_intel?> %</label>
    <label type="submit"></label>
</form>
</div>
</body>
</html>