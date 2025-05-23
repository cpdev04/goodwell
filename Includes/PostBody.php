<?php
// Include the database connection
include("Includes/Connection.php");
date_default_timezone_set("Asia/Karachi");

// Check if the slug exists in the URL
if (isset($_GET['slug'])) {
    $PostSlug = ValidateFormData($_GET['slug']);
    // Fetch the Post ID using the slug
    $Query = "SELECT Post_ID FROM blog_post WHERE Post_Slug = '$PostSlug' LIMIT 1";
    $Result = $Connection->query($Query);

    if ($Result && $Result->num_rows > 0) {
        $Row = $Result->fetch_assoc();
        $PostID = $Row['Post_ID'];
    } else {
        echo "<p>Post not found for slug: $PostSlug</p>";
        header("Location: ../index.php");
        exit();
    }
} else {
    echo "<p>No slug provided.</p>";
    header("Location: ../index.php");
    exit();
}


// Update Post Stats
$Query = "SELECT * FROM post_visits WHERE Post_ID = '$PostID'";
$Result = $Connection->query($Query);

$Query1 = "SELECT * FROM blog_post WHERE Post_ID = '$PostID'";
$Result1 = $Connection->query($Query1);

if ($Result1->num_rows > 0) {
    while($row = $Result1->fetch_assoc()) {
        $PageTitle=$row['Page_Title'];
        $PostTitle=$row['Post_Title'];
      // Meta
        $MetaTitle=$row['MetaTitle'];
        $MetaDesc = $row['MetaDesc'];
        $MetaKey = $row['MetaKey'];
      //   Meta
    }
}

