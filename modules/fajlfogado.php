
<?php
session_start();

$db = mysqli_connect("localhost" , "root" , "" , "vizsgamunka" );


	if( $_FILES["kepfile"]["type"] == "image/jpeg" or $_FILES["kepfile"]["type"] == "image/png" or $_FILES["kepfile"]["type"] == "image/jpg" )
	{
		move_uploaded_file( $_FILES["kepfile"]["tmp_name"] , "../fajlok/".$_FILES["kepfile"]["name"] );
	
		print("Upload Successful!");
	}
	else print ("You can only upload in the listed formats: .png, .jpeg, .jpg!");
?>