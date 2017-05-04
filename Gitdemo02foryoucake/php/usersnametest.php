<?php
    header("content-type","text/html;charset=utf-8");
      $useAll=$_GET["usename"];
 //$useAll="何鑫";
//连接数据库
$con=mysql_connect("localhost","root","1");
mysql_select_db("useyanzhen",$con);
//执行SQL语句
$sqlstr="select * from usestatus where usename='".$useAll."'"; 
$result=mysql_query($sqlstr,$con);
$rows=mysql_num_rows($result);
mysql_close($con);

if($rows>0){
	echo "1";
}else{
	echo "0";
};
?>