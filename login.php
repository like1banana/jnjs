<?php
session_start();
$account=$_POST['textfield'];
$pwd=$_POST['pwd'];
$cimage=$_POST['textfield2'];
$simage=$_SESSION['srt'];
if(++$_SESSION['times']>2){
	$_SESSION['times']=0;
	gourl("登入失敗超過三次","lost.php");
	$_SESSION['times']=0;
}

if($account=="admin" && $pwd=="1234"){
	if($cimage==$simage){
		gourl("進入第二驗證碼","clike.php");
		$_SESSION['times']=0;
	}else{
		gourl("驗證碼錯誤","index.php");
		
	}
}else{
	gourl("帳號密碼錯誤","index.php");
}

function gourl($test,$url){
	$_SESSION['alert']=$test;
	header('location:'.$url);
	exit();
}
?>