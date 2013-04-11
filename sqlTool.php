<?php
	//创建一个sql工具,用户有mysql的服务器地址,用户名,密码,数据库名,即可进行增,删,查,改等操作.
	class SQLTool{
		public $host;
		public $usename;
		public $passwd;
		public $db;
		public $conn = null;
		
		//定义构造函数
		public function __construct($ihost,$iusename,$ipasswd,$idb){
			$this->host=$ihost;
			$this->usename=$iusename;
			$this->passwd=$ipasswd;
			$this->db=$idb;
		
			//连接数据库管理系统
			$this->conn =mysql_connect($ihost,$iusename,$ipasswd);
			if(!$this->conn){
				die("数据库连接失败!错误信息如下:".mysql_error());
			}
	
			//use数据库
			mysql_query("use `$idb`",$this->conn) or die("使用数据库失败".mysql_error());
		}

		//传入$sql,操作数据库,增,删,改,不返回数据,只返回操作结果
		public function zsg($sql){
			$res=mysql_query($sql) or die ("操作数据库失败".mysql_error());
			$affected_rows=mysql_affected_rows($this->conn);
			
			echo "成功操作" . $affected_rows . "行.";
		}

		//传入$sql,操作数据库,查询等有返回数据的
		public function search($sql){
			$res=mysql_query($sql) or die ("操作数据库失败".mysql_error());  //接收$sql的结果集
			//var_dump($res);
			$rows=mysql_num_rows($res);		 //取得结果集的行数
			$colums=mysql_num_fields($res);  //取得结果集的列数
			
			//以表格的方式 打印返回结果
			echo "<table border=1px><tr>";
			//表头
			for($i=0;$i<$colums;$i++){
				$col=mysql_field_name($res,$i);  //取得结果集中 指定的字段
				echo "<th>".$col."</th>" ;
			}
			echo "<tr/>";
			//表体
			while($row=mysql_fetch_row($res)){    //逐行读取结果集
				echo "<tr>";
				for($i=0;$i<$colums;$i++){
					echo "<td>".$row[$i]."</td>";  //显示结果集
				}
				echo "</tr>";
			}
			echo "</table>";
			
			//释放资源
			mysql_free_result($res);

		}
	}

	$sqltool=new SQLTool("localhost","root","123456","user");
	//$sql="insert into contacts value(null,'zaza','218320302','海淀区中关村','','','')";
	$sql="delete from contacts where id=21";
	//$sql="update contacts set name='uu' where id=18";
	//$sqltool->search($sql);
	$sqltool->zsg($sql);
?>