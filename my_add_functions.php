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
    function addition($factor_a, $factor_b){
       $y= $factor_a + $factor_b;
      return $y ;
    }
    echo addition(5, 10) . "<br>";
   echo  addition(7, 13) . "<br>";
    echo addition(2, 4);
     ?>
</body>
</html>