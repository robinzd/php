<?php


include('db_connection.php');

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

// print_r(explode(',', $robin[0]['ingredients']));


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="file.css">
    <title>Pizza Shop</title>
</head>
<body>
   <?php include('header.php');?>


<h4 class="center gret-text">Pizzas!</h4>

<div class="container">
    <div class='row'>



    <?php foreach($robin as $robi): ?> 

        <div class="col s6 md3">
       
        <div class="card">
         <div class="card z-depth-0">
             <div class="card-content center">
                 <h6><?php echo htmlspecialchars($robi['title']);?></h6>
                 <ul>
                     <?php foreach(explode(',', $robi['ingredients']) as $ing): ?>
                        
                        <li><?php echo htmlspecialchars($ing);?></li>
                         
                        <?php endforeach; ?>

                     
                 </ul>
             </div>
             <div class="card-action right-align">
                 <a class="brand-text" href="details.php?id=<?php echo $robi['id']?>">more info</a>
             </div>
         </div>   
        </div>

        </div>

        <?php endforeach; ?>

    </div>
</div>

<?php include('footer.php');?>


    
</body>
</html>










