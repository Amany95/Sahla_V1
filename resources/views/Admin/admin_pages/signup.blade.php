<?php
      session_start();// Starting Session

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>sahla | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">Sahla</h1>

            </div>
            <h3>Welcome to sahla</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Sign Up. To see it in action.</p>
            <form class="m-t" role="form" action="welcom.php" method="POST">
                <div class="form-group">
                    <input type="email" name="admin_email" required="" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="admin_password" required="" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" name="login_submit" class="btn btn-primary block full-width m-b">signup</button>

               
            </form>
           
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
