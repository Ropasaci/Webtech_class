<?php require 'database_credentials.php';

class Database{
  //properties
  public $db=null;
  public $results= null;

  //methods
  public function connect(){
    $this->db=mysqli_connect(server,username, password,database);
  //test the connection
  if(mysqli_connect_errno()){
      return false;
  }else{
    return true;
  }
  }
  //run query
  public function run($query){
    if (!$this->connect()){
      return false;
    }elseif($this->db==null){
      return false;
    }

    //run query
    $this->results=mysqli_query($this->db,$query);
    if ($this->results==false){
      return false;
    }else{
      return true;
    }
  }

  public function fetch(){
    //check if the result is set
    if($this->results==null){
      return false;
    }elseif($this->results==false){
      return false;
    }
    return my_sqli_fetch_assoc($this->results);
  }
}
?>


// Create connection
//$conn = new mysqli(servername, username, password, database);

// Check connection
//if ($conn->connect_error) {
//die("Connection failed: " . $conn->connect_error);
  //echo "Connection failed";
//}
//else {
    //echo "Connected successfully";
//}



