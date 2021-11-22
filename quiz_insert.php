<?php

 require "quiz_form.php";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "class_quiz_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$form1input= $_GET["users"];
$sql="INSERT INTO quiz_table(user_choice)
VALUES('$form1input')";

if ($conn->query($sql)=== TRUE) {
    echo "Record created successfully:"; 
    echo $form1input;
} 
 else {
     echo "Error:" . $sql . "<br>" . $conn->error;
 }

 $form2input= $_GET["Preference"];
$sql="INSERT INTO quiz_table(user_id)
VALUES('$form1input')";

if ($conn->query($sql)=== TRUE) {
    echo "Record created successfully:"; 
    echo $form1input;
} 
 else {
     echo "Error:" . $sql . "<br>" . $conn->error;
 }

?>