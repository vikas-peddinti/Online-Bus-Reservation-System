
<?php

$server = "localhost";
$dbname = "dbticket";
$dbuname = "root";
$dbpass = "";


$name =$_REQUEST['name'];
$email = $_REQUEST['email'];
$user = $_REQUEST['user'];
$pass = $_REQUEST['pass'];


$conn = mysqli_connect($server, $dbuname, $dbpass, $dbname);

if(!$conn){
	print_r("Unable to establish connection.....");
}else{

	$sql = 'insert into signup (name, username, pwd, email) values("'. $name . '","'. $user. '","'. $pass. '","'. $email . '");';

	$res = mysqli_query($conn, $sql);

	if(!$res){
		header('Location: /ticket/register.html?msg=unable to signup');
	}else{
		header('Location: /ticket/index.html?msg=signup is successful');
		
	}
}





?>