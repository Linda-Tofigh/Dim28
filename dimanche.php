<?php
$nombre1 = $_POST['nombre1'];
$nombre2 = $_POST['nombre2'];
$function = $_POST['function'];

if(isset($_POST['nombre1'])&&isset($_POST['nombre2'])) {

    if ($function == '+') {
        $nombre3 = $nombre1 + $nombre2;
        echo $nombre1 . " + " . $nombre2 . " = " . $nombre3;
    }
    if($function =='-')
    {
        $nombre3 = $nombre1 - $nombre2;
        echo $nombre1 ." - ".$nombre2." = ".$nombre3;
    }

    if($function =='*')
    {
        $nombre3 = $nombre1 * $nombre2;
        echo $nombre1 ." * ".$nombre2." = ".$nombre3;
    }
    if($function =='/')
    {
        $nombre3 = $nombre1 / $nombre2;
        echo $nombre1 ." / ".$nombre2." = ".$nombre3;
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice</title>
</head>
<body>
<form action="dimanche.php" method="POST" style="text-align: center; margin-top: 100px; ">
    num1: <input type="text" name="nombre1" placeholder="Entrer premier nombre "><br >
    num2: <input type="text" name="nombre2" placeholder="Entrer deuxième nombre" style="margin-top: 20px"><br >


    <select  name="function" style="margin-top: 20px">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="submit" name="submit" value="submit" style="margin-top: 20px">


</form>
</body>
</html>
