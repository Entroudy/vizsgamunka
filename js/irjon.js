$(document).ready(
function()
{
		$(".irjon").click(
		function()
		{
			irjonnyit();
		});
	
});

function irjonnyit()
{
	var ablak=$("<DIV class='elougro' title='Write To Us!'>");
	
	ablak.dialog(
	{
		modal:true,
		resizable:false,
		width:450,
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
			uzenet($(this) );
		}
		
	});
}


function uzenet (ablak)
{
	$.get("templates/uzenettemp.php" , function(visszatemp)
	{
		var tempobj=$().add(visszatemp);
		
		ablak.append(tempobj);
	});
}














