<?php
include_once('hms/include/config.php');
if (isset($_POST['submit'])) {
    $name = $_POST['fullname'];
    $email = $_POST['emailid'];
    $mobileno = $_POST['mobileno'];
    $dscrption = $_POST['description'];

    // Prepare an insert statement
    $stmt = $con->prepare("INSERT INTO tblcontactus (fullname, email, contactno, message) VALUES (?, ?, ?, ?)");

    // Bind variables to the prepared statement as parameters
    $stmt->bind_param("ssss", $name, $email, $mobileno, $dscrption);

    // Attempt to execute the prepared statement
    if ($stmt->execute()) {
        echo "<script>alert('Your information successfully submitted');</script>";
        echo "<script>window.location.href ='index.php'</script>";
    } else {
        echo "ERROR: Could not execute query: $stmt. " . $con->error;
    }

    // Close statement
    $stmt->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Hospital management System </title>

    <link rel="shortcut icon" href="assets/images/fav.jpg">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>

    <!--  Header--->

    <header id="menu-jk">

        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div>

                    </div>
                    <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000; font-size:42px; margin-top: 1% ;">MediHelp
                        <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-flex nav-item justify-content-center">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="about.php">About Us</a></li>
                           
                            
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                        <a class="btn btn-danger" href="hms/user-login.php"> Add Appointment</a>
                    </div>
                </div>

            </div>
        </div>
    </header>


    <!--   Logins  -->

    <!--  Slider --->




    <section id="logins" class="our-blog container-fluid">


        <div class="container">
            
            <div class="col-sm-12 blog-cont">
                <div class="row no-margin">
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/patient.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Patient</h6>
                                <a href="hms/user-login.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Log In</button>
                                </a>
                                <a href="hms/registration.php" target="_blank">
                                    <button class="btn btn-success btn-sm">Register</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/doctor.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Doctors login</h6>
                                <a href="hms/doctor" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 blog-smk">
                        <div class="blog-single">

                            <img src="assets/images/admin.jpg" alt="">

                            <div class="blog-single-det">
                                <h6>Admin Login</h6>

                                <a href="hms/admin" target="_blank">
                                    <button class="btn btn-success btn-sm">Click Here</button>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>



    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           
            <div class="carousel-item active">
                <img class="d-block w-100" src="assets/images/slider/himage.jpg" alt="Third slide">
               
                <div class="carousel-caption vdg-cur d-none d-md-block">
                    <h5 class="animated bounceInDown">Wellcome to MediHelp!</h5>
                    <p><b>MediHelp</b> is the most accredited hospital in the Sri Lankan healthcare sector. Since 2002,
                        Lanka Hospitals has revolutionized the healthcare industry through infrastructure development and
                        advancement of products and services,
                        with a view to deliver healthcare that is on par with global medical standards.</p>



                </div>

            </div>

        </div>
   
    </div>


    </div>











    <!--  Gallery  -->
    <div id="gallery" class="gallery">
        <div class="container">
            <div class="inner-title">

                <h2>Doctors</h2>
                <p>We have specialities to your better treatments</p>
            </div>
            <div class="row">


                <div class="gallery-filter d-none d-sm-block">

                    <button class="btn btn-default filter-button" data-filter="hdpe">Dental</button>
                    <button class="btn btn-default filter-button" data-filter="sprinkle">Cardiology</button>
                    <button class="btn btn-default filter-button" data-filter="spray"> Neurology</button>
                    <button class="btn btn-default filter-button" data-filter="irrigation">Ophthalmology</button>
                </div>
                <br />



                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="assets/images/gallery/Doctor2.jpg" class="img-responsive">
                    <h4>Dr Kamala Wirasingha - Dental(MBBS)</h4>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="assets/images/gallery/Doctor4.jpg" class="img-responsive">
                    <h4>Dr S.Rajapaksha  - Cardiologyist(MBBS) </h4>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="assets/images/gallery/Doctor5.jpg" class="img-responsive">
                    <h4>Dr Milinda Siriwardhana - Dental(MBBS,Phd) </h4>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="assets/images/gallery/Doctor6.jpg" class="img-responsive">
                    <h4>Dr A.S.D Silva - Ophthalmology(MBBS) </h4>
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="assets/images/gallery/Doctor7.jpg" class="img-responsive">
                    <h4>Dr Chandara Kumara- Neurology(MSSE)</h4>
                </div>



                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="assets/images/gallery/Doctor8.jpg" class="img-responsive">
                    <h4>Dr R.Wikramasigha - Neurology(MSSE) </h4>
                </div>

            </div>
        </div>


    </div>
    <!--Gallery End-->


    <!--  Contact -->

    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">

            <div class="col-sm-12 cop-ck">
                <form method="post">
                    <h2>Contact Form</h2>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="text" name="emailid" placeholder="Enter Email Address" class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required></div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Message:</label></div>
                        <div class="col-sm-8">
                            <textarea rows="5" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                            <button class="btn btn-success btn-sm" type="submit" name="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>





    <!-- Footer -->


    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <h2>Useful Links</h2>
                    <ul class="list-unstyled link-list">
                        <li><a ui-sref="about" href="#about">About us</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="portfolio" href="#services">Services</a><i class="fa fa-angle-right"></i></li>
                        
                        <li><a ui-sref="gallery" href="#gallery">Gallery</a><i class="fa fa-angle-right"></i></li>
                        <li><a ui-sref="contact" href="#contact">Contact us</a><i class="fa fa-angle-right"></i></li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        <h6>No/132/N</h6>
                        <h6>Galle road,panadura</h6>
                        <h5>Sri Lanka</h5>
                        <h6>Emali: MediHelp@srilanka.ac.lk</h6>
                        <h6>Call Us: 038-2254781/077-4856985</h6>
                    </address>







                </div>
            </div>
        </div>


    </footer>
    

</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-nav/js/jquery.easing.min.js"></script>
<script src="assets/plugins/scroll-nav/js/scrolling-nav.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>

<script src="assets/js/script.js"></script>



</html>