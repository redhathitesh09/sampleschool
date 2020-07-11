
<?php
$error_message = "";
if(isset($_POST['contact'])) {
 
    
    $email_to = "redhathitesh09@gmail.com";
    $email_subject = "Contact Form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['subject']) ||
      !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
     
 
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 
    $subject = $_POST['subject'];
    $message = $_POST['message']; 

 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }

 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
    
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
header('location:contact.php');
?>



 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="#">
<meta name="description" content="#">
<title>MDSD High School </title>

<!-- Stylesheets -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<!-- page wrapper -->
<body class="body_wrapper">


    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->



    <!-- main header area -->
    <header class="main-header">

        <!-- header upper -->
        <div class="header-upper">
            <div class="container">
                <ul class="top-left">
                    <li><i class="fa fa-phone"></i>Call:  123 4561 5523 </li>
                    <li><i class="fa fa-envelope"></i>Email:  info@MPSDHighschool.com</li>
                </ul>
                <div class="top-right">
                    <div class="search-box-area">
                        <div class="search-toggle"><i class="fa fa-search"></i></div>
                        <div class="search-box">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="search" name="search" placeholder="Search Here" required>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="social-top">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                       <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>             
            </div>
        </div>
        <!-- end header upper -->

        <!-- header lower/fixed-header -->     
        <div class="header-lower">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="logo-box">
                            <a href="index-2.html"></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-bar">
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index-2.html">Home</a>
                                        </li>
                                          <li class="dropdown"><a href="#">About Us</a>
                                            <ul>
                                                <li><a href="who-we-are.html">Who We are</a></li>
                                                <li><a href="message.html">Principal's Message</a></li>
                                                <li><a href="vision-mission-objectives.html">Mission,Vision &amp; Objective</a></li>
                                          <li><a href="staff&members.html">Administrative Staff &amp; Faculty Members</a></li>
    <li><a href="resources&facilities.html">Resources &amp; Facilities</a></li>
                                                 <li><a href="history.html">History</a></li>
                                           
                                            </ul>
                                        </li>
                                         <li class="dropdown"><a href="#">Academics</a>
                                            <ul>
                                                <li><a href="academic-information.html">Academic Information</a></li>
                                                <li><a href="academic-departments.html">Academic Departments</a></li>
                                           <li><a href="admission-notices.html">Admission Notices</a></li>
                                                
                                                
                                            </ul>
                                        </li>
                                        <li><a href="news.html">News</a>
                                        </li>
                                          <li class="dropdown"><a href="javascript:void(0)">Events</a>
                                            <ul>
                                                  <li><a href="event.html">Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                
                                            </ul>
                                        </li>
                                       
                                        <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                                            <ul>
                                                <li><a href="our-blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header lower/fixed-header -->


        <!--sticky header-->
        <div class="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
                        <div class="logo-box">
                            <a href="index-2.html"></a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 col-xs-12">
                        <div class="menu-bar">
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="current"><a href="index-2.html">Home</a>
                                        </li>
                                          <li class="dropdown"><a href="#">About Us</a>
                                            <ul>
                                                <li><a href="who-we-are.html">Who We are</a></li>
                                                <li><a href="message.html">Principal's Message</a></li>
                                                <li><a href="vision-mission-objectives.html">Mission,Vision &amp; Objective</a></li>
                                          <li><a href="team.html">Administrative Staff &amp; Faculty Members</a></li>
                        
    <li><a href="resources&facilities.html">Resources &amp; Facilities</a></li>
                                                 <li><a href="history.html">History</a></li>
                                           
                                            </ul>
                                        </li>
                                          <li class="dropdown"><a href="javascript:void(0)">Academics</a>
                                            <ul>
                                                <li><a href="academic-information.html">Academic Information</a></li>
                                                <li><a href="academic-departments.html">Academic Departments</a></li>
                                           <li><a href="admission-notices.html">Admission Notices</a></li>
                                                
                                                
                                            </ul>
                                        </li>
                                        <li><a href="news.html">News</a>
                                        </li>
                                            <li class="dropdown"><a href="#">Events</a>
                                            <ul>
                                                  <li><a href="event.html">Events</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                                
                                            </ul>
                                        </li>
                                      
                                        <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                                            <ul>
                                                <li><a href="our-blog.html">Our Blog</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sticky header -->

    </header>
    <!-- end main header area -->



    <!-- page title -->
    <section class="page-title">
        <div class="container">
            <div class="content-box">
                <div class="title">Contact Us</div>
                <div class="bread-crumb">
                    <a href="index-2.html">Home &nbsp;<i class="fa fa-angle-right"></i></a> &nbsp;<span>Contact Us</span> 
                </div>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- contact section -->
    <section class="contact-section contact-page sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 contact-column">
                    <div class="contact-form-area">
                        <!-- <div id="messages" class="hide" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <div id="messages_content"></div>
            </div>-->
                        <div class="contact-title">Get in Touch</div>
    <form id="form" name="contact_form" class="default-form"  method="post" action="contact.php">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="name" value="" placeholder="Name" required="">
                                </div>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input type="email" name="email" value="" placeholder="Email" required="">
                                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
