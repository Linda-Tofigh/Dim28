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
}


?>