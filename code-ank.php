<?php
session_start();
$connection = mysqli_connect("localhost","root","","ank_analytics");


if(isset($_POST['contact-us'])) 
{
   $use1 = $_POST['name'];
   $use2 = $_POST['email'];
   $use3 = $_POST['message'];

    $query = "INSERT INTO request_project (name,email,message) 
    VALUES('$use1','$use2','$use3')";
    $query_run = mysqli_query($connection,$query);
 
    if ($query_run) {
        $_SESSION['status'] = "Your message have been succesfully sent!";
        header('Location: index.php');
    }else {
     $_SESSION['status'] = "Message not sent, check out the entered infos!";
     header('Location: index.php');
    }

}


?>