
<!-- get and post method in form -->
<?php

// if(isset($_GET['submit'])){
//     echo $_GET['email'];
//     echo $_GET['password'];
//     echo $_GET['cooment'];
// }

// if(isset($_POST['submit'])){
//     echo $_POST['email'];
//     echo $_POST['password'];
//     echo $_POST['cooment'];
// }

// xss attacks in php it is prevents from the wwebsite redirecting

// if(isset($_POST['submit'])){
//     echo htmlspecialchars($_POST['email']);
//     echo htmlspecialchars($_POST['password']);
//     echo htmlspecialchars($_POST['cooment']);
// }


// form validitation

if(isset($_POST['submit'])){

    // check mail
 
    if(empty($_POST['email'])){
        echo'An email is required <br />';
    }else{
        echo htmlspecialchars($_POST['email']);
    }

    // check password
  
    if(empty($_POST['password'])){
        echo'password is required <br />';
    }else{
        echo htmlspecialchars($_POST['password']);
    }


    // check comment

    if(empty($_POST['comment'])){
        echo'comment is required <br />';
    }else{
        echo htmlspecialchars($_POST['comment']);
    }
}


?>


<!DOCTYPE html>
<html lang="en">

    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style><?php include 'index.css'; ?></style>
    <title>Document</title>
</head>
<body>
    <h1>Form details</h1>
    <table>
    <form class="form" action="index.php"  method="POST">
     <p><label>your Email:<br></label>
     <input type="text" name="email"></p>
     <p><label>your password:<br></label>
     <input type="password" name="password"></p>
     <p><label>your comment:<br></label>
     <input type="text" name="comment"></p>
     <button type="submit" name="submit" value="submit">submit</button>
</form>
</table>
</body>
</html>