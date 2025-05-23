<?php
include("code1.php");
include("Includes/Functions_Admin.php");
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="10800" />
    <meta name="description" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="https://ikontel.com/assets/images/ikontel-logo.png">
    <title><?php echo (defined('TITLE')) ? TITLE . " &lsaquo;" : "" ?> Admin Panel &mdash; My Own Blog</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"
        rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">

</head>

<body>
<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav slimscrollsidebar">
        <div class="sidebar-head">
            <h3><a class="logo" href="index.php">
                    <!-- Logo icon image, you can use font-icon also --><b>
                        <span class="hidden-xs">
                            <!--This is light logo text--><img src="https://ikontel.com/assets/images/ikontel-logo.png"
                                alt="home" class="light-logo" width="70%">
                        </span>
                    </b>
                </a>
        </div>
        <ul class="nav" id="side-menu">
            <li style="padding: 70px 0 0;">
                <a href="index.php" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                        aria-hidden="true"></i>Dashboard</a>
            </li>
            <li>
                <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw"
                        aria-hidden="true"></i>Profile</a>
            </li>
            <li>
                <a href="users.php" class="waves-effect"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Users</a>
            </li>
            <li>
                <a href="post.php" class="waves-effect"><i class="fa fa-list-alt fa-fw" aria-hidden="true"></i>Post</a>
            </li>
            <li>
                <a href="comments.php" class="waves-effect"><i class="fa fa-comments fa-fw"
                        aria-hidden="true"></i>Comments</a>
            </li>
            <li>
                <a href="tags.php" class="waves-effect"><i class="fa fa-tags fa-fw" aria-hidden="true"></i>Tags</a>
            </li>
            <li>
                <a href="pageSeo.php" class="waves-effect"><i class="fa fa-rocket" aria-hidden="true"></i>
                    Page SEO</a>
            </li>

        </ul>
        <div class="center p-20">
            <a href="../../" target="_blank" class="btn btn-danger btn-block waves-effect waves-light">Vist
                site</a>
        </div>
    </div>

