<!DOCTYPE html>
<html>
    <head>
        <title>Digital Health Solutions</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <section>
            <div class="navbar" id="top">
                <span><a href="index.html"><img src="images/diabetes.png" alt="logo" class="logo"/></a><p>D H S</p></span>
                <div class="navdiv-1"> 
                    <a class="active" href="index.html"><i class="fa fa-fw fa-home"></i> Home</a> 
                    <a href="about.html"><i class="fab fa-font-awesome-flag"></i> About Us</a> 
                    <a href="pricing.html"><i class="fas fa-money-bill"></i> Pricing</a> 
                    <a href="contact.html"><i class="fas fa-id-badge"></i> Contact</a>  
                </div>
                <div class="navdiv-2">
                    <form>
                        <input class="searchbox" type="search" placeholder="Search" aria-label="Search">
                        <a class="btn btn-outline-success" >Search</a>
                        <a class="btn btn-outline-success" href="register.html">Register</a>
                        <a class="btn btn-outline-success" class="active" href="login.html">Login</a>
                    </form>
                </div>
            </div>
            <div class="lcontainer">
                <form action="/action_page.php" method="post">
                    <div class="imgcontainer">
                      <img src="images/user-interface.png" alt="ui" class="avatar">
                    </div>
                    <div class="container">
                      <label for="uname"><b>Username</b></label>
                      <input type="text" placeholder="Enter Username" name="uname" required>
                  
                      <label for="psw"><b>Password</b></label>
                      <input type="password" placeholder="Enter Password" name="psw" required>
                          
                      <input type="submit" name="login" value="Login"/>

                      <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                      </label>
                    </div>
                  </form>
            </div>
        </section>
        <a href="#"><img src="images/bot.png" alt="chatbot" class="chatbot"/></a>
        <footer>
            <div class="top">
                <div><a href="index.html"><img src="images/diabetes2.png" alt="logo"/></a><p>D H S</p></div>
                <div class="right">
                    <a href="index.html">Home</a>
                    <a href="about.html">About Us</a>
                    <a href="pricing.html">Pricing</a>
                    <a href="contact.html">Contact</a>
                    <a href="#event">Events</a>
                </div>
                <div class="left">
                    <a href="#top">To top</a>
                    <a href="register.html">Register</a>
                    <a href="login.html">Login</a>
                </div>
            </div>
            <div class="bottom">
                Copyright &copy; DHS 2021
            </div>
        </footer>
    </body>
</html>

<?php
// define variables and set to empty values
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["uname"]);
  $password = test_input($_POST["psw"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// define variables and set to empty values
$username = $password= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $username = "Name is required";
  } else {
    $username = test_input($_POST["name"]);
  }

  if (empty($_POST["psw"])) {
    $password = "Email is required";
  } else {
    $password = test_input($_POST["psw"]);
  }

  }
?>