@extends('Layouts.main')
@section('title','About Page')
@section('content')




   
<?php include("header.php");?>
          <?php include("connection.php");?>
         
         
         <?php
$result=mysql_query("SELECT * FROM prev_management  ORDER BY pm_id DESC ");
?>
   <!--Section End Here-->
        <!-- END HEADER -->
        <!-- CONTENT -->
        <!-- Intro Section -->
        <section class="inner-intro  padding bg-img1 overlay-dark light-color">
            <div class="container">
                <div class="row title">
                    <h1>Previous Management</h1>
                </div>
            </div>
        </section>
        <!-- End Intro Section -->
        <!-- Work Section -->
        <section id="work" class="padding previews-management-cont">
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
                            <a> <img alt="1" src="<?php echo 'vebadmin/uploads/pvmanagement/'.$row['photo'];?>" class="item-container"> </a>
                            <div class="link-zoom">
                                <!-- <a href="project-details.html" class="project_links"> <i class="fa fa-link"> </i> </a> -->
                                <a href="<?php echo 'vebadmin/uploads/pvmanagement/'.$row['photo'];?>" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
                            </div>
                        </div>

                       <h6><?php echo $row['pm_title'];?> <?php echo $row['pm_year'];?></h6>
                        
                    </div>

                   
                  <?php } ?>
                  
                  
                  
                  
                  
                  
                  
                  
                  

                </div>

            </div>

        </section>
        <!-- FOOTER -->
        <!--Footer Section Start-->

        <?php include("footer.php");?>







@endsection