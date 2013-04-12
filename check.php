<?php
    $name=$_POST["username"];
    $ipwd=$_POST["passwd"];

    $conn=mysql_connect["localhost","root","zhaixia"] or die(mysql_error());
    $sql="select password from `users` where name=$name";
    $res=mysql_query($sql,$conn) or die(mysql_error());
    if(!$res){
        $pwd=mysql_fetch_field("password");
        if($pwd==$ipwd){
            header("welcome.php");
        }else{
            header("index.php?error=1");
        }
    }else{
        header("index.php?error=2");
    }

?>
