<?php
    $iname=$_POST["username"];
    $ipwd=$_POST["passwd"];
    
    //judge is the name or password null
    if(!$iname||!$ipwd){
        header("location:index.php?error=3"); //用户名或密码为空
        exit;
    }

    //connect database
    $conn=mysqli_connect("localhost","admin","admin") or die(mysqli_error());
    
    //choose database
    mysqli_query($conn, "use `bugmanager`") or die('error: ' . mysqli_error($conn));
    
    //search the name's password
    $sql="select password from users where name='$iname'";
    $res=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    
    //judge is the name and the password exist
    if($res){
         $pwd  = mysqli_fetch_assoc($res);
         if(!is_array($pwd) || count($pwd) <= 0)
         {
             header("location:index.php?error=2"); //用户名错
             exit;
         }
         elseif($pwd['password'] == $ipwd){
            header("location:welcome.php");  //用户名,密码正确
            exit;
        }else{
            header("location:index.php?error=1"); //用户名正确,密码错
            exit;
        }
    }

?>
