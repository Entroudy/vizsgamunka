<META charset="utf-8">
<?php
session_start();

include("../connect.php");

$vissza=$kapcsolat->query("select * from felhasznalok where email='".$_POST["email"]."' and 
												jelszo='".md5($_POST["jelszo"])."'");
											
if( mysqli_num_rows( $vissza ) == 1 )
{
	$sor=mysqli_fetch_array($vissza); 
	
	$_SESSION["aktid"]=$sor["id"];
	$_SESSION["aktnev"]=$sor["nev"];
	$_SESSION["aktemail"]=$sor["email"];
	
	if( isset($_POST["maradjak"] ) )
	{		
		setcookie("aktid" , $sor["id"]  , time()+(3600*24*182) , "/" );
		
		setcookie("aktnev" , $sor["nev"]  , time()+(3600*24*182) , "/" );
		
		setcookie("aktemail" , $sor["email"]  , time()+(3600*24*182) , "/" );
	}
	
	
	
	header("Location:../index.php");
	
}
else
{
	$message = "The Login is Invalid";
	echo "<script type='text/javascript'>alert('$message');</script>";
	
	
	header("refresh:1 , ../index.php");

	

		
}
header("../index.php");


?>