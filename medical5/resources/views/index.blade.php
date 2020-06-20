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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

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
<a  href="#doctor_part" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms"> Our Doctors<span>+</span></a>

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
                                <a  href="#part2" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Our Services <span>+</span></a>
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
                        &nbsp;&nbsp;          </h6>
                                <a  href="#part3" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="700ms">Medical Blog <span>+</span></a>
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
               <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/breadcumb4.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
               <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/breadcumb5.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
             <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/breadcumb6.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
             <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/breadcumb7.jpg);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div>
             <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/breadcumb8.jpg);">
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
                                    <form onsubmit="return false;" id="appform" >
                                        @csrf
                                        <input type="hidden" name="location" id="location"/>
                                        <div class="row align-items-end">

                                            <div class="col-12 col-md-4">

                                              <h5 style="color: white">Make an Appointment</h5>

                                                <div class="form-group">
                                                </br>
                                                    <h6 style="color: white">Choose Service</h6>
                                                    <select class="form-control" id="speciality" required name="service">
                                                   <option>Service</option>
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
                                                    <select class="form-control" required  id="doctors" name="doctor">
                                                    <option>doctor</option>
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

                                                    <input type="date" required  class="form-control" name="date" id="date" placeholder="Date">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-2">
                                                <div class="form-group">

                                                    <input type="time" required  class="form-control" name="time" id="time" placeholder="Time">

                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" required  class="form-control border-top-0 border-right-0 border-left-0" name="name" id="name" placeholder="Name">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" required  class="form-control border-top-0 border-right-0 border-left-0" name="number" id="number" placeholder="Phone">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" required  class="form-control border-top-0 border-right-0 border-left-0" name="idNumber" id="idNumber" placeholder="ID Number">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-7">
                                                <div class="form-group mb-0">
                                                    <textarea name="message" required  class="form-control mb-0 border-top-0 border-right-0 border-left-0" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-5 mb-0">
                                                <div class="form-group mb-0">
                                                    <button  id="makeapp" class="btn medilife-btn" >Make an Appointment <span>+</span></button>
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

                <p>Congratulations</p>
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
</br>

</div>
    <div class="medilife-gallery-area owl-carousel">

        <!-- Single Gallery Item -->

        <!-- Single Gallery Item -->

        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/g3.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g3.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>

        <!-- Single Gallery Item -->

        <div class="single-gallery-item">
           <img src="img/bg-img/g5.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g5.jpg" class="btn gallery-img">See More +</a>
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
        <div class="single-gallery-item">
            <img src="img/bg-img/g11.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g11.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g12.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g12.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g13.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g13.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>

        <div class="single-gallery-item">
            <img src="img/bg-img/g15.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g15.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/g16.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g16.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>


        <div class="single-gallery-item">
            <img src="img/bg-img/g20.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/g20.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
    </div>
  <!-- ***** Hospital Sections Area end**** -->



    <!-- ***** About Us Area Start ***** -->
    <section class="medica-about-us-area section-padding-100-20" id="part2">
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

        <!-- Single Gallery Item -->

        <!-- Single Gallery Item -->


        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/gg2.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/gg2.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/gg4.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/gg4.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>

         <div class="single-gallery-item">
            <img src="img/bg-img/gg5.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/gg5.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div><div class="single-gallery-item">
            <img src="img/bg-img/gg6.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/gg6.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>



         <div class="single-gallery-item">
            <img src="img/bg-img/gg10.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/gg10.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/gg11.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/gg11.jpg" class="btn gallery-img">See More +</a>
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

                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-atoms"></i>
                        <h2><span class="counter">5632</span>k</h2>
                        <h6>Pacients</h6>

                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-microscope"></i>
                        <h2><span class="counter">5</span></h2>
                        <h6>Specialities</h6>

                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact-area text-center mb-100">
                        <i class="icon-doctor-1"></i>
                        <h2><span class="counter">47</span></h2>
                        <h6>Doctors</h6>

                    </div>
                </div>
            </div>
        </div>
    </section>


      <!-- ***** Experienced Doctors Area Start ***** -->
  </br>

