<?php
if(isset($_GET["resultado"]) && $_GET["resultado"]){
    $numero_1=$_GET['numero_1'];
    // echo "numero1 \t".$numero_1."\n";
    $numero_2=$_GET['numero_2'];
    // echo "numero2 \t".$numero_2."\n";
    $resultado= $numero_1 + $numero_2;
    // echo "resultado soma \t".$resultado."\n";
    ?>
    <div style='background-color:aqua; padding:10px; font-weight:bold;'>
        <h3><? echo $resultado ?></h3>
    </div>
    <?php
    exit();
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get" >
        <input type="number" name="numero_1" value=""> <br>
        <input type="number" name="numero_2" value=""> <br>
        <input type="submit" name="resultado" value="resultado"> <br>
        
    </form>
</body>
</html>