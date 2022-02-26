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

<div class="col-xs-12">
                            <div class="box-content">
                                <h4 class="box-title">testimonials</h4>

                                <!-- /.dropdown js__dropdown -->
                                <table id="example" class="table table-striped table-bordered display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>

                                            <th>Doctor Name</th>
                                            <th>Patient Name</th>
                                            <th>Specilization</th>
                                            <th>Consultancy Fees</th>
                                            <th>Appointment Date/Time</th>
                                            <th>Appointment Creation Date</th>
                                            <th>Current Status</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>

                                    <?php include('db.php');
/* code for data delete */
if(isset($_GET['del']))
{
    $SQL = mysqli_query($con,"DELETE FROM appointment WHERE id=".$_GET['del']);

 ?>
                                        <script>
                                            alert('Successfully Deleted ...');
                                            window.location.href = 'appointment.php';
                                        </script>
                                        <?php

}
/* code for data delete */

$result = mysqli_query($con,"select doctor.doctorName as docname,users.fullName as pname,appointment.*  from appointment join doctor on doctor.id=appointment.doctorId join users on users.id=appointment.userId "); 
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
                                <td>'.$row['docname'].'</td>
                                <td>'.$row['pname'].'</td>
                                <td>'.$row['doctorSpecialization'].'</td>
                                <td>'.$row['consultancyFees'].'</td>
                                <td>'.$row['appointmentDate'] / $row['appointmentTime'].'</td>
                                <td><'.$row['postingDate'].'></td>
                                <td>
<?php if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
{
    echo "Active";
}
if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
{
    echo "Cancel by Patient";
}

if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
{
    echo "Cancel by Doctor";
}



                                                ?></td>


                                  <td> 


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