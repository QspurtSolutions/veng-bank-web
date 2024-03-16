@extends('Layouts.main')
@section('title','About Page')
@section('content')






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
        <section id="work" class="padding gallery-cont">
            <div class="container">
                <!-- work Filter -->

                <!-- End work Filter -->
                <div class="row container-grid nf-col-3">
                    
                    
                   
       
       
       

       
       
                @foreach ($gallery as $data)

                    <div class="nf-item spacing">
                        <div class="item-box">
                            <a> <img  src="{{ asset($data->image) }}" class="item-container"> </a>
                            <div class="link-zoom">
                                <a href="gallery-inner.php?gal_category=" class="project_links"> <i class="fa fa-link"> </i> </a>
                                <a href="" class="fancylight popup-btn" data-fancybox-group="light"> <i class="fa fa-search-plus"></i> </a>
                            </div>
                        </div>
                         <h3></h3>
                    </div>

                @endforeach

             

                

                </div>

            </div>

        </section>
        <!-- FOOTER -->
      








@endsection