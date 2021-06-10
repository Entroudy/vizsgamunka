$(document).ready(
function()
{
	/* hasznos lehet
	$(".profil").hover(
	function()//amikor fölé viszem az egeret
	{
		$(this).find(".belsokeret").show("blind",300);
	}
	,
	function() //amikor lehuzom róla az egeret
	{
		$(this).find(".belsokeret").hide("blind",300);
	});
	*/	
	
	$(".profil").click(
	function()
	{
		$(".belsokeret").hide();
		
		$(".profilkeret").removeClass("ikonkeret");
		
		
		
		
		
			if( $(this).find(".belsokeret").css("display") == "none")
			{
				$(this).find(".profilkeret").addClass("ikonkeret");
				
				$(this).find(".belsokeret").show();
			}
			else
			{

			}
	});
	//globális eseménykezelő
	$(document).on( "click" , function( e )
	{
		//alert( $(e.target).attr("class") );
		
		
		if( !$(e.target).hasClass("profil") 
		&& 	!$(".belsokeret").find("*").hasClass( $(e.target).attr("class")) && !$(e.target).hasClass("userikon") 
		)
		{
			$(".profilkeret").removeClass("ikonkeret");
			$(".belsokeret").hide();
		}
	});
	
	
});






