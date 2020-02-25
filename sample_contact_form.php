<?php

$servername = "localhost";
$username = "maratcac_aith";
$password = "eN$SZ-S[Tfi#";
$dbname = "maratcac_aith";
$users_fname = $_POST['fname'];
$users_lname = $_POST['lname'];
$users_age = $_POST['age'];
$users_email = $_POST['email'];
$users_emercontact = $_POST['emercontact'];
$users_emerphone = $_POST['emerphone'];
$users_event = $_POST['event'];
$users_gender = $_POST['gender'];
$users_comment = $_POST['comment'];



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql ="
  INSERT INTO `maratcac_aith`.`event` (`id`, `fname`,`lname`, `age`, `email`, `emercontact`,`emerphone`,`event`,`gender`
        `comment`, `time_stamp`) VALUES (NULL, '$users_fname', '$users_lname', '$users_age', '$users_email', '$users_emercontact', '$users_emerphone', '$users_event', '$users_gender', '$users_comment',
        CURRENT_TIMESTAMP);";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

