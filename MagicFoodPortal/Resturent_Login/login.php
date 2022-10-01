<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>

        <link rel="stylesheet" href="login.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css">

        <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="login.js"></script>

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

        <br><br>

        <div class="common-font" align="center">

            <div>
                <img src="https://www.planstudyabroad.uniagents.com/images/login.png" />
            </div>

            <br>

            <h1>Login Now</h1>

            <form name="login" align="left" action="Resturent_login_backend.php" method="POST">
                <label class="form-label">Email</label> &nbsp;
                <input class="input-group form-check-inline accordion-body" type="email" name="email" id="email" placeholder="Type your valid email address here..." autocomplete="off" required /><br>

                <label class="form-label">Password</label> &nbsp;
                <input class="input-group form-check-inline accordion-body" type="password" name="password" id="password" placeholder="Type your password here..." autocomplete="off" required /><br>

                <input type="submit" name="login" class="btn btn-primary" value="Login" /> &nbsp;
                <button type="reset" class="btn btn-light">Cancel</button>
            </form>

        </div>

        <br><br><br>

        <footer class="bg-light text-center text-lg-start">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-dark" href="https://www.nibm.lk/">Online Food Order Website | Final Project</a>
            </div>
        </footer>

    </body>
</html>