<input type="number" name="phone" value="" placeholder="Phone" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
<input type="text" name="subject" value="" placeholder='Subject' required="">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
    <textarea placeholder="Message" name="message" required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn-one style-one radi" data-loading-text="Please wait..." name="contact">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-column">
                    <div class="contact-info">
                        <div class="single-info">
                            <div class="icon-box"><i class="flaticon-signs"></i></div>
                            <div class="title">Address Info</div>
                            <div class="text"><p>PO Pratapgarh 230302 xyz</p></div>
                        </div>
         

               <div class="single-info">
                            <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                            <div class="title">Phone</div>
                            <div class="text"><p>(+91) 9450185621 <br />(+91) 9582291465</p></div>
                        </div>
                        <div class="single-info">
                            <div class="icon-box"><i class="flaticon-note"></i></div>
                            <div class="title">Email</div>
                            <div class="text"><a href="#">info@MPSDhighschool.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->


    <!-- google map area -->
    <section class="map-section">
        <div class="google-map-area">
            <div 
                class="google-map" 
                id="contact-google-map" 
                data-map-lat="27.756776" 
                data-map-lng="85.349201" 
                data-icon-path="images/resources/map-marker.png" 
                data-map-title="Jamtali, Pratapgarh, India" 
                data-map-zoom="12" 
                data-markers='{
                    "marker-1": [27.756776, 85.349201, "<h4>Branch Office</h4><p>Hattigauda,Kathmandu</p>","images/resources/map-marker.png"]
                }'>

            </div>
        </div>
    </section>
    <!-- google map area end -->


    <!-- newsletter section -->
    <section class="newsletter-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 newsletter-column">
                    <div class="text">Sign up for Newsletter</div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 newsletter-column">
                    <div class="subscribe-form">
                        <form action="#">
                            <input type="email" placeholder="Enter your email">
                            <button class="btn-two">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsletter section end -->

    
    <!-- main-footer area -->
    <footer class="main-footer sec-pad">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="logo-wideget footer-wideget">
                            <div class="footer-logo"><a href="index-2.html"><figure><img src="images/footer/logo.png" alt=""></figure></a></div>
                            <div class="text">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin  Richard Latin professor at Hampden.</p>
                            </div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 col-xs-12 footer-column">
                        <div class="link-wideget footer-wideget">
                            <div class="footer-title"><h4>Quick Links</h4></div>
                            <ul class="list">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Notices</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">Admission</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 footer-column">
                        <div class="gallery-wideget footer-wideget">
                            <div class="footer-title"><h4>Our Gallery</h4></div>
                            <ul class="img-list">
                                <li><a href="gallery.html"><figure><img src="images/footer/1.jpg" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="images/footer/2.jpg" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="images/footer/3.jpg" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="images/footer/4.jpg" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="images/footer/5.jpg" alt=""></figure></a></li>
                                <li><a href="gallery.html"><figure><img src="images/footer/6.jpg" alt=""></figure></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-column">
                        <div class="tag-wideget footer-wideget">
                            <div class="footer-title"><h4>Popular Tags</h4></div>
                            <ul class="tag-list">
                                <li><a href="#">Charity</a></li>
                                <li><a href="#">ECA</a></li>
                                <li><a href="#">Donation</a></li>
                                <li><a href="#">Hostel</a></li>
                                <li><a href="#">Couses</a></li>
                                <li><a href="#">Canteen</a></li>
                                <li><a href="#">Computer labs</a></li>
                                <li><a href="#">Principal</a></li>
                                <li><a href="#">Holidays</a></li>
                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="container">
                <div class="copyright"><p>Copyright © <a href="#">MPSD</a> 2018. All Rights Reserved</p></div>
            </div>
        </div>
    </footer>
    <!-- main footer end -->



<!--End pagewrapper-->

   

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slider-active.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/isotope.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/masterslider.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/html5lightbox/html5lightbox.js"></script>  
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jQuery.style.switcher.min.js"></script>
<script src="js/gmaps.js"></script>
<script src="js/map-helper.js"></script>

<script src="revolution/js/jquery.themepunch.tools.min.js" type="text/javascript">
</script>
<script src="revolution/js/jquery.themepunch.revolution.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.actions.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js" type="text/javascript">
</script>
<script src="revolution/js/extensions/revolution.extension.video.min.js" type="text/javascript">
</script>

<script src="js/script.js"></script>

<!--Alert box after successful form submission-->
<!--<script>
            $('#form').submit(function(e) {
                $('#messages').removeClass('hide').addClass('alert alert-success alert-dismissible').slideDown().show();
                $('#messages_content').html('<h5>Thanks for filling out the form</h5>');
                $('#modal').modal('show');
                e.preventDefault();
            });
        </script>-->

        <!-- Clearing form fields after submission -->
        <!--<script >
            
            function clearField() {
   document.forms["contact_form"].reset();
}

        </script>-->

<!-- End of .page_wrapper -->
</body>


</html>
