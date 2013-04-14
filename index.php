<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>BugManager Login</title>
<link rel="stylesheet" type="text/css" href="bugManager.css">
<meta http-equiv="content-type"  content="text/html" charset="utf-8">
</head>

<body style="margin-top:50px;">
	<div id="login" class="logo" align="center">BugManager</div>
	<div id="login" style="padding:14px">
		<form action="check.php" method="post" align="center">
			<br/>
			Your Name <input type="text" name="username" maxlength="20"/><br/><br/>
			Pass Word <input type="password" name="passwd" maxlength="20"/><br/><br/>
			<input type="submit" name="logosubmit" value="&nbsp commit &nbsp"/>&nbsp&nbsp&nbsp&nbsp
			<input type="reset" name="reset" value="&nbsp reset &nbsp"/>
		</form>
	</div>

<?php
if(isset($_GET["error"]))
{
    $error=$_GET["error"] + 0;
    if($error==1){
        echo "<br/>密码错误,请重新登录";
    }elseif($error==2){
        echo "<br/>用户名错误,请重新登录";
    }elseif($error==3){
        echo "<br/>用户名和密码不能为空";
    }   
}

?>
</body>
</html>
