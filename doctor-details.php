<?php include "allcss.php" ?>

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
                        <h1 class="page-title">Doctor Details</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Doctor Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="doctor-details section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                           <?php 
                                             include "admin/db.php";

                                             $id = $_GET['q'];
                                             $result = mysqli_query($con,"SELECT * FROM doctor where id = $id");  
                                             while($row = mysqli_fetch_array($result))
                                             {echo '
                            <div class="col-lg-4 col-md-4 col-12">

                                <div class="image">
                                    <img src="admin/images/doctors/'.$row['img'].'" alt="#">
                                </div>


                                <div class="doctor-left-bar">

                                    <div class="single-bar">
                                        <h4>Specialty</h4>
                                        <p>'.$row['specilization'].'</p>
                                    </div>


                                   <!--  <div class="single-bar">
                                        <h4>Conditions</h4>
                                        <p>Cystic fibrosis (children)</p>
                                    </div> -->


                                   <!--  <div class="single-bar">
                                        <h4>Memberships</h4>
                                        <ul class="list">
                                            <li><a href="javascript:void(0)">British Cardiovascular Society</a></li>
                                            <li><a href="javascript:void(0)">European Society of Cardiology</a></li>
                                            <li><a href="javascript:void(0)">Fellow Royal Society of Medicine</a></li>
                                        </ul>
                                    </div> -->


                                    <div class="single-bar">
                                        <h4>Doctor Schedule</h4>
                                        <ul class="opening-hour">
                                            <li>
                                                <span class="day"><i class="lni lni-timer"></i> Mon - Tue</span>
                                                <span class="time">08:30 - 18:30</span>
                                            </li>
                                            <li>
                                                <span class="day"><i class="lni lni-timer"></i> Wed- Thu</span>
                                                <span class="time">08:30 - 18:30</span>
                                            </li>
                                            <li>
                                                <span class="day"><i class="lni lni-timer"></i> Friday</span>
                                                <span class="time">08:30 - 18:30</span>
                                            </li>
                                            <li>
                                                <span class="day"><i class="lni lni-timer"></i> Saturday</span>
                                                <span class="time">08:30 - 18:30</span>
                                            </li>
                                        </ul>
                                    </div>

                                </div>

                            </div>'; } ?>
                            <?php 
                                             include "admin/db.php";

                                             $id = $_GET['q'];
                                             $result = mysqli_query($con,"SELECT * FROM doctor where id = $id");  
                                             while($row = mysqli_fetch_array($result))
                                             {echo '
                            <div class="col-lg-8 col-md-8 col-12">

                                <div class="content">   
                                    <h3 class="name">'.$row['name'].'
                                        <span>Your Community Safety Net For Over '.$row['experience'].' Years.</span>
                                    </h3>
                                    <ul class="list-info">
                                        <li><span>Profession:</span> '.$row['profession'].'</li>
                                        <li><span>Experience:</span> '.$row['experience'].' Years</li>
                                        <li><span>Phone:</span> <a href="tel:'.$row['mobileno'].'">'.$row['mobileno'].'</a> </li>
                                        <li><span>Email:</span> <a class="" href="mailto:'.$row['email'].'" >'.$row['email'].'</a> 
                                        </li>
                                        <li><span>Address:</span> '.$row['address'].'</li>
                                    
                                    </ul>
                                    <h4>Biography</h4>
                                    <p>'.$row['bio'].' </p>
                                    <h4>Education</h4>
                                    <ul class="normal-list-info">
                                        <li>'.$row['education'].'</li>
                                        
                                    </ul>
                                    
                                    <h4>Awards & Honours</h4>
                                    <ul class="normal-list-info">
                                        <li>'.$row['awards'].'</li>
                                        
                                    </ul>
                                </div>

                            </div>'; } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php"?>
</body>

</html>