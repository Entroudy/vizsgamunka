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
	
	$kapcsolat = mysqli_connect("localhost" , "root" , "" , "vizsgamunka" );

	$result=mysqli_query($kapcsolat,"SELECT * FROM olvasofej order by RAND() LIMIT 1") ;
	
	while($row=mysqli_fetch_array($result))
	{
		echo $row['readszoveg'];
	}

?>
	</DIV>
</DIV>