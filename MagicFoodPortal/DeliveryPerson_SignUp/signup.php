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
            <table>
                <tr align="center" style="width: 40%;">
                  <th><h1 class="common-font">Register as Delivery Person</h1></th>
                  <th></th>
                </tr>

                <tr align="center">
                    <td style="width: 40%; height:80%;">

                    <form class="form-control-lg align-content-md-center" align="left" style="width: 60%;" action="DeliveryPerson_SignUp_backend.php" method="POST">
                            <label class="form-label">First Name</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="firstname" id="firstname" placeholder="Type your first name here..." autocomplete="off" required /><br>

                            <label class="form-label">Last Name</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="lastname" id="lastname" placeholder="Type your last name here..." autocomplete="off" required /><br>

                            <label class="form-label">Username</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="username" id="username" placeholder="Type your username here..." autocomplete="off" required /><br>

                            <label class="form-label">Password</label> &nbsp;
                            <input class="input-group form-check-inline" type="password" name="password" id="password" placeholder="Type your password here..." autocomplete="off" required /><br>

                            <label class="form-label">Email</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="email" id="email" placeholder="Type your valid email address here..." autocomplete="off" required /><br>

                            <label class="form-label">Address</label> &nbsp;
                            <input class="input-group form-check-inline" type="text" name="address" id="address" placeholder="Type your address here..." autocomplete="off" required /><br>

                            <br>

                            <input type="submit" name="signup" value="Sign Up" class="btn btn-primary" onClick="save()" />&nbsp;
                            <button type="reset" class="btn btn-light">Cancel</button>

                        </form>

                        Already have an account? <a href="http://localhost/FoodOrder/DeliveryPerson_Login/login.php">Login</a>
                        
                    </td>

                    <td>
                        <img src="https://images.unsplash.com/photo-1608535002897-27b2aa592456?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"/>
                    </td>
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