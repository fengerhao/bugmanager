<?php

	//设置默认时区为"亚洲/重庆"
	date_default_timezone_set("Asia/Chongqing");


	//更新cookie,就是重新写入
	if(!empty($_COOKIE["lastVisit"])){

		//首先保存上次访问的时间,因为http协议标准规定在header之前不能有任何输出
		$lastVisit = $_COOKIE["lastVisit"];

		//更新时间cookie有效期为30天
		setcookie("lastVisit",date("Y-m-d H:i:s"),time()+3600*24*30);
		echo "您上次访问本站的时间是".$lastVisit ;
	}else{
		//设置时间cookie有效期为30天
		setcookie("lastVisit",date("Y-m-d H:i:s"),time()+3600*24*30);
		echo "欢迎访问";
	}


?>