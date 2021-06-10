
<META charset="UTF-8">
<BODY>
<TABLE>
<TR>
<td>
<FORM name="registerationform" method="POST" action="modules/regisztral.php" onsubmit="return(regvalidate())">
<TABLE class="regtabla">

<TR>
	<td>
		Name...<BR>
		
		<INPUT class="reginput" TYPE="text" name="nev"/>
	</td>
</TR>
<TR>
	<td>
		E-mail Address...<BR>

		<INPUT class="reginput" TYPE="text" name="email"/>
	</td>
</TR>
<TR>
	<td> 
		Password... <BR>

		<INPUT class="reginput" TYPE="password" name="jelszo"/>
	</td>
</TR>
<TR>
	<td> 
		Confirm...<BR>

		<INPUT class="reginput" TYPE="password" name="cjelszo"/>
	</td>
</TR>
</TABLE>
	<font color="red"> <DIV id="une" align="center"> </DIV> </font>
<DIV>  </DIV>
	<INPUT TYPE="submit" name="regiz" value="Register Now" style="margin-left:100px"/>
</FORM>
</td>
</TR>
</TABLE>
</TR>

<SCRIPT TYPE="Text/JavaScript">
function regvalidate()
{
if(document.registerationform.nev.value=="")
{
document.getElementById('une').innerHTML = "Name is missing";
registerationform.nev.focus();
return(false);
}
if(document.registerationform.nev.value.length<=3)
{
document.getElementById('une').innerHTML = "Name is incorrect";
registerationform.nev.focus();
return(false);
}
if(document.registerationform.email.value=="")
{
document.getElementById('une').innerHTML = "Email is required";
registerationform.email.focus();
return(false);
}
if(document.registerationform.email.value.indexOf("@", 0) < 0)
{
document.getElementById('une').innerHTML = "Email is incorrect";
registerationform.email.focus();
return(false);
} 
if(document.registerationform.email.value.indexOf(".", 0) < 0)
{
document.getElementById('une').innerHTML = "Email is incorrect";
registerationform.email.focus();
return(false);
} 

if(document.registerationform.jelszo.value=="")
{
document.getElementById('une').innerHTML = "Please type a password";
registerationform.jelszo.focus();
return(false);
}

if((document.registerationform.jelszo.value) != (document.registerationform.cjelszo.value))
{
document.getElementById('une').innerHTML = "Password Must be equal";
registerationform.jelszo.value = "";
registerationform.cjelszo.value = "";
registerationform.jelszo.focus();
return(false);
}
else
{
return(true);
}
}

</SCRIPT>
</TD>
</TR>
</TABLE>
</BODY>