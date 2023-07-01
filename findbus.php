<html>
<head></head>
<body>
    <form name="reg" method="get" action="/ticket/user/findbus.php">
    	<h1>From</h1>
    	<input type="text"  name="src" >
    	<h2>TO</h2>
        <input type="text"  name="dest" >
        <input type="date"  name="date" >
    	<input type="submit" value="findbuses">
    </form>
</body>
</html>
<?php
$server = "localhost";
$dbname = "dbticket";
$dbuname = "root";
$dbpass = "";

if( isset($_GET['src']) && isset($_GET['dest']) && isset($_GET['date'])){
$src=$_REQUEST['src'];
$dest=$_REQUEST['dest'];
$date=$_REQUEST['date'];

$conn = mysqli_connect($server, $dbuname, $dbpass, $dbname);


$sql = 'select * from findbus where src="'. $src . '" and dest="'. $dest .'" and date="'. $date .'"' ;

$res = mysqli_query($conn, $sql);
$rec = mysqli_fetch_array($res);

if($res->num_rows ==0){

	echo("no buses available");

	}
  
  else if($rec[2]==$src && $rec[3]==$dest && $rec[5]==$date)
  {
  	echo implode($rec);
  }
}
    
?>
