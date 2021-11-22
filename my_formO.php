<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class assignment</title>
</head>
<body>
        <form action="my_formH.php" method= "GET">
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
        "variable = new XMLHttpRequest();
        xhttp.onload = function() {
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

             xhttp.open("GET", "ajax_info.txt");
             xhttp.send();

            }
        //if(isset($_POST["submit"])){ 
        //$link="results_page.php?name=".$_POST////["Add"];
        //header('location:'.$link); 
        //}
       ?>