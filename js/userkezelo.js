$(document).ready(
function()
{
		$(".reglink").click(
		function()
		{
			regablaknyit();
		});
	
});

function regablaknyit()
{
	var ablak=$("<DIV class='elougro' style='align:center' title='Registration'>");
	
	ablak.dialog(
	{
		
		padding:0,
		margin:0,
		modal:true,
		resizable:false,
		width:400,
		height:600,
		draggable:false,
		close:function()
		{
			ablak.remove();
		}
		,
		open:function()
		{
			//tartalom betöltése
			regisztral($(this) );
		}
		
	});
}

function regisztral (ablak)
{
	$.get("templates/userregtemp.php" , function(visszatemp)
	{
		var tempobj=$().add(visszatemp);
		
		ablak.append(tempobj);
	});
}













