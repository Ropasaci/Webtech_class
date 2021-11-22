<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class assignment</title>
</head>
<body>
<?php 
        //starting  session
        session_start();
        // Setting the session
        if(isset ($_GET["submit"])){
            $_SESSION["searchsession"] =  $_GET["search"] ;
    }
 ?>

        <form action="myformstateless.php" method= "GET">
            <input type="text" name="search" placeholder="search"  value="<?php echo isset($_SESSION["searchsession"]) ?  ($_SESSION["searchsession"]) :" " ;?>">
            <br>
            <br>
            <input type="submit" name="submit" value="submit">
        </form>
        

        <?php echo "<h3> Second  search box<h3>" ?>
        <form action="results_page.php" method= "POST" target="_blank">
           
            <input type="text" name="search2" placeholder="search2">
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
    ?>

    
</body>
</html>