<section class="doctor_part section_padding" id="doctor_part">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-8">
<div class="section_tittle text-center">
<h2> Experienced Doctors</h2>
</br>

</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor2/1.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="3" data-toggle="modal" data-target="#exampleModalCenter"><i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/ayham.chaabo"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Ayham Shaabu</h3>
<p>Heart specialist</p>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">DR Ayham Shaabu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>DR Ayham Shaabu</h3>
<p>Heart specialist</p>
        <img src="img/doctor/doctor2/1.jpg" alt="doctor">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Contact</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor2/2.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/profile.php?id=100001922906727"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/4.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/5.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/jamsaker"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/16.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/mazen.alrustom"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Mazen ALrustom</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor2/7.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/manal.saleh.56481"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/8.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/randasalom"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/9.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/10.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/11.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/youssef.aboutabikh"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/12.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/ahmad.dayoub"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/13.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/yamen.khaddor"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Yamen Khadour</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor2/14.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/yousof.ghanem"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/15.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/doctor2/6.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/anita.abbas.395"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Anita Abbas</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor2/17.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/souad.rajab.1"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Souad Rajab</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor2/18.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/profile.php?id=100017281214703"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Eiad Hammad</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor2/19.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Mohammad Kadro</h3>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/doctor2/20.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h3>DR Qousay Mahfoud</h3>
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
</br>

</div>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/1.jpg" alt="doctor" >

<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/sally.almohammad"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/2.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/adnan.mustafa.334"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>Dr Adnan Mustafa</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/3.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/Karam.Baddour"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/4.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/taym.hishma"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/5.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/ima1989dhh"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/6.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/hossam.teftafeh"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/7.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/alaa.kajo"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/8.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/Noro304"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/9.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/profile.php?id=100008882281727"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/18.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/housam.japour.5"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/11.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/eyad.maalla.1"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/12.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/abud.mohammed.1"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/13.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Hozan H</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/14.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/15.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/16.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/17.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/20.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Kinan Souliman</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/19.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Akram sh</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/25.png" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/sadoun.sh.sa"> <i class="ti-facebook"></i> </a></li>
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
<img src="img/doctor/21.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Ossama hussen</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/22.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="https://www.facebook.com/profile.php?id=100011268165725"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Ahmad Hassan</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/23.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Bassel Mohammad</h4>
<p>Heart specialist</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="single_blog_item">
<div class="single_blog_img">
<img src="img/doctor/24.jpg" alt="doctor">
<div class="social_icon">
<ul>
<li><a href="#"> <i class="ti-user"></i> </a></li>
<li><a href="#"> <i class="ti-email" ></i> </a></li>
<li><a href="#"> <i class="ti-facebook"></i> </a></li>
<li><a href="#"> <i class="ti-skype"></i> </a></li>
</ul>
</div>
</div>
<div class="single_text">
<div class="single_blog_text">
<h4>DR Hamzah Masoud</h4>
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
</br>

</div>



      <div class="medilife-gallery-area owl-carousel">



        <!-- Single Gallery Item -->
        <div class="single-gallery-item">
            <img src="img/bg-img/ggg1.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg1.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/ggg2.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg2.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/ggg3.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg3.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/ggg4.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg4.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/ggg5.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg5.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/ggg13.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg13.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/ggg14.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg14.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/ggg15.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg15.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>



        <div class="single-gallery-item">
            <img src="img/bg-img/ggg16.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg16.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/ggg17.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg17.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>

         <div class="single-gallery-item">
            <img src="img/bg-img/ggg20.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg20.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/ggg21.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg21.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/ggg22.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg22.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/ggg23.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg23.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
         <div class="single-gallery-item">
            <img src="img/bg-img/ggg24.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg24.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>
        <div class="single-gallery-item">
            <img src="img/bg-img/ggg25.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg25.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>

        <div class="single-gallery-item">
            <img src="img/bg-img/ggg29.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg29.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>



           <div class="single-gallery-item">
            <img src="img/bg-img/ggg35.jpg" alt="">
            <div class="view-more-btn">
                <a href="img/bg-img/ggg35.jpg" class="btn gallery-img">See More +</a>
            </div>
        </div>


    </div>



     <!-- ***** The unknown soldiers End***** -->







    <!-- ***** Blog Area/ Medical Articles Start ***** -->
    <div class="medilife-blog-area section-padding-100-0" id="part3">
        <div class="container">
            <div class="section_tittle text-center">
