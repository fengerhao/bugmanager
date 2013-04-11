<?php
	$conn=mysql_connect("localhost","root","zhaixia");
	if($conn){
		echo "链接成功";
	}else{
		echo "失败";
	}

	echo "max=".PHP_INT_MAX;
	echo "lenth=".PHP_INT_SIZE;
	$a=732.9983499109320942;
	echo"a=".$a;

	$a=3;
	$b=++$a*3;
	echo "<br/>".$b;
	$b=$a++*3;
	echo "<br/>".$b;
	echo "<br/>";
	$n=15;
	$i=0;
	$j=0;
	
	for ($i=0;$i<$n;$i++){
		for($k=0;$k<$n-$i;$k++){
				echo "&nbsp";
			}
		for($j=0;$j<$i*2+1;$j++){
			if($i==0||$i==$n-1){
				echo "*";
			}elseif($j==0||$j==$i*2){
					echo "*";
			}else{
					echo "&nbsp";
			}
		}
		echo "<br/>";
	}


?>