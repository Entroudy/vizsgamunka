<META charset="UTF-8">
<FORM action="modules/belepellenor.php" method="POST">
	<INPUT class="belepmezo" type="email" name="email" id="email" placeholder="E-mail address...">

	<INPUT class="belepmezo" type="PASSWORD" name="jelszo" id="jelszo" placeholder="Password...">

	<INPUT type="SUBMIT" id="belepesgomb" class="belepmezoikon" value="Sign In">
	
	<DIV class="maradjakkeret">
		<INPUT TYPE="checkbox" name="maradjak" class="maradjakcheck">Keep Me Logged In!
	</DIV>
</FORM>






<DIV class="reglink">Join Now</DIV>

<?php

/*
if( !isset($_COOKIE["sutik"] ) )
{

<DIV class="cookieelfogadokeret">
	<DIV class="baldoboz">
	Elfogadom, hogy az oldal COOKIE-kat használ.
	</DIV>
	
	
	<DIV class="cookiedoboz">
		<FORM action="modules/cookieelfogad.php" method="POST">
			<INPUT TYPE="SUBMIT" Value="Elfogadom">
		</FORM>
	</DIV>
</DIV>
}
*/
?>
