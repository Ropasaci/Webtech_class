<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Class assignment</title>
</head>
<body>
        <form action="quiz.php" method= "GET">
            <p> Choose one of the following: <br/>
            </br>
                <select name="Users" id="name" >
                    <option value="Select">Select</option>
                    <option id="1" value="1">Kwame</option>
                    <option value="2">Ama</option>
                    <option value="3">Akua</option>
                    <option value="4">Greta</option><br/>
                    
                </select>
                </br>
                </br>
            </p>
    <?php   echo "A multiselect list of preferences (you can select one or more at a time)" ?>
                    </br>
                    </br>

            <form action="quiz.php" method= "GET">
                <input type="checkbox" name="pref[]"id="football"><label> Football</label>
                <input type="checkbox" name="pref[]"id="Banku"><label> Banku</label>
                <input type="checkbox" name="pref[]"id="Rice"><label> Rice</label>
                </br>
                <input type="submit" name="submit">
                
           
            </form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "class_quiz__db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  echo "Connected failed";
}
else {
    echo "Connected successfully";
}

if(isset($_GET['submit'])){
    $name=$_GET['name'];
    $pref= "";

    
    foreach($_GET['pref'] as $value){
        // code
        echo " ".$value;
        $pref = $pref  .$value;

    }
    $sql="INSERT INTO quiz_table(user_id, user_choices)VALUES($name, $pref)";

}

?>
</body>
</html>