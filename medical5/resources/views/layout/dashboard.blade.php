<!DOCTYPE html>
<html>
<head>
    <title></title>
	
    <meta  charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <style>
         body,
         html{
             min-height:100%;     
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
          body {
             background-image: url("run44.jpg");
             background-repeat: no-repeat;
              background-size: cover;            
        }

         .bg-img {
            /* The image used */
          background-image: url("run44.jpg");

            /* Center and scale the image nicely */

           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           position:relative;
           background-attachment:fixed;

        }
           .container {
          position: fixed;
         // right: 70px ;
          //left: 100;
            margin: 10px 250px;
            max-width: none ;
            padding: 0px;
           background-color: none;
         //  float:left;

            }
          
          .icon {
            position: fixed;
            right:20px;
            top: 12px;
        }
          .dropdown {
    position: fixed;
    display: inline-block;
    top: 12px;
    right:10px;
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

        .facebook {
          background: #3B5998;
          color: white;
        }

        .twitter {
          background: #55ACEE;
          color: white;
        }

        .google {
          background: #dd4b39;
          color: white;
        }

        .linkedin {
          background: #007bb5;
          color: white;
        }

        .youtube {
          background: #bb0000;
          color: white;
        }

        .content {
          margin-left: 75px;
          font-size: 30px;
        }



        .btn {
           background-color: rgba(80, 151, 164, 0.55)  ;
           border: none;
           color: black;
         //  padding: 16px 20px;
           text-align: center;
           font-size: 16px;
           margin: 6px 10px;
           transition: 0.1s;
           height: 160px;
           width: 150px;
           opacity: 0.98;
           font-size: initial;
           text-transform: uppercase;
           padding: 5px 5px;
          border-radius: 16px;
          float:left;
          cursor: pointer;
            }

        .btn:hover 
           {
     //   background-color: #154360 ;
     background-color: #4CAF50;

     
          color: white;
            }

       
        
       

   
    @yield('styles')

    </style>
</head>
<body>
   
    <!--  <span class="skype-button bubble " data-contact-id="hope.love90"></span>
    <script src="https://swc.cdn.skype.com/sdk/v1/sdk.min.js"></script> -->
   
   
       @yield('content')
        <div class="icon-bar">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="google"><i class="fa fa-google"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
        </div>
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


    <!-- Go to www.addthis.com/dashboard to customize your tools 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5b93223dd0ae96e8"></script>  -->

</body>
</html>