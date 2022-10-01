<?php include "connection.php"; ?>


<?php

if(isset($_POST['signup']))
{  
    //$today = date("Y-m-d");

    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $email = $_REQUEST['email'];
    $address = $_REQUEST['address'];

    $sql = "INSERT INTO signup_delivery (first_name,second_name,user_name,email,address,password) VALUES ('$firstname', '$lastname', '$username', '$email', '$address', '$password')";
    

    if (mysqli_query($conn, $sql)) {
        //echo ("<script>alert('New food item has been added successfully !');window.location.href='menu.php';</script>");
        header('Location: http://localhost/FoodOrder/DeliveryPerson_Login/login.php');
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);


}

?>