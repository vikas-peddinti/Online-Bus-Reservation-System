<?php

$server = "localhost";
$dbname = "dbticket";
$dbuname = "root";
$dbpass = "";



$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];


$conn = mysqli_connect($server, $dbuname, $dbpass, $dbname);

if(!$conn){
	print_r("Unable to establish connection.....");
}else{

	$sql = 'select * from signup where username="'. $user . '" and pwd="'. $pass .'"' ;

	//print_r($sql);
	$res = mysqli_query($conn, $sql);
	//print_r($res);
	$rec = mysqli_fetch_array($res);
	//print_r($rec);

	if($res->num_rows ==0 ){
		header('Location: /ticket/index.html?msg=invalid user name or password');
	}else{
		if($rec[4]==1)
		{
			header('Location: /ticket/admin/welcome.php?msg=welcome to admin');
		}
		else
		{
			header('Location: /ticket/user/welcome1.php?msg=welcome to user');
		}
		
	}
}





?>