<?php

$servername = "localhost";
$username = "maratcac_user";
$password = "V#)fI4xf?(RH";
$dbname = "maratcac_test";
$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_comment = $_POST['comment'];





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `maratcac_test`.`contact` (`id`, `name`, `email`,`comment`) VALUES (NULL, '$users_name', '$users_email','$users_comment' );";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

