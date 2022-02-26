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
                        <h1 class="page-title">Doctors</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="doctors section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Doctors</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Our Outstanding Team Is Active To Help You!</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                 <?php 
                                  include "admin/db.php";
                                  $result = mysqli_query($con,"SELECT * FROM doctor"); 
                                  $tmpCount = 1;
                                  while($row = mysqli_fetch_array($result))
                                  {echo '
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-doctor wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <a href="doctor-details.php?q='.$row['id'].'"><img src="admin/images/doctors/'.$row['img'].'" alt="#">
                            <!-- <ul class="social">
                                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                                <li><a href="javascript:void(0)"><i class="lni lni-youtube"></i></a></li>
                            </ul> -->
                        </div>
                        <div class="content">
                            <h5><a href="doctor-details.php?q='.$row['id'].'">'.$row['profession'].'</a></h5>
                            <h3><a href="doctor-details.php?q='.$row['id'].'">'.$row['name'].'</a></h3>
                        </div>
                    </div>

                </div>'; } ?>
                
                
                
               


                
            </div>
        </div>
    </section>


   <?php include "footer.php"?>
</body>


