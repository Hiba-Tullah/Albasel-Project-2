
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
                <b style="padding-left: 80px"> Welcome ! </b>

               </h1>

</div>


        <!-- Main Footer Area     class="section-padding-100"-->
        <div class="main-section-area">
           

                <div class="row" style="padding-left: 60px">

                 <div class="column" >

                            <div class="widget-title">
                               
                                <button class="btn" > <b>My Profile </b></button>
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
                       <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#Search"> <b>Update<br>Storage</b></button>
                            </div>
                  <div id="Search" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Update Storag</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                             <label class="control-label">Sort:  
                              <div class="form-group">
                                        
                                    <select name="Sort"  > 
                                    <option value="1">Medical</option>
                                    <option value="2">None Medical</option>
                                    
                                </select>  
                                       
                                    </div></label>
                                     <label class="control-label">None Medical:  
                              <div class="form-group">
                                        
                                    <select name="Sort"  > 
                                    <option value="1">Pens</option>
                                    <option value="2">soap</option>
                                    
                                </select>  
                                       
                                    </div></label>
                                      

                                   
                                    <div class="form-group">
                                        <label class="control-label">Quantity:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Expire Date:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="Date" value="">
                                        </div>
                                        <div>
                                           <label class="control-label">No Expire Date</label>
                                             <input type="checkbox" name="" value="noexp">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                Update
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
          <button class="btn btn-primary" data-toggle="modal" data-target="#today"> <b>Enter  </br>Today's  </br>Moves</b></button>
                            </div>
                  <div id="today" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Enter Today's Moves</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                            
                                
                                      <div class="form-group">
                                        <label class="control-label">Outbound:</label>
                                      
                                    </div>
                                     <label class="control-label">Sort:  
                              <div class="form-group">
                                        
                                    <select name="Sort"  > 
                                    <option value="1">Medical</option>
                                    <option value="2">None Medical</option>
                                    
                                </select>  
                              </div>
                                <div class="form-group">
                                        
                                    <select name="Sort"  > 
                                    <option value="1">Cering</option>
                                    <option value="2">Anesthetic</option>
                                    
                                </select>  
                                       
                                    </div></label>
                                     <div class="form-group">
                                        <label class="control-label">Quantity:</label>
                                         <div>
                                            <input type="text" class="form-control input-lg" name="Date" value="">
                                        </div>
                                        
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">Expire Date:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="Date" value="">
                                        </div>
                                        <div>
                                           <label class="control-label">No Expire Date</label>
                                             <input type="checkbox" name="" value="noexp">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Incoming:</label>
                                        
                                    </div>

                                     <label class="control-label">Sort:  
                              <div class="form-group">
                                        
                                    <select name="Sort"  > 
                                    <option value="1">Medical</option>
                                    <option value="2">None Medical</option>
                                    
                                </select>  
                                       
                                    </div></label>

                                   
                                    <div class="form-group">
                                        <label class="control-label">Quantity:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Expire Date:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="Date" value="">
                                        </div>
                                        <div>
                                           <label class="control-label">No Expire Date</label>
                                             <input type="checkbox" name="" value="noexp">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                Enter
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

                              <div class="dropdownn" style="float:left;">
                                  <button class="dropbtnn"><b>Reports</b></button>
                                  <div class="dropdownn-content" style="left:0;">
                                    <a href="#">Outbound</a>
                                    <a href="#">Incoming</a>
                                    <a href="#">The store</a>
                                  
                                  
                                    
                                    
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
                
                          
                          
                    

                     </div>
               

                      
                        
           <div class="row" style="padding-left: 60px">

                 
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
                          
                      
                          
                            
                            
                               <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn" onclick="window.location.href = 'http://www.moh.gov.sy/Default.aspx?tabid=56&language=ar-YE';"> <b> Health  </br>Ministry's  </br>New News  </b></button>
                            </div>
                            
                            </div>
                            

                           
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
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Gift Credit:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">To :</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
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







                          
                           
                          </div>



              

                       
   </div>
</div>



@endsection