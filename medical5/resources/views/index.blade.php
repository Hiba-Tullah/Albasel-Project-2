@extends('layout.master')
@section('content')



  <!-- *****Hero of the week Style Area Start ***** -->

<style>


.glow {
  font-size: 50px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}




* {box-sizing: border-box}

.char {
  width: 100%;
  background-color: #ddd;
}

.skills {
  text-align: right;
  padding-top: 10px;
  padding-bottom: 10px;
  color: white;
}

.html {width: 90%; background-color: #f44336;} 
.css {width: 80%; background-color:#808080;}
.js {width: 65%; background-color: #2196F3;}
.php {width: 60%; background-color: #4CAF50;}

.single_blog_img { position: relative; }
.single_blog_img img { display: block; }
.single_blog_img .social_icon { position: absolute; bottom:0; left:0; }

</style>

<!-- *****Hero of the week Style Area End ***** -->

    <!-- ***** Header Area End ***** -->

    <!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/hero1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="500ms"> &nbsp;&nbsp;  <br><br><br>  &nbsp;&nbsp;Experienced Doctors That <br> 
                                &nbsp;&nbsp;&nbsp;You can Trust 100%</h2>
                                <h6 data-animation="fadeInUp" data-delay="600ms">  &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;We Are Here For Your Care </h6>
<a  href="/ourDoctors" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms"> Our Doctors<span>+</span></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/breadcumb3.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                               
                                <h2 data-animation="fadeInUp" data-delay="500ms"> &nbsp;&nbsp;  <br><br>  &nbsp;&nbsp;Medical Services  <br>
                                &nbsp;&nbsp;All Day Long 24/7</h2>
                               <h6 data-animation="fadeInUp" data-delay="600ms"></h6>
                                <a  href="/services" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Our Services <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/breadcumb1.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 data-animation="fadeInUp" data-delay="500ms"> &nbsp;&nbsp;  <br><br>  &nbsp;&nbsp;Best Care  <br>
                                &nbsp;&nbsp;Best Future </h2>
                                <h6 data-animation="fadeInUp" data-delay="600ms"></h6>
                                <a  href="/aboutUs" class="btn medilife-btn mt-50"
                                 data-animation="fadeInUp"   data-delay="700ms">About Us <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/hero2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">  
                                  <h2 data-animation="fadeInUp" data-delay="500ms"> &nbsp;&nbsp;  <br><br>  &nbsp;&nbsp; Medical & Educational Portal </h2> <br>
                               
                                
                                  <h6 data-animation="fadeInUp" data-delay="600ms">  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                        &nbsp;&nbsp;           xxxxx</h6>
                                <a  href="/medicalBlog" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Medical Blog <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/med2.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/med.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/hos.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hero Area End ***** -->



    <!-- ***** Book An Appoinment Area Start ***** -->
    <div class="medilife-book-an-appoinment-area">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="appointment-form-content">
                  
                       
                        <div class="row no-gutters align-items-center">


                            <div class="col-12 col-lg-9">
                                <div class="medilife-appointment-form">
                                    <form action="#" method="post">
                                        <div class="row align-items-end">
                                           
                                            <div class="col-12 col-md-4">
                                                 
                                              <h5 style="color: white">Make an Appointment</h5>

                                                <div class="form-group">
                                                </br>
                                                    <h6 style="color: white">Choose Service</h6>
                                                    <select class="form-control" id="speciality" name="service">
                                                    <option>holter</option>
                                                    <option>sergury</option>
                                                    <option>Qathter</option>
                                                    <option>Blood Test</option>
                                                    
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    </br>
                                                    <h6 style="color: white">Choose Doctor</h6>
                                                    <select class="form-control" id="doctors">
                                                    <option>Ayham Shaabo</option>
                                                    <option>Ghayath Baddour</option>
                                                    <option>Younes Khello</option>
                                                    <option>Afif Ali</option>
                                                    <option>Jamal Saqer</option>
                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="form-group">
                                                 
                                                    <input type="date" class="form-control" name="date" id="date" placeholder="Date">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="form-group">
                                                 
                                                    <input type="time" class="form-control" name="time" id="time" placeholder="Time">

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="number" id="number" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control border-top-0 border-right-0 border-left-0" name="idNumber" id="idNumber" placeholder="ID Number">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <div class="form-group mb-0">
                                                    <textarea name="message" class="form-control mb-0 border-top-0 border-right-0 border-left-0" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 mb-0">
                                                <div class="form-group mb-0">
                                                    <button type="submit" class="btn medilife-btn" >Make an Appointment <span>+</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-lg-3">
                                <div class="medilife-contact-info">
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info mb-30">
                                        <img src="img/icons/alarm-clock.png" alt="">
                                        <p>Sun - Thu 08:00 - 15:00 <br>Friday-Saturday CLOSED</p>
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info mb-30">
                                        <img src="img/icons/envelope.png" alt="">
                                        <p>00963991772477 <br>AlbaselHospital.com</p>
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info">
                                        <img src="img/icons/map-pin.png" alt="">
                                        <p>Lattakia, <br>Syria</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Book An Appoinment Area End ***** -->
    <br></br>
</br>




    <!-- ***** Heroes Of This Week Area Start ***** -->
    <div class="medilife-book-an-appoinment-area">
        <div class="section_tittle text-center">
        </br> </br> </br>
                <h4 class="glow">Heroes Of This Week  </h4>
               
                <p>Congratulations, dear doctors, on getting the board certificate,Good Luck</p>
                </div> </br>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="appointment-form-content">
                        <div class="row no-gutters align-items-center">
                           
                            <div class="col-12 col-lg-3">
                                <div class="medilife-contact-info">
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info mb-30">
                                        <img src="img/icons/h1.jpg" alt="">
                                      
                                    </div>
                                    <!-- Single Contact Info -->
                                    
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info">
                                     
                                        <p>Dr Shawrash Mousa  <br>Dr Mouhanad Yousef<br> Dr Bassel Alratel</p>
                                    </div>
                                </div>
                            </div>
                              <div class="col-12 col-lg-3">
                                <div class="medilife-contact-info">
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info mb-30">
                                        <img src="img/icons/h6.png" alt="">
                                    
                                    </div>
                                    <!-- Single Contact Info -->
                                    
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info">
                                      
                                        <p>Dr Imad Haj Husen,Dr Eyad Malla <br> Dr Karam Baddour <br> Dr Alaa Kajo</p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12 col-lg-3">
                                <div class="medilife-contact-info">
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info mb-30">
                                        <img src="img/icons/h7.png" alt="">
                                       
                                    </div>
                                    <!-- Single Contact Info -->
                                    
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info">
                                        
                                        <p>Dr Sally Almohammad<br>Dr Imad Haj Husen,Dr Eyad Malla <br> Dr Karam Baddour <br></p>
                                    </div>
                                </div>
                            </div>
                             <div class="col-12 col-lg-3">
                                <div class="medilife-contact-info">
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info mb-30">
                                        <img src="img/icons/doc1.png" alt="">
                                        
                                    </div>
                                    <!-- Single Contact Info -->
                                    
                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info">
                                        
                                        <p>Syria <br> Damascus <br> Albasel Hospital</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Heroes Of This Week Area End ***** -->
    <br></br>
</br>
 <!-- *****Hospital Sections Area Start ***** -->
    <div class="section_tittle text-center">
        </br> </br>
<h2> Hospital Sections</h2>
<p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
</div> </br>
    <div class="medilife-gallery-area owl-carousel">
     
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g1.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g2.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g2.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g3.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g3.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>

        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g4.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g4.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
           <img src="img/bg-img/g5.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g5.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g6.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g6.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div> 
        
        <div class="single-gallery-item">
            <img src="img/bg-img/g7.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g7.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g8.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g8.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g9.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g9.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
    </div>
  <!-- ***** Hospital Sections Area end**** -->



    <!-- ***** About Us Area Start ***** -->
    <section class="medica-about-us-area section-padding-100-20">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="medica-about-content">
                        <h2>We always put our patients first</h2>
                        <p>.</p>
                        <a href="/services" class="btn medilife-btn mt-50">View the services <span>+</span></a>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row">
                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-doctor"></i>
                                </div>
                                <div class="service-content">
                                    <h5>The Best Doctors</h5>
                                    <p>The Best Doctors.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-blood-donation-1"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Nursery</h5>
                                    <p>Nursery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-flask-2"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Laboratory</h5>
                                    <p>Laboratory.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6">
                            <div class="single-service-area d-flex">
                                <div class="service-icon">
                                    <i class="icon-emergency-call-1"></i>
                                </div>
                                <div class="service-content">
                                    <h5>Emergency Room</h5>
                                    <p>Emergency Room</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

   

    <!-- ***** Gallery2Area Start ***** -->
    <div class="medilife-gallery-area owl-carousel">
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g1.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g2.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g2.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g3.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g3.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>

        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g4.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g4.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
           <img src="img/bg-img/g5.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g5.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g6.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g6.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div> 
        
        <div class="single-gallery-item">
            <img src="img/bg-img/g7.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g7.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g8.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g8.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g9.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g9.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
    </div>
    <section class="medilife-cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-blood-transfusion-2"></i>
                        <h2><span class="counter">32</span></h2>
                        <h6>Blood donations</h6>
                        <p>Blood donations Blood donations .</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-atoms"></i>
                        <h2><span class="counter">5632</span>k</h2>
                        <h6>Pacients</h6>
                        <p>Pacients Pacients Pacients.</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-microscope"></i>
                        <h2><span class="counter">5</span></h2>
                        <h6>Specialities</h6>
                        <p>Specialities Specialities Specialities.</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-doctor-1"></i>
                        <h2><span class="counter">47</span></h2>
                        <h6>Doctors</h6>
                        <p>Doctors Doctors doctors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
   

      <!-- ***** Experienced Doctors Area Start ***** -->
  </br>

  <section class="doctor_part section_padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-8">
<div class="section_tittle text-center">
<h2> Experienced Doctors</h2>
<p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-heart"></i> </a></li>
<li><a href="#"> <i class="ti-facebook" ></i> </a></li>
<li><a href="#"> <i class=" ti-email"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Ayham Shaabu</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Ghayath Baddour</h3>
<p>Medicine specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Younes Khellu</h3>
<p>CHeart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Afif Ali</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>



<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Jamal Saqer</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Anitta Abbass</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Manal Saleh</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Randa Slloum</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Loay Khalilo</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Jamal Alloush</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Yousef Abu Tabekh</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Ahmad Dyoub</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Ayman Mechaeel</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Yousef Ghanem</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Ahmad Ghalawengi</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Mazen Rostom</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="medica-about-content">
                                          
     <a href="/specialized" class="btn medilife-btn mt-50">View More ... <span>+</span></a>
   </div>
</div>
</div>

</section>


 <!-- ***** Experienced Doctors Area end ***** -->


  </br>
    <!-- ***** Resident Doctors Area end ***** -->
  <section class="doctor_part section_padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-8">
<div class="section_tittle text-center">
<h2> Resident Doctors</h2>
<p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor" >

<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-heart"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>

</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Sally Almohammad</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR </h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Karam Baddour</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Taym Hishma</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor4.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Imad Haj Husen</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>



<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Hossam teftafeh</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Alaa Kajo</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor7.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Nour Alghashi</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Khair Aat</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Housam AL-Japour</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Eyad Maalla</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR AbedAlrahman Alkubaissy</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Hozan ?</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Mohammad Khayleh</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Ammar Yousef</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor15.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Feras S. Alam Aldeen‎‏ </h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor16.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Saadoun Saadoun</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>

<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Fawaz Saqer</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Saadoun Saadoun</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-twitter-alt"></i> </a></li>
<li><a href="#"> <i class="ti-instagram"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Saadoun Saadoun</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>



<div class="medica-about-content">
                                          
     <a href="/resident" class="btn medilife-btn mt-50">View More ... <span>+</span></a>
   </div>
</div>
</div>
</section>
      <!-- ***** Doctors Area end ***** -->





</br>


     <!-- ***** The unknown soldiers Start ***** -->
       <div class="section_tittle text-center">
<h2> The Unknown Soldiers Team </h2>
<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
</div>
    


      <div class="medilife-gallery-area owl-carousel">

    

        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g1.jpg" class="btn gallery-img">The Engineers +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g1.jpg" class="btn gallery-img">The Engineers +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g1.jpg" class="btn gallery-img">The Engineers +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g1.jpg" class="btn gallery-img">The Engineers +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g1.jpg" class="btn gallery-img">The Maintenance technicians +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g1.jpg" class="btn gallery-img">The Maintenance technicians +</a>
            </div>
        </div>
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g2.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g2.jpg" class="btn gallery-img">The Administrators +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g2.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g2.jpg" class="btn gallery-img">The Administrators +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g2.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g2.jpg" class="btn gallery-img">The Administrators +</a>
            </div>
        </div>
        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g3.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g3.jpg" class="btn gallery-img">The HR +</a>
            </div>
        </div>

        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g4.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g4.jpg" class="btn gallery-img">The Statistics +</a>
            </div>
        </div>
        <div class="single-gallery-item">
           <img src="img/bg-img/g5.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g5.jpg" class="btn gallery-img">The Pharmacists +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g6.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g6.jpg" class="btn gallery-img">The Medical analysis laboratory +</a>
            </div>
        </div> 
         <div class="single-gallery-item">
            <img src="img/bg-img/g6.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g6.jpg" class="btn gallery-img">The Medical analysis laboratory +</a>
            </div>
        </div> 
         <div class="single-gallery-item">
            <img src="img/bg-img/g6.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g6.jpg" class="btn gallery-img">The Medical analysis laboratory +</a>
            </div>
        </div> 
        
        <div class="single-gallery-item">
            <img src="img/bg-img/g7.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g7.jpg" class="btn gallery-img">The Nursing +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g8.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g8.jpg" class="btn gallery-img">The Nursing +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g8.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g8.jpg" class="btn gallery-img">The Nursing +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g9.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g9.jpg" class="btn gallery-img">The Accountants +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">The Accountants +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">The Accountants +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">The Reception +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">The health insurance +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">The Central warehouse +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">The guards +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">The drivers +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g10.jpg" class="btn gallery-img">The white hands Team +</a>
            </div>
        </div>
    </div>



     <!-- ***** The unknown soldiers End***** -->







    <!-- ***** Blog Area/ Medical Articles Start ***** -->
    <div class="medilife-blog-area section-padding-100-0">
        <div class="container">
            <div class="section_tittle text-center">
<h2> Latest Medical Articles </h2>
<p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
</div>
            <div class="row">


                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                        <a  href="#" >     <img   src="img/blog-img/1.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a>Jan 23, 2018</a>
                            </div>
                        </div>


                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a  href="#" ><img src="img/blog-img/p1.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">New drog release soon</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#"  class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>




                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                           <a  href="#" >  <img  href="#" src="img/blog-img/2.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jan 23, 2018</a>
                            </div>
                        </div>




                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img src="img/blog-img/p2.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">Free dental care</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>



                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                         <a  href="#" >    <img src="img/blog-img/3.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jan 23, 2018</a>
                            </div>
                        </div>




                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img src="img/blog-img/p3.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">Good news for the pacients</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
           
                    </div>

                </div>
               
                    
            </div>
            <div class="medica-about-content">
                                          
                   <a href="/medicalBlog" class="btn medilife-btn mt-50" >View More... <span>+</span></a>
               </div>
        </div>
        
    </div>
             
                    

       
 <!-- ***** Blog Area/ Medical Articles End ***** -->

    <!-- ***** Blog Area/ Hospital News Start ***** -->
    
<br>
<br>
<br>
<br>

 <div class="container">
             
            <div class="section_tittle text-center">
                
<h2> Latest Hospital News </h2>
<p>Face replenish sea good winged bearing years air divide wasHave night male also</p>
</div>
            <div class="row">


                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <a href="#"> <img src="img/blog-img/1.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jan 23, 2018</a>
                            </div>
                        </div>


                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img src="img/blog-img/p1.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">New drog release soon</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>




                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <a href="#"> <img src="img/blog-img/2.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jan 23, 2018</a>
                            </div>
                        </div>




                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img src="img/blog-img/p2.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">Free dental care</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>



                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                         <a href="#">    <img src="img/blog-img/3.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jan 23, 2018</a>
                            </div>
                        </div>




                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="#"><img src="img/blog-img/p3.jpg" alt=""></a>
                            </div>
                            <a href="#" class="headline">Good news for the pacients</a>
                            <p>Dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
            
                    </div>

                   
                </div>
                 <div class="medica-about-content">
                                          
                   <a href="/medicalBlog" class="btn medilife-btn mt-50" >View More... <span>+</span></a>
               </div>
               
            </div>
            
</div>


    

    
 <!-- ***** Blog Area/ Hospital News End ***** -->




 <!-- ***** statistics bar Start***** -->
 <div class="medilife-blog-area section-padding-100-0">
        <div class="container">
         <div class="section_tittle text-center">
<h2>Latest Statistics Studies </h2>
<p>According to the statistical studies conducted at Al-Basel Hospital, the following picture shows the people most at risk of developing heart diseases </p>
</div>
     

<p>Smoking</p>
<div class="container">
  <div class="skills html">90%</div>
</div>

<p>Obesity</p>
<div class="container">
  <div class="skills css">80%</div>
</div>

<p>Diabetes</p>
<div class="container">
  <div class="skills js">65%</div>
</div>
 
<p>Renal failure</p>
<div class="container">
  <div class="skills php">60%</div>
</div>
</br>
</br>
 <div class="medica-about-content">
                                          
                   <a href="/hospitalNews" class="btn medilife-btn mt-50">View More... <span>+</span></a>
               </div>
</div>

</div>
</br>
</br>
    
 <!-- ***** statistics bar End***** -->


    @endsection