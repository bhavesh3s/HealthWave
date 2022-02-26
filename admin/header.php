<div class="main-menu">
    <header class="header">
        <a href="index.php" class="logo">GK Marine</a>
        <button type="button" class="button-close fa fa-times js__menu_close"></button>
        <div class="user">
            <a href="#" class="avatar"><img src="images/user.png" alt=""><span class="status online"></span></a>
            <h5 class="name"><a href="profile.php"><?php echo $_SESSION['username']; ?>!</a></h5>
            <h5 class="position">Administrator</h5>
            
            <div class="control-wrap js__drop_down">
                <i class="fa fa-caret-down js__drop_down_button"></i>
                <div class="control-list">
                    <div class="control-item"><a href="user.php"><i class="fa fa-user"></i> Profile</a></div>

                    <div class="control-item"><a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a></div>
                </div>
            </div>      
        </div>       
    </header>
   
    <div class="content">

        <div class="navigation">
            <h5 class="title">Navigation</h5>
         
            <ul class="menu js__accordion">
                <li class="">
                    <a class="waves-effect" href="index.php"><i class="menu-icon fa fa-home"></i><span>Dashboard</span></a>
                </li>
                 <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-adn"></i><span>Doctors</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="doctoradd.php">Add Doctors</a></li>
                        <li><a href="doctorspecialization.php">Add Specialiazation</a></li>
                        <li><a href="doctorview.php">View Doctors</a></li>
                    </ul>                  
                </li>  

                 <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-adn"></i><span>Services</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="servicesadd.php">Add Services</a></li>
                        <li><a href="servicesview.php">View Services</a></li>
                    </ul>                  
                </li>  

  
              
                <li>
                    <a class="waves-effect parent-item js__control" href="#"><i class="menu-icon fa fa-table"></i><span>Other Pages</span><span class="menu-arrow fa fa-angle-down"></span></a>
                    <ul class="sub-menu js__content">
                        <li><a href="subscribe.php">Subscribe</a></li>
                        <li><a href="contactform.php">Contact Form Details</a></li>
                    </ul>
                </li>


                <!-- <li>
                    <a class="waves-effect" href="appointment.php"><i class="menu-icon fa fa-sliders"></i><span>Appointment</span></a>
                </li>  -->
                
 
                <li>
                    <a class="waves-effect" href="testimonials.php"><i class="menu-icon fa fa-sliders"></i><span>Testimonials</span></a>
                </li> 



             

            </ul>
     
           
        </div>
  
    </div>

</div>

<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title"></h1>
       
    </div>
 
    <div class="pull-right">     
        <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
        <a href="logout.php" class="ico-item fa fa-power-off"></a>
    </div>
</div>
