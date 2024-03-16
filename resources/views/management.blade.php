@extends('Layouts.main')
@section('title','About Page')
@section('content')





 <section class="inner-intro bg-img light-color overlay-before parallax-background">
        <div class="container">
            <div class="row title">
                <h1><span>Managements</span></h1>
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




       

       
                @foreach ($management as $data)


                    <div class="col-md-4 col-sm-6 team-wrap">
                        <div id="f1_container">
                            <div id="f1_card" class="shadow">
                                <div class="front face">
                                <img src="{{asset($data->image)}}" alt="Image">  
                                </div>
                                <div class="back face center img-back">
                                    <h4>{{$data-> name}}  </h4>
                                    <h5>{{$data-> designation }} </h5>
                                    <h6>{{$data-> phone}}</h6>
                                </div>
                            </div>
                        </div>
                        <h4 class="team-title"> </h4>
                        <h5 class="team-sub"> </h5>
                    </div>
           
                  

                    @endforeach




                    <style type="text/css">
                        #f1_container {
                            position: relative;
                            margin: 10px auto;
                            width: auto;
                            height: 287px;
                            z-index: 1;
                        }
                        
                        #f1_container {
                            perspective: 1000;
                        }
                        
                        #f1_card {
                            width: 100%;
                            height: 100%;
                            transform-style: preserve-3d;
                            transition: all 1.0s linear;
                        }
                        
                        #f1_container:hover #f1_card {
                            transform: rotateY(180deg);
                            box-shadow: -5px 5px 5px #aaa;
                        }
                        
                        .face {
                            position: absolute;
                            width: 100%;
                            height: 100%;
                            backface-visibility: hidden;
                        }
                        
                        .face.back {
                            display: block;
                            transform: rotateY(180deg);
                            box-sizing: border-box;
                            padding: 10px;
                            color: white;
                            text-align: center;
                            background-color: #aaa;
                        }
                    </style>
                </div>



                
            </div>
        </div>
    </div>









@endsection