<!DOCTYPE html>
<html>
<head>
    <title></title>
  <meta charset="utf-8" />
    <style>
    body, html {
    min-height: 100%;
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
    }
    * {
    box-sizing: border-box;
    }
    body {
             background-image: url("run44.jpg");
             background-repeat: no-repeat;
              background-size: cover;            
        }
    /* The image used 
    .bg-img {
   
    background-image: url("run44.jpg");
    /* Full height */
    height: 100%;
    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    }*/
    /* Add styles to the form container */
    .container {
            position:fixed;
            left: 200px;
            margin: 20px;
            max-width: 550px;
            padding: 10px;
            background-color: rgba(80, 151, 164, 0.55);
          //  border:groove;
          height:590px;
        //  border:solid;
        }
    .firstFbeds{
        position:fixed;
        left:170px;
        top:100px;
        background-color:rgba(80, 151, 164, 0.55);
        border:groove;
        padding:4px 7px;
        width:1000px;
        height:100px;
    }
     .secondFbeds{
         position:fixed;
        left:170px;
        top:220px;
        background-color:rgba(80, 151, 164, 0.55);
        border:groove;
        padding:4px 7px;
        width:1000px;
        height:100px;
    }
   
    .thirdFbeds{
         position:fixed;
        left:170px;
        top:340px;
        background-color:rgba(80, 151, 164, 0.55);
        border:groove;
        padding:4px 7px;
        width:1000px;
        height:100px;
    }

    .btn{
      // position:absolute;
        width:55px;
        height:20px;
       / display: block;
      / float:right;
      margin-top:5px;
      margin-left:-7px;
  /    padding:-2px ;
      text-align: start;
      
      border-bottom-color:black;
      font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold
    }
    .f1{

 position:absolute;
       // left:150px;
        //top:50px;
        background-color:none;
        //border:groove;
        padding:4px 5px;
        width:50px;
        height:80px;
       // float:left;

    }
    #bed1f1{

 position:absolute;
       left:70px;
       // top:50px;
        background-color:;
        border:groove;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
        margin-right:10px;
    }
    .bed2f1{

 position:absolute;
       left:150px;
       // top:50px;
        background-color:;
        border:groove;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
        margin-right:10px;
    }
    .bed3f1{

 position:absolute;
       left:230px;
       // top:50px;
        background-color:;
        border:groove;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
    .bed4f1{

 position:absolute;
       left:310px;
       // top:50px;
        background-color:;
        border:groove;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
    .bed5f1{

 position:absolute;
      left:390px;
       // top:50px;
        background-color:;
        border:groove;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
    .bed6f1{

 position:absolute;
       left:470px;
       // top:50px;
        background-color:;
        border:groove;
       padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
    .bed7f1{

 position:absolute;
       left:550px;
       // top:50px;
        background-color:;
        border:groove;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
    .bed8f1{

 position:absolute;
       left:620px;
       // top:50px;
        background-color:;
        border:groove;
        margin:0px 10px;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
    .bed9f1{

 position:absolute;
       left:700px;
       // top:50px;
        background-color:;
        border:groove;
        margin:0px 10px;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
     .bed10f1{

 position:absolute;
       left:780px;
       // top:50px;
        background-color:;
        border:groove;
        margin:0px 10px;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
      .bed11f1{

 position:absolute;
       left:860px;
       // top:50px;
        background-color:;
        border:groove;
        margin:0px 10px;
        padding:6px 11.5px;
        width:70px;
        height:80px;
        float:left;
    }
   
    

    .Button {
    font-family: Calibri, sans-serif;
    font-size:13px;
    font-weight: bold;
    width: 160px;
    height: 25px;
    background:grey;
    color: white
}
.selected.bed1f1 {
    
    background:red;
}
.mystyle {
 
  
  background-color: red;
  color: white;
  
}
.mystyle2 {
 
  
  background-color: green;
  color: white;
  
}

    </style>


</head>
<body>
 
    <div class="bg-img">
       

            <div class="firstFbeds">

                <div class="f1">First Floor </div>
                @php 
                    $cnt=1;
                @endphp
                
                @foreach($first as $item)
                 <div @if($cnt==1)
                     id="bed{{$cnt}}f1"
                     class="@if($item->status==1) mystyle
                         @else mystyle2 
                         @endif"
                  @else class="bed{{$cnt}}f1
                         @if($item->status==1) mystyle
                         @else mystyle2 
                         @endif" 
                  @endif >
                    bed {{$cnt}}<br />
                    R {{$cnt}}
                <form action="changestatus" method="post">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="id" />
                    <button type="submit" class="btn">
                        Change
                    </button>

                </form> 
                    
                </div>
                @php
                    $cnt++;
                @endphp
                @endforeach
            </div>
            
        <div class="secondFbeds">

            <div class="f1">Second Floor </div>
                @php 
                    $cnt=1;
                @endphp
                
                @foreach($second as $item)
                 <div @if($cnt==1)
                     id="bed{{$cnt}}f1"
                     class="@if($item->status==1) mystyle
                         @else mystyle2 
                         @endif"
                  @else class="bed{{$cnt}}f1
                         @if($item->status==1) mystyle
                         @else mystyle2 
                         @endif" 
                  @endif >
                    bed {{$cnt}}<br />
                    R {{$cnt}}
                <form action="changestatus" method="post">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="id" />
                    <button type="submit" class="btn">
                        Change
                    </button>

                </form> 
                    
                </div>
                @php
                    $cnt++;
                @endphp
                @endforeach
       
            </div>
            
    <div class="thirdFbeds">

        <div class="f1">Third Floor </div>
                @php 
                    $cnt=1;
                @endphp
                
                @foreach($third as $item)
                 <div @if($cnt==1)
                     id="bed{{$cnt}}f1"
                     class="@if($item->status==1) mystyle
                         @else mystyle2 
                         @endif"
                  @else class="bed{{$cnt}}f1
                         @if($item->status==1) mystyle
                         @else mystyle2 
                         @endif" 
                  @endif >
                    bed {{$cnt}}<br />
                    R {{$cnt}}
                <form action="changestatus" method="post">
                    @csrf
                    <input type="hidden" value="{{$item->id}}" name="id" />
                    <button type="submit" class="btn">
                        Change
                    </button>

                </form> 
                    
                </div>
                @php
                    $cnt++;
                @endphp
                @endforeach
    </div>
       
</body>
</html>
