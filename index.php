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

include('db_connection.php');


$title = $email = $ingredients = "";

$errors = array("email" => "", "title" => "", "ingredients" => "");

if (isset($_POST['submit'])) {

    // check mail

    if (empty($_POST['email'])) {
        $errors['email'] = 'An email is required <br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'email must be valid email address';
        }
    }

    // check title

    if (empty($_POST['title'])) {
        $errors['title'] = 'title is required <br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] = 'title must be letters and spaces only';
        }
    }


    // check comment

    if (empty($_POST['ingredients'])) {
        $errors['ingredients'] = 'ingredients is required <br />';
    } else {
        $ingredients = $_POST['ingredients'];
        if (!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
            $errors['ingredients'] = 'ingredients must be letters and spaces only';
        }
    }
     
    // to redirecting to the another page
    if (array_filter($errors)) {

        // echo errors from the form

    } else {
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);

        $sql = "INSERT INTO `robin`( `title`, `ingredients`, `email`) 
        VALUES ('$title','$ingredients','$email')";

        // save to db and check
        if (mysqli_query($conn, $sql)) {
            // success
            header('location:header.php');
        } else {
            // error
            echo 'query error:' . mysqli_error($conn);
        }
    }
}



?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <title>Pizza Order</title>
</head>

<body>

    <body class="grey lighten-4">
        <nav class="white z-depth-0">
            <div class="container">
                <a href="#" class="brand-logo brand-text indigo-text left">Pizza Shop</a>
                <ul id="nav-mobile" class="right hide-on-small-and-down">
                    <li><a href="#" class="btn brand z-deth-0">ADD Pizza</a></li>
                </ul>
            </div>
        </nav>
        <section class="container grey-text">
            <h1 class="center green-text">Form details</h1>
            <form class="white" action="index.php" method="POST">
                <label>your Email:</label>
                <input type="text" name="email" value="<?php echo ($email) ?>">
                <div class="red-text"><?php echo $errors['email']; ?></div>
                <label>your title:</label>
                <input type="text" name="title" value="<?php echo ($title) ?>">
                <div class="red-text"><?php echo $errors['title']; ?></div>
                <label>ingredients (comma separated):</label>
                <input type="text" name="ingredients" value="<?php echo ($ingredients) ?>">
                <div class="red-text"><?php echo $errors['ingredients']; ?></div>
                <div class="center">
                    <button type="submit" name="submit" value="submit" class="btn">submit</button>
                </div>
            </form>
        </section>



        <?php
        include('footer.php');
        ?>



</html>