<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="css/styles-merged.css">
        <link rel="stylesheet" href="css/style.min_2.css">
        <link rel="stylesheet" href="css/custom.css">
        <title>Complaints | GPC Muttom</title>
        <!--[if lt IE 9]>
          <script src="js/vendor/html5shiv.min.js"></script>
          <script src="js/vendor/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div class="probootstrap-search" id="probootstrap-search">
            <a href="#" class="probootstrap-close js-probootstrap-close"><i class="icon-cross"></i></a>
            <form action="#">
                <input type="search" name="s" id="search" placeholder="Search a keyword and hit enter...">
            </form>
        </div>

        <div class="probootstrap-page-wrapper">
            <!-- Fixed navbar -->

            <?php include('Common/Header.php'); //$_SESSION["name"] = "Amal k mohan";
            ?>
            <nav class="navbar navbar-default probootstrap-navbar">
                <div class="container">
                    <div class="navbar-header">
                        <div class="btn-more js-btn-more visible-xs">
                            <a href="#"><i class="icon-dots-three-vertical "></i></a>
                        </div>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php" title="Govt. Polytechnic College Muttom">GPC Muttom</a>
                    </div>

                    <div id="navbar-collapse" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li ><a href="index.php">Home</a></li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Courses</a>
                                <ul class="dropdown-menu">
                                    <li><a href="course-single.php?CRS_id=1">Computer Engg.</a></li>
                                    <li><a href="course-single.php?CRS_id=3">Civil Engg.</a></li>
                                    <li><a href="course-single.php?CRS_id=4">Mechanical Engg.</a></li>
                                    <li><a href="course-single.php?CRS_id=2">Electronics Engg.</a></li>
                                    <li><a href="course-single.php?CRS_id=5">Electrical Engg.</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                            <?php
                            if (isset($_SESSION["user_id"])) {
                                if ($_SESSION["user_roll"] == 'ADMN') {
                                    echo '<li><a href="adminComplaints.php">Complaints</a></li>';
                                    echo '<li><a href="AdminMessages.php">Messages</a></li>';
                                    echo '<li><a href="AdminAddItem.php">Dash</a></li>';
                                    echo '<li><a href="Accounts/logout.php">Logout</a></li>';
                                } else {
                                    echo '<li class="active"><a href="complaints.php">Complaints</a></li>';
                                    echo '<li><a href="Accounts/logout.php">Logout</a></li>';
                                }
                            } else {
                                echo '<li><a href="Accounts/Login.php">Login</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="probootstrap-section probootstrap-section-colored">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-left section-heading probootstrap-animate">
                            <h1 class="mb0">Grievances</h1>
                        </div>
                    </div>
                </div>
            </section>



            <section class="probootstrap-section probootstrap-section-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row probootstrap-gutter0">
                                <div class="col-md-4" id="probootstrap-sidebar">
                                    <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                                        <h3>Complaints</h3>
                                        <ul class="probootstrap-side-menu">

                                            <li class="active"><a href="#">New Complaint</a></li>
                                            <li><a href="complaintDetails.php#all">Your Complaint's</a></li>
                                            <li><a href="complaintDetails.php#replys">Reply's</a></li>
                                            <li><a href="complaintDetails.php#cancelled">Cancelled</a></li>
                                            <li><a href="complaintDetails.php#pending">Pending</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">
                                    <h2>Leave a complaint</h2>
                                    <p>We are here to help you.</p>
                                    <form action="" method="POST" class="probootstrap-form">
                                        <div class="form-group">
                                            <label for="email">From,</label>
                                            <textarea type="text" class="form-control" id="name" name="name" rows="4">
<?php echo $_SESSION["name"]; ?>,
                                            </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">To,</label>
                                            <textarea type="text" class="form-control" id="name" name="name" rows="4">
 The Principal,
 Govt. Polytechnic College,
 Muttom, 
 Thodupuzha
                                            </textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" class="form-control" id="subject" name="subject">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Content</label>
                                            <textarea cols="30" rows="10" class="form-control" id="message" name="content"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-lg" id="submit" name="postComplaint" value="Post Complaint">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            if (isset($_POST["postComplaint"])) {
                
                
                require("Data/complaints.php");
                require("Data/Databasehelper/complaintsHelper.php");
                
                $objdbHelper = new complaintsHelper();
                
                $cmp_from = $_SESSION["user_id"];
//                user id 1 is assigned to admin
                $cmp_to = 1;
                $cmp_subject = $_POST["subject"];
                $cmp_content = $_POST["content"];
                $cmp_status = 'SND';
                $cmp_type = 'GNRL';
                
                $objComplaints = new complaints($cmp_from, $cmp_to, $cmp_subject, $cmp_content, $cmp_status, $cmp_type);
                $objdbHelper->postComplaints($objComplaints);
                
            }
            ?>

            <?php include('Common/footer.php'); ?>


        </div>
        <!-- END wrapper -->
        <a href="Data/Databasehelper/complaintsHelper.php"></a>

        <script src="js/scripts.min.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>
