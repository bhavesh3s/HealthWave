<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>

<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add Doctors</h4>
					<!-- /.box-title -->
					<div class="card-content">
						
<?php
include('db.php'); 

error_reporting(0);
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{

 		


 		$imgFile = $_FILES['image']['name'];
        $tmp_dir = $_FILES['image']['tmp_name'];
        $imgSize = $_FILES['image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = 'images/docotrs/'; // upload directory 
            $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
            $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
            $img = rand(1000,1000000).".".$imgExt;
            if(in_array($imgExt, $valid_extensions))
            {           
                if($imgSize < 5000000)
                {
                    unlink($upload_dir.$edit_row['img']);
                    move_uploaded_file($tmp_dir,$upload_dir.$img);
                }
                else
                {
                    $errMSG = "Sorry, your file is too large it should be less then 5MB";
                }
            }
            else
            {
                $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";        
            }   
        } 

 
    // $file=$_FILES['image']['tmp_name'];
    // $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    // $image_name= addslashes($_FILES['image']['name']);
    // move_uploaded_file($_FILES["image"]["tmp_name"],"images/blogss/" . $_FILES["image"]["name"]);
    // $img="" . $_FILES["image"]["name"];

  	$name = $_POST['name'];
    $bio = $_POST['bio'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $address = $_POST['address'];    
    $profession = $_POST['profession'];	
   	$experience = $_POST['experience']; 
   	$specilization = $_POST['Doctorspecialization'];
   	$education = $_POST['education'];
   	$awards = $_POST['awards'];
   	$fees = $_POST['fees'];
   	$password = md5($_POST['npass']);
   			
    $status = 1;

            $save=mysqli_query($con,"INSERT INTO doctor (img,name,bio,email,status,mobileno,address,profession,experience,specilization,education,awards,fees,password) 
            VALUES ('$img','$name','$bio','$email','$status','$mobileno','$address','$profession','$experience','$specilization','$education','$awards','$fees','$password')");
          
 

 

           ?>
                <script>
                alert('Successfully Inserted ...');
                window.location.href='doctorview.php';
                </script>
                <?php

                             
    }
?>
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
 
 		<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-6">
									<input type="file" id="" name="image" required="">
								<p class="help-block">Image should be 770 x 880 in pixels</p>
								</div>

								</div>


							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor Name</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="" placeholder="Enter Doctor Name" required="">
								</div>
							</div>

	
					
	<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Doctor Bio</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="bio" id="text" placeholder="Enter Doctor Bio"></textarea>  

    <script>
        CKEDITOR.replace('text');
    </script>

								</div>
							</div>
 

						    <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor E-mail</label>
								<div class="col-sm-6">
									<input type="text" name="email" class="form-control" id="" placeholder="Enter Doctor email" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor Fees</label>
								<div class="col-sm-6">
									<input type="text" name="fees" class="form-control" id="" placeholder="Enter Doctor fees" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor Address</label>
								<div class="col-sm-6">
									<input type="text" name="address" class="form-control" id="" placeholder="Enter Doctor Address" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor mobile no</label>
								<div class="col-sm-6">
									<input type="text" name="mobileno" class="form-control" id="" placeholder="Enter doctor mobile no" required="">
								</div>
							</div>

							
	                        <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Profession</label>
								<div class="col-sm-6">
									<input type="text" name="profession" class="form-control" id="" placeholder="Enter Profession of doctor" required="">
								</div>
							</div>

	                        <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Experience</label>
								<div class="col-sm-6">
									<input type="text" name="experience" class="form-control" id="" placeholder="Enter Experience of doctor" required="">
								</div>
							</div>
	                        <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">specilization</label>
								<div class="col-sm-6">
									<select name="Doctorspecialization" class="form-control" required="true">
																<option value="">Select Specialization</option>
<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
								</div>
							</div>
	                        <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Education</label>
								<div class="col-sm-6">
									<input type="text" name="education" class="form-control" id="" placeholder="Enter Education of doctor in list view" required="">
								</div>
							</div>


							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Awards</label>
								<div class="col-sm-6">
									<input type="text" name="awards" class="form-control" id="" placeholder="Enter Awards of doctor" required="">
								</div>
							</div>

							<div class="form-group">
									<label for="inp-type-1" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-6">
										<input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
									</div>
							</div>

							<div class="form-group">
									<label for="inp-type-1" class="col-sm-3 control-label">Confirm Password</label>
									<div class="col-sm-6">
										<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
									</div>
							</div>
														




							<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
										 <input class="btn btn-dark btn-sm waves-effect waves-light" type="submit" name="Submit" value="Submit" />

								
								</div>
							</div>


						</form>
					</div>
					<!-- /.card-content -->
				</div>
				<!-- /.box-content card white -->
			</div>




	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	
<?php include "allscripts.php"; ?>
