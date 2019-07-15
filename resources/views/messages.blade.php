@auth
<html>
<head>
    <link rel="stylesheet" href="{{URL::asset('css/adminform.css')}}">
    <script>
			CKEDITOR.replace( 'content' );
      //fade in-out the page
        $(document).ready(function(){
            $(".fd_pg").click(function(){
                $("html").fadeOut().fadeIn()
            });
        });
        //Hamburger menu
        function myFunction() {
            document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
        }
	</script>
    <link rel="stylesheet" href="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')}}">
    <script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    <script src="{{URL::asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
    <link href='{{URL::asset('https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200')}}' rel='stylesheet' type='text/css'>
    <link href='{{URL::asset('https://fonts.googleapis.com/css?family=Voltaire')}}' rel='stylesheet' type='text/css'>
    <link href='{{URL::asset('https://fonts.googleapis.com/css?family=Lobster')}}' rel='stylesheet' type='text/css'>
    <link href='{{URL::asset('https://fonts.googleapis.com/css?family=Lobster+Two:700,700italic')}}' rel='stylesheet' type='text/css'>
      <script src="{{URL::asset('https://cdn.ckeditor.com/4.10.0/standard/ckeditor.js')}}"></script>
      <style type="text/css">
        html,body{  
    color:#fff;
    margin:0;
    padding:0;
    font-size:100%;
    height: 100%;
    
}
.container{
    width:98%;
    margin: 0;
    padding-left: 0px;
    padding-right: 0px;
}
.container-fluid{
    width:98%;
    margin: 0;
    padding-left: 0px;
    padding-right: 0px;
}

/*************************Responsive Nav Menu style******************************/
#top{
    position: absolute;
    width:100%;
    z-index: 1000;
}

ul.topnav {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: rgba(255,255,255,0.50);
    box-shadow: 0px 1px 20px rgba(0,0,0,0.3);
}


/* Float the list items side by side */
ul.topnav li {float: left;}

/* Style the links inside the list items */
ul.topnav li a {
    display: inline-block;
    color: #1f1f1f;
    text-align: center;
    padding: 25px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 18px;
    font-weight:600;
    font-family: 'Raleway', sans-serif;
    transition: 0.3s;
}
@media screen and (max-width: 680px) and (min-width: 0px){
    ul.topnav li a{
        padding: 15px 10px;
        transition: 0.3s;
    }
}

/* Change background color of links on hover */
ul.topnav li a:hover {
    color:#e21d3b;
    background-color: rgba(255,255,255,0.25);
    transition: 0.4s;
}

/* Hide the list item that contains the link that should open and close the topnav on small screens */
ul.topnav li.icon {display: none;}

/* When the screen is less than 680 pixels wide, hide all list items, except for the first one ("Home"). Show the list item that contains the link to open and close the topnav (li.icon) */
@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;

  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens */
@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}/******************************END OF MENU STYLE*********************************/
.left_logo{

    background-size: 60px 70px;
    width:60px;
    height: 70px;
    background-position: center center;
    float: left;
    margin-left: 10%;
    margin-right:10px;
    transition: 0.2s;
}
@media screen and (max-width: 800px) and (min-width: 680px){
    .left_logo{
    margin-left: 5%;
    transition: 0.5s;
}
}
@media screen and (max-width: 680px) and (min-width: 0px){
    .left_logo{
    display:none;
    opacity:0.5 ;
    transition: 0.5s;
}
}
/***********************END LOGO STYLE****************************/

/*******************************SELECTION Style**********************************/
::-moz-selection { /* Firefox */
    color: white;
    background: rgba(226,29,60,0.8);
}

::selection {
    color: white;
    background: rgba(226,29,60,0.8);
}
      </style>

</head>
<body style="background: coral;">
<div class="nav" id="top" style="position:fixed;">
      <ul class="topnav">
        <div class="left_logo" style=" background-color: transparent"></div>
        <li><a class="fd_pg active" href="/admin/interview" >Interviews</a></li>
        <li><a href="/admin/article">Articles</a></li>
        <li><a href="/admin/show">Shows</a></li>
        <li><a href="/admin/messages">Messages</a></li>
        <li><a href="/admin/event">Events</a></li>
        <li><a href="/">Website</a></li>
        <li><a href="/login">Logout</a></li>
        <li class="icon">
            <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>
        </li>
    </ul>
</div>

<br><br><br><br><br>
<center><h1>Messages</h1></center>
    <div class="container-fluid">
    	@if(count($messages)>0)
    	@foreach($messages as $message)
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">

               <div class="row">
                    <div class="col-md-8">
                        <div>
                            <h5 style="color: black"><b>Name : </b>{{$message->name}}</h5>

                            <h5 style="color: black"><b>Email : </b>{{$message->email}}</h5>
                            
                            <h5 style="color: black"><b>Message : </b>{{$message->message}}</h5>
                            <br>                          
                        </div>

                                                @auth<p><a href="/admin/messagedelete/{{$message->id}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Delete</a></p>@endauth

                        <br>
                    </div>
                    </div>
                    <hr style="background-color: black">
               

            </div>
        </div>
        @endforeach
        @endif

    </div>
</body>
</html>

@endauth