<META charset="UTF-8">
    <meta charset="utf-8">
        <LINK rel="stylesheet" href="../css/style.css">
<BODY style="background:#CCCCCC">
<?php
require("../phpmailer/class.phpmailer.php");

$level1= new PHPMailer();

$level1->IsMail(); 

$level1->From = $_POST["felado"];
$level1->FromName = "Látogató";

$level1->AddAddress( $_POST["cimzett"] , "Tóth Tamás");

$level1->IsHTML(true); 

$level1->Subject = iconv( "UTF-8" , "iso-8859-2", $_POST["targy"] );

$level1->Body = iconv( "UTF-8" , "iso-8859-2", $_POST["tartalom"] );

if( $level1->Send() ) 
{
	print("<DIV class='valasz'>E-mail Sent Successfully</DIV>");
}
else
{
	print("<DIV class='valasz'>Couldn't Send E-mail!</DIV>");

	
	header("refresh:1 , url=../index.php");
}
	
?>
</BODY>