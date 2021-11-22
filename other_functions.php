<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function product($factor_a){
       $y= $factor_a * 100;
      return $y ;
    }
    echo product(5) . "<br>";
   echo  product(7) . "<br>";
    echo product(2);
     ?>
</body>
</html>