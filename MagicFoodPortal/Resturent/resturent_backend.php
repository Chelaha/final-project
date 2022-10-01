<?php include "connection.php"; ?>


<?php

if(isset($_POST['add']))
{  
    //$today = date("Y-m-d");

    $name = $_REQUEST['name'];
    $yname = $_REQUEST['yname'];
    $address = $_REQUEST['address'];
    $desc = $_REQUEST['desc'];
    $email = $_REQUEST['email'];
    $telephone = $_REQUEST['telephone'];
    $picture = $_REQUEST['picture'];

    $sql = "INSERT INTO restaurants (name,owner,address,description,email,phone_number,picture,status) VALUES ('$name', '$yname','$address', '$desc', '$email','$telephone', '$picture','APPROVED')";
    

    if (mysqli_query($conn, $sql)) {
        //echo ("<script>alert('New food item has been added successfully !');window.location.href='menu.php';</script>");
        header('Location: http://localhost/FoodOrder/DeliveryPerson_Login/login.php');
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    mysqli_close($conn);


}

?>