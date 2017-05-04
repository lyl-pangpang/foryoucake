<?php
 header("content-type","text/html;charset=utf-8");
   
   $usename=$_POST["usename"];
   $usepass=$_POST["usepass"];
   
   $lianxiren=$_POST["lianxiren"];
   
   $telphone=$_POST["telphone"];
   
   $email=$_POST["email"];
   
   
   
//建立连接
$con=mysql_connect("localhost","root","1");
if(!$con){
	echo("fail");
}else{
	  mysql_select_db("useyanzhen",$con);
	//mysql_select_db("useyanzhen",$con);
	 //执行语句
	   $str="insert into usestatus(usename,usepass,lianxiren,telphone,email) values('".$usename."','".$usepass."','".$lianxiren."','".$telphone."','".$email."')";
	   echo $str;
	// $str="insert into usestatus(usename,usepass,lianxiren,telphone,email)
	//     values('刘胖胖','123456','刘玲','18706768085','465963578@qq.com')";
	       
	   mysql_query($str,$con);
	   
	   mysql_close($con);
	
	
}
   
?>