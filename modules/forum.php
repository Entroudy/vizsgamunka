<DIV class="forumtartalom">
<!doctype html>
<HTML>
	<HEAD>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<META charset="UTF-8">
		<LINK rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	</HEAD>
<BODY>
<DIV class="visszagomb">
	<A HREF="../index.php" style="text-decoration:none">
		<i class="fas fa-arrow-left"></i>Go Back
	</A>
</DIV>		

<DIV class="comment">
	<DIV class="doboz">
	</DIV>

	<DIV class="forumnev">
		<i class="fas fa-comments"></i>Forum<BR><DIV class="forumtapasztalat"><BR>Leave your thoughts and experiences down below.</DIV>
	</DIV>
	
	<FORM action="forum.php" method="POST">

	<DIV class="keresesfelirat">
	Hozzászólás Keresése:<BR>
		<INPUT class="keresoablak" TYPE="text" name="keresoszo" placeholder="Keresés...">
	</DIV>

	<DIV>
		<BUTTON class="keresosubmit" type="Submit" style="padding:6px">
			<i class="fa fa-search"></i>
		</BUTTON>
	</DIV>
	</FORM>
	<BR>

	<DIV class="hozzaszolasdoboz">
		<?php
			include("ujhozzaszolas.php");
		?>
	</DIV>
	<DIV class="hozzaszolaslista">
		<?php
			include("hozzaszolaslista.php");
		?>
	
	</DIV>

</BODY>
</HTML>
</DIV>