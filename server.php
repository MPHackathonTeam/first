<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "application";

$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$mail = $_POST['mail'];
$tel = $_POST['tel'];

/*echo $First_name;
echo $Last_name;
echo $mail;
echo $tel;*/

$sql="INSERT INTO users(First_name,Last_name,mail,tel) VALUES ('$First_name','$Last_name','$mail','$tel')";

if($conn->query($sql)===TRUE){
	echo "Accepted";
}
else{
	echo "ERROR: ". $sql . "<br>" . $conn->error;
}

?>
<br>
<a href="http://localhost/mysite/index.html">Go back</a>

