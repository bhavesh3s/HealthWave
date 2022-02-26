
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>GK Marine | Admin Panel</title>
	<link rel="stylesheet" href="assets/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="assets/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
    <?php

    error_reporting(0);
    require('db.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){

        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);

    //Checking is user existing in the database or not
        $query = "SELECT * FROM `adminlogin` WHERE username='$username' and password='$password'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['username'] = $username;
            header("Location: index.php"); // Redirect user to index.php
            }else{ $abc = "<b>Username/password is incorrect.</b>";
                }
    }else{
?>

        <?php } ?>	

        <form action="" class="frm-single" name="login" method="post">

		<div class="inside" style="text-align: center;">
			 

			<img src="images/logo.png" width="500px">
			<!-- /.title -->
			<div class="frm-title">Admin Login</div>


		
			
			<!-- /.frm-title -->
			<div class="frm-input">

			

				 <input type="text" name="username" placeholder="Username" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" name="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			
			<!-- /.clearfix
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>    -->

			<input class="frm-submit" name="submit" type="submit" value="Login" />

			<div class="row small-spacing">
				<div class="col-sm-12">

	
				<div class='txt-login-with txt-center'><?php echo $abc; ?> </div>


					<!-- /.txt-login-with -->
				</div>
			</div>
			<!-- /.row -->
			<div class="frm-footer">gk © 2019.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="assets/script/html5shiv.min.js"></script>
		<script src="assets/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/scripts/jquery.min.js"></script>
	<script src="assets/scripts/modernizr.min.js"></script>
	<script src="assets/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/plugin/nprogress/nprogress.js"></script>
	<script src="assets/plugin/waves/waves.min.js"></script>

	<script src="assets/scripts/main.min.js"></script>
</body>
</html>