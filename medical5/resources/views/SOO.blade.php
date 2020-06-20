
@extends('layout.master3')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Details</th>
            <th>Date</th>
            <th>Operation</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->p_name}}</td>
                <td>{{$item->details}}</td>
                <td>{{$item->date}}</td>
                <td>
                    <form action="/operation/{{$item->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-primary">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
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





@endsection
