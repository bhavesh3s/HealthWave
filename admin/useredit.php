<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>

<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		
		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Edit User</h4>
					<!-- /.box-title -->
					<div class="card-content">






<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT username,img,contact,email,password FROM adminlogin WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: user.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
        $username = $_POST['username'];
         $email = $_POST['email'];
      $contact = $_POST['contact'];
  $password = $_POST['password'];

        $imgFile = $_FILES['user_image']['name'];
        $tmp_dir = $_FILES['user_image']['tmp_name'];
        $imgSize = $_FILES['user_image']['size'];
                    
        if($imgFile)
        {
            $upload_dir = 'images/'; // upload directory 
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
$stmt = $DB_con->prepare('UPDATE adminlogin SET username=:username,  img=:img,contact=:contact,  email=:email,password=:password
    WHERE id=:id');
            $stmt->bindParam(':username',$username);    
            $stmt->bindParam(':img',$img);
              $stmt->bindParam(':email',$email);
             $stmt->bindParam(':contact',$contact);

  $stmt->bindParam(':password',$password);

            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='user.php';
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
								<label for="inp-type-1" class="col-sm-3 control-label">User Name</label>
								<div class="col-sm-6">
									<input type="text" name="username" class="form-control" id="" placeholder="Enter User Name" value="<?php echo $username; ?>">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">User Profile </label>
								<div class="col-sm-6">
								

									  <img src="images/<?php echo $img; ?>" height="70" width="150" />

  <input type="file" name="user_image" accept="image/*" />

								<p class="help-block">Image should be 80 x 80 in pixels</p>
								</div>

								</div>

	<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Contact  </label>
								<div class="col-sm-6">
									<input type="text" value="<?php echo $contact; ?>" name="contact" class="form-control" id="" placeholder="Enter Contact" required="">
								</div>

								</div>
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Email Id</label>
								<div class="col-sm-6">
									<input type="text" value="<?php echo $email; ?>" name="email" class="form-control" id="" placeholder="Enter Email Id" required="">
								</div>
							</div>

						<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-6">
									<input type="text" value="<?php echo $password; ?>" name="password" class="form-control" id="" placeholder="Enter Password" required="">
								</div>
							</div>


							<div class="form-group margin-bottom-0">
									<label for="inp-type-5" class="col-sm-3 control-label"></label> 

									<div class="col-sm-6">
										 <input class="btn btn-primary btn-sm waves-effect waves-light" type="submit" name="btn_save_updates" value="Update" />
   							
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
