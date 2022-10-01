<?php include "connection.php"; ?>


<?php

if(isset($_POST['login']))
{  
    try {
        //$today = date("Y-m-d");
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $sql = "SELECT COUNT(email) FROM signup_delivery WHERE email = '$email' AND password = '$password' LIMIT 1";

    if (mysqli_query($conn, $sql)==1) {
        //echo ("<script>alert('New food item has been added successfully !');window.location.href='menu.php';</script>");
        header('Location: http://localhost/FoodOrder/Home');
        
    } else {
        echo ("<script>alert('Email or Password is incorrect !')</script>");
    }
    mysqli_close($conn);
    } catch (\Throwable $th) {
        echo ("<script>alert('Email or Password is incorrect !')</script>");
        header('Location: http://localhost/FoodOrder/DeliveryPerson_Login/login.php');
    }
}

?>