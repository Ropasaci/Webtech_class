<?php require 'database_credentials.php';

//create connection with database
$conn = new mysqli(servername,username,password,database);

//test connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cid = $_GET['carid'];// get id through query string

$records = mysqli_query($conn,"select * from practical_lab_table where Lab_id='$cid'"); // select query
$data = mysqli_fetch_array($records); // fetch data

if(isset($_GET['update'])) // when click on Update button
{
    $Lab_id= $_GET['Lab_id'];
    $Search_term = $_GET['Search_term'];
	
    $edit = mysqli_query($conn,"update practical_lab_table set Lab_id='$cid', Search_term='$Search_term' where Lab_id='$cid'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:pracK.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($conn);
    }    	
}
?>

<h3>Update Data</h3>

<form method="GET">
  <input type="text" name="Lab_id" value="<?php echo $data['Lab_id'] ?>" placeholder="Enter Lab ID" Required>
  <input type="text" name="Search_term" value="<?php echo $data['Search_term'] ?>" placeholder="Enter Search Term" Required>
  <input type="submit" name="update" value="update">
</form>