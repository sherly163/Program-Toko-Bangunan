<?php
session_start();
if ($_POST['TbLogin']) {
$TxtUserID = $_POST['TxtUserID'];
$TxtPassID = $_POST['TxtPassID'];

if(($TxtUserID=="sherly") && ($TxtPassID=="sherly"))
{
	echo '<center>Selamat Datang ' .$TxtUserID. '!<center>';
}
else{
	header("Location : index.php");
}}
?>