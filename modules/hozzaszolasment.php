<?php
session_start();
include("../connect.php");

$parancs="insert into forum ( userid , cim , szoveg , datum ) 
values( 
'".$_SESSION["aktid"].
"','".$_POST["ujcim"].
"','".$_POST["ujszoveg"]."', now() )";

$kapcsolat->query( $parancs );

header("Location:forum.php");







?>
