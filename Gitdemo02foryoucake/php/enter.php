<?php
header("content-type","text/html;charset=utf-8");

$user=$_POST["user"];
$pass=$_POST["pass"];
  
//连接数据库
//$con=mysql_connect("localhost","root","1");

$con=mysql_connect("localhost","root","1");

  if(!$con){
	echo ("haole");
  }else{
	mysql_select_db("useyanzhen",$con);
	$str1="select * from usestatus where usename='".$user."'" ;
	$str2="select * from usestatus where usepass='".$pass."'";
	$res1= mysql_query($str1,$con);
	$res2= mysql_query($str2,$con);
	$rows1=mysql_num_rows($res1);
	$rows2=mysql_num_rows($res2);
	mysql_close($con);
	
	if($rows1>0&&$rows2>0)
	{		
		echo "1";	
    }else{	
    	echo "0";	
    	}

  }
?>