<h2> Latest Medical Articles </h2>
</br>

</div>
            <div class="row">


                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                        <a  href="/ventilation" >     <img   src="img/blog-img/1.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a>May 23, 2020</a>
                            </div>
                        </div>


                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a  href="/ventilation" ><img src="img/blog-img/p1.jpg" alt=""></a>
                            </div>
                            <a href="/ventilation" class="headline">Automatic_ventilation device</a>
                            <p>There has been a lot of talk about it along with the increase in the spread of corona virus, it is the thread that connects the injured in the critical cases of pulmonary failure to life, # ventilation_a Mechanism What do we know about it !!?</p>
                            <a href="/ventilation"  class="comments">10 Comments</a>
                        </div>
                    </div>
                </div>




                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                           <a  href="/corona" >  <img  href="#" src="img/blog-img/2.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jun 3, 2020</a>
                            </div>
                        </div>




                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="/corona"><img src="img/blog-img/p1.jpg" alt=""></a>
                            </div>
                            <a href="/corona" class="headline">Pung_corn_mask_krona</a>
                            <p>pneumonia is an inflammation of the lung vesicles that causes them to be filled with pus and fluid..</p>
                            <a href="#" class="comments">3 Comments</a>
                        </div>
                    </div>
                </div>



                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                         <a  href="/smoking" >    <img src="img/blog-img/3.jpg" alt=""></a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jun 15, 2020</a>
                            </div>
                        </div>




                        <!-- Post Content -->
                        <div class="post-content">
                            <div class="post-author">
                                <a href="/smoking"><img src="img/blog-img/p1.jpg" alt=""></a>
                            </div>
                            <a href="/smoking" class="headline">Smoking and heart health</a>
                            <p>Smoking causes structural changes in the heart and the blood it pumps into the body and weakens their ability to function normally.. </p>
                            <a href="/smoking" class="comments">5 Comments</a>
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
</br>

</div>
            <div class="row">


                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <a > <img src="img/blog-img/1g.jpg" alt="">
                           <div class="view-more-btn">
                <a href="img/blog-img/1g.jpg" class="btn gallery-img">See More +</a>
            </div>


                            </a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >May 23, 2020</a>
                            </div>
                        </div>


                        <!-- Post Content -->
                        <div class="post-content">

                            <a  class="headline">Request for internal offers</a>


                        </div>
                    </div>
                </div>




                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                            <a > <img src="img/blog-img/2g.jpg" alt="">


           <div class="view-more-btn">
                <a href="img/blog-img/2g.jpg" class="btn gallery-img">See More +</a>
            </div>







                            </a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jan 15, 2020</a>
                            </div>
                        </div>




                        <!-- Post Content -->
                        <div class="post-content">

                            <a  class="headline">Request for internal offers</a>


                        </div>
                    </div>
                </div>



                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area mb-100">
                        <!-- Post Thumbnail -->
                        <div class="blog-post-thumbnail">
                         <a >    <img src="img/blog-img/3g.jpg" alt="">


                              <div class="view-more-btn">
                <a href="img/blog-img/3g.jpg" class="btn gallery-img">See More +</a>
            </div>


                         </a>
                            <!-- Post Date -->
                            <div class="post-date">
                                <a >Jun 20, 2020</a>
                            </div>
                        </div>




                        <!-- Post Content -->
                        <div class="post-content">

                            <a  class="headline">Cardio exercises are good for heart health</a>


                        </div>

                    </div>


                </div>
                 <div class="medica-about-content">

                   <a href="/hospitalNews" class="btn medilife-btn mt-50" >View More... <span>+</span></a>
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
 <script>
    $("#makeapp").click(function(){
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation is not supported by this browser.");
        }
        $.post('/makeappoinment',$('#appform').serialize());



    });
    function showPosition(position) {
        $("#location").val(position.coords.latitude +
    "," + position.coords.longitude);
    }
 </script>
    @endsection
