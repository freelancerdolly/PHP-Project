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

<h1>echo vs print</h1>

<?php 
echo 45;

print "hello";
print ("hello");

 // print valo returan 1

$test = print("hello");
echo"<br>";
echo $test; 

echo"<br>"

   // echo "<h1 class=\"text-color\">Raj</h1>";

    //echo '<h1 class=\"text-color\">Raj</h1>';


?>

<h1>data type</h1>
<?php 

   //integer    float  decimal  string  null

   // bulian = true  false

$user_status = true;


   $name = ""; // null

   // Var Dump

$hand = "day";

$num = 20;

$Is_admin = "true";

Var_dump ($hand); 
echo "<br>";

Var_dump ($num);
echo "<br>";

Var_dump ($Is_admin);

echo "<br>";
Var_dump ($hand, $num, $Is_admin);

echo "<br>";

       //printf

$name = "bangladesh";
printf("hello $name");
echo "<br>";

   // ucwords is first letter upercase
   // concatenet

$new_name = ucwords($name);
echo "hello $new_name";

?>

<?php


// printf("hello %s my school name: %s my address is: %s", $name);

$html_block = "<div>
<h1> Raj</h1>
<h2>under</h2>
    </div>";
echo $html_block;
echo "<br>";

$first_name = "david";

$last_name = "dewan";

$html_block = "<div>

<h1>".ucwords($first_name)."</h1>
<h2>".ucwords($last_name)."</h2>

    </div>";
    
    echo $html_block;


$first_name1 = "ali";
$last_name2 = "mohammad";
$html_block = "<div>
<h1>%s</h1>
<h2>%s</h2>
</div>";



printf($html_block,$first_name1,$last_name2);




// printf($html_block, ucwords($first_name1), ucwords($last_name2);

$amount = 100;   //imtiger hole %d
printf ("amount: %d", $amount );




$amount = 10.33;   //float number hole %f
               // decimale por 6 digit
printf ("amount: %f", $amount );


echo "<br>";
$test = 97;
printf ("amount: %f", $test);

echo "<br>";
$test = 97;
printf ("amount: %c", $test);
// %c (character)

echo "<br>";
$test = 71;
printf ("amount: %c", $test);

echo "<br>";
$test = 97;  // intiger number
printf ("amount: %b", $test);
// binare valu %b

echo "<br>";
$test = 10;
printf ("amount: %x", $test);
//  hex decimal

echo "<br>";
$test = 10;
printf ("amount: %X", $test);
  // capital letter X


echo "<br>";
$test = 10;
$test2 = 20;
printf ("amount: %d another amount is: %d",$test, $test2);

echo "<br>";
$test = 10;
$test2 = 20;
printf ('amount: %2$d another amount is: %1$d',$test, $test2);


$first_name = "jon";
$last_name = "roy";
//printf ('Your first name is: %$2s last name is: %$1s' $first_name ,$last_name);
printf ('amount: %2$d another amount is: %1$d',$first_name, $last_name);


echo "<br>";
$amount = 10.25;
printf('your amount is:%d', $amount);


echo "<br>";
$amount = 10.25;
printf('your amount is:%f', $amount);

// %.2 ,3,4  f 

echo "<br>";
$amount = 100.37;
printf('your amount is:%.2f', $amount);

echo "<br>";
$amount = 100.37;
printf('your amount is:%.5f', $amount);













?>







</body>
</html>