</div>
<div id="page-wrapper">


    <div class="navbar-header">

        <ul class="nav navbar-top-links navbar-right pull-right">
            <li><form role="search" class="app-search hidden-sm hidden-xs m-r-10"><input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
            </li>

            <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="<?php echo GravatarImage(ValidateFormData($_COOKIE['LoggedInEmail'])); ?>" alt="User Image" width="36" class="img-circle"><b class="hidden-xs"><?php echo ValidateFormData(str_rot13($_COOKIE['LoggedInName'])); ?></b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="<?php echo GravatarImage(ValidateFormData($_COOKIE['LoggedInEmail'])); ?>" alt="user"></div>
                                    <div class="u-text">
                                        <h4><?php echo ValidateFormData(str_rot13($_COOKIE['LoggedInName'])); ?></h4>
                                        <p class="text-muted"><?php echo ValidateFormData($_COOKIE['LoggedInEmail']); ?></p><a href="profile.php" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="profile.php"><i class="ti-user"></i> My Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="?LogOut"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
        </ul>
        </b>
    </div>
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Page SEO</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <ol class="breadcrumb">
                    <li><a href="../Admin/">Dashboard</a></li>
                    <li class="active">Page SEO</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="col-md-12 white-box">
                    <?php echo $message; ?>
                    <h3 class="box-title"><i class="fa fa-rocket" aria-hidden="true"></i>
                        Page SEO</h3>

                    <form method="post">
                        <div class="form-group">
                            <div class="col-md-5">
                                <select
                                    style="width: 300px;text-align: center;background-color:#2F323E;color:white;padding:7px"
                                    name="pageSelect" class="form-select" onchange="this.form.submit()">
                                    <option value="">Select Page</option>
                                    <option value="index.php" <?php if ($page == "index.php") echo "selected"; ?>>
                                        Home
                                    </option>
                                    <option value="about-us.php" <?php if ($page == "about.php") echo "selected"; ?>>
                                        About
                                    </option>
                                    <option value="services.php" <?php if ($page == "services.php") echo "selected"; ?>>
                                        Service
                                    </option>
                                    <option value="team-members.php" <?php if ($page == "team-members.php") echo "selected"; ?>>
                                        Doctors
                                    </option>
                                    <option value="gallery.php" <?php if ($page == "gallery.php") echo "selected"; ?>>
                                        Gallery
                                    </option>
                                    <option value="contact-us.php" <?php if ($page == "contact-us.php") echo "selected"; ?>>
                                        Contact us
                                    </option>
                                    <option value="blog.php" <?php if ($page == "blog.php") echo "selected"; ?>>
                                        Blog
                                    </option>
                                    <option value="Tags.php" <?php if ($page == "Tags.php") echo "selected"; ?>>
                                        Tags
                                    </option>
                                    <option value="Clinic.php" <?php if ($page == "Clinic.php") echo "selected"; ?>>
                                        Clinic
                                    </option>
                                    <option value="slimming_weight_loss.php" <?php if ($page == "slimming_weight_loss.php") echo "selected"; ?>>
                                       slimming_weight_loss
                                    </option>
                                    <option value="dermocosmetic.php" <?php if ($page == "dermocosmetic.php") echo "selected"; ?>>
                                       dermocosmetic
                                    </option>
                                    <option value="hair_loss_transplant.php" <?php if ($page == "hair_loss_transplant.php") echo "selected"; ?>>
                                       hair_loss_transplant
                                    </option>
                                    <option value="cosmetic_surgery.php" <?php if ($page == "cosmetic_surgery.php") echo "selected"; ?>>
                                       cosmetic_surgery
                                    </option>
                                    <option value="gynaecology.php" <?php if ($page == "gynaecology.php") echo "selected"; ?>>
                                       gynaecology
                                    </option>
                                    <option value="orthopaedic.php" <?php if ($page == "orthopaedic.php") echo "selected"; ?>>
                                       orthopaedic
                                    </option>
                                    <option value="plastic-surgery.php" <?php if ($page == "plastic-surgery.php") echo "selected"; ?>>
                                       plastic-surgery</option>
                                      <option value="Dr-Shyamala-Thyagaraj.php" <?php if ($page == "Dr-Shyamala-Thyagaraj.php") echo "selected"; ?>>
                                       Dr-Shyamala-Thyagaraj</option>(

                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="white-box col-md-12">
                    <?php if (!empty($page)): ?>
                    <form method="post">
                        <input type="hidden" name="pageSelect" value="<?php echo htmlspecialchars($page); ?>">

                        <!-- page Title -->
                        <div class="form-group">
                            <label style="color:#0975B6" for="pageTitle">Page Title:</label>
                            <input name="pageTitle" id="pageTitle" type="text" class="form-control rounded"
                                placeholder="Page" value="<?php echo htmlspecialchars($page_title); ?>">
                        </div>

                        <!-- Meta Title -->
                        <div class="form-group">
                            <label style="color:#0975B6" for="MetaTitle">Meta Title:</label>
                            <input name="metaTitle" type="text" id="metaTitle" class="form-control rounded"
                                placeholder="Meta Title" value="<?php echo htmlspecialchars($metaTitle); ?>">
                        </div>

                        <!-- Meta Description -->

                        <div class="form-group">
                            <label style="color:#0975B6" for="MetaDesc">Meta Description:</label>
                            <input name="metaDesc" id="metaDesc" type="text" class="form-control rounded"
                                placeholder="Meta Description" value="<?php echo htmlspecialchars($metaDesc); ?>">
                        </div>

                        <!-- Meta Keywords -->
                        <div class="form-group">
                            <label style="color:#0975B6" for="MetaKey">Meta Keyword:</label>
                            <input name="metaKey" id="pageTitle" type="text" class="form-control rounded"
                                placeholder="Meta Keyword" value="<?php echo htmlspecialchars($metaKey); ?>">
                        </div>




                        <?php 
                        if($page == "index.php") {
                            ?>

                            <!-- Analytics tracking code -->
                        <div class="form-group">
                            <label style="color:#0975B6" for="Analyticscode">Analytics tracking code</label> <br>
                            <label style="color:#F33155" for="Analyticscodeid">Please Enter google Analytics ID</label>
                            <input name="Analyticscode" id="Analyticscode" type="text" class="form-control rounded"
                                placeholder="Analytics ID" value="<?php echo htmlspecialchars($analytics_code); ?>">
                            

                        </div>
                        
                        <!-- canonical tag -->
                        <div class="form-group">
                            <label style="color:#0975B6" for="canonical">canonical Tag:</label>
                            <input name="canonical" id="canonical" type="text" class="form-control rounded"
                                placeholder="canonical url" value="<?php echo htmlspecialchars($canonical_url); ?>">
                        </div>


                        <?php
                        }
                        
                        ?>

                        <!-- Save Button -->
                        <div class="form-group">
                            <button name="saveSEO" type="submit"
                                class="input-md btn btn-success waves-effect">Save</button>
                        </div>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>