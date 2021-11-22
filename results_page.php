<?php

require "database_credentials.php";

// Create  connection
$conn = new mysqli(servername, username, password, database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

     $form1input= $_POST["Add"];
     $sql="INSERT INTO practical_lab_table(Search_term)
     VALUES('$form1input')";

     if ($conn->query($sql)=== TRUE) {
         echo "Record created successfully:"; 
         echo $form1input;
     } 
      else {
          echo "Error:" . $sql . "<br>" . $conn->error;
      }


?>
</body>
</html>