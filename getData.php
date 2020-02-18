<?php
$servername = "192.168.56.3";
$username = "demouser";
$password = "demopassword";
$dbname = "demodb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM personas";

$result = mysqli_query($conn,$query); 

$rawdata = array(); //creamos un array
echo "HICE ALGO";
//guardamos en un array multidimensional todos los datos de la consulta

$i=0;
file_put_contents("/var/www/html/response.txt", "");
$myfile = fopen("/var/www/html/response.txt","w") or die ("Unable to open file!");
while($row = mysqli_fetch_array($result))
{	
	fwrite($myfile, $row['id'] ."_".  $row['nombre']. "\n" );
}
mysqli_close($conn);
fclose($myfile);
echo json_encode($rawdata);
?>
