<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Albasel Hospital Portal - Health &amp; Medical  | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
    
  

</head>

<style type="text/css">

        *
        {
            -webkit-border-radius: 0px  !important;
            -moz-border-radius: 0px  !important;
            border-radius: 0px !important;
        }
        html, body
        {
            padding: 0;
            margin: 0;
            position: relative;
        }
     
.avatar {
  vertical-align: middle;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

  /* Tooltip container */
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black; /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  padding: 5px 0;
  border-radius: 6px;
 
  /* Position the tooltip text - see examples below! */
  position: absolute;
  z-index: 1;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
  visibility: visible;
}
       .icon {
            position: fixed;
            right:20px;
            top: 12px;
        }
          .dropdown {
    position: relative;
    display: inline-block;

}
          .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
  //  min-width: 160px;
   box-shadow: 0px 12px 16px 0px #3e8e41;
   // z-index: 1;
}

          .dropdown-content a {
    color: black;
    padding: 12px 10px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}


.icon .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}


          .icon-bar {
          position: fixed;
            left: 0px;
            top: 0px;
          //  display:none;
             }
    

        .icon-bar a {
          display: block;
          text-align: center;
          padding: 16px;
          transition: all 0.3s   ease;
          color: white;
          font-size: 20px;
        }

        .icon-bar a:hover {
            background-color: #000;
          //  display: inline;
        }
 .bttn {
           background-color: rgba(80, 151, 164, 0.55)  ;
           border: none;
           color: black;
         //  padding: 16px 20px;
           text-align: center;
           font-size: 16px;
           margin: 6px 10px;
           transition: 0.1s;
           height: 100px;
           width: 120px;
           opacity: 0.98;
           font-size: initial;
           text-transform: uppercase;
           padding: 5px 5px;
          border-radius: 16px;
          float:left;
          cursor: pointer;
            }

        .bttn:hover 
           {
     
     background-color: #ff0000;

     
          color: white;
            }



    
