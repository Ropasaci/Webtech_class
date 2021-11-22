<?php
// define variables and set to empty values
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["uname"]);
  $password = test_input($_POST["psw"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$username = $password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $username = "Name is required";
  } else {
    $username = test_input($_POST["name"]);
  }

  if (empty($_POST["psw"])) {
    $password = "Email is required";
  } else {
    $password = test_input($_POST["psw"]);
  }

  }
?>