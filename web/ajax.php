<?php
$host="veerand-supermegalaheveebirakendus-1338485"; // minu andmebaasi nimi, tuleb mujal kasutamiseks muuta
$username="veerand";
$password=""; 
$db_name="SOOVITUSLEHT"; 
$tbl_name="POLIITIK"; 
$connection = mysql_connect($host, $username, "");

$db = mysql_select_db($db_name, $connection);
$keyword = '%'.$_POST['keyword'].'%';


$sql = "SELECT ID as poliitik_id, CONCAT_WS(' ',Eesinimi,Perekonnanimi) as nimi from $tbl_name WHERE nimi LIKE (:keyword) ORDER BY poliitik_id ASC LIMIT 0, 10";
$list=mysql_query($sql);
foreach ($list as $rs) {
	$nimi = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['nimi']);
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['nimi']).'\')">'.$nimi.'</li>';
}
?>