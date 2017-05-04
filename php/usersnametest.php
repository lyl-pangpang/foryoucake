<?php
    header("content-type","text/html;charset=utf-8");
      //$useAll=$_GET("useAll");
 $useAll="何鑫";
//连接数据库
$con=mysql_connect("localhost","liuyuling","1");
mysql_select_db("myonedate",$con);
//执行SQL语句
$sqlstr="select * from usersperson where usename='".$useAll."'"; 
$result=mysql_query($sqlstr,$con);
mysql_close($con);
$rows=mysql_num_rows($result)
if($rows>0){
	echo "1";
}else{
	echo "0";
}
?>