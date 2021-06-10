$(document).ready(function(){
	$(".belep").click(function(){

	var nev=$("#username").val().trim();
	var jelszo=$("#password").val().trim();

	 

		if (nev=="" || jelszo=="") {
			
	 		$(".loginhiba").html("Ki kell tölteni minden adatot");
		}else{

			$.ajax({
				url:"login.php", //szerver oldali script
				dataType: "json",	//visszaadott válasz formátuma (html,json, stb)
				type: "POST",  	//GET, POST
				data: 			//átküldött paraméterek
					{
							"nev":nev,
							"jelszo":jelszo
					},
				success:function(vissza)			//akkor hívódik meg, ha a szerver válasza megérkezett
					{
					if (vissza === 'ok') {
                    window.location.replace('okoskereso_template.php');
                		}else {
                  		 $(".loginhiba").html("Belépés megtagadva. Nem megfelelő név/jelszó");
                		}				
						
					
					}

			});

		}
		//$("#username").val()="";
		//$("#jelszo").val()="";
	 });

		$( ".belep" ).on({
     		 mouseenter: function() {
        			$(this).css("background-color","red");
      		}, mouseleave: function() {
        			$(this).css("background-color","blue");
      		}
   		 });

		$(".hibakep").mouseover(function(){
			$(this).animate({
			    
			    height: '350px',
			    width: '350px'

			   
 			});
 			$().css("display","inline");
		});
		$(".hibakep").mouseout(function(){
			$(this).animate({
			    
			    height: '100px',
			    width: '100px'
			    
 			});
		});
		
	
});