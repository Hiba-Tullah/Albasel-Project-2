<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> The Syrian Cardiologecal Aman Portal &amp; Medical  | Home</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('style.css')}}">

</head>

<style type="text/css">
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
                           <p>Welcome to <span>The Syrian Cardiologecal Aman Portal</span> 
                            <p><span>Best Care  |  Best Doctors</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>

    @yield('content')
 <footer class="footer-area section-padding-50 align-items-center" >

      <div class="bottom-footer-area" >
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-12 col-md">
                        <div class="bottom-footer-content">
                            <!-- Copywrite Text -->
                            <div class="copywrite-text">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made  <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/hbt.allh.108/" target="_blank">Eng Hiba Tullah Mahmoud</a>
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