<?Php
$host_name = "localhost";
$database = "patient_database";
$username = "root";
$password = "";

$connection = mysqli_connect($host_name, $username, $password, $database);

if(!$connection){
	echo "Error: Unable to connect to MYSQL. <br> ";
	echo "<br> Debugging error: ".mysqli_connect_error();
	exit;
}
//else{
//	echo " successfully connected ";
//}
?>