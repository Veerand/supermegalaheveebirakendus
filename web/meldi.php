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
<form action="auth.php">
	Kasutajanimi: 
	<input class="sisenemiskast" 
		   type="text" 
	></input>
	<br>
	Salasõna: 
	<input class="sisenemiskast" 
		   type="password" 
	></input>
	<br>
	<input class="" 
		   type="submit" 
		   value="Sisenen"
	></input>
</form>
</div>
</div>

</html>
