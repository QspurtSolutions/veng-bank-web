@extends('Layouts.main')
@section('title','About Page')
@section('content')




<?php include("header.php");?>
       <?php include("connection.php");?>
         
         
         <?php
$result=mysql_query("SELECT * FROM intrest  ORDER BY in_id ASC ");
?>
<!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <h1><span>Interest Rates & Charges</span></h1>
            </div>
        </div>
    </section>
    <!-- Intro Section -->

    <div id="services-section" class="padding pt-xs-60">
        <div class="container">
            <div class="row">

                <div class="col-md-3 col-sm-5 col-sx-12">
                    <div class="single-sidebar-widget">
                        <div class="special-links">
                            <div class="sec-title">
                                <h2>Useful Links</h2>
                            </div>

                            <ul>
                                <li>
                                    <a href="" class="active">Deposit Accounts</a>
                                </li>
                                <li>
                                    <a href="savingbank-account.html">Saving Bank Accounts</a>
                                </li>
                                <li>
                                    <a href="current-account.html">Current Account</a>
                                </li>
                                <li>
                                    <a href="recurring-deposit.html">Recurring Deposit</a>
                                </li>
                                <li>
                                    <a href="">Term Deposit Account</a>
                                </li>

                                <li>
                                    <a href="">Attractive Special Deposit Schemes</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                
                </div>

                <div class="col-md-9 col-sm-7">

                   

                        <table style="height: 93px;">
<tbody>
<tr style="background: #dfdfdf;">
<th><strong>Type</strong></th>
<th><strong>Period</strong></th>
<th colspan="2" style="text-align:center; "><strong>Interest Rates</strong></th>
<!-- <th><strong>Subject</strong></th>
<th><strong>Due Date</strong></th>
<th><strong>Opening on<br>
</strong></th>
<th><strong>View</strong></th> -->
</tr>

<tr>

<td></td>

<td></td>
<td>Normal</td>
<td>Senior Citizen</td>
</tr>


   <?php
       $i=0;
       while($row=mysql_fetch_array($result))
       {
      $i++;
       ?>


<tr>
<td><?php echo $row['in_type'];?></td>
<td><?php echo $row['in_period'];?></td>
<td><?php echo $row['in_normal'];?></td>
<td><?php echo $row['in_senior'];?></td>
</tr>


  
<?Php } ?>

          
   
    

</tbody>
</table>




                

                </div>
                <!--9 close--->

            </div>
        </div>
    </div>

    <!-- FOOTER -->
            <?php include("footer.php");?>







@endsection