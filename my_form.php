<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class assignment</title>
</head>
<body>
        <form action="my_form.php" method= "GET">
            <input type="text"name="search" placeholder="search">
            <br>
            <br>
            <input type="submit" value="submit">
        </form>
 
    <?php echo "<h3> Second  Updating Portal<h3>" ?>
        <form action="results_page.php" method= "POST" target="_blank">
           
            <input type="text" name="Add" placeholder="Add">
            <br>
            <br>
            <input type="submit" name = "submit" value="submit">
        </form>
     <?php  
     //getting the form data
        if(isset($_GET["search"]))
        {$form1input=$_GET["search"];
        echo $form1input;
          }
  
        if(isset($_POST["submit"])){ 
        $link="results_page.php?name=".$_POST["Add"];
        header('location:'.$link); 
        }
       
        require 'database_credentials.php';

        //create connection with database
        $conn = new mysqli(servername,username,password,database);

        // Check connection
        //test connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
          } 
        $sql = "SELECT Lab_id, Search_term FROM practical_lab_table";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
        // output data of each row
            while($row = $result->fetch_assoc()) {
               echo  $row["Lab_id"]. "  :" . $row["Search_term"]. "<br>";
                }
                }
        else {
            echo "0 results";
                  }

$conn->close();
?>

</body>
</html>

