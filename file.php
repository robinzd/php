<?php

// hiow to connect to the database 

$conn =mysqli_connect('localhost','robin','robin123','robin_project');


// check the connection
if(!$conn){
    echo "connection error: " . mysqli_connect_error();
}

// write query for all the data from (table:robin)
$sql='SELECT title,ingredients,id FROM robin ORDER BY created_at';

// make query and get result
$result=mysqli_query($conn,$sql);

// fetch the resulting rows as an array
$robin=mysqli_fetch_all($result,MYSQLI_ASSOC);

// print_r($robin);

// free result from memory
mysqli_free_result($result);


// close connection
mysqli_close($conn);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'file.css'; ?></style>
    <title>Document</title>
</head>
<body>

<h1 align="center">Robin project!</h1>

 <!-- rendering the data from the database to the browser -->
 <h2>
<div class="table">
<?php

foreach($robin as $robi){
    echo $robi["title"];

}
    
?>
</div>
</h2>
 <div>
  <ul>
  <?php 
  
  foreach(explode(",",$robi["ingredients"])as$ing){
      echo $ing;
  }
  

  ?>
  <ul>
</div>    






    
</body>
</html>




