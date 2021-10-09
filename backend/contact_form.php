<?php
include_once('../config/config.php');
?>

<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

/*
if($name=='' || $email=='' || $subject=='' || $message==''){
	exit("Value empty");
}*/

if($name == ''){
	exit("Name Value empty");
}
if($email == ''){
	exit("email Value empty");
}
if($subject == ''){
	exit("subject Value empty");
}
if($message == ''){
	exit("message Value empty");
}

$sql = $con->query("INSERT INTO `contact_form` (`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')");

if (!$sql) {
    printf("Error: ". mysqli_error($con));
    exit();
}
echo "Data inserted successfully";

?>