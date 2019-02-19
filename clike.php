<?php
session_start();
$alert="";
if(!empty($_SESSION['alert'])){
	$alert=$_SESSION['alert'];
	unset($_SESSION['alert']);
}
$_SESSION['nbox']=range(1,9);
shuffle($_SESSION['nbox']);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>第二層驗證碼</title>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
<form action="login2.php" method="post" name="form1" id="form1" style="text-align: center">
<p>第二層驗證碼</p>
<p>
  <?php
for($a=0;$a<9;$a++){
	echo"
	<input type=\"checkbox\" id=\"box".$a."\" name=\"box[]\" value=\"".$a."\" >
	<label for=\"box".$a."\"></label>";
if($a==2 || $a==5 || $a==8){
	echo'<br>';
}
}
?>
</p>
<p>
  <input type="reset" name="button" id="button" value="重設">
  <input type="submit" name="button2" id="button2" value="送出">
</p>
</form>
<script>
if('<?php echo($alert)?>'!=""){
	alert('<?php echo($alert)?>');
}
</script>
	
</body>
</html>
