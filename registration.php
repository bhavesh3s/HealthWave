<?php include "allcss.php" ?>
  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">
function valid()
{
 if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>

    </head>


<body>
  

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <?php include "header.php" ?>


    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Registration</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.php">Home</a></li>
                        <li>Registration</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    


    <section class="login registration section">
        <div class="container">
            <div class="row">
                <?php
include('admin/db.php');
if(isset($_POST['savee']))
{

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $city=$_POST['city'];
    $address=$_POST['address'];
    $gender=$_POST['gender'];


    $save=mysqli_query($con,"INSERT INTO users (fullname,email,password,city,address,gender) VALUES ('$fullname','$email','$password','$city','$address','$gender')");
if($save)
{
   
               echo" <script>
                alert('Registeration Succefully Please Login');
                window.location.href='login.php';
                </script>";
                

                   
    }
}
 ?>
                <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                    <div class="form-head">
                        <h4 class="title">Registration</h4>
                        <form action="" method="post" >
                            
                            
                            <div class="form-group">
                                <input name="fullname" type="text" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input name="address" type="text" placeholder="Address" required="">
                            </div>
                            <div class="form-group">
                                <input name="city" type="text" placeholder="City" required="">
                            </div>

                             

                            <div class="form-group">
                                <input name="password" type="password" placeholder="Password" required="">
                            </div>
                            <div class="form-group">
                                <input name="cpassword" type="password" placeholder="Confirm Password" required="">
                            </div>
                             <div class="form-group">
                                <label class="block">
                                    Gender
                                </label>
                                </div> 
                                
                                
                                    <label class="radio-inline">
                                        <input type="radio" id="rg-male" name="gender" value="male">Male
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" id="rg-female" name="gender" value="female">Female
                                    </label><br>
                                

                               <div class="form-group"></div> 

                            
    


                            <div class="check-and-pass">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input width-auto"
                                                id="exampleCheck1">
                                            <label class="form-check-label">Agree to our <a
                                                    href="javascript:void(0)">Terms and
                                                    Conditions</a></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button">
                                <button type="submit" name ="savee" class="btn" value="submit">Registration</button>
                            </div>
                            <p class="outer-link">Already have an account? <a href="login.php"> Login Now</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include "footer.php"?>
</html>