<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Search form</title>
    </head>
    <body>
        <form action="practical_J.php" method= "GET">
            <input type="text"name="search" placeholder="search">
            <br>
            <br>
            <input type="submit" value="submit" name="searching">
            <input type = "submit" name = "delete" value = "delete" />
        </form>
        <?php
            //checking if form has been submitted
            if(isset($_GET['searching'])){
                $form1input = $_GET["search"];
            }
            
            if(isset($_GET['delete'])){
                $deleteInput = $_GET["search"];
            }

        ?>

        <?php require 'database_credentials.php';

            //create connection with database
            $conn = new mysqli(servername,username,password,database);

            //test connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            //QUERIES.

            //select query
            if(isset($_GET['searching'])){
                $sql = "SELECT Lab_id, Search_term FROM practical_lab_table WHERE Search_term ='$form1input'";       
                $result = $conn->query($sql);
        
            }
        
            //executing  select query
            if(isset($_GET['searching'])){
                echo "<br>"."Lab_id "." "." Search_term"."<br>";
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo $row["Lab_id"]." ". $row["Search_term"]."<br>";
                        
                    }
                } else {
                    echo "<br>"."0 results";
                }
            }

            //executing delete query
            else if(isset($_GET['delete']))
            { 
                $sql2 = "DELETE FROM practical_lab_table WHERE Lab_id='$deleteInput'";
            
                if ($conn->query($sql2) === TRUE) {
                    echo "Record deleted successfully";
                  } else {
                    echo "Error deleting record: " . $conn->error;
                }
            }

            // close connection
            $conn->close();
            
        ?>
    </body>
</html>