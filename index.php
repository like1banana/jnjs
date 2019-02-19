<?php
session_start();
$alert="";
if(!empty($_SESSION['alert'])){
	$alert=$_SESSION['alert'];
	unset($_SESSION['alert']);
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>無標題文件</title>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<body>
<div>
  <p>汽車共乘網站管理--登入</p>
</div>
<form action="login.php" id="form1" name="form1" method="post">
  <p>
<label for="textfield">帳號:</label>
    
    <input type="text" name="textfield" id="textfield">
    </p>
  <p>
    <span style="text-align: center">
    <label for="password">密碼:</label>
    <input type="password" name="pwd" id="pwd">
  </span></p>
  <p>
    <span style="text-align: left">
    <label for="textfield2">輸入驗證碼:</label>
    <input type="text" name="textfield2" id="textfield2">
    <input type="button" name="button3" id="button3" value="驗證碼重新產生">
  </span></p>
  <p><img src="image.php"alt="" id="image"></p>
  <span style="text-align: left">
<input type="submit" name="button" id="button" value="送出" >
<input type="reset" name="button2" id="button2" value="重設">
<input type="button" name="button4" id="button4" value="前往電子報表">
  </span>
</form>
<script src="jq.js"></script>
<script>
if('<?php echo($alert); ?>'!=''){
  alert("<?php echo($alert); ?>");
}
</script>
</body>
</html>