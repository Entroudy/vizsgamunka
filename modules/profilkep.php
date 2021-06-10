<DIV class="kepfeltoltes">
<FORM action="modules/fajlfogado.php" enctype="multipart/form-data" id="form1" method="POST">

	<INPUT TYPE="file" class="kepfile" name="kepfile" placeholder="Picture...">

	<INPUT TYPE="SUBMIT" Value="Upload">
	
</FORM>
	
	<SCRIPT>
		//form elküldése esetén keletkezik egy submit esemény
	$("#form1").submit(
	function()
	{
		
		$.ajax(
		{
			url:"modules/fajlfogado.php",
			type:"POST",
			data: new FormData(this) , 
			//a data paraméter maga az elküldendő űrlap
			contentType:false,
			cache:false, 
			processData:false,
			success:function(vissza)
			{
				alert(vissza);
			}
		});
			
			
		return false; //a szabvány submit folyamatot
	});
	</SCRIPT>
</DIV>