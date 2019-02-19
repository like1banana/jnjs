<?php
session_start();
define('sbox',explode(" ","012 345 678 036 147 258 246 048"));
$box=join($_POST['box']);
if(in_array($box,sbox)){
	gourl("登入成功","win.php");
}else{
	gourl("第二層驗證碼錯誤","index.php");
}

function gourl($test,$url){
	$_SESSION['alert']=$test;
	header('location:'.$url);
	exit();
}
?>