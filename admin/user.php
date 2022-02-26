<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>

<?php include "allcss.php" ?>
 <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 <script language="JavaScript" type="text/javascript">
            $(document).ready(function() {
                $("a.delete").click(function(e) {
                    if (!confirm('Are you sure?')) {
                        e.preventDefault();
                        return false;
                    }
                    return true;
                });
            });
        </script>
<body>

<?php include "header.php" ?>


<div id="wrapper">
	<div class="main-content">
		 




		<div class="col-lg-12 col-xs-12">
				<div class="box-content card white">
					<h4 class="box-title">Add User</h4>
					<!-- /.box-title -->
					<div class="card-content">
					




	
<?php
include('db.php');
if (!isset($_FILES['image']['tmp_name'])) {
    echo "";
    }else{
    $file=$_FILES['image']['tmp_name'];
    
   
    $image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $image_name= addslashes($_FILES['image']['name']);

            move_uploaded_file($_FILES["image"]["tmp_name"],"images/" . $_FILES["image"]["name"]);

            $img="" . $_FILES["image"]["name"];

  $username = $_POST['username'];
  $email = $_POST['email'];
    $password = $_POST['password']; 

     $contact=$_POST['contact'];
    $status=1;

            $save=mysqli_query($con,"INSERT INTO adminlogin (img,username,email,password,contact,status) VALUES ('$img','$username','$email','$password','$contact','$status')");
          


           ?>
                <script>
                alert('Successfully Inserted ...');
                window.location.href='user.php';
                </script>
                <?php

                             
    }
?>
  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">User Name</label>
								<div class="col-sm-6">
									<input type="text" name="username" class="form-control" id="" placeholder="Enter User Name" required="">
								</div>
							</div>

							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">User Profile </label>
								<div class="col-sm-6">
									<input type="file" id="" name="image" required="">
								<p class="help-block">Image should be 80 x 80 in pixels</p>
								</div>

								</div>

	<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Contact  </label>
								<div class="col-sm-6">
									<input type="text" name="contact" class="form-control" id="" placeholder="Enter Contact" required="">
								</div>

								</div>
							<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Email Id</label>
								<div class="col-sm-6">
									<input type="text" name="email" class="form-control" id="" placeholder="Enter Email Id" required="">
								</div>
							</div>

						<div class="form-group">
								<label for="inp-type-1" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-6">
									<input type="text" name="password" class="form-control" id="" placeholder="Enter Password" required="">
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





			<div class="col-xs-12">
				<div class="box-content">
					<h4 class="box-title">View User</h4>
				
					<!-- /.dropdown js__dropdown -->
					<table id="example" class="table table-striped table-bordered display" style="width:100%">
						<thead>
							<tr>
								<th>Id</th>
							
								<th>Image</th>
									<th>User Name</th>
									<th>Contact</th>
									<th>Email Id</th>
									<th>Password</th>
									<th>Status</th>
								<th>Action</th>
							
							</tr>
						</thead>
					
     <tbody>



<?php
include "p.php";
                                         
include "db.php";
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = $con->query("DELETE FROM adminlogin WHERE id=".$_GET['del']);
}
?>

 <?php $sql=$db->query("Select * from adminlogin");
 $tmpCount = 1;
            foreach ($sql as $key => $user) :
 ?>
<tr>
 			<td><?php echo $tmpCount++ ?> </td>
            <td> <img width="35px" src="images/<?php echo $user['img']; ?>"></td>
            <td><?php echo $user['username']; ?></td>
            <td><?php echo $user['contact']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['password']; ?></td>
                         
     <td><span data="<?php echo $user['id'];?>" class="status_checks btn-sm <?php echo ($user['status'])? 'btn-success' : 'btn-danger'?>"><?php echo ($user['status'])? 'Active' : 'Inactive'?></span></td>
 <td> 

 	<?php echo '<a href="useredit.php?edit_id='.$user['id'].'">
   <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
  </a>

  <a class="delete" href="?del='.$user['id'].'"> 
  <button type="button" class="btn btn-danger btn-xs" ><i class="fa fa-trash-o"></i> </button>
   </a>


       
    </td> 

'; ?>

        </tr>
       <?php endforeach; ?>
	 </tbody>



					</table>
				</div>
				<!-- /.box-content -->
			</div>


	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	
	

<!-- ACTIVE AND INACTIVE KA CODE -->

<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
$(document).on('click','.status_checks',function(){
var status = ($(this).hasClass("btn-success")) ? '0' : '1';
var msg = (status=='0')? 'Deactivate' : 'Activate';
if(confirm("Are you sure to "+ msg)){
  var current_element = $(this);
  url = "userajax.php";
  $.ajax({
  type:"POST",
  url: url,
  data: {id:$(current_element).attr('data'),status:status},
  success: function(data)
    {   
      location.reload();
    }
  });
  }      
});
</script>

     <!-- ACTIVE AND INACTIVE KA CODE -->       
<?php include "allscripts.php"; ?>
