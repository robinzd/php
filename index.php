
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

// if(isset($_POST['submit'])){

    // check mail
 
    // if(empty($_POST['email'])){
    //     echo'An email is required <br />';
    // }else{
    //     echo htmlspecialchars($_POST['email']);
    // }

    // check password
  
    // if(empty($_POST['password'])){
    //     echo'password is required <br />';
    // }else{
    //     echo htmlspecialchars($_POST['password']);
    // }


    // check comment

//     if(empty($_POST['comment'])){
//         echo'comment is required <br />';
//     }else{
//         echo htmlspecialchars($_POST['comment']);
//     }
// }


// filter the characteristics and the symbols of the input field

// if(isset($_POST['submit'])){

    // check mail
 
    // if(empty($_POST['email'])){
    //     echo'An email is required <br />';
    // }else{
    //     $email=$_POST['email'];
    //     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         echo "email must be a valid email address";
    //     }
    // }

    // check password
  
    // if(empty($_POST['title'])){
    //     echo'title is required <br />';
    // }else{
    //    $title=$_POST['title'];
    //    if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
    //        echo 'title must be letters and spaces only';
    //    }
    // }


    // check comment

//     if(empty($_POST['comment'])){
//         echo'comment is required <br />';
//     }else{
//         $comment=$_POST['comment'];
//        if(!preg_match('/^[a-zA-Z\s]+$/',$comment)){
//            echo 'title must be letters and spaces only';
//        }
    
//     }


// }

// 


// the errors are shown in the input box itself and give the value to the input box when we refresh the page the value will be exsist


$title = $email = $comment ="";

$errors=array("email"=>"","title"=>"","comment"=>"");

if(isset($_POST['submit'])){

    // check mail
 
    if(empty($_POST['email'])){
        $errors['email']='An email is required <br />';
    }else{
        $email=$_POST['email'];
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $errors['email'] ='email must be valid email address';
        }
    }

    // check title
  
    if(empty($_POST['title'])){
        $error['title']='title is required <br />';
    }else{
       $title=$_POST['title'];
       if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
           $errors['title'] ='title must be letters and spaces only';
       }
    }


    // check comment

    if(empty($_POST['ingredients'])){
        $error['ingredients']='ingredients is required <br />';
    }else{
        $comment=$_POST['ingredients'];
       if(!preg_match('/^[a-zA-Z\s]+$/',$comment)){
           $errors['ingredients']='ingredients must be letters and spaces only';
       }
    
    }

    // to redirecting to the another page
    if(array_filter($errors)){

    }else {
        header('location: file.php');
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
     <input type="text" name="email" value="<?php echo htmlspecialchars ($email) ?>"></p>
     <div class="text1"><?php echo $errors['email'];?></div>
     <p><label>your title:<br></label>
     <input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>"></p>
     <div class="text2"><?php echo $errors['title'];?></div>
     <p><label>ingredients:<br></label>
     <input type="text" name="ingredients" value="<?php echo htmlspecialchars($ingredients) ?>"></p>
     <div class="text3"><?php echo $errors['comment'];?></div>
     <button type="submit" name="submit" value="submit">submit</button>
</form>
</table>
</body>
</html>

