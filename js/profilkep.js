$(document).ready(
function()
{
		$(".belepve").click(
		function()
		{
			profilkepablaknyit();
		});
	
});

function profilkepablaknyit()
{
	var ablak=$("<DIV class='elougro' style='align:center' title='Upload a picture'>");
	
	ablak.dialog(
	{
		
		padding:0,
		margin:0,
		modal:true,
		resizable:false,
		width:400,
		height:150,
		draggable:false,
		close:function()
		{
			ablak.remove();
		}
		,
		open:function()
		{
			//tartalom betöltése
			ablakbetolt($(this) );
		}
		
	});
}

function ablakbetolt (ablak)
{
	$.get("modules/profilkep.php" , function(visszatemp)
	{
		var tempobj=$().add(visszatemp);
		
		ablak.append(tempobj);
	});
}













