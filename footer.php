<footer class="footer overlay">

        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="cta">
                            <h3>Need Help?</h3>
                            <p>Please feel free to contact our friendly reception staff with any medical enquiry, or
                                call <a href="tel:123-456-789">123-456-789</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="form">
                            <h3>Subscribe Newsletter</h3>
                            <form action="#" method="get" target="_blank" class="newsletter-form">
                                <input name="EMAIL" placeholder="Your email address" type="email">
                                <div class="button">
                                   <button class="btn" type="button">
                                        Subscribe<span class="dir-part"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-about">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="assets/images/logo/logo.png" alt="#">
                                </a>
                            </div>
                            <p>There’s nothing in this story to make us think he was dreaming about riches.</p>
                            
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer f-link">
                            <h3>Useful Links</h3>
                            <div class="row">
                                <!--  -->
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                         <li><a href="user/book-appointment.php">Book-Appointment</a></li>
                                        <li><a href="about-us.php">About-us</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="doctors.php">Doctors</a></li>
                                        <li><a href="about-us.php">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer opening-hours">
                            <h3>Opening Hours</h3>
                            <ul>
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
                    <div class="col-lg-3 col-md-6 col-12">

                        <div class="single-footer last f-contact">
                            <h3>Contact</h3>
                            <ul>
                                <li>
                                    <i class="lni lni-map-marker"></i>  3909 Witmer Rd, Niagara Falls, NY 14305, United States
                                </li>
                                <li>
                                    <i class="lni lni-phone"></i><a class="color" href="tel:123-456-789">Tel:123-456-789</a> 
                                </li>
                                <li>
                                    <i class="lni lni-envelope"></i> Mail. <a href="mailto:HealthWave@gmail.com">HealthWave@gmail.com</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>


       

    </footer>


    <a href="#" class="scroll-top">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!--bootstrap js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--Wow js -->
    <script src="assets/js/wow.min.js"></script>
    <!--Tiny js -->
    <script src="assets/js/tiny-slider.js"></script>
    <!-- Glightbox js -->
    <script src="assets/js/glightbox.min.js"></script>
    <!-- Count js -->
    <script src="assets/js/count-up.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="assets/js/imagesloaded.min.js"></script>
    <!-- Isotope js -->
    <script src="assets/js/isotope.min.js"></script>
    <!-- Main js -->
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        //======== Hero Slider
        var slider = new tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: [
                '<i class="lni lni-chevron-left"></i>',
                '<i class="lni lni-chevron-right"></i>'
            ],
            responsive: {
                1200: {
                    items: 1,
                },
                992: {
                    items: 1,
                },
                0: {
                    items: 1,
                }

            }
        });
        //========= testimonial 
        tns({
            container: '.testimonial-slider',
            items: 3,
            slideBy: 'page',
            autoplay: false,
            mouseDrag: true,
            gutter: 0,
            nav: true,
            controls: false,
            controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                992: {
                    items: 2,
                },
                1170: {
                    items: 3,
                }
            }
        });

        //====== counter up 
        var cu = new counterUp({
            start: 0,
            duration: 2000,
            intvalues: true,
            interval: 100,
            append: " ",
        });
        cu.start();
        //========= glightbox
        GLightbox({
            'href': 'assets/images/video/video.mp4',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
        //============== isotope masonry js with imagesloaded
        imagesLoaded('#container', function () {
            var elem = document.querySelector('.grid');
            var iso = new Isotope(elem, {
                // options
                itemSelector: '.grid-item',
                masonry: {
                    // use outer width of grid-sizer for columnWidth
                    columnWidth: '.grid-item'
                }
            });

            let filterButtons = document.querySelectorAll('.portfolio-btn-wrapper button');
            filterButtons.forEach(e =>
                e.addEventListener('click', () => {

                    let filterValue = event.target.getAttribute('data-filter');
                    iso.arrange({
                        filter: filterValue
                    });
                })
            );
        });
    </script>
    <script defer src="../../../static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"6918d1c7cd9a0df1","version":"2021.8.1","r":1,"token":"93dd3b16eaea413cbf84c7c6b5a1817a","si":10}'></script>
        