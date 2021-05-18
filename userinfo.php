<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection Successful";
}else{
	echo "No Connection";
}


mysqli_select_db($con, 'juicy');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];

$query = "insert into userinfodata (user, email, mobile, subject)
values ('$user', '$email', '$mobile', '$subject')  ";

mysqli_query($con,$query);

?>