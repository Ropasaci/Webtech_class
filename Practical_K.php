<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class assignment</title>
</head>
<body>
        <form action="practical_I.php" method= "GET">
            <input type="text"name="search" placeholder="search">
            <br>
            <br>
            <input type="submit" value="submit" name="searching">
            
        </form>
        <br>
        <form action="edit_form.php" method="GET" >
            <input type="submit" value="update" name="update" /><br>
        </form>

        <?php
            //checking if form has been submitted
            if(isset($_GET['search'])){
                $form1input = $_GET["term"];
            }

       require 'database_credentials.php';

     //getting the form data
        if(isset($_GET["searching"]))
        {$form1input=$_GET["search"];
        }
        

        //create connection with database
        $conn = new mysqli(servername,username,password,database);

        //test connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          } 

          //Queries
        $sql = "SELECT Lab_id, Search_term FROM practical_lab_table WHERE Search_term = '$form1input'";
        $result = $conn->query($sql);
        //executing select query
        if (isset($_GET['searching'])){
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                   echo  $row["Lab_id"]. "  :" . $row["Search_term"]. "<br>";
                    }
                    }
            else {
                echo "0 results";
                      }
                    }
$conn->close();
?>

</body>
</html>

