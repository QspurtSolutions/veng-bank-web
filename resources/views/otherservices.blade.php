@extends('Layouts.main')
@section('title','About Page')
@section('content')






<?php
$id=$_GET['id'];
?>
<?php 
include ('connection.php');

?>

 <?php

 $sql14 = "select * from other_service WHERE os_id='$id'";
$result14 = mysqli_query($conn,$sql14);
  if(mysqli_num_rows($result14)){
 while($new = mysqli_fetch_array($result14)){
 
?>

<?php include("header.php");?>
 <!--Section End Here-->
    <!-- END HEADER -->
    <!-- Intro Section -->
     <!--Section End Here-->
    <!-- END HEADER -->
    <!-- Intro Section -->

    
    
    <section class="inner-intro bg-img light-color overlay-before parallax-background" style="
   background: url(<?php echo 'vebadmin/uploads/otherservice/'.$new['photo'];?>) 0 36% no-repeat;  ">
        <div class="container">
            <div class="row title">
                <h1><span><?php echo $new['os_name']; ?></span></h1>
            </div>
        </div>
    </section>

    <!-- Intro Section -->

    <div id="services-section" class="padding pt-xs-60">
        <div class="container">
            <div class="row">


              <div class="col-md-9 col-sm-7" style="overflow:hidden;">

                   <div class="full-pic">
                        <figure>
                            <img src="<?php echo 'vebadmin/uploads/otherservice/'.$new['photo'];?>" alt="">
                        </figure>
                    </div>

                 <div class="special-links">
                        <div class="page-title page-sub-heading">
                            <h2><?php echo $new['os_name']; ?></h2>
                        </div>

                    </div>

                    <p class="top-content"><?php echo $new['os_details']; ?></p>

                    <div class="panel-group service-faq faq" id="accordion">
                        

                        
                        
                        
                        
                       
 <?php

 $sql16 = "select * from os_features WHERE of_category='$id'";
$result16 = mysqli_query($conn,$sql16);
  if(mysqli_num_rows($result16)){
 while($new1 = mysqli_fetch_array($result16)){
 
?>       
                        
                        
                        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $i;?>" aria-expanded="false"><?php echo $new1['of_title'];?><i class="fa fa-plus collape-plus"></i></a></h4>
                            </div>
                            <div id="collapse-<?php echo $i;?>" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                <div class="panel-body">
                                    
                                  <?php echo $new1['of_content'];?>


                                </div>
                            </div>
                        </div>
                        
                        
                        
                        <?php }} ?>


                   


                        
                    </div>

                </div>
                <!--9 close--->







                <div class="col-md-3 col-sm-5 col-sx-12">
                    <div class="single-sidebar-widget">
                        <div class="special-links">
                            <div class="sec-title">
                                <h2>Useful Links</h2>
                            </div>
                            <ul>
                                
                                
       
       
       
                                   <?php

 $sql15 = "SELECT * FROM other_service  ORDER BY os_id ASC";
$result15 = mysqli_query($conn,$sql15);
  if(mysqli_num_rows($result15)){
 while($new2 = mysqli_fetch_array($result15)){
 
?>       
       
       
       
       
       
       
                                   <li><a href="otherservices.php?id=<?php echo $new2['os_id'];?>"><?php echo $new2['os_name'];?></a></li>
                                <?php }} ?>
                            </ul>
                        </div>
                    </div>
                   
                </div>

                <!--3 close-->

            </div>
        </div>
    </div>

    <!--Footer Section Start-->
   <?php }} ?>
<?php include("footer.php");?>





@endsection