<?php
session_start();
include("connect.php");

if( isset( $_GET["logout"] ) )
{
	session_unset();
	
		setcookie("aktid" , ""  , time()-10 , "/" );
		
		setcookie("aktnev" , ""  , time()-10 , "/" );
		
		setcookie("aktemail" , ""  , time()-10 , "/" );
	
}
else


if( isset( $_COOKIE["aktid"] ) )
{
	$_SESSION["aktid"]=$_COOKIE["aktid"];
	$_SESSION["aktnev"]=$_COOKIE["aktnev"];
	$_SESSION["aktemail"]=$_COOKIE["aktemail"];
	
}

?>

<!DOCTYPE html>
<HTML lang="hu" dir="ltr">
<HEAD>
	<link rel="shortcut icon" href="images/favicon.ico">
	<title>CleanYourPC - Final Exam</title>
	<html>
    <meta charset="utf-8">
	
    <LINK rel="stylesheet" href="css/style.css">
		
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
    <script src="js/bootstrap.min.js"></script> 
	
	<script src="js/jquery-3.4.0.min.js"></script>
	
    <LINK rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	
    <SCRIPT type="text/javascript" src="jquery/jquery-1.8.2.js"></SCRIPT>

    <SCRIPT type="text/javascript" src="jquery/jquery-ui-1.9.1.custom.js"></SCRIPT>
	  
    <LINK rel="stylesheet" href="jquery/jquery-ui-1.9.1.custom.css">
  
	<SCRIPT type="text/javascript" src="js/userkezelo.js"></SCRIPT> 
	 
	<SCRIPT type="text/javascript" src="js/irjon.js"></SCRIPT>  
	  
	<script type="text/javascript" src="js/webshop.js"></script>  
	
	<script type="text/javascript" src="js/profilkep.js"></script>  
	 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 
	 
	 
</HEAD>
<BODY>
		
		<DIV class="header">
			<DIV class="logokeret">
				<IMG src="images/logo.jpg" class="mylogo">
			</DIV>
			<DIV class="keret">


			<nav class="flex-nav">
                <a class="toggleNav" href="#">&#9776; Menu</a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="read" data-aloldal="modules/reader.php"><a>Read</a></li>	
                    <li class="kapcsolat" data-aloldal="modules/kapcsolat.php"><a>About Us</a></li>
                    <li class="irjon"><a href="#">Contact Us</a></li>
                    <li class="forum"><A HREF="modules/forum.php">Forum</A></li>			
                    <li id="profil" class="profil mikon" style="cursor:pointer"><a> <i class="fa fa-user userikon">Sign In</i>	</a>
						<?php
						include("connect.php");
						
						if(isset($_SESSION["aktid"]) )
						{	
						?>
						<script type="text/javascript">document.getElementById('profil').style.display = 'none';</script>
						<?php
						}
						?>

				
							<DIV class="belsokeret">
								<DIV class="ful"></DIV>
								<DIV class="usertartalom">
									<?php
									include("templates/userbeleptemp.php");
									?>
								</DIV>
							</DIV>
					</li>

					<DIV class="kilepes">
						<?php
						include("connect.php");
						
						if(isset($_SESSION["aktid"]) )
						{
							print("<A HREF='index.php?logout=1' style='color:white'>Logout</A>");	
						}
						
						
						?>
					</DIV>
					
					
						<DIV class="belepve">
							<?php
							include("connect.php");
							
							if(isset($_SESSION["aktid"]) )
							{
								print($_SESSION["aktemail"]);	
							}

							
							?>
						</DIV>
					
					
			</DIV>
		</DIV>
			</ul>
		</nav>
	<DIV class="TT">	
		<DIV class="udvozlotartalom">
                <DIV class="udvozollek">
                        <h1 class="display-5">Welcome to my page!</h1>
                        <p class="lead">Please note, that this site is under development!</p>
				</DIV>
		</DIV>
		<DIV class="row hatterkep szoveg" id="about" alt="rolam">
                <DIV class="col-md-12">
                    <h1 class="display-5">CleanYourPC Official Website</h1>
                    <p class="lead"><!--szöveg jöhet ide--></p>
                </DIV>
        </DIV>
			

		<DIV class="tartalom2">
		
		
		</DIV>
	</DIV>
	
		<DIV class="footer">
		<DIV class="footerkep" id="lablec">
			<DIV class="balfooter">
				<DIV class="footerszoveg">
				Made By: Tóth Tamás @ 2019. &nbsp All rights reserved.
				</DIV>
				<DIV class="footerszovegmobil">
				Made By: Tóth Tamás @ 2019
				</DIV>
			</DIV>
			<DIV class="jobbfooter">
				<div class="footer-icons">
					<a href="https://www.facebook.com/toth.tamas.902819" class="footer-single-icon">
						<i class="fab fa-facebook"></i>
				   </a>
				   <a href="https://www.linkedin.com/in/t%C3%B3th-tam%C3%A1s-408b86184/" class="footer-single-icon">
						<i class="fab fa-linkedin"></i>
				   </a>
				   <a href="https://www.instagram.com/entroudy/?hl=hu" class="footer-single-icon">
						<i class="fab fa-instagram"></i>
				   </a>
			  </div>
			</DIV>
		</DIV>
		</DIV>

	<SCRIPT>
		$(".kapcsolat").click(function()
		{
			$.get($(this).data("aloldal"),function(vissza)
			{
				$(".udvozlotartalom").html(vissza);
			});
		});


		var allapot="";

		$(".read").click(function()
		{
			$.get($(this).data("aloldal"),function(vissza)
			{
				$(".tartalom2").html(vissza);
			});	
		});
		
		$(".read").click(function() 
		{
		$('html,body').animate(
		{	
        scrollTop: $(".tartalom2").offset().top
		}
		,
        'slow');
		
		
		
		
});
		
	
		$(".kapcsolat").click(function() 
		{
		$('html,body').animate(
		{
			
        scrollTop: $(".udvozlotartalom").offset().top
		}
		,
        'slow');
		
});	

		
	</SCRIPT>
<script>
$(function()
{
    $('.toggleNav').on('click',function()
	{
        $(".flex-nav ul").toggleClass('open');
        
    });
}); 	
</SCRIPT>	

<?php
if( !isset($_COOKIE["sutik"] ) )
{
?>
<DIV class="cookieelfogadokeret">
	<DIV class="cookieszoveg">
	We use cookies to enhance your experience. By continuing to visit this site, you agree to our use of cookies. 
	<A HREF="https://www.indeed.com/legal" style="color:green">Learn More.</A>
	</DIV>
	
	
	<DIV class="cookiedoboz">
		<FORM action="modules/cookieelfogad.php" method="POST">
			<INPUT TYPE="SUBMIT" Value="Got it!">
			
		</FORM>
	</DIV>
</DIV>
<?php
}
?>
</BODY>

</HTML>
	