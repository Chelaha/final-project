<?php session_start();
?>
<?php include  "connection.php"; ?>

<?php

        $sql="SELECT COUNT(id) AS countofres FROM `restaurants` WHERE status = 'APPROVED'";
        $result=$conn->query($sql);

        if(mysqli_num_rows($result)==0){
            echo "<script>alert('Nothing to show!')</script>";
        }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>

        <link rel="stylesheet" href="signup.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">

        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="signup.js"></script>

    </head>

    <body>
    <nav class="navbar navbar-expand-lg bg-light nav navbar-nav navbar-center" id="transparent-navbar"> 
            <span class="navbar-brand mb-0 h1"></span>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="http://localhost/FoodOrder/Home/" class="nav-link active"><span id="currenpage-navbar-font">Home</span></a>
                    </li>
                    <li class="nav-item active">
                        <a href="http://localhost/FoodOrder/Resturent_SignUp/signup.php" class="nav-link"><span id="otherpages-navbar-font">Resturent</span></a>
                    </li>
                    <li class="nav-item active">
                        <a href="http://localhost/FoodOrder/DeliveryPerson_SignUp/signup.php" class="nav-link"><span id="otherpages-navbar-font">Delivery Person</span></a>
                    </li>
                    <li class="nav-item active">
                        <a href="http://localhost/FoodOrder/ContactUs/contactus.php" class="nav-link"><span id="otherpages-navbar-font">Contact Us</span></a>
                    </li>
                </ul>
            </div>
        </nav>

        <br>

        <div class="common-font">
            <table width="100%">
                <tr align="center" style="width: 40%;">
                  <th><h1 class="common-font">Add New Resturent</h1></th>
                  <th></th>
                </tr>

                <tr align="center">
                    <td style="width: 40%;">

                        <form class="form-control-lg align-content-md-center" align="left" style="width: 60%;" action="resturent_backend.php" method="POST">

                            <label class="form-label">Resturent Name</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="name" id="name" placeholder="Type your resturent name here..." autocomplete="off" required /><br>

                            <label class="form-label">Your Name</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="yname" id="yname" placeholder="Type your first name here..." autocomplete="off" required /><br>

                            <label class="form-label">Address</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="address" id="address" placeholder="Type your address here..." autocomplete="off" required /><br>

                            <label class="form-label">Description</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="desc" id="desc" placeholder="Type resturent description here..." autocomplete="off" required /><br>

                            <label class="form-label">Resturent Email</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="email" id="email" placeholder="Type your resturent email address here..." autocomplete="off" required /><br>

                            <label class="form-label">Resturent Phone Number</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="telephone" id="telephone" placeholder="Type your resturent Telephone here..." autocomplete="off" required /><br>

                            <label class="form-label">Resturent Picture URL</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="picture" id="picture" placeholder="Copy and Paste picture URL here..." autocomplete="off" required /><br>
                        

                            <input type="submit" class="btn btn-primary" onClick="save()" name="add" value="Add +">&nbsp;
                            <button type="reset" class="btn btn-light">Cancel</button>

                        </form>
                        
                    </td>

                    <?php
							try {
								//global $rows;
								while($rows=$result -> fetch_assoc()) {
										
					?>

                    <td>
                    <b style="font-size:400px; color:green;"><?php echo $rows['countofres']; ?></b><h2>Number of resturent you have now</h2>
                    </td>

                    <?php 
										} 

										$result -> free_result();

										$conn -> close();

										} catch (\Throwable $th) {
											//throw $th;
											echo "<script>alert('Can't show data!')</script>";
										}?>
                </tr>
              </table>
        </div>

        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-dark" href="https://www.nibm.lk/">Online Food Order Website | Final Project</a>
            </div>
        </footer>

    </body>
</html>