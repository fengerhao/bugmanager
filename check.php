<?php
    $iname=$_POST["username"];
    $ipwd=$_POST["passwd"];
    
    //connect database
    $conn=mysql_connect("localhost","root","zhaixia") or die(mysql_error());

    //choose database
    mysql_query("use `bugmanager`",$conn) or die(mysql_error());

    //search the name's password
    $sql="select password from `users` where name=$iname";
    $res=mysql_query($sql,$conn) or die(mysql_error());

    //judge is the name and the password exist
    if(!$res){
        $pwd=mysql_fetch_field("password");
        if($pwd==$ipwd){
            header("location:welcome.php");
        }else{
            header("location:index.php?error=1");
        }
    }else{
        header("location:index.php?error=2");
    }

?>
