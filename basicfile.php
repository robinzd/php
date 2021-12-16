<!-- this is the procedure to write the php code -->
<!-- <?php

echo "hii how are you."

?> -->



<!-- the escaping characters of the php -->
<!-- <?php 

$name="robin";

$_sentence='i don\'t know';

echo $_sentence;

?> -->

<!-- <?php 

$sentence1= "i don\"t know";

echo $sentence1;

?> -->

<!-- to overwrite the variables -->

<!-- <?php

$names1="robin";
$names2="divya";

$names1="Robinson Rajiv";

echo $names1;
echo $names2;

?> -->

<!-- we can also  write the php code in the html -->

<!-- <?php

$name="rakesh";
$name1="ramesh";


$name="robin";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p1><?php echo $name  ?></p1?>
</body>
</html> -->


<!-- to write the constant variables -->

<!-- <?php

define("name","robin");


echo name;

?> -->


<!-- the concatination of the strings -->

<!-- <?php

$sentence1="my name is";
$sentence2="robin";

echo $sentence1 . $sentence2;

?> -->

<!-- the single codes concatination -->

<!-- <?php

$name='robin';

echo 'my name is'. $name;

?> -->

<!-- the double codes concatination -->

<!-- <?php

$name="robin";

echo "my name is $name";

?> -->

<!-- to find the characters of the strings and to change the upper case into the lower case-->

<!-- <?php

// $name="ROBIN"; -->

// echo $name[1];
// echo strlen($name);
// echo strtoupper($name);
// echo strtolower($name);

//   ?>

<!-- integeres operators -->

<!-- orders of operrators(B I D M A S) -->

<!-- <?php

$number1=26;
$number2=28;

echo $number1*$number2;

?> -->


<!-- increment and decrement operators -->
<!-- <?php

$number1=36;


echo $number1++;
echo $number1;


echo $number1--;
echo $number1;

?> -->

<!-- shorthand operators -->
<!-- <?php

$age=30;

$age*=2;


echo $age;

?> -->

<!-- integer functions -->
<!-- <?php

 $pi=3.91;

 echo floor($pi);
 echo ceil($pi);
 echo pi();

 ?> -->

 <!-- indexed arrays -->

 <!-- <?php

 $names=["robin","adithyan","regu"];

 echo $age[2];

// it is the another way to print the array

print_r($names);

// to join a new array

$names[]="raman";

print_r($names);


array_push( $names,"rajan");

print_r($names);

$names[1]="arthi";

print_r($names);


?> -->


<!-- to join the two index array -->
<!-- <?php

$names1=["robin","andrea","hansika"];
$names2=["naynthara","priyanka"];

$names3=array_merge($names1,$names2);

print_r($names3);

?> -->


<!-- associated arrays -->

<!-- <?php 

$names=["shawn"=>"black","robin"=>"white","divya"=>"pure white"];
echo $names["robin"];
print_r($names);

// to joining the new array
$names["aswinal"]="yellow";
print_r($names);

// to overwrite the arrays
$names=["shawn"=>"black","robin"=>"white","divya"=>"pure white"];
$names["robin"]="pink";
print_r($names);


// to merging two array
$names=["shawn"=>"black","robin"=>"white","divya"=>"pure white"];
$names2=["venky"=>"white","vicky"=>"brown"];
$fullnames=array_merge($names,$names2);
print_r($fullnames);
 ?> -->

<!-- multi dimensional array -->

<?php

// $blocks=[
//     ["title","peryar","books"],
//     ["malar","pooo","signature"],
//     ["visuvasam","thala","veralevel"]
// ];

// to print the arrays
// print_r($blocks);

// to find the parrticular array
// print_r($blocks[2][2]);

?>


<!-- <?php
$blogs=[
["shawn"=>"black","robin"=>"white","divya"=>"pure white"],
["venky"=>"white","vicky"=>"brown"],
["mano"=>"peach","vivek"=>"blue"]
];

// to finding the array
print_r($blogs[1]["vicky"]);

// to joining the array
$blogs[1]["vignesh"]="puer green";
print_r($blogs[1]);

// to delete the array
array_pop($blogs[2]);
print_r($blogs[2])
?> -->

<!-- loops -->

<!-- for loops -->

<?php

// $robin=["rithu","divya","vimala"];

// for($i=0; $i < count($robin); $i++){
//     echo $robin[$i] . '<br />';
// }

// for($i=0; $i<=1000; $i=$i+2){
//     echo $i. '<br />'; 
// }

// tables for the for loop
for($i=1; $i<=100; $i=$i+1){
    echo $i."tables" . '<br />';
for($j=1; $j<=100; $j=$j+1){
    echo $i."*".$j."=".$i*$j ."<br />";            
}
}
?>

<!-- for each loop -->

<?php

// for each loop examples

$products=[
    ["mobile name"=>"vivo","price"=>15000],
    ["mobile name"=>"oppo","price"=>30000],
    ["mobile name"=>"realme","price"=>10000],
    ["mobile name"=>"redmi","price"=>8000],
    ["mobile name"=>"apple","price"=>115000]
    
];

foreach($products as $product){

    // if($product["price"]<30000){
    //     echo "The lowest cost mobile phones are". $product["mobile name"] . "<br />";
    // }

     if($product["price"]<500000 && $product["price"]>8000){
         echo $product["mobile name"]."<br />";

     }



}


?>












