<?php

include("../connect.php");

$szuro="";



$parancs="select * from forum inner join felhasznalok on forum.userid = felhasznalok.id ".$szuro." order by datum DESC";

$vissza=$kapcsolat->query( $parancs );

print("<HR>Comments So Far: ".mysqli_num_rows($vissza)."<HR>");




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
