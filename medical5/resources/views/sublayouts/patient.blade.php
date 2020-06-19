
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


.danger {
  background-color: #ffdddd;
  border-left: 6px solid #f44336;
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

         .btncorona {
           background-color: red  ;
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


             .btncorona:hover 
           {
     //   background-color: red ;
     background-color: #4CAF50;

     
          color: white;
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

       
        
    </style>
       

   
    @yield('styles')


<audio controls="controls" autoplay hidden>
<source src="img/Heartbeat2.mp3" type="audio/mp3" />
</audio>


<div style="padding-top: 50px">
               <h1>
                <b style="padding-left: 80px"> Welcome Dear Patient! </b>

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
                      
                      <div class="column" >

                            <div class="widget-title">
                               
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#ModalLoginForm">
                                <b>  Update <br>My Medical<br> Status </b>
                          </button>
                            </div>
                            <div id="ModalLoginForm" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title"> Update My Medical Status</h1>
                            </div>
                            <div class="modal-body">
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <label class="control-label">My X-Ray</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                             <form action="/action_page.php">
                                    <label for="img">Select image:</label>
                                    <input type="file" id="img" name="img" accept="image/*">
                                   
                                  </form>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">My Heart Tests</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                             <form action="/action_page.php">
                                    <label for="img">Select image:</label>
                                    <input type="file" id="img" name="img" accept="image/*">
                                    
                                  </form>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="control-label">My Blood Test</label>
                                        <div>
                                            <input type="text" class="form-control input-lg" name="email" value="">
                                             <form action="/action_page.php">
                                    <label for="img">Select image:</label>
                                    <input type="file" id="img" name="img" accept="image/*">
                                  
                                  </form>
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
                              <button class="btn"> <b> My</br>operations</b></button>
                            </div> 
                </div>
                             
                        


                <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>My</br> cardiac</br> catheter</b> </button>
                            </div>
                            
                </div>
                      
                            
                <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>My</br>Blood </br>analyzes</b> </button>
                            </div>
                            
                </div>
                       

                <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>My</br>X ray</b> </button>
                            </div>
                            
                </div>

                <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>My</br>Medical</br>History</b> </button>
                            </div>
                            
                </div>

                    <div class="column">
                       
                            <div class="widget-title">
                              <button class="btn"> <b> Doctors  </br>Duties</b></button>
                            </div>
                            
                            </div>


                             <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Send</br>Complaints</b></button>
                            </div>
                            
                             
                            </div>
                        



                     



                  </div>
                      
                        


                       <div class="row" style="padding-left: 60px">

                             
                        



                         <div class="column">
                      
                            <div class="widget-title"  >
                                 <button class="btn"> <b>Send </br>Messages</b></button>
                            </div>
                            
                            </div>
                  
                                
                                 



                            
                            <div class="column">
                       
                            <div class="widget-title">
                                 <button class="btn"> <b>Hospital's </br> News</b></button>
                            </div>
                            
                            </div>
                       
                                 
                        <div class="column">
                       
                            <div class="widget-title" >
                                 <button class="btn"> <b> Gift  </br>credit</b></button>
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
                                 <button class="btn"> <b>  Aman</br> Portal </b></button>
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
                                 <button class="btn"> <b>Medical </br>Articles</b></button>
                            </div>
                            
                            </div> 



                     
                             </div>


                  <div class="row" style="padding-left: 60px">
                    
                   
                             
                            
                            
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
                                 <button class="btn"> <b> Search </b></button>
                            </div>
                            
                            
                             </div> 
                              <div class="column">
                        
                            <div class="widget-title">
                                 <button class="btn"> <b>Pay</br>Bill </b></button>
                            </div>
                            
                            
                             </div> 
                            
                             <div class="column">

                              <div class="widget-title">
          <button class="btncorona" data-toggle="modal" data-target="#progress"> <b>Corona <br> Status </b></button>
                            </div>
                  <div id="progress" class="modal fade">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">

                                <h1 class="modal-title">Update My Health Status:</h1>

                            </div>
                            <div class="modal-body">
                                   <label>Date:</label>
                                <form role="form" method="POST" action="">
                                    <input type="hidden" name="_token" value="">
                                    <div class="form-group">
                                        <input type="date" class="form-control" name="date" id="date" placeholder="Date">
                                        
                                    </div>
                                    <div class="form-group">
                                      <label>Age:</label>
                                      <div class="question-body clearfix notranslate ">
                    
    
    
        
            <div class="answer-option-col
                            answer-option-col-2">
        
        <div class="answer-option-cell">
            
    

    
    

    <div data-sm-radio-button="" class="radio-button-container " aria-labelledby="question-title-436105797">
        <input id="436105797_2893076931" aria-labelledby="436105797_2893076931_label" name="436105797" role="radio" class="radio-button-input " value="2893076931" aria-checked="false" type="radio">
        <label data-sm-radio-button-label="" id="436105797_2893076931_label" class="answer-label radio-button-label no-touch touch-sensitive clearfix" for="436105797_2893076931">
            <span class="radio-button-display ">
                    
            </span>

            
                <span class="radio-button-label-text question-body-font-theme user-generated ">
                    &lt;18
                    
                </span>
            
        </label>
    </div>

        </div>
        
    
        
        <div class="answer-option-cell">
            
    
    

    <div data-sm-radio-button="" class="radio-button-container " aria-labelledby="question-title-436105797">
        <input id="436105797_2893076932" aria-labelledby="436105797_2893076932_label" name="436105797" role="radio" class="radio-button-input " value="2893076932" aria-checked="false" type="radio">
        <label data-sm-radio-button-label="" id="436105797_2893076932_label" class="answer-label radio-button-label no-touch touch-sensitive clearfix" for="436105797_2893076932">
            <span class="radio-button-display ">
                    
            </span>

            
                <span class="radio-button-label-text question-body-font-theme user-generated ">
                    18-25
                    
                </span>
            
        </label>
    </div>

        </div>
        
    
        
        <div class="answer-option-cell">
            
    

    <div data-sm-radio-button="" class="radio-button-container " aria-labelledby="question-title-436105797">
        <input id="436105797_2893076933" aria-labelledby="436105797_2893076933_label" name="436105797" role="radio" class="radio-button-input " value="2893076933" aria-checked="false" type="radio">
        <label data-sm-radio-button-label="" id="436105797_2893076933_label" class="answer-label radio-button-label no-touch touch-sensitive clearfix" for="436105797_2893076933">
            <span class="radio-button-display ">
                    
            </span>

            
                <span class="radio-button-label-text question-body-font-theme user-generated ">
                    26-33
                    
                </span>
            
        </label>
    </div>

        </div>
        
            </div>
        
    
        
            <div class="answer-option-col
                            answer-option-col-2">
        
        <div class="answer-option-cell">
            
    
    
    

    <div data-sm-radio-button="" class="radio-button-container " aria-labelledby="question-title-436105797">
        <input id="436105797_2893076934" aria-labelledby="436105797_2893076934_label" name="436105797" role="radio" class="radio-button-input " value="2893076934" aria-checked="false" type="radio">
        <label data-sm-radio-button-label="" id="436105797_2893076934_label" class="answer-label radio-button-label no-touch touch-sensitive clearfix" for="436105797_2893076934">
            <span class="radio-button-display ">
                    
            </span>

            
                <span class="radio-button-label-text question-body-font-theme user-generated ">
                    34-41
                    
                </span>
            
        </label>
    </div>

        </div>
        
    
        
        <div class="answer-option-cell">
            
   

    <div data-sm-radio-button="" class="radio-button-container " aria-labelledby="question-title-436105797">
        <input id="436105797_2893076935" aria-labelledby="436105797_2893076935_label" name="436105797" role="radio" class="radio-button-input " value="2893076935" aria-checked="false" type="radio">
        <label data-sm-radio-button-label="" id="436105797_2893076935_label" class="answer-label radio-button-label no-touch touch-sensitive clearfix" for="436105797_2893076935">
            <span class="radio-button-display ">
                    
            </span>

            
                <span class="radio-button-label-text question-body-font-theme user-generated ">
                    42-49
                    
                </span>
            
        </label>
    </div>

        </div>
        
    
        
        <div class="answer-option-cell">
      
    

    <div data-sm-radio-button="" class="radio-button-container " aria-labelledby="question-title-436105797">
        <input id="436105797_2893076936" aria-labelledby="436105797_2893076936_label" name="436105797" role="radio" class="radio-button-input " value="2893076936" aria-checked="false" type="radio">
        <label data-sm-radio-button-label="" id="436105797_2893076936_label" class="answer-label radio-button-label no-touch touch-sensitive clearfix" for="436105797_2893076936">
            <span class="radio-button-display ">
                    
            </span>

            
                <span class="radio-button-label-text question-body-font-theme user-generated ">
                    &gt;49
                    
                </span>
            
        </label>
    </div>

        </div>
        
            </div>
        
    
    
    

    
    

    

                </div>
                                        <label class="control-label">Fever or chills:</label>
                                     <p>
                                   <label>Celsius</label>
                             <input id="inputCelsius" type="number" placeholder="Celsius" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
                                        </p>
                                    <p>Fahrenheit: <span id="outputFahrenheit"></span></p>

                                               <script>
                                  function temperatureConverter(valNum) {
                                  valNum = parseFloat(valNum);
                                  document.getElementById("outputFahrenheit").innerHTML=(valNum*1.8)+32;
                                       }
                                               </script>

                                      <label class="control-label">Cough:</label>
                                         <div class="form-group">
                                             <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>
                                     <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">Shortness of breath or difficulty breathing</label>
                                         <div class="form-group">
                                              <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">Fatigue</label>
                                         <div class="form-group">
                                             <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">Muscle or body aches</label>
                                         <div class="form-group">
                                             <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">Headache</label>
                                         <div class="form-group">
                                            <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">New loss of taste or smell</label>
                                         <div class="form-group">
                                              <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">Sore throat</label>
                                         <div class="form-group">
                                             <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">Congestion or runny nose</label>
                                         <div class="form-group">
                                             <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">Nausea or vomiting</label>
                                         <div class="form-group">
                                             <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                  
                                        </div>


                                    </div>
                                    <div class="form-group">
                                        <label class="control-label"></label>
                                     <p>
                                   <label></label>
                             
                                        </p>
                                    <p><span id="outputFahrenheit"></span></p>

                                               

                                      <label class="control-label">Diarrhea</label>
                                         <div class="form-group">
                                              <select name="Cough"  > 
                                    <option value="1">None</option>
                                    <option value="2">Mild</option>
                                    <option value="8">Bad</option> 
                                     
                                </select>  
                                        </div>


                                    </div>

                                  
                                    <div class="form-group">
                                        <label class="danger">Notes:Look for emergency warning signs for COVID-19. If someone is showing any of these signs, seek emergency medical care immediately:
Trouble breathing
Persistent pain or pressure in the chest
New confusion
Inability to wake or stay awake
Bluish lips or face
Call your medical provider for any other symptoms that are severe or concerning to you.</label>
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
                                 <button class="btn"> <b>Logout</b></button>
                            </div>
                            
                            </div> 

                             
                             
                      
                          </div>



                       
   </div>
</div>



@endsection