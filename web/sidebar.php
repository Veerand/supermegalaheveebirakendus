<div id = peitja>
<button 
	class="valikunupp"
	title="" 
	type="button"   
	onclick= "if(document.getElementById('kylgriba') .style.display=='block') {document.getElementById('kylgriba') .style.display=''}
     else {document.getElementById('kylgriba') .style.display='block'}">
	<b>Valikud</b>
</button> <br>
</div>

<div id = "kylgriba">

<form action="otsing.php">
    <p title="Otsimiseks sisesta tekst allolevasse kasti.">
		<b>Otsing:</b><br>
        <input class="otsikast" 
			   type="text" 
			   name="otsitav"
			   title="Sisesta otsitav tekst."
		><!--
	 --><input class="otsinupp" 
			   type="image" 
			   SRC="imgs/search.png" 
			   alt="Mine!"
			   name="otsi"
			   title="Vajuta otsingu sooritamiseks siia!">
    </p>
</form> <p>

<a href="index.php">PEALEHT</a> <br>
<a href="soovitajad.php">SOOVITAJAD</a> <br>
<a href="poliitikud.php">POLIITIKUD</a> <br>
<a href="soovitus.php">SOOVITA</a> <br>
<a href="kutse.php">SAADA KUTSE</a> <br>

</div>
