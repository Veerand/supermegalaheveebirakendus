
<?php
$host="veerand-supermegalaheveebirakendus-1338485"; // minu andmebaasi nimi, tuleb mujal kasutamiseks muuta
$username="veerand";
$password=""; 
$db_name="SOOVITUSLEHT"; 
$tbl_name="KASUTAJAD"; 
$connection = mysql_connect($host, $username, "");

$db = mysql_select_db($db_name, $connection);
session_start();
$kasutaja=$_SESSION['kasutaja'];
$salasona=$_SESSION['salasona'];
$sql="SELECT * FROM $tbl_name  WHERE Kasutajanimi='$kasutaja' and Salasona='$salasona'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

if(!$count==1){
mysql_close($connection); 
header('Location: logout.php'); 
}

?>