<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>

<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>


<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit Doctors </h4>
					<!-- /.box-title -->
					<div class="card-content">
						




<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT * FROM doctor WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: docotrview.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {

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


        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = 'images/doctors/'; // upload directory 
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
        else
        {
            // if no image selected the old image remain as it is.
            $img = $edit_row['img']; // old image from database
        }   
                        
        
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
$stmt = $DB_con->prepare('UPDATE doctor SET name=:name,  img=:img, bio=:bio, email=:email, mobileno=:mobileno, address=:address, profession=:profession, experience=:experience, specilization=:specilization, education=:education, awards=:awards, fees=:fees WHERE id=:id');
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':bio',$bio);  
            $stmt->bindParam(':email',$email);  
            $stmt->bindParam(':mobileno',$mobileno);  
            $stmt->bindParam(':address',$address);  
            $stmt->bindParam(':profession',$profession);  
            $stmt->bindParam(':experience',$experience);  
            $stmt->bindParam(':specilization',$specilization);  
            $stmt->bindParam(':education',$education);      
            $stmt->bindParam(':awards',$awards);  
            $stmt->bindParam(':fees',$fees);
            
            $stmt->bindParam(':img',$img);
            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='doctorview.php';
                </script>
                <?php
            }
            else{
                $errMSG = "Sorry Data Could Not Updated !";
            }
        
        }
        
                        
    }
    
?>




  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
 
 		<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-6"> 

									  <img src="images/doctors/<?php echo $img; ?>" height="70" width="150" />

  <input type="file" name="user_image" accept="image/*" />

								<p class="help-block">Image should be 770 x 880 in pixels</p>
								</div>

								</div>


							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor Name</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="" placeholder="Enter Doctor Name" required="" value="<?php echo $name; ?>">
								</div>
							</div>

	
					
	                         <div class="form-group">
								<label for="text" class="col-sm-3 control-label">Doctor Bio</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="bio" id="text" placeholder="Enter Doctor Bio"> <?php echo $bio; ?> </textarea>  

    <script>
        CKEDITOR.replace('text');
    </script>

								</div>
							</div>
 

						    <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor E-mail</label>
								<div class="col-sm-6">
									<input type="text" name="email" class="form-control" id="" placeholder="Enter Doctor email" required="" value="<?php echo $email; ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor Address</label>
								<div class="col-sm-6">
									<input type="text" name="address" class="form-control" id="" placeholder="Enter Docotr Address" required="" value="<?php echo $address; ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Doctor mobile no</label>
								<div class="col-sm-6">
									<input type="text" name="mobileno" class="form-control" id="" placeholder="Enter doctor mobile no" required="" value="<?php echo $mobileno; ?>">
								</div>
							</div>



							
	                        <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Profession</label>
								<div class="col-sm-6">
									<input type="text" name="profession" class="form-control" id="" placeholder="Enter Profession of doctor" required="" value="<?php echo $profession; ?>">
								</div>
							</div>

							 

	                        <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Experience</label>
								<div class="col-sm-6">
									<input type="text" name="experience" class="form-control" id="" placeholder="Enter Experience of doctor" required="" value="<?php echo $experience; ?>">
								</div>
							</div>
	                       
	                        <div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Education</label>
								<div class="col-sm-6">
									<input type="text" name="education" class="form-control" id="" placeholder="Enter Education of doctor in list view" required=" "value="<?php echo $education; ?>">
								</div>
							</div>


							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Awards</label>
								<div class="col-sm-6">
									<input type="text" name="awards" class="form-control" id="" placeholder="Enter Awards of doctor" required="" value="<?php echo $awards; ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Fees</label>
								<div class="col-sm-6">
									<input type="text" name="awards" class="form-control" id="" placeholder="Enter Fees of doctor" required="" value="<?php echo $fees; ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">specilization</label>
								<div class="col-sm-6">
									<select name="Doctorspecialization" class="form-control" required="">
																<option value=""><?php echo $specilization; ?></option>
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


						


							<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
									   <input class="btn btn-dark btn-sm waves-effect waves-light" type="submit"  name="btn_save_updates" value="Update" /> 




								
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
