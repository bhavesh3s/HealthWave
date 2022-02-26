<?php 
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>


<?php include "allcss.php" ?>

<body>

<?php include "header.php" ?>



<!-- /#message-popup -->
<div id="wrapper">
	<div class="main-content">
		 
			<!-- /.col-lg-3 col-md-6 col-xs-12 -->
			<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Total Doctors </h4>
					
					
					<div class="content widget-stat-chart">
					

							   <?php
include"db.php";

$result = mysqli_query($con,"select count(1) FROM doctor");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'   	<div class="c100 p76 small blue js__circle">
							<span>'. $total.'</span>
							<div class="slice">
								<div class="bar"></div>
								<div class="fill"></div>
							</div>
						</div>
						
						<div class="right-content">
	<h2 class="counter"> '. $total.'</h2>
                            
      '
?>
	
				
							
							<!-- /.counter -->
							<p class="text">No of Doctors</p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>
			<!-- second section users start -->

				<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Total Patient </h4>
					
					
					<div class="content widget-stat-chart">
					

							   <?php
include"db.php";

$result = mysqli_query($con,"select count(1) FROM doctor");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'   	<div class="c100 p76 small blue js__circle">
							<span>'. $total.'</span>
							<div class="slice">
								<div class="bar"></div>
								<div class="fill"></div>
							</div>
						</div>
						
						<div class="right-content">
	<h2 class="counter"> '. $total.'</h2>
                            
      '
?>
	
				
							
							<!-- /.counter -->
							<p class="text">No of Patient</p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>		

			<!-- second section users end -->

	<!-- No of appointment booked start -->

					<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Total Appointments </h4>
					
					
					<div class="content widget-stat-chart">
					

							   <?php
include"db.php";

$result = mysqli_query($con,"select count(1) FROM appointment");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'   	<div class="c100 p76 small blue js__circle">
							<span>'. $total.'</span>
							<div class="slice">
								<div class="bar"></div>
								<div class="fill"></div>
							</div>
						</div>
						
						<div class="right-content">
	<h2 class="counter"> '. $total.'</h2>
                            
      '
?>
	
				
							
							<!-- /.counter -->
							<p class="text">No of Appointments</p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>	

	<!-- No of appointment booked end -->


	<!-- Total No services section start -->

					<div class="col-lg-3 col-md-6 col-xs-12">
				<div class="box-content">
					<h4 class="box-title">Total Services </h4>
					
					
					<div class="content widget-stat-chart">
					

							   <?php
include"db.php";

$result = mysqli_query($con,"select count(1) FROM services");
$row = mysqli_fetch_array($result);

$total = $row[0];

       echo'   	<div class="c100 p76 small blue js__circle">
							<span>'. $total.'</span>
							<div class="slice">
								<div class="bar"></div>
								<div class="fill"></div>
							</div>
						</div>
						
						<div class="right-content">
	<h2 class="counter"> '. $total.'</h2>
                            
      '
?>
	
				
							
							<!-- /.counter -->
							<p class="text">No of Services</p>
							<!-- /.text -->
						</div>
						<!-- /.right-content -->
					</div>
					<!-- /.content -->
				</div>
				<!-- /.box-content -->
			</div>	

	<!-- Total no of service section end -->
			
					<!-- /.content widget-stat -->
				</div>
				<!-- /.box-content -->
			</div>
			


 
						





		</div>
		
	</div>
	<!-- /.main-content -->
</div><!--/#wrapper -->




<?php include "allscripts.php"; ?>
