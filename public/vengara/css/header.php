<!DOCTYPE html>
<html lang="en">
<?php include("connection.php");?>
<?php
$result=mysql_query("SELECT * FROM other_service  ORDER BY os_id ASC ");
?>

<?php
$result1=mysql_query("SELECT * FROM  loan_advance  ORDER BY la_id ASC ");
?>


<?php
$result2=mysql_query("SELECT * FROM deposit_account  ORDER BY dp_id ASC ");
?>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vengara Service Co-operative Bank </title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,800%7CLato:300,400,700" rel="stylesheet" type="text/css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/css/plugin/owl.carousel.css" rel="stylesheet" type="text/css">
    <!--Main Slider-->
    <link href="assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
    <link href="assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
    <!--Main Slider End-->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/bootsnav2.css" rel="stylesheet">
    <link href="assets/css/index2.css" rel="stylesheet">
    <!--    <link href="box/assets/css/bootstrapTheme.css" rel="stylesheet">-->
    <link href="box/assets/css/custom.css" rel="stylesheet">
    <!-- Owl Carousel Assets -->
    <link href="box/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="box/owl-carousel/owl.theme.css" rel="stylesheet">

    <!--Light box-->
    <link href="assets/css/jquery.fancyboxx.css" rel="stylesheet" type="text/css">

</head>

<body>

<div class="block">
  <div class="pre-block">
  <div class="lds-ring">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
</div>


     <header>
        <div class="middel-part__block">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ol-lg-6">
                        <div class="logo">
                           <a href="index.html">
                                <img src="assets/images/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="top-info__block text-right">
                            <ul>
                                <li>
                                    <li><i class="fa fa-phone"></i>
                                    <p>Call Us For More Details
                                        <span>0483 2833 602, 833 153</span></p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <p>Write Us For More Details
                                        <span>vengarascb@gmail.com</span></p>
                                </li>
                                <!--<li>
                                         <i class="fa fa-phone"></i>
                                         <p>13005 Greenvile Avenue <span>California, TX 70240</span></p>
                                     </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_nav stricky-header__top">

            <nav class="navbar navbar-default navbar-sticky bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"> <i class="fa fa-bars"></i> </button>

                    </div>
                    <!-- End Header Navigation -->
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav mobile-menu">
                            <li> <a href="index.php">Home</a> </li>

                            <li> <a href="javascript:avoid(0);">About us</a>
                                <span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    <li> <a href="about.php">History</a></li>
                                    <li> <a href="manage.php">Management</a></li>

                                </ul>
                            </li>

                            <li><a href="javascript:avoid(0);">Achivements</a>
                                 <span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    <li> <a href="gallery.php">Gallery</a> </li>
                                </ul>

                            </li>


                            <li> <a href="javascript:avoid(0);">facilities</a>
                                <span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    <li><a href="branches.php">Branches</a></li>
                                    <li><a href="tender.php">Tender</a></li>
                                    <li><a href="download.php">Download Forms</a> </li>
                                    <!-- <li><a href="">Emi Calculater</a> </li> -->

                                </ul>

                            </li>

                            <li><a href="javascript:avoid(0);">Other Services</a>
                                <span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    
                                    
                                    <?php
       $i=0;
       while($row=mysql_fetch_array($result))
       {
       $i++;
       ?>

                                    <li><a href="otherservices.php?id=<?php echo $row['os_id'];?>"><?php echo $row['os_name'];?></a></li>
                                    
                                                      
                                    
                                    <?php } ?>
                               
                               

                                </ul>

                            </li>

<li><a href="javascript:avoid(0);">Loans & Advances</a>
                                    <span class="submenu-button"></span>
                                <ul class="dropdown-menu">
                                    
     <?php
       $i=0;
       while($row1=mysql_fetch_array($result1))
       {
       $i++;
       ?>

                                    <li><a href="loan-advance.php?lid=<?php echo $row1['la_id'];?>"><?php echo $row1['la_name'];?></a></li>
                                    
                                                      
                                    
                                    <?php } ?>
                               
                               
                                   
                                </ul>

                            </li>

                            <li> <a href="javascript:avoid(0);">Deposit Accounts</a> 
                                <span class="submenu-button"></span>
                                <ul class="dropdown-menu">
    <?php
       $i=0;
       while($row2=mysql_fetch_array($result2))
       {
       $i++;
       ?>

                                    <li><a href="deposit-account.php?did=<?php echo $row2['dp_id'];?>"><?php echo $row2['dp_name'];?></a></li>
                                    
                                                      
                                    
                                    <?php } ?>
                                  
                       
                                </ul>
                            </li>

                            <li><a href="interest-rates.php">Interest Rates & Charges </a> </li>
                            <li><a href="contact.php">Contact us</a> </li>

                            <!--    <li><a class="custom_btn__block" href="#">Find Advisor</a></li> -->

                        </ul>

                    </div>
                    <!--navbar-collapse -->
                </div>
            </nav>
        </div>
    </header>