
<html>
<head></head>
<body>
	<form name="reg" method="GET" action="/ticket/user/viewbus.php">
	 <input type="int"  name="id">
	 <input type="submit"  value ="viewbus" >
   	</form>
    to bookseat<a href="book.html"/>
</body>
</html>
<?php

$server = "localhost";
$dbname = "dbticket";
$dbuname = "root";
$dbpass = "";



$conn = mysqli_connect($server, $dbuname, $dbpass, $dbname);


$id=$_GET['id'];

$sql = "select * from route where id='$id'" ;

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_array($res))
	{
	$seatnum=$row['numseats'];

	}

?>
<br><br>
Bus Layout <br>
<div style="border:1px solid red; padding:10px 10px; border-radius:5px; width: 136px;">
<?php
$seatnum;
$N = $seatnum+1;
for($i=1; $i < $N; $i++)
{
 
echo '<input type="button" style="border:none; width:23px; padding:20px; margin:2px;" value="'.$i.'" />';

}

?>


