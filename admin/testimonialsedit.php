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
					<h4 class="box-title">Edit testimonials </h4>
					<!-- /.box-title -->
					<div class="card-content">
						




<?php

    error_reporting( ~E_NOTICE );
    
    require_once 'dbconfig.php';
    
    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
    {
        $id = $_GET['edit_id'];
        $stmt_edit = $DB_con->prepare('SELECT name, message, client FROM testimonials WHERE id =:id');
        $stmt_edit->execute(array(':id'=>$id));
        $edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
        extract($edit_row);
    }
    else
    {
        header("Location: activitiesview.php");
    }
    
    
    
    if(isset($_POST['btn_save_updates']))
    {
        $name = $_POST['name'];
       
         $message = $_POST['message'];
         $client = $_POST['client'];
       
              
        
        // if no error occured, continue ....
        if(!isset($errMSG))
        {
$stmt = $DB_con->prepare('UPDATE testimonials SET name=:name, message=:message, client=:client
    WHERE id=:id');
            $stmt->bindParam(':name',$name);    
            $stmt->bindParam(':message',$message);
            $stmt->bindParam(':client',$client);
            
            $stmt->bindParam(':id',$id);
                
            if($stmt->execute()){
                ?>
                <script>
                alert('Successfully Updated ...');
                window.location.href='testimonials.php';
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
								<label for="inp-type-1" class="col-sm-3 control-label">Customer Name</label>
								<div class="col-sm-6">
									<input type="text" name="name" class="form-control" id="" placeholder="Enter Customer Name" required=""  value="<?php echo $name; ?>">
								</div>
							</div>

	
					
                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Message </label>
                                <div class="col-sm-6">
                                    <input type="text" name="message" class="form-control" id="" placeholder="Enter Message " required=""  value="<?php echo $message; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Client Type </label>
                                <div class="col-sm-6">
                                    <input type="text" name="client" class="form-control" id="" placeholder="Enter Client Type " required=""  value="<?php echo $client; ?>">
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
