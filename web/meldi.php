<!DOCTYPE HTML>
<html>

<div id="meldimine">
<button 
	class="meldinupp"
	title="Vajuta sisselogimiseks siia." 
	type="button"   
	onclick= "if(document.getElementById('autendi') .style.display=='none') {document.getElementById('autendi') .style.display=''}
     else {document.getElementById('autendi') .style.display='none'}">
	<b>Meldimine</b>
</button> <br>

<div id="autendi" style="display:none">
<form method="post" action="auth.php">
	Kasutajanimi: 
	<input 
		   name="kasutajanimi"
		   class="sisenemiskast" 
		   type="text" 
	></input>
	<br>
	Salasõna: 
	<input 
		   name="salasona"
		   class="sisenemiskast" 
		   type="password" 
	></input>
	<br>
	<input class="sisenemine" 
		   type="submit" 
		   value="Sisenen"
	></input>
</form>
</div>
</div>

</html>