if ($Result && $Result->num_rows > 0) {
    $Query = "UPDATE post_visits SET Post_Visits = Post_Visits + 1 WHERE Post_ID = '$PostID'";
    $Connection->query($Query);
} else {
    $Query = "INSERT INTO post_visits(Post_ID, Post_Visits) VALUES($PostID, 1)";
    $Connection->query($Query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <title><?php echo htmlspecialchars_decode($PageTitle ); ?></title>
     <link href="../css/bootstrap.min.css" rel="stylesheet">
     <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
    <!-- meta -->
	<meta name="keywords" content="<?php echo $MetaKey?>">
    <meta name="description" content="<?php echo $MetaDesc?>">
    <meta name="title" content="<?php echo $MetaTitle?>">
    <!-- meta -->

	<link rel="icon" type="image/png" href="../images/favicon-32x32.png">

	<!--main file-->
	<link href="../css/medical-guide.css" rel="stylesheet" type="text/css">

	<!--Medical Guide Icons-->
	<link href="../fonts/medical-guide-icons.css" rel="stylesheet" type="text/css">

	<!-- Default Color-->
	<link href="../css/default-color.css" rel="stylesheet" id="color" type="text/css">

	<!--bootstrap-->
	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">

	<!--Dropmenu-->
	<link href="../css/dropmenu.css" rel="stylesheet" type="text/css">

	<!--Sticky Header-->
	<link href="../css/sticky-header.css" rel="stylesheet" type="text/css">

	<!--revolution-->
	<link href="../css/style.css" rel="stylesheet" type="text/css">
	<link href="../css/settings.css" rel="stylesheet" type="text/css">
	<link href="../css/extralayers.css" rel="stylesheet" type="text/css">

	<!--Accordion-->
	<link href="../css/accordion.css" rel="stylesheet" type="text/css">

	<!--tabs-->
	<link href="../css/tabs.css" rel="stylesheet" type="text/css">

	<!--Owl Carousel-->
	<link href="../css/owl.carousel.css" rel="stylesheet" type="text/css">

	<!--FancyBox-->
	<link rel="stylesheet" type="text/css" href="../css/jquery.fancybox.css">

	<!-- Mobile Menu -->
	<link rel="stylesheet" type="text/css" href="../css/jquery.mmenu.all.css" />
	<link rel="stylesheet" type="text/css" href="../css/demo.css" />

	<!--PreLoader-->
	<link href="../css/loader.css" rel="stylesheet" type="text/css">
	<!-- fontaswome  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	 <style>
        @import url('https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        
         .cust-font{
            font-family: 'Raleway', sans-serif;
        }
        
    </style>
    <link rel="stylesheet" href="../assets_blog/style.css">
</head>

<body>
<div id="wrap">    
    <!--Start Top Bar-->
 <div class="top-bar">
     <div class="container">
         <div class="row">

             <div class="col-md-5">
                 <span>best hospital in nagawara Bengaluru.</span>
             </div>

             <div class="col-md-7">
                 <div class="get-touch">

                     <ul>
                         <li><a href="tel:+91 1800 889 4318"><i class="icon-phone4"></i>1800 889 4318</a></li>
                         <li><a href="mailto:srisaihospital2006@gmail.com"><i
                                     class="icon-mail"></i>srisaihospital2006@gmail.com</a></li>
                     </ul>

                     <ul class="social-icons">
                         <li><a href="https://www.facebook.com/profile.php?id=61555921273141" class="fb"><i
                                     class="icon-euro"></i> </a></li>
                         <li><a href="https://www.instagram.com/sri_sai_hospital/" class="tw"><i
                                     class="fa fa-instagram"></i> </a></li>
                         <li><a href="https://www.linkedin.com/company/sri-sai-hospital-healthcare/about/?viewAsMember=true"
                                 class="gp"><i class="fa fa-linkedin"></i> </a></li>
                         <li><a href=" https://www.google.com/maps/place/SRI+SAI+HOSPITAL/@13.0370306,77.6238849,15z/data=!4m6!3m5!1s0x3bae176cb7096387:0xaa0e4ed7818054b7!8m2!3d13.0370306!4d77.6238849!16s%2Fg%2F1tv3m3n0?entry=ttu"
                                 class="gp"><i class="icon-caddieshoppingstreamline"></i> </a></li>
                         <li><a href="https://www.youtube.com/@SriSaiHospitals" class="tw"><i
                                 class="fa fa-youtube"></i> </a></li>
                     </ul>

                 </div>
             </div>

         </div>
     </div>
 </div>
 <!--Top Bar End-->


 <!--Start Header-->
 <header class="header">
     <div class="container">


         <div class="row">

             <div class="col-md-3">
                 <a href="../index.php" class="logo"><img src="../images/logo1.png" alt=""></a>
             </div>

             <div class="col-md-9">


                 <?php
                // Get the current file name without the directory path
                $current_page = basename($_SERVER['PHP_SELF']);
                ?>

                 <nav class="menu-2">
                     <ul class="nav wtf-menu">
                         <li class="<?php echo ($current_page == '../index.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="../index.php">Home</a>
                         </li>
                         <li class="<?php echo ($current_page == 'about-us.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="../about-us.php">About Us</a>
                         </li>
                         <li class="<?php echo ($current_page == 'services.php' || $current_page == 'orthopaedic.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="../services.php">Services</a>
                         </li>
                         <li class="<?php echo ($current_page == 'slimming_weight_loss.php' || $current_page == 'dermocosmetic.php' || $current_page == 'hair_loss_transplant.php' || $current_page == 'cosmetic_surgery.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="">Category</a>
                             <ul class="submenu">
                                <li><a href="../slimming_weight_loss.php">Slimming & Weight Loss</a></li>
                                <li><a href="../dermocosmetic.php">Dermocosmetic Services</a></li>
                                <li><a href="../hair_loss_transplant.php">Hair Loss & Transplant</a></li>
                                <li><a href="../cosmetic_surgery.php">Cosmetic Surgery</a></li>
                            </ul>
                         </li>
                         <li class="<?php echo ($current_page == 'gallery.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="../gallery.php">Gallery</a>
                         </li>
                         <li
                             class="<?php echo ($current_page == 'team-members.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="../team-members.php">Doctors</a>
                         </li>
                         <li
                             class="<?php echo ($current_page == 'contact-us.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="../contact-us.php">Contact Us</a>
                         </li>
                         <li
                             class="<?php echo ($current_page == 'blog.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="../blog.php">Blogs</a>
                         </li>
                         <li class="<?php echo ($current_page == 'Clinic.php') ? 'item-select parent' : 'parent'; ?>">
                             <a href="../Clinic.php">Clinic</a>
                         </li>
                     </ul>
                 </nav>


             </div>

         </div>


     </div>
 </header>
 <!--End Header-->


 <!-- Mobile Menu Start -->
 <div class="container">
     <div id="page">
         <header class="header">
             <a href="#menu"></a>

         </header>

         <nav id="menu">
             <ul>
                 <li class="select"><a href="../index.php">Home</a>
                 </li>
                 <li><a href="../about-us.php">About us</a>
                 </li>
                 <li><a href="../services.php">service</a>
                 </li>

                 <li><a href="../gallery.php">Gallery</a>
                 </li>

                 <li><a href="../team-members.php">Doctors</a>
                 </li>

                 <li><a href="../contact-us.php">Contact Us</a>
                 </li>
                 <li><a href="../blog.php">Blogs</a>
                 </li>
                 <li><a href="../Clinic.php">clinic</a>
                 </li>

             </ul>


         </nav>
     </div>
 </div>
 <!-- Mobile Menu End -->


 <div class="container">
     <div class="time-table-sec">
         <ul id="accordion2" class="accordion2">
             <li>
                 <ul class="submenu time-table">
                     <li class="tit">
                         <h5>Working Time</h5>
                     </li>
                     <li><span class="day">Monday - sunday</span> <span class="divider">-</span> <span
                             class="time">24HR</span></li>
                 </ul>
                 <div class="link"><img class="time-tab" src="../images/timetable-menu-orange.png" alt=""></div>

             </li>
         </ul>
     </div>
 </div>

    <!--Start Banner-->

		<div class="sub-banner">

<img class="banner-img" src="../images/Banner/galary.jpg" alt="">
<div class="detail">
   <div class="container">
      <div class="row">
         <div class="col-md-12">

            <div class="paging">
               <h2>Blog</h2>
               <ul>
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="../blog.php">Blog</a></li>
                  <li><a><?php  echo $PostTitle ?></a></li>
               </ul>
            </div>

         </div>
      </div>
   </div>
</div>

</div>

<!--End Banner-->

        <!-- start post-body -->
        <div class="w3-row">
            <div class="w3-container"><?php echo isset($CommentMessage) ? $CommentMessage : ""; ?></div>
            <div class="w3-col l8 s12">
                <!-- Display the post content -->
                <?php DisplayPost($PostID); ?>

                <!-- COMMENTS -->
                <div class="w3-margin">
                    <div class="w3-container">
                        <h4><b style="color:black; text-transform:none;">Comments</b></h4>
                        <hr>
                    </div>
                    <form method="post" action="" class="w3-container"
                        style="background-color:aliceblue;padding:30px 10px">
                        <div class="w3-row-padding">
                            <p class="w3-text-red"> <?php echo isset($NameError) ? $NameError : ""; ?></p>
                            <p class="w3-text-red"> <?php echo isset($CommentError) ? $CommentError : ""; ?></p>
                            <div class="w3-quarter">
                                <input name="Name" class="w3-input w3-round" type="text" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="w3-rest">
                                <textarea name="Comment" style="resize: none;" rows="1" class="w3-input w3-round"
                                    placeholder="Your Comment" required></textarea>
                            </div>
                            <input name="PostId" value="<?php echo $PostID ?>" type="hidden">
                            <div style="margin-left:10px;margin-top:20px">
                                <button style="background-color:#FF7C5B;color:white;padding:15px 40px" name="AddComment"
                                    type="submit" class="w3-button w3-white w3-border"><b>Comment</b></button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <?php DisplayComments($PostID); ?>
                </div>
                <!-- END COMMENTS -->
            </div>

            <!-- Sidebar -->
            <div class="w3-col l4">
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:black;text-transform: none;">Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <?php PopularPosts(); ?>
                    </ul>
                </div>
                <hr>
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4 style="color:black;text-transform: none;">Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><?php Tags(); ?></p>
                    </div>
                </div>
            </div>
            <!-- END Sidebar -->
        </div>
        <!-- end post-body -->


    </div><!-- /.page-wrapper -->
</body>
 <!-- Footer area start -->
 <!--Start Footer-->
<footer class="footer" id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="emergency">
                            <i class="icon-phone5"></i>
                            <span class="text">For emergency cases</span>
                            <a href="tel:+91 1800 889 4318"><span class="number">1800 889 4318</span></a>
                            <img src="images/emergency-divider.png" alt="">
                        </div>
                    </div>
                </div>


                <div class="main-footer">
                    <div class="row">

                        <div class="col-md-3">

                            <div class="useful-links">
                                <div class="title">
                                    <h5>ABOUT US</h5>
                                </div>

                                <div class="detail">
                                    <div class="signup-text">
                                        <i class=""></i>
                                        <span style="color: white;font-size:14px">Sri Sai Hospital, founded in 2006 by
                                            Dr. Shyamala Thyagaraj and D M Thyagaraj
                                            in Nagawara, has emerged as a beacon of hope, offering accessible,
                                            affordable,
                                            and high-quality healthcare with advanced medical technology.</span>
                                    </div>
                                </div>
                                <div class="">
                                    <h5>
                                        <p>&nbsp;</p>
                                    </h5>
                                </div>
                                <div class="">
                                    <img src="images/logofooter.png" style="width: 190px;" alt="">
                                </div>
                            </div>

                        </div>


                        <div class="col-md-3">

                            <div class="useful-links">
                                <div class="title">
                                    <h5>Medical guide</h5>
                                </div>

                                <div class="detail">
                                    <ul>
                                        <li><a href="../index.php">Home</a></li>
                                        <li><a href="../about-us.php">About Us</a></li>
                                        <li><a href="../services.php">Services</a></li>
                                        <li><a href="../gallery.php">Gallery</a></li>
                                        <li><a href="../team-members.php">Specilaties</a></li>
                                        <li><a href="../contact-us.php">Contact Us</a></li>
                                         <li><a href="../blog.php">blogs</a></li>

                                    </ul>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="get-touch">
                                <div class="title">
                                    <h5>GET IN TOUCH</h5>
                                </div>

                                <div class="detail">
                                    <div class="get-touch">


                                        <span class="text">For inquiries or appointments, contact Sri Sai Hospital
                                            today.</span>


                                        <ul>
                                            <li><a href="https://maps.app.goo.gl/p7etrEEZANdLQCV67"><i
                                                        class="icon-location"></i> <span>14th, Door no-978, 18th Cross,
                                                        main, Nagawara Main Rd, 5th Block, HBR Layout, Bengaluru,
                                                        Karnataka
                                                        560045</span></a></li>
                                            <li><a href="tel:+91 080 46883299"><i class="icon-phone4"></i> <span>080
                                                        46883299</span></a></li>
                                            <li><a href="mailto:srisaihospital2006@gmail.com"><i
                                                        class="icon-dollar"></i>
                                                    <span>srisaihospital2006@gmail.com</span></a></li>
                                        </ul>

                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="col-md-3">


                            <div class="title">
                                <h5>GET DIRECTION</h5>
                            </div>

                            <div class="detail">

                                <div class="tweets">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.9786550921194!2d77.62130997484257!3d13.037030587284336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae176cb7096387%3A0xaa0e4ed7818054b7!2sSRI%20SAI%20HOSPITAL!5e0!3m2!1sen!2sin!4v1707712674886!5m2!1sen!2sin"
                                        width="270" height="240" style="border:0;" allowfullscreen="" loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>

                            </div>



                        </div>

                    </div>

                </div>

            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">
                            <span class="copyrights">Copyright &copy; 2024 Sri Sai Hospital. All right reserved.</span>
                        </div>

                        <div class="col-md-6">
                            <div class="social-icons">
                                <a href="https://www.facebook.com/profile.php?id=61555921273141" class="fb"><i
                                        class="icon-euro"></i></a>
                                <a href=" https://www.google.com/maps/place/SRI+SAI+HOSPITAL/@13.0370306,77.6238849,15z/data=!4m6!3m5!1s0x3bae176cb7096387:0xaa0e4ed7818054b7!8m2!3d13.0370306!4d77.6238849!16s%2Fg%2F1tv3m3n0?entry=ttu" class="icon-caddieshoppingstreamline"></a>
                                <a href="https://www.instagram.com/sri_sai_hospital" class="gp"><i
                                        class="fa fa-instagram"></i></a>
                                <a href="https://www.linkedin.com/company/sri-sai-hospital-healthcare/about/?viewAsMember=true"
                                    class="vimeo"><i class="fa fa-linkedin"></i></a>
                                 <a href="https://www.youtube.com/@SriSaiHospitals" class="tw"><i
                                 class="fa fa-youtube"></i> </a></li>
                            </div>
                        </div>

                    </div>
                </div>

                <a class="back-to-top" href="#."></a>

            </div>

        </footer>
        <!--End Footer-->


        <a href="#0" class="cd-top"></a>

<script type="text/javascript" src="../js/jquery.js"></script>

<!-- SMOOTH SCROLL -->
<script type="text/javascript" src="../js/scroll-desktop.js"></script>
<script type="text/javascript" src="../js/scroll-desktop-smooth.js"></script>

<!-- START REVOLUTION SLIDER -->
<script type="text/javascript" src="../js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="../js/jquery.themepunch.tools.min.js"></script>


<!-- Date Picker and input hover -->
<script type="text/javascript" src="../js/classie.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.10.3.custom.js"></script>


<!-- Date Picker and input hover -->
<script type="text/javascript" src="../js/jquery.fancybox.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox-media.js"></script>


<!-- Welcome Tabs -->
<script type="text/javascript" src="../js/tabs.js"></script>


<!-- All Carousel -->
<script type="text/javascript" src="../js/owl.carousel.js"></script>

<!-- Mobile Menu -->
<script type="text/javascript" src="../js/jquery.mmenu.min.all.js"></script>

<!-- All Scripts -->
<script type="text/javascript" src="../js/custom.js"></script>

<script>
   <!-- Fancybox -->
   /*
             *  Simple image gallery. Uses default settings
             */

   $('.fancybox').fancybox();

   /*
    *  Different effects
    */

   $(document).ready(function () {
      $('.fancybox-media').fancybox({
         openEffect: 'none',
         closeEffect: 'none',
         helpers: {
            media: {}
         }
      });
   });
</script>
</body>

</html>