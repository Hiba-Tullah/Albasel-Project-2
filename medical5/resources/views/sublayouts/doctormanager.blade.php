
@extends('layout.master3')
@section('content')


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

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 150px;
  padding: 10px;
  height: 150px;
  
  margin:5px;
  
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
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

        .btn:hover 
           {
     //   background-color: #154360 ;
     background-color: #4CAF50;

     
          color: white;
            }






             /* Dropdown Button */
.dropbtnn {
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

/* The container <div> - needed to position the dropdown content */
.dropdownn {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdownn-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdownn-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdownn-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdownn:hover .dropdownn-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdownn:hover .dropbtnn {background-color: #3e8e41;} 
           
       
        
    </style>
       

   
    @yield('styles')


<audio controls="controls" autoplay hidden>
<source src="img/Heartbeat2.mp3" type="audio/mp3" />
</audio>


<div style="padding-top: 50px">
               <h1>
                <b style="padding-left: 80px"> Welcome Doctor ! </b>

               </h1>

</div>


        <!-- Main Footer Area     class="section-padding-100"-->
        <div class="main-section-area">
           




                <div class="row" style="padding-left: 60px">

                 <div class="column" >

                            <div class="widget-title">
                               
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalLoginForm">
                                <b>  My Profile </b>
                          </button>
                            </div>
                            <div id="ModalLoginForm" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">My Profile</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <label class="control-label">First Name</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Last Name</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">middle Name</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">Mother Name</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">E-Mail Address</label>
                                        <div>
                                            <input type="email" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <div>
                                            <input type="password" class="form-control input-lg" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Identity Number</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Phone</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Mobile</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="password">
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="control-label">Birthdate</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="password">
                                        </div>
                                    </div>
                                    
                                    
                                  
                                    <div class="form-group">
                                        <label class="control-label">Gender</label>
                                        <div>
                                           
                                            
                                <select name="gender"> 
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select> 
                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></br>Blood Type</label>
                                        <div>
                                           
                                            
                               <select name="blood"  > 
                                    <option value="1">O+</option>
                                    <option value="2">O-</option>
                                    <option value="3">A+</option>
                                    <option value="4">A-</option>
                                    <option value="5">B+</option>
                                    <option value="6">B-</option>
                                    <option value="7">AB+</option>
                                    <option value="8">AB-</option>
                                </select>  
                            
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <label class="control-label"></br>Medical history</label>
                                        <div>
                                            <input type="textarea" class="form-control input-lg" name="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                           
                 </div>
                      


                                      


                 <div class="column">
                       
                            <div class="widget-title">
                             
                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Modal">
                                <b> Schedule of</br> Operations
                          </button>
                            </div> 


                            <div id="Modal" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

           <h5 class="modal-title" id="exampleModalLabel">Schedule Of Operations</h5>
                                

                                  <div class="form-group">
                                        <div>

                                  XXXXXXXXXXXXX
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                            </div>
                             </div> </div> </div> 
                </div>
                             
                        
                               
                                 <div class="column">
                       
                            <div class="widget-title">
                             
                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Modal">
                               <b>Schedule of </br> cardiac</br> catheter</b>
                          </button>
                            </div> 


                            <div id="Modal" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

           <h5 class="modal-title" id="exampleModalLabel">Schedule Of Catheter</b></h5>
                                

                                  <div class="form-group">
                                        <div>

                                  XXXXXXXXXXXXX
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                            </div>
                             </div> </div> </div> 
                </div>
                             

               
                      



                 <div class="column">
                      
                            <div class="widget-title">
                                 <button class="btn" onclick="window.location.href = 'http://192.168.1.25:8080/html/live.htm';" > <b>Cameras </b></button>
                            </div>
                </div>

                <div class="column">
                      
                        
                            <div class="widget-title">

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Order</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Medical Staff</a>
                                    <a href="#">stationery</a>
                                    <a href="#">maintenance</a>
                                  </div>
                                </div> 
                            </div> 

                            
                </div>
                        
 



                           <div class="column">
                      
                  
                            <div class="widget-title" >
                                 <button class="btn"> <b>Add <BR>Employees </br>Of </br> The Week</b></button>
                            
                            </div>
                    
                    </div>
                       <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Room </br> Diagram </b></button>
                            </div>
                            
                            </div>
                        
                    
                    
                  
                             <div class="column">
                      
                        
                            <div class="widget-title">

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Reports</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Patients</a>
                                    <a href="#">Storage</a>
                                    <a href="#">Laboratory</a>
                                  
                                    <a href="#">Pharmacy</a>
                                    
                                    
                                  </div>
                                </div> 
                            </div> 

                            
                </div></div>

                      
                        
           <div class="row" style="padding-left: 60px">

                 
                      
                       <div class="column">
                      
                        
                            <div class="widget-title">

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Add</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Medical Article</a>
                                    <a href="#">New Patient</a>
                                    
                                  </div>
                                </div> 
                            </div> 

                            
                </div>





                  
                        
                         <div class="column">
                      
                        
                            <div class="widget-title">

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Doctors</br>& Nursery </br>Duties</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Specialist Doctors</a>
                                    <a href="#">Resident Doctors</a>
                                    <a href="#">Nursery</a>
                                  
                                    
                                    
                                    
                                  </div>
                                </div> 
                            </div> 

                            
                </div>

                       
                          


                        <div class="column">
                       
                            <div class="widget-title">
                             
                              <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#Complaints">
                               <b>Complaints</b>
                          </button>
                            </div> 


                            <div id="Complaints" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

           <h5 class="modal-title" id="exampleModalLabel">Complaints</b></h5>
                                

                                  <div class="form-group">
                                        <div>

                                  XXXXXXXXXXXXX
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                            </div>
                             </div> </div> </div> 
                </div>
                        



                         
                       
                                
                                     
                          <div class="column">
                      
                        
                            <div class="widget-title">

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Messages</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Show Messages</a>
                <a  data-toggle="modal" data-target="#exampleModal" >Send Message</a>
                                    
                                  </div>
                                </div> 
                            </div> 
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <form>
                                        <div class="form-group">
                                          <label for="recipient-name" class="col-form-label">Recipient:</label>
                                          <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        </div>
                                        <div class="form-group">
                                          <label for="message-text" class="col-form-label">Message:</label>
                                          <textarea class="form-control" id="message-text" autofocus style="background-color: #7b7f80"></textarea>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-secondary" data-dismiss="modal"><b>Close<b></button>
                                      <button type="button" class="btn btn-primary"><b>Send</br> message<b></button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            
                </div>

                       
                           
                  
                 
                        
                    

                             <div class="column">
                      
                        
                            <div class="widget-title">

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Laboratory</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Blood Bank Balance</a>
                                    <a href="#">Blood's Donation</a>
                                    
                                  </div>
                                </div> 
                            </div> 

                            
                </div>
                     



                            
                            <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn" onclick="window.location.href = '/hospitalblog';"> <b>Hospital's </br> News</b></button>
                            </div>
                            
                            </div>



                          


                               <div class="column">
                      
                        
                            <div class="widget-title">

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Medical Blog</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Medical Articles</a>
                                    <a href="#">Medical Library</a>
                                    <a href="#">Health Care Dictionary</a>
                                  </div>
                                </div> 
                            </div> 

                            
                </div>

                   <div class="column">
                      
                        
                            <div class="widget-title">

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Related</br> Websites</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Albasel Portal</a>
                                    <a href="#">Aman Portal</a>
                                    <a href="#">Ministry Of Health</a>
                                    <a href="#">Directorate of Health</a>
                                    <a href="#">Human Resources Watch</a>
                                  </div>
                             </div> 
                            </div> 

                            
                       </div>
                       </div>




                       <div class="row" style="padding-left: 60px">


                      <div class="column">

                              <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#GiftCredit"> <b>Gift </br>Credit</b></button>
                            </div>
                  <div id="GiftCredit" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">My Balance & Gift Credit</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <label class="control-label">My Balance Is:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gift Credit:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">To :</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                Gift
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                  
                          
                      

                        <div class="column">  
                        
                            <div class="widget-title">
                                 <button class="btn"> <b> Future </br> Plans</b></button>
                            </div>
                            
                            </div> 


                               <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn" onclick="window.location.href = 'http://www.moh.gov.sy/Default.aspx?tabid=56&language=ar-YE';"> <b> Health  </br>Ministry's  </br>New News  </b></button>
                            </div>
                            
                            </div>



                              <div class="column">

                              <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#FindPatient"> <b>Find </br>Patient</b></button>
                            </div>
                  <div id="FindPatient" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Find Patient</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <label class="control-label">Identity Number</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Case</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                  

                          
                  
                       <div class="column">

                              <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#Search"> <b>Search</b></button>
                            </div>
                  <div id="Search" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Search</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                Search
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                  
                             <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn" onclick="window.location.href = 'https://www.facebook.com/%D8%A7%D9%84%D9%87%D9%8A%D8%A6%D8%A9-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9-%D9%84%D9%85%D8%B4%D9%81%D9%89-%D8%A7%D9%84%D8%A8%D8%A7%D8%B3%D9%84-%D9%84%D8%A3%D9%85%D8%B1%D8%A7%D8%B6-%D9%88%D8%AC%D8%B1%D8%A7%D8%AD%D8%A9-%D8%A7%D9%84%D9%82%D9%84%D8%A8-%D9%81%D9%8A-%D8%A7%D9%84%D9%84%D8%A7%D8%B0%D9%82%D9%8A%D8%A9-BHL-951296891552192/?ref=page_internal';"> <b>Facebook</b></button>
                            </div>
                            
                            </div> 
                                <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn" onclick="window.location.href = 'http://www.youtube.com';" > <b>Youtube</b>
                                 </button>
                            </div>
                            
                            </div> 
                           
                               <div class="column">

                              <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#M1"> <b>My </br>Progress</b></button>
                            </div>
                  <div id="M1" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">My Progress</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <label class="control-label">Date:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="date" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Type Of Progress:</label>
                                         <div class="form-group">
                                             <select name="blood"  > 
                                    <option value="1">Sergury</option>
                                    <option value="2">qathter</option>
                                    <option value="8">Puncture</option> 
                                    <option value="3">Echo</option>
                                    <option value="4">Heart <br>Effort test</option>
                                    <option value="5">Pulse <br>Holter</option>
                                    <option value="6">Pressure<br> Holter</option>
                                    <option value="7">Weaning<br> patient</option>
                                    <option value="8">Draw<br><br> blood</option> 
                                    <option value="7">Breath <br>test</option> 
                                </select>  
                                        </div>
                                    </div>
                                    
                                  
                                    <div class="form-group">
                                        <label class="control-label">Patient ID:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                Add
                                            </button>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                Show My<br> Progress
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            
                            </div> 
                          </div>
                        </div>
                      </div>
                    </div>
                            




                            <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                   <b>     {{ __('Logout') }} </b>
                                 

                                 </button>
                          

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                          
                            </div>
                            
                            </div> 



                             <div class="column">
                       
                            <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#article"> <b>Add </br>New</br>Article  </b></button>
                            </div>
                  <div id="article" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Add New Article</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                            <div class="form-group">
                                        
                                         <div>
                                          Enter Details:
                                         
                                        </div>
                                         <label class="control-label">Title</label>
                                       <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                       
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">Body</label>
                                        <div>
                                           <textarea id="w3mission" rows="4" cols="50">
       
                                    </textarea>
                                        </div>
                                        <div>
                                <label class="control-label">Upload Image</label>
                                    <form action="/action_page.php">
                                    
                                    <input type="file" id="img" name="img" accept="image/*">
                                    
                                  </form>
                                        </div>
                                         <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Save
                                            </button>

                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                    </div>
                            </div> 
                            
                          </div></form></div></div></div></div></div>



  <div class="column">
                       <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#dd"> <b>Done?</b></button>
                            </div>
                  <div id="dd" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Device: Printer Brother</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                  
                            
                                
                                      <div class="form-group">
                                        <label class="control-label">SN:E393965F6</label>
                                      
                                    </div>
                                     
                                     <div class="form-group">
                                        <label class="control-label">Quantity: 1 </label>
                                         <div>
                                           
                                        </div>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">Date: 11/1/2020 </label>
                                        <div>
                                            
                                        </div>
                                        <div>
                                           <label class="control-label">Room: 105</label>
                                             
                                        </div>
                                    </div>
                                   


                                  
                                        <div>
                                           <label class="control-label">Fixed/Work</label>
                                             <input type="checkbox" name="" value="noexp">
                                        </div>
                                        <div>
                                           <label class="control-label">No</label>
                                             <input type="checkbox" name="" value="noexp">
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            
                            </div> 
                          </div>
                        </div>
                      </div>
                            
                              
                     </div>


                        </div>


                       
   </div>
</div>



@endsection