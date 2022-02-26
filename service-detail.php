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
                        <h1 class="page-title">Service Details</h1>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Service Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="service-details">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="service-sidebar">
                            <div class="single-widget search-widget">
                                <h3>Search Here</h3>
                                <form action="#">
                                    <input type="text" placeholder="Search Here...">
                                    <button type="submit"><i class="lni lni-search-alt"></i></button>
                                </form>
                            </div>
                            <div class="single-widget service-category">
                                <h3>Service Category</h3>
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)">
                                            All Services <i class="lni lni-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Cardiyiology <i class="lni lni-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Urology <i class="lni lni-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Neurology <i class="lni lni-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Gastrology <i class="lni lni-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Dentist <i class="lni lni-arrow-right"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            Orthopedic <i class="lni lni-arrow-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="single-widget address">
                                <h3>Department Address</h3>
                                <ul>
                                    <li><i class="lni lni-map-marker"></i>3909 Witmer Rd, Niagara Falls, NY 14305, United States
                                    </li>
                                    <li><i class="lni lni-phone"></i>
                                        Coll Us Now!
                                        <a href="tel:123-456-789">Tel:123-456-789</a>
                                    </li>
                                    <li><i class="lni lni-envelope"></i>
                                        Do you have a Question?
                                      <a href="mailto:HealthWave@gmail.com">HealthWave@gmail.com</a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php 
                                             include "admin/db.php";

                                             $id = $_GET['q'];
                                             $result = mysqli_query($con,"SELECT * FROM services where id = $id");  
                                             while($row = mysqli_fetch_array($result))
                                             {echo '
                    <div class="col-lg-8 col-md-12 col-12">
                        <div class="details-content">
                            <div class="thumb">
                                <img src="admin/images/service/'.$row['img'].'" alt="#">
                            </div>
                            <h3 class="title">'.$row['title'].'</h3>
                            <p>'.$row['description'].'</p>
                           
                            <blockquote>
                                <div class="icon">
                                    <i class="lni lni-quotation"></i>
                                </div>
                                <h4>"'.$row['quote'].'"</h4>
                                <span>- '.$row['quoteby'].'</span>
                            </blockquote>
                            <!-- <h4 class="sub-title">Education to Become a Neurologist in the United States</h4>
                            <p>Many neurologists also have additional training or interest in one area of neurology,
                                such as stroke, epilepsy, neuromuscular, sleep medicine, pain management, or movement
                                disorders.</p> -->
                        </div>
                    </div>';} ?>
                </div>
            </div>
        </div>
    </div>


    <?php include "footer.php"?>
</body>


</html>