@extends('Layouts.main')
@section('title','About Page')
@section('content')




<section class="inner-intro bg-img light-color overlay-before parallax-background">
    <div class="container">
      <div class="row title">
        <h1><span>Contact</span></h1>
      </div>
    </div>
  </section>
  <!-- Intro Section --> 
  <!-- Contact Section -->
  <section class="ptb ptb-xs-60">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <h2>KEEP IN TOUCH</h2>
          <p class="lead">we will get back to you soon</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 contact pb-60 pt-30">
          <div class="row text-center">
            <div class="col-sm-4 pb-xs-30"> 
            <i class="fa fa-phone icon-circle pos-s"></i>
               <!--<i class="ion-android-call "></i>-->
               <a href="#" class="mt-15 i-block"> 0494 2450 223</a> 
            </div>
            
            
            
            <div class="col-sm-4 pb-xs-30">
            <i class="fa fa-map-marker icon-circle pos-s"></i>
               <!--<i class="ion-ios-location icon-circle pos-s"></i>-->
              <p  class="mt-15">Head Office  Vengara-Poocholamad Rd
              <br> Vettuthodu, Kerala 676304</p>
            </div>
            
            
            <div class="col-sm-4 pb-xs-30"> 
              <i class="fa fa-envelope icon-circle pos-s"></i>
                <a href=""  class="mt-15 i-block">
                 vengarascb@gmail.com</a>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>
    
    
    
    <!-- Map Section -->
<!--     <div class="map">
      <div id="map"></div>
    </div> -->
    <!-- Map Section -->
    
    
    
    <div class="container contact-form pt-80 pt-xs-60 ">
      <div class="row">
        <div class="col-sm-12">
          <!-- Contact FORM -->
          <form class="contact-form mt-45" id="contact">           
            <!-- IF MAIL SENT SUCCESSFULLY -->
            <div id="success">
              <div role="alert" class="alert alert-success"> <strong>Thanks</strong> for using our template. Your message has been sent. </div>
            </div>
            <!-- END IF MAIL SENT SUCCESSFULLY -->           
            <div class="row">
              <div class="col-sm-6">
                <div class="form-field">
                  <input class="input-sm form-full" id="name" type="text" name="form-name" placeholder="Your Name">
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="email" type="text" name="form-email" placeholder="Email" >
                </div>
                <div class="form-field">
                  <input class="input-sm form-full" id="sub" type="text" name="form-subject" placeholder="Subject">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-field">
                  <textarea class="form-full" id="message" rows="7" name="form-message" placeholder="Your Message" ></textarea>
                </div>
              </div>
              <div class="col-sm-12 mt-30">
                <button class="btn-text" type="button" id="submit" name="button"> Send Message </button>
              </div>
            </div>
          </form>
          <!-- END Contact FORM --> 
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->  
 <!-- FOOTER -->
  <!--Footer Section Start-->







@endsection