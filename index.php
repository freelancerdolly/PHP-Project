<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>

    <h1>Variable</h1>

    <?php echo "welcome to PHP"; 
    
    
     $name = ' Raj';
     $price = 100;
     $address = 'dhanmondi';
     $text = 'i love bangladesh';
     $isadmin = 'true';
     $total_amount = 10;
     $first_name = 'raj';
     
     echo"<br>";

     echo " hello $first_name, your total amount is: $total_amount";

     echo ' hello '.$first_name.', your total amount is: '.$total_amount;

     echo " hello ".$first_name.", your total amount is:". $total_amount;
     echo $name;
     
     
    
    ?>

   <h1>hello <?php echo $name ?>, your amount is <?php echo $price;?></h1>

   <h2>Commwnt</h2>

  <?php

  //product pricr calculation start

  #product pricr calculation start
  
  $first_price = 20;
   $second_price = 40;
   $total_price = $first_price + $second_price;

   echo $total_price;
   echo"<br>";

   // product pricr calculation end


  /* product pricr calculation start
   product pricr calculation start
   product pricr calculation start*/

   $result = 20 +/* 10*/ + 50;
   echo $result;

   ?>

   <h1>constants</h1>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo reprehenderit saepe laborum incidunt cupiditate blanditiis sunt obcaecati odio ipsum corrupti, laboriosam a optio nemo porro aut, aliquid iure unde. Magnam?</p>


   <?php 
   define("NAME", "Raj");

   define("AMOUNT", 90);

   echo NAME;

   echo"<br>";

   echo AMOUNT;
   echo constant("NAME") . "<br>";
   
   ?>
   <h1>tahamina</h1>





</body>
</html>