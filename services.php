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
                        <h1 class="page-title">Services</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h3>Services</h3>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Services Provided By HealthWave</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                            Ipsum available, but the majority have suffered alteration in some form.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="services-content">
                        <div class="row">

                             <?php 
                                  include "admin/db.php";
                                  $result = mysqli_query($con,"SELECT * FROM services"); 
                                  $tmpCount = 1;
                                  while($row = mysqli_fetch_array($result))
                                  {echo '

                            <div class="col-lg-4 col-md-6 col-12 custom-padding-right">
                            
                                <div class="single-list custom-border-right custom-border-bottom wow fadeInUp"
                                    data-wow-delay=".2s">
                                    <img class="shape1" src="assets/images/service/shape1.svg" alt="#">
                                    <img class="shape2" src="assets/images/service/shape2.svg" alt="#">
                                    <i class="lni lni-ambulance"></i>
                                    <h4><a href="service-detail.php?q='.$row['id'].'">'.$row['title'].'</a></h4>
                                    <p>'.substr($row['description'],0,200).'...</p>
                                    
                                  
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