</style>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="medilife-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area" style="position: relative!important;">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                           <p>Welcome to <span>Albasel Hospital Portal</span> 
                            <p>Opening Hours : Sunday to Thursday - 8am to 3pm Contact : <span>+96341374711</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader" >
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="/index"><img src="img/core-img/logo.png"  height="83px" width="80px" alt="Logo" ></a>

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="/index">Home <span class="sr-only">(current)</span></a>
                                        </li>
                                        
                                         @if(Auth::check())
                                        <div class="dropdown">
                                            <div class="icon">
                                               <input type="image" src="img/icons/heartlogo.png" alt="Submit" width="70" height="70">
                                              <span class="badge">3</span>
                                             <div class="dropdown-content">
                                                <a href="#">New message from dr Ayham</a>
                                                <a href="#">New Medical Order</a>
                                                <a href="#">New Comment</a>
                                              </div>
                                             </div> 
                                        </div>
                                        @endif
                                        
                                         <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/clinics">Clinics</a>
                                                <a class="dropdown-item" href="/heartSurgeries">Heart Surgeries</a>
                                                <a class="dropdown-item" href="/heartQathter">Heart Qathter</a>
                                                <a class="dropdown-item" href="/laboratory">Laboratory</a>

                                                
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Our Team</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/specialized">Specialized Doctors</a>
                                                <a class="dropdown-item" href="/resident">Resident Doctors</a>
                                                <a class="dropdown-item" href="/nursing">Nursing</a>
                                                <a class="dropdown-item" href="/employees">Employees </a>

                                                
                                            </div>
                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="/hospitalNews">Hospital News</a>
                                                <a class="dropdown-item" href="/medicalBlog">Medical Blog</a>
                                                <a class="dropdown-item" href="/medicalLibrary">Medical Library</a>
                                                <a class="dropdown-item" href="/medicalDectionary">Medical Dectionary</a>

                                                
                                            </div>
                                        </li>
                                            




                                        <li class="nav-item">
                                            <a class="nav-link" href="/contact">Contact</a>
                                        </li> 
                                        @if(!Auth::check())

                                         <li class="nav-item">
                                            <a class="nav-link" href="/aboutUs">About</a>
                                        </li>

                                        <li class="nav-item">
                                            
                                            <a class="nav-link" href="/register">Register</a>
                                          
                                        </li>
                                        <li class="nav-item">
                                            
                                            <a class="nav-link" href="/login">Login</a>
                                          
                                        </li>
                                       
                                        @else

                                        <li class="nav-item">
                                            
                                            <a class="nav-link" href="/dashboard">Dash Board</a>
                                          
                                        </li>



                                        <li class="nav-item">
                                            
                                            <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                 



                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                          
                                        </li>


                                        
                             
                                        @endif
                                            <!-- emergencies Button 
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="index.html">Home</a>
                                                <a class="dropdown-item" href="about-us.html">About Us</a>
                                                <a class="dropdown-item" href="services.html">Services</a>
                                                <a class="dropdown-item" href="blog.html">News</a>
                                                <a class="dropdown-item" href="single-blog.html">News Details</a>
                                                <a class="dropdown-item" href="contact.html">Contact</a>
                                                <a class="dropdown-item" href="{{asset('SyriaHos') }}">The Syrian Cardiologecal Aman Portal </a>
                                                <a class="dropdown-item" href="index-icons">Our Team</a>
                                            </div>
                  
                                         </li>
                                             emergencies Button -->
                                    </ul>
                                    <!-- emergencies Button -->
                                   
                                     @if(!Auth::check())
                                  <a href="#" class="btn medilife-appoint-btn ml-30" data-toggle="modal" data-target="#Modal">For <span>emergencies</span> Click here    </a>
                                   <div id="Modal" class="modal fade">
                                 <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                   <div class="modal-header">

                                 <h5 class="modal-title" id="exampleModalLabel">Please Login </h5>
                                
               
    
            <div class="card">
                <div class="card-header" style="background-color: #081f3e;color:#fff">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" >
                        @csrf

                        <div class="form-group row">
                            
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background-color: #7b7f80" >

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="background-color: #7b7f80">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <a class="btn btn-link" href="/register">
                                        {{ __('Click here to register') }}
                                    </a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div> </div> </div></div> 



                                     

                                  @else
                                    <a href="#" class="btn medilife-appoint-btn ml-30" data-toggle="modal" data-target="#Modal">For <span >emergencies</span> Click here   </a>
                                     <div id="Modal" class="modal fade">
                                 <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                   <div class="modal-header">

                                 <h5 class="modal-title" id="exampleModalLabel">Emergency Services</h5>
                                

                                  <div class="form-group">
                                        <div>

                                  
       <div class="main-section-area">
           




                <div class="row" style="padding-left: 60px">

                 <div class="column" >

                            <div class="widget-title">
                               
                                <button class="bttn"onclick="window.location.href = '/NearestDoctor';" > <b>Nearest <br>Doctor </b></button>
                            </div>
                           
                 </div>
                 <div class="column" >

                            <div class="widget-title">
                               
                                <button class="bttn" onclick="window.location.href = '/NearestPharmacy';"> <b>Nearest <br>Pharmacy </b></button>
                            </div>
                           
                 </div>
                 <div class="column" >

                            <div class="widget-title">
                               
                                <button class="bttn" onclick="window.location.href = '/OnlineDoctor';" > <b>Ask <br>Doctor<br> Online </b></button>

                            </div>
                           
                           
                 </div>
                 <div class="column" >

                            <div class="widget-title">
                               
                                <button class="bttn" type="none" > <b>call<br>Hot<br>Line 113
                               </b></button>
                            </div>
                           
                 </div>
        </div>
      </div>
    </div>


               <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                            </div>
                             </div> </div> </div>

                                    @endif


                                











                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    @yield('content')






    
    <!-- ***** Emergency Area End ***** -->






    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-50 align-items-center" >
       
        <div class="bottom-footer-area" >
            <div class="container-fluid">
                <div class="row ">
                    <marquee behavior="scroll" direction="left"><a style="color: red" href="hotLine">HOT LINE >>>   There are no unknown emergencies! </a></marquee>
                    <div class="col-12 col-md">
                        <div class="bottom-footer-content">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">

     

 <div class="footer-social-info">
                                 <a href="/aboutUs"> <i  aria-hidden="true" >About Us </i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                                 <a  href="{{asset('SyriaHos') }}"> <i  aria-hidden="true" > The Syrian Cardiologecal Aman Portal </i></a> &nbsp;&nbsp;&nbsp;&nbsp;
                                

                                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="https://www.facebook.com/%D8%A7%D9%84%D9%87%D9%8A%D8%A6%D8%A9-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9-%D9%84%D9%85%D8%B4%D9%81%D9%89-%D8%A7%D9%84%D8%A8%D8%A7%D8%B3%D9%84-%D9%84%D8%A3%D9%85%D8%B1%D8%A7%D8%B6-%D9%88%D8%AC%D8%B1%D8%A7%D8%AD%D8%A9-%D8%A7%D9%84%D9%82%D9%84%D8%A8-%D9%81%D9%8A-%D8%A7%D9%84%D9%84%D8%A7%D8%B0%D9%82%D9%8A%D8%A9-BHL-951296891552192/?epa=SEARCH_BOX"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                
                            </div>
                      
                                           <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/hbt.allh.108?ref=bookmarks" target="_blank">Eng Hiba Tullah Mahmoud</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
                

    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
   

</body>

</html>