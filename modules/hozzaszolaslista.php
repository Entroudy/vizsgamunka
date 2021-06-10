<?php

include("../connect.php");


if( isset( $_POST["keresoszo"] ) )
{
	
	print("<DIV class='kerestalal'>Keresett kifejezés:&nbsp'<B>".$_POST["keresoszo"]."</B>'</DIV>");
	
	$szuro=" where szoveg like '%".$_POST["keresoszo"]."%' or cim like '%".$_POST["keresoszo"]."%'";
	
}	
else 

	$szuro="";

$parancs="select * from forum inner join felhasznalok on forum.userid = felhasznalok.id ".$szuro." order by datum DESC";

$vissza=$kapcsolat->query( $parancs );

print("<HR><DIV class='kerestalal'>Comments So Far:&nbsp".mysqli_num_rows($vissza)."</DIV><HR>");




while( $sor = mysqli_fetch_array( $vissza ) )
{
print("<DIV class='egyhozzaszoldoboz'>");
	print("<DIV class='hozzaszolfejlec'>");
			
			print("<DIV class='forumbal'>");
				print( $sor["nev"] );
			print("</DIV>");
			
			print("<DIV class='forumjobb'>");
				print( $sor["datum"] );
			print("</DIV>");
			
			
			
	print("</DIV>");
		
		
		
			print("<DIV class='forumcim'>");
				print( $sor["cim"] );
			print("</DIV>");
			
			
			print("<DIV class='hszoveg'>");
				print( str_replace("\n", "<BR>", htmlentities( $sor["szoveg"] ) ) );
			print("</DIV>");
		
		
		
print("</DIV>");


}




?>
<BR>
<BR>
<BR>
