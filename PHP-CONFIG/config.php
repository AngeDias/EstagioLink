<?php

function conectar()
{


    $conn = new PDO ("mysql:dbname=elk;host=localhost","root","");
    return $conn;

}
 ?>
