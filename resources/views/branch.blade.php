@extends('Layouts.main')
@section('title','About Page')
@section('content')










      
    <!--Section End Here-->
    <!--Section End Here-->
    <!-- END HEADER -->
    <!-- Intro Section -->
    <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <h1><span>Branches</span></h1>
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
                           
                        </div>
                    </div>
                   
                </div>





                <div class="col-md-9 col-sm-7">







    




       

                @foreach ($branch as $data)
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <div class="branch_box">
                            <h3>{{ $data->branch }}</h3>
                            <p> {{$data -> address}}
                            <br>
                                <b>Phone :</b> {{$data -> phone }}<br>
                                <b>Email :</b> {{$data ->email}}<br>
                                <b>Estd: </b>{{ $data ->estd }}  <br>
                            </p>
                        </div>
                    </div>
                @endforeach




                    


            
                        


                        


                         


                    

                </div>
                <!--9 close--->

               

            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <!--Footer Section Start-->



















@endsection