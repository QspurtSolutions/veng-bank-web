<?php
$gal_category=$_GET['gal_category'];
?>
       <?php include("header.php");?>
 
         <?php include("connection.php");?>
         
         
         <?php
$result=mysql_query("SELECT * FROM gallery WHERE gal_category='$gal_category'   ORDER BY gal_id DESC ");
?>
   

 <!--Section End Here-->
        <!-- END HEADER -->
        <!-- CONTENT -->
        <!-- Intro Section -->
        <section class="inner-intro  padding bg-img1 overlay-dark light-color">
            <div class="container">
                <div class="row title">
                    <h1>Gallery</h1>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
        <!-- Work Section -->
        <section id="work" class="padding gallery-inner-cont">
            <div class="container">
                <!-- work Filter -->

                <!-- End work Filter -->
                <div class="row container-grid nf-col-3">
                    
                    
                       <?php
       $i=0;
       while($row=mysql_fetch_array($result))
       {
      $i++;
       ?>

                    
                    

                    <div class="nf-item spacing">
                        <div class="item-box">
                            <a> <img alt="1" src="<?php echo 'vebadmin/uploads/gallery/'.$row['photo'];?>" class="item-container"> </a>
                            <div class="link-zoom">
                                
                                <a href="<?php echo 'vebadmin/uploads/gallery/'.$row['photo'];?>" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
                            </div>
                        </div>
                        
                    </div>

                    
                    
                    <?php } ?>

               

                </div>

            </div>

        </section>
         <?php include("footer.php");?>