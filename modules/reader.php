<META charset="UTF-8">
<DIV class="readerdiv">
	<DIV class="readercim">
		Lorem Ipsum
	</DIV>
	<BR>
	<BR>
	<BR>
	<DIV class="readerszoveg">
	<?php
	session_start();
	
	include("../connect.php");
	
	/*$db = mysqli_connect("localhost" , "root" , "" , "vizsgamunka" );*/
	$vissza=$kapcsolat->query("SELECT * FROM read order by RAND() LIMIT 1") ;

	if( isset( "$kapcsolat" )
	{
		echo ($vissza);
	}
	
	
	
		
		?>
	</DIV>
</DIV>