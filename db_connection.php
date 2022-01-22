<?php
// how to connect to the database 

$conn = mysqli_connect('localhost','robin','robin0514','robin_project');


// check the connection
if(!$conn){
    echo "connection error: " . mysqli_connect_error();
}
?>