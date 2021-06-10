<!DOCTYPE html>
<?php

session_start();

$db = mysqli_connect("localhost" , "root" , "" , "vizsgamunka" );
?>

<HTML lang="hu" dir="ltr">
<HEAD>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<title>CleanYourPC - Final Exam</title>
	<html>
    <meta charset="utf-8">
	
    <LINK rel="stylesheet" href="../css/style.css">
		
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
    <script src="../js/bootstrap.min.js"></script> 
	
	<script src="../js/jquery-3.4.0.min.js"></script>
	
    <LINK rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	
    <SCRIPT type="text/javascript" src="../jquery/jquery-1.8.2.js"></SCRIPT>
	
	<!--<SCRIPT type="text/javascript" src="jquery/jquery-ui.min.js"></SCRIPT> -->

    <SCRIPT type="text/javascript" src="../jquery/jquery-ui-1.9.1.custom.js"></SCRIPT>
	  
    <LINK rel="stylesheet" href="../jquery/jquery-ui-1.9.1.custom.css">
	  
	<SCRIPT type="text/javascript" src="../js/userkezelo.js"></SCRIPT> 
	 
	<SCRIPT type="text/javascript" src="../js/irjon.js"></SCRIPT>  
	  
	<script type="text/javascript" src="../js/webshop.js"></script>  
	 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	 
	 
</HEAD>
<BODY style="background:#CCCCCC">
		<DIV class="header">
			<DIV class="logokeret">
				<IMG src="../images/logo.jpg" class="mylogo">
			</DIV>
		</DIV>


	<DIV class="regvisszajelzes">
	Thank You for the registration, you will be redirected to the main page shortly!
	
		<DIV class="loading" id="loading" style="display:block;">
		Loading Please Wait....
		<BR>
		<IMG class="loadinggif" src="../images/ajax-loader.gif" alt="Loading" />
		</DIV>
	</DIV>	
</BODY>

<?php
	


  $nev = mysqli_real_escape_string($db, $_POST['nev']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $jelszo = mysqli_real_escape_string($db, $_POST['jelszo']);
  $cjelszo = mysqli_real_escape_string($db, $_POST['cjelszo']);
  
  
		mysqli_set_charset($db,"utf8");
		$jelszo = md5($jelszo);
		$cjelszo = md5($cjelszo);
		
		$query = "INSERT INTO felhasznalok (nev, email, jelszo, cjelszo) 
				  VALUES('$nev', '$email', '$jelszo', '$cjelszo')";
		mysqli_query($db, $query);
		
		





header("refresh:2 , url=../index.php");
?>