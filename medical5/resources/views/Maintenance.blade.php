@extends('layout.master4')
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
           
            table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}


        
    </style>
       

   
    @yield('styles')

<div style="padding-top: 50px">
               <h1>
                <b style="padding-left: 80px"> Schedule Of Maintenance</b>

               </h1>

</div>


        <!-- Main Footer Area     class="section-padding-100"-->
        <div class="main-section-area">
           
<div>
                                    <table >
                                      <tr>
                                        <th>Section</th>
                                        <th>Room Number</th>
                                        <th>Device Name</th>
                                         <th>Serial Number</th>
                                          <th>Date</th>
                                          <th>Status</th>
                                          <th>Notes</th>
                                      </tr>
                                      
                                      <tr>
                                        <td>IT</td>
                                        <td>102</td>
                                        <td>PRINTER</td>
                                        <td>E2R5E2221D00</td>
                                        <td>24/8/2019</td>
                                        <td>WORK</td>
                                        <td>-</td>
                                      </tr>
                                       <tr>
                                        <td>IT</td>
                                        <td>102</td>
                                        <td>HP PC</td>
                                        <td>EXX0020EDF</td>
                                        <td>6/9/2019</td>                                        
                                        <td>WORK</td>
                                        <td>-</td>
                                      </tr>
                                     <tr>
                                        <td>IT</td>
                                        <td>107</td>
                                        <td>DILL PC</td>
                                        <td>OIX650EDF</td>
                                        <td>8/7/2019</td>                                        
                                        <td>WORK</td>
                                        <td>-</td>
                                      </tr>
                                      <tr>
                                        <td>IT</td>
                                        <td>204</td>
                                        <td>HP PC</td>
                                        <td>E000OI898</td>
                                        <td>6/6/2019</td>
                                        <td>Under maintenance</td>
                                        <td>New Hard 500G</td>
                                      </tr>
                                       <tr>
                                        <td>IT</td>
                                        <td>105</td>
                                        <td>Microsoft Word Program</td>
                                        <td>-</td>
                                        <td>12/10/2019</td>
                                        <td>Under maintenance</td>
                                        <td>Activate</td>
                                      </tr>
                                       <tr>
                                        <td>IT</td>
                                        <td>305</td>
                                        <td>DILL PC</td>
                                        <td>D23FGFG4GF</td>
                                        <td>4/12/2019</td>
                                        <td>Under maintenance</td>
                                        <td>New RAM 4G</td>
                                      </tr>
                                       <tr>
                                        <td>IT</td>
                                        <td>200</td>
                                        <td>Bexlon Printer</td>
                                        
                                        <td>20256892</td>
                                        <td>3/12/2019</td>
                                        <td>Work</td>
                                        <td>Low Toner</td>
                                      </tr>
                                       <tr>
                                        <td>IT</td>
                                        <td>109</td>
                                        <td>PC</td>
                                        <td>5214455</td>
                                        <td>5/11/2019</td>
                                        <td>Under maintenance</td>
                                        <td>New Board</td>
                                      </tr>
                                       <tr>
                                        <td>IT</td>
                                        <td>99</td>
                                        <td>DILL PC</td>
                                        <td>X89JJ788</td>
                                        <td>24/8/2019</td>
                                        <td>WORK</td>
                                        <td>-</td>
                                      </tr>
                                       <tr>
                                        <td>IT</td>
                                        <td>205</td>
                                        <td>Camera</td>
                                        <td>244h5h55</td>
                                        <td>11/11/2019</td>
                                        <td>WORK</td>
                                        <td>-</td>
                                      </tr>
                                       <tr>
                                        <td>IT</td>
                                        <td>201</td>
                                        <td>Brother Printer</td>
                                        <td>E0000d67</td>
                                        <td>21/10/2019</td>
                                        <td>Under maintenance</td>
                                        <td>New Drum</td>
                                      </tr>
                                    </table>
                                            
                                        </div>

           </div>




@endsection