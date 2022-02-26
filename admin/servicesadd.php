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
					<h4 class="box-title">Add Services</h4>
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
            $upload_dir = 'images/service/'; // upload directory 
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

  	$title = $_POST['title'];
    $description = $_POST['description'];
    $quote = $_POST['quote'];
   
    
    $quoteby = $_POST['quoteby'];
   	$status = 1;

            $save=mysqli_query($con,"INSERT INTO services (img,title,description,quote,status,quoteby) 
            VALUES ('$img','$title','$description','$quote','$status','$quoteby')");
          
 

 

           ?>
                <script>
                alert('Successfully Inserted ...');
                window.location.href='servicesview.php';
                </script>
                <?php

                             
    }
?>
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
 
 		<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label"> Image</label>
								<div class="col-sm-6">
									<input type="file" id="" name="image" required="">
								<p class="help-block">Image should be 770 x 450 in pixels</p>
								</div>

								</div>


							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Title</label>
								<div class="col-sm-6">
									<input type="text" name="title" class="form-control" id="" placeholder="Enter Title" required="">
								</div>
							</div>

	
					
	<div class="form-group">
								<label for="text" class="col-sm-3 control-label">Description</label>
								<div class="col-sm-6">
									<textarea class="form-control" name="description" id="text" placeholder="Write your Product Description"></textarea>  

    <script>
        CKEDITOR.replace('text');
    </script>

								</div>
							</div>

						<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Quote</label>
								<div class="col-sm-6">
									<input type="text" name="quote" class="form-control" id="" placeholder="Enter quote" required="">
								</div>
							</div>	
 

						<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Quote by</label>
								<div class="col-sm-6">
									<input type="text" name="quoteby" class="form-control" id="" placeholder="Enter quote by" required="">
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
