<?php 
session_start();

 if($_SESSION["PASS"] == "TAK")
    {
    echo '<h3>Witaj: '.$_SESSION["Login"].'</h3>';
    }
    else
    {header("Location: logowanie.php");}

?>