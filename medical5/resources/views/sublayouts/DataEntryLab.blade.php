
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
                              <button class="btn"> <b> Schedule of</br> operations</b></button>
                            </div> 
                </div>
                             
                        


                <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Schedule of </br> cardiac</br> catheter</b> </button>
                            </div>
                            
                </div>
                      



                

                <div class="column">
                      
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Order </br> medical  </br>supplies</b></button>
                            </div>
                            
                </div>
                        

                 <div class="column">
                      
                       
                            <div class="widget-title">
                                 <button class="btn"> <b>Order </br> stationery</b></button>
                            </div>
                            
                 </div>
                        



                 <div class="column">
                      
                        
                            <div class="widget-title">
                                 <button class="btn"><b>Order</br>maintenance</b></button>
                            
                                
                               
                            </div>

           </div>


                           
                    
                    
                     <div class="column">
                    <div class="widget-title">
                              <button class="btn"> <b> Doctors  </br>Duties</b></button>
                            </div>
                            
                     </div>
                        

                         <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Nursery </br> Duties </b></button>
                            </div>
                            
                            </div>
                          
                  </div>
                      
                        
           <div class="row" style="padding-left: 60px">

                 



                         <div class="column">
                      
                            <div class="widget-title"  >
                                 <button class="btn"> <b>Messages</b></button>
                            </div>
                            
                            </div>
                  
                                
                       
                        
                  
                 

                            
                            <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn"> <b>Hospital's </br> News</b></button>
                            </div>
                            
                            </div>



                      




                      

                                  
                     
                          
                       
                                 

                        <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Medical  </br>Library</b></button>
                            </div>
                            
                              
                            </div>
                             
                       



                        <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Related  </br>Websites</b></button>
                            </div>
                            
                              
                            </div>
                          
                      
                          
                       


                      

                    

                         <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>  Aman Portal </b></button>
                            </div>
                            
                                
                        </div>



                        <div class="column">
                      
                            <div class="widget-title">
                                 <button class="btn"> <b>Albsel  </br>Portal<b></button>
                            </div>
                            
                            </div>
                        



                        <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>   Health Care </br>Dectionary </b></button>
                            </div>
                            
                            
                             </div>

                        <div class="column">
                             <div class="widget-title">
                                 <button class="btn"> <b>Reports</b></button>
                            </div>
                            
                               
                            </div>
                            
                             
                           </div>
                             
 

                  <div class="row" style="padding-left: 60px">
                    
              
                        
                            

                             <div class="column">
                       <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#today"> <b>Enter  </br>Today's  </br> analyzes</b></button>
                            </div>
                  <div id="today" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Enter Today's Laboratory analyzes</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                            
                                
                                      <div class="form-group">
                                        <label class="control-label">Type:</label>
                                      
                                    </div>
                                     
                              <div class="form-group">
                                        
                                    <select name="Sort"  > 
                                    <option value="1">Germ</option>
                                    <option value="2">Bloody</option> 
                                     <option value="2">Bacterial</option> 
                                </select>  
                              </div>
                               <div class="form-group">
                                        
                                    <select name="Sort"  > 
                                    <option value="1">CRP</option>
                                    <option value="2">Sugar</option> 
                                     <option value="2">CBC</option> 
                                </select>  
                              </div>
                               
                                     <div class="form-group">
                                        
                                         <div>
                                          <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                         
                                        </div>
                                         <label class="control-label">Name:</label>
                                       <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">ID:</label>
                                        <div>
                                           <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        </div>
                                        <div>
                                <label class="control-label">Test Result</label>
                                    <form action="/action_page.php">
                                    <label for="img">Select image:</label>
                                    <input type="file" id="img" name="img" accept="image/*">
                                    <input type="save">
                                  </form>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Notes:</label>
                                        <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        
                                    </div>

                                        <div>
                                           <label class="control-label">Date-> DD/MM/YY </label>
                                           <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
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
                            
                              
                     
                           
                          


                              <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Change </br> Nursing  </br>Duties </b></button>
                            </div>
                             
                          </div>
                          <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Change </br> Doctor  </br>Duties </b></button>
                            </div>
                             
                          </div>


                             <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn"> <b> Health  </br>Ministry's  </br>New News  </b></button>
                            </div>
                            
                            </div>
                           
                            <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn"> <b>Medical </br>Articles</b></button>
                            </div>
                            
                            </div> 
                            <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn"> <b>Facebook</b></button>
                            </div>
                            
                            </div> 
                            <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn"> <b>Youtube</b></button>
                            </div>
                            
                            </div>

                           

                             <div class="column">
                       <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#today2"> <b>Update <br>Blood </br> bank </br> balance</b></button>
                            </div>
                  <div id="today2" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title"><b>Update Blood bank balance</b></h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                   <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                            
                                
                                      <div class="form-group">
                                        <label class="control-label">Type:</label>
                                      
                                    </div>
                                     
                              <div class="form-group">
                                        
                                     <select name="blood Type"  > 
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
                               
                               
                                     <div class="form-group">
                                        
                                         <div>
                                            <input type="text" class="form-control input-lg" name="Date" value="">
                                        </div>
                                         <label class="control-label">Quantity:</label>
                                        <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                    </div>
                                     
                               
                                       
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Entrye Date-> DD/MM/YY </label>
                                        <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Expire Date-> DD/MM/YY </label>
                                        <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">Name:</label>
                                        <input type="text" class="form-control" id="recipient-name" autofocus style="background-color: #7b7f80" >
                                        
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
                            
                              
                     </div></div>


                            </div>


                                  <div class="row" style="padding-left: 60px">

                            <div class="column">
                      
                            <div class="widget-title">
                                 <button class="btn"> <b>Update </br> Blood's </br> donation</b></button>
                            </div>
                            
                              
                            </div>
                             <div class="column">
                       <div class="widget-title">
          <button class="btn btn-primary" data-toggle="modal" data-target="#Search"> <b>Update<br>Laboratory<br>Storage</b></button>
                            </div>
                  <div id="Search" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Update Laboratory Storage</h1>
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
                                        <label class="control-label">Name:</label>
                                       <input type="text" class="form-control input-lg" name="" value="">
                                    </div></label>
                                      

                                   
                                    <div class="form-group">
                                        <label class="control-label">Quantity:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Entry Date:</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="Date" value="">
                                        </div>
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
                                 <button class="btn"> <b>Find</br> Patient</b></button>
                            </div>
                            
                            </div> 
                           
                          
                          <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn"> <b>Search</b></button>
                            </div>
                            
                            </div> 
                           
                          


                            <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn"> <b>Logout</b></button>
                            </div>
                            
                            </div> 
                          </div>


                       
   </div>
</div>



@endsection