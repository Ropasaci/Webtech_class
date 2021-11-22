<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class assignment</title>
    <script src="frontend.js" type="text/javascript"></script>
</head>
<body>
        <form action="my_form.php" method= "GET">
            <input type="text"firstname="search" placeholder="search">
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
    ?>