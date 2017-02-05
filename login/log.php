<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
	echo "connected to the DB : $db  <br>";
}

$user=$_POST['username'];
$pass=$_POST['password'];

$sql="select name from user where username='$user' and password='$pass' ";

$result = $conn->query($sql);
if (!$result){
	echo "<br><br>username and password are not matching ! ";
}elseif ($result-> num_rows>0){

	while($row=$result->fetch_assoc()){
		echo "<br><br> Welcome ".$row["name"];
	}
}else{
	echo "<br><br>username and password are not matching ! ";
}

?>
