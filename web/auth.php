<?php
ob_start();
$host="veerand-supermegalaheveebirakendus-1338485"; // minu andmebaasi nimi, tuleb mujal kasutamiseks muuta
$username="veerand";
$password=""; 
$db_name="SOOVITUSLEHT"; 
$tbl_name="KASUTAJAD"; 

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$kasutaja=$_POST['kasutajanimi']; 
$salasona=$_POST['salasona']; 

$kasutaja = stripslashes($kasutaja);
$salasona = stripslashes($salasona);
$kasutaja = mysql_real_escape_string($kasutaja);
$salasona = mysql_real_escape_string($salasona);
$sql="SELECT * FROM $tbl_name  WHERE Kasutajanimi='$kasutaja' and Salasona='$salasona'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
if($count==1){
session_start();
$_SESSION["kasutaja"]=$kasutaja;
$_SESSION["salasona"]=$salasona;
header("location:melditud.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>