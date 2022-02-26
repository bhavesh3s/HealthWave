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
                $("a.btn").click(function(e) {
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
                                <h4 class="box-title">Add Testimonials</h4>
                              
                                <div class="card-content">


     <?php
include('db.php');
if(isset($_POST['savee']))
{
            
      
          $name=$_POST['name'];
     
          $message=$_POST['message'];
          $client=$_POST['client'];

          $save=mysqli_query($con,"INSERT INTO testimonials (name,message,client) VALUES ('$name','$message','$client')");

   ?>
                <script>
                alert('Successfully Inserted');
                window.location.href='testimonials.php';
                </script>
                <?php

                   
    }
?>
                                  
                                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">

                                              
                                                
                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Customer Name</label>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" id="" placeholder="Enter Customer Name" required="">
                                </div>
                            </div>

    
                    
    



                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Message</label>
                                <div class="col-sm-6">
                                   <textarea type="text" name="message" class="form-control" id="" placeholder="Enter Message" required=""></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inp-type-1" class="col-sm-3 control-label">Client Type</label>
                                <div class="col-sm-6">
                                    <input type="text" name="client" class="form-control" id="" placeholder="Enter Client Type" required="">
                                </div>
                            </div>

    
                    
    

                                                  

                                                <div class="form-group margin-bottom-0">
                                                    <label for="inp-type-5" class="col-sm-3 control-label"></label>

                                                    <div class="col-sm-6">
                                                        <input class="btn btn-dark btn-sm waves-effect waves-light" type="submit" name="savee" value="Submit" />

                                                    </div>
                                                </div>

                                            </form>
                                </div>
                               
                            </div>
                           
                        </div> 
                        <div class="col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title">testimonials</h4>

                                <!-- /.dropdown js__dropdown -->
                                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>

                                            <th>Name</th>
                                             <th>Message</th>
                                             <th>client</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>

                                    <?php include('db.php');
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = mysqli_query($con,"DELETE FROM testimonials WHERE id=".$_GET['del']);

 ?>
                                        <script>
                                            alert('Successfully Deleted ...');
                                            window.location.href = 'testimonials.php';
                                        </script>
                                        <?php

}
/* code for data delete */

$result = mysqli_query($con,"SELECT * FROM testimonials"); 
 $tmpCount = 1;
while($row = mysqli_fetch_array($result))
{

echo '

                        <tbody>
                            <tr>
                                 ';?>
                                            <td>
                                                <?php echo $tmpCount++ ?>
                                            </td>
                                            <?php echo '
                                <td>'.$row['name'].'</td>
                                <td>'.$row['message'].'</td>
                                <td>'.$row['client'].'</td>

                                  <td> 
<a href="testimonialsedit.php?edit_id='.$row['id'].'">
   <button type="button" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
  </a>   <a class="btn btn-danger btn-xs waves-effect waves-light" href="?del='.$row['id'].'"> <i class="fa fa-trash-o"></i></a></td>
</td>

                            </tr>

                        </tbody>

';
}
?>

                                </table>
                            </div>
                            <!-- /.box-content -->
                        </div>

                    </div>
                    <!-- /.main-content -->
                </div>
                <!--/#wrapper -->

                <?php include "allscripts.php"; ?> 















