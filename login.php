<?php
session_start();
define('linek',explode(" ","123 456 789 147 258 369 159 357"));
$account=$_POST['textfield'];
$pwd=$_POST['password'];
$cimage=$_POST['textfield2'];
$simage=$_SESSION['srt'];
$nbox=$_SESSION['nbox'];
if($account=="admin"&&$pwd=="1234"){
	if($cimage==$simage){
			$_SESSION['alert']="登入成功";
			unset($_SESSION['times']);
			header('location:win.php');
		}else{
		$_SESSION['alert']="驗證碼錯誤";
		header('location:index.php');
		}
		
		}else{
		$_SESSION['alert']="帳號密碼錯誤";
		header('location:index.php');
		}
if(++$_SESSION['times']>2){
	header('location:lost.php');
	$_SESSION['times']=0;
	$_SESSION['alert']="登入失敗三次";
	header('location:lost.php');
	
}
?>