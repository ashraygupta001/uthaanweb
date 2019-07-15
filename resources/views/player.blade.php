<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ URL::asset('css/player.css') }}">
                      <link rel="stylesheet" type="text/css" href="{{URL::asset('css/bootstrap.min.css')}}">

        <link rel="stylesheet" href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css')}}">

        <link rel="stylesheet" href="{{URL::asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css')}}" />

         <link href="{{URL::asset('css/owl.carousel.css')}}" rel="stylesheet">

         <link href="{{URL::asset('css/owl.transitions.css')}}" rel="stylesheet">

         <link href="{{URL::asset('css/main.css')}}" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/normalize.css')}}" />

        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main1.css')}}" />

         <link rel="stylesheet" type="text/css" href="{{URL::asset('css/swiper.min.css')}}" />

         <link rel="stylesheet" type="text/css" href="{{URL::asset('css/plyr.css')}}" />

         <link href="{{URL::asset('css/agency.min.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{URL::asset('css/style.css')}}" type="text/css">


    <style>
    .contact-area {
    border-bottom: 1px solid #353C46;
    padding: 70px 0 70px 0;
}
.contact-content p {
    font-size: 15px;
    margin: 30px 0 60px;
    position: relative;
}

.contact-content p::after {
    background: #353C46;
    bottom: -30px;
    content: "";
    height: 1px;
    left: 50%;
    position: absolute;
    transform: translate(-50%);
    width: 80%;
}

.contact-content h6 {
    color: #8b9199;
    font-size: 15px;
    font-weight: 400;
    margin-bottom: 10px;
}

.contact-content span {
    color: #353c47;
    margin: 0 10px;
}

.contact-social {
    margin-top: 30px;
}

.contact-social > ul {
    display: inline-flex;
}

.contact-social ul li a {
    border: 1px solid #8b9199;
    color: #8b9199;
    display: inline-block;
    height: 40px;
    margin: 0 10px;
    padding-top: 7px;
    transition: all 0.4s ease 0s;
    width: 40px;
}

.contact-social ul li a:hover {
    border: 1px solid #FAB702;
    color: #FAB702;
}

.contact-content img {
    max-width: 210px;
}

footer {
    background: #1A1E25;
    color: #868c96;
    position: absolute;
    right: 0;
    left: 0;
    width: 100%;
    overflow: hidden;
}

footer p {
    padding: 40px 0;
    text-align: center;
}

footer img {
    width: 44px;
}


    </style>
</head>
<body style="background: black;">
    <nav class="nav navbar-default navbar-fixed-top">
     <div class="container">
     <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
          <span style="background-color: aqua" class="icon-bar"></span>
          <span style="background-color: aqua" class="icon-bar"></span>
          <span style="background-color: aqua" class="icon-bar"></span>
                        </button>
         <div>
             <a href="home.html" class="page-scroll"><img src="{{URL::asset('img/uthaan.png')}}" id="uthaanlogo"></a>
         </div>
         </div>
         <div class="collapse navbar-collapse" id="mynavbar" >
                    <ul class="nav navbar-nav navbar-right">
                         <li class="active"><a href="#header">Home</a></li>
                        <li><a href="#about" class="page-scroll"> About us </a></li>
                         <li><a href="#events"class="page-scroll"> Events </a></li>
                        <li><a href="#show"class="page-scroll"> Shows </a> </li>
                        <li><a href="#articles"class="page-scroll"> Articles </a></li> 
                        <li><a href="#interview" class="page-scroll"> Interviews </a></li>
                        <li><a href="#gallery"class="page-scroll"> Gallery </a></li>
                         <li><a href="#contact" class="page-scroll"> Contact us </a></li>
                        @guest<li><a href="/login" class="page-scroll">Login</a></li>@endguest
                        @auth<li><a href="/login" class="page-scroll">Logout</a></li>@endauth
                        @auth<li><a href="/admin" class="page-scroll">Admin</a></li>@endauth

                        </ul>
                </div>          
         </div>
    </nav>  
<br><br>


<main class="site-content">
     <section class="video-area">
        <div class="wrapper">
     <header class="video-header">
                <h2 class="video-title">{{$show->heading}}</h2>
            </header>

            <div class="video-column">
                <div class="video-player">
                    <iframe  class="video" id="video"
                            src="https://www.youtube.com/embed/{{$show->link}}">
                    </iframe>
                </div>

                <div class="video-info">
                    <div class="description" style="color: #ffdb4d">
                        <p>{{$show->description}}</p>
                    </div>
                </div>
            </div>

             <div id="video-playlist" class="video-playlist">
                <header class="playlist-title">You may also like...</header>
                <br>
                @foreach($plays as $play)
                <a style="color:white; text-decoration: none; cursor: pointer" href='/player/{{$play->id}}' class="next-video">
                    <img src="{{$play->thumbnail}}" alt="">
                    <h3 class="next-video-title">{{$play->heading}}</h3>
                </a>
                <br>
                @endforeach
        

        </div>

        </div>
    </section>


</main>
</body>
<script>
    /*
     TODO:
     Clean up this mess, please
     */

    var videoPlayer = function(){
        "use strict";

        function el(id) {
            return document.getElementById(id);
        }

        var vid = el("video"),

            btnState = el("btnState"),
            btnReplay = el("btnReplay"),
            btnSound = el("btnSound"),
            sliderVolume = el("sliderVolume"),

            barSeeker = el("barSeeker"),
            barBuffer = el("barBuffer"),
            barProgress = el("barProgress"),

            timePlayed = el("timePlayed"),
            timeDuration = el("timeDuration"),
            timeBubble = el("timeBubble"),

            thePosition,
            theMinutes,
            theSeconds,
            theTime;

        var readableTime = function(t) {
            theMinutes = "0" + Math.floor(t / 60); // Divide seconds to get minutes, add leading zero
            theSeconds = "0" + parseInt(t % 60); // Get remainder seconds
            theTime = theMinutes.slice(-2) + ":" + theSeconds.slice(-2); // Slice to two spots to remove excess zeros
            return theTime;
        };

        /* Video controls */

        var togglePlay = function(){
            if(vid.paused) {
                vid.play();
                btnState.firstElementChild.className = "fontawesome-pause";
                btnReplay.style.display = "none";
                vid.style.opacity = 1;
            } else {
                vid.pause();
                btnState.firstElementChild.className = "fontawesome-play";
            }
        };

        var toggleSound = function(){
            if(vid.muted) {
                vid.muted = false;
                sliderVolume.value = 10;
                btnSound.firstElementChild.className = "fontawesome-volume-up";
            } else {
                vid.muted = true;
                sliderVolume.value = 0;
                btnSound.firstElementChild.className = "fontawesome-volume-off";
            }
        };

        /* Update seeker value and time played */
        var updateTimeDisplay = function() {
            var timePercent = (100 / vid.duration) * vid.currentTime;
            barSeeker.value = timePercent;
            barProgress.value = timePercent;
            timePlayed.innerHTML = readableTime(vid.currentTime);
        };

        var replayVideo = function() {
            vid.currentTime = 0;
            btnState.firstElementChild.className = "fontawesome-pause";
            el("likeThis").classList.remove("wiggle");
            btnReplay.style.display = "none";
            vid.play();
        };

        /* Event listeners */

        // Toggle buttons
        vid.addEventListener("click",togglePlay);
        btnState.addEventListener("click",togglePlay);
        btnSound.addEventListener("click",toggleSound);

        // Volume slider
        sliderVolume.addEventListener("change", function() {
            var theVolume = sliderVolume.value / 10;
            vid.volume = theVolume;

            if(theVolume === 0) {
                btnSound.firstElementChild.className = "fontawesome-volume-off";
            } else if (theVolume === 1) {
                btnSound.firstElementChild.className = "fontawesome-volume-up";
            } else {
                btnSound.firstElementChild.className = "fontawesome-volume-down";
            }
        });

        // Replay button, something needs fixing, but I forget what
        vid.addEventListener("ended", function(){
            btnReplay.style.display = "block";
            btnState.firstElementChild.className = "fontawesome-play";
        });


        /* Event listeners for the seek bar */

        // Move seeker bar
        vid.addEventListener("timeupdate",updateTimeDisplay);

        // Allow click on seeker to change video position
        barSeeker.addEventListener("change", function() {
            thePosition = vid.duration * (barSeeker.value / 100);
            vid.currentTime = thePosition;
        });

        // Pause video and seeker update while seeker is being interacted with
        barSeeker.addEventListener("mousedown",function(){
            vid.pause();
            vid.removeEventListener("timeupdate",updateTimeDisplay);
        });

        barSeeker.addEventListener("mouseup",function(){
            vid.play();
            btnState.firstElementChild.className = "fontawesome-pause";
            vid.addEventListener("timeupdate",updateTimeDisplay);
        });

        // Buffer bar
        vid.addEventListener("timeupdate", function() {
            var bufferPercent = (100 / vid.duration) * vid.buffered.end(vid.buffered.length - 1);
            barBuffer.value = bufferPercent;
        });

        // Video length
        vid.addEventListener('loadeddata', function(){
            timeDuration.innerHTML = readableTime(vid.duration);
        });

        // Time bubble on seeker
        var bubblePop = function(e){
            var cursorPos = (e.clientX - (barSeeker.getBoundingClientRect().left)) / (barSeeker.offsetWidth);
            var seekTime = cursorPos * vid.duration;

            if(seekTime) {
                timeBubble.innerHTML = readableTime(seekTime);
                timeBubble.style.left = (e.clientX - barSeeker.getBoundingClientRect().left + 78) + "px";
                timeBubble.style.display = "block";
            }
        };

        barSeeker.addEventListener("mousemove", bubblePop);

        barSeeker.addEventListener("mouseout", function(){
            timeBubble.style.display = "none";
        });

        vid.addEventListener("timeupdate", function(){
            theTime = parseInt(vid.currentTime);
            if(vid.duration - theTime < 10 && vid.duration - theTime > 9 ) {
                el("likeThis").classList.add("wiggle");
            }
        });

// Video playlist
        var playlistAnchor = document.querySelectorAll(".next-video"),
            imageURL = document.querySelectorAll(".next-video img");

        var prevTitle = document.querySelector(".video-title"),
            prevDescription = document.querySelector(".description");

        for (var i = 0; i < 4; i++) {
            (function(){
                var k = i;

                playlistAnchor[i].addEventListener("click", function(e){
                    e.preventDefault();

                    var playedVideo = document.querySelector(".played-video");
                    playedVideo.classList.remove("slide");
                    playedVideo.classList.remove("played-video");

                    // Update video
                    vid.poster = imageURL[k].src;
                    vid.src = playlistAnchor[k].href;

                    // Update info
                    prevTitle.innerHTML = this.querySelector(".next-video-title").textContent;
                    prevDescription.innerHTML = this.querySelector(".next-video-description").textContent;

                    // Reset and play video
                    replayVideo();

                    this.classList.add("played-video");
                    playedVideo.classList.add("slide");

                    setTimeout(function(){
                        playlistAnchor[k].parentNode.appendChild(playlistAnchor[k]);
                    }, 500);
                });

            }());
        }

    }();
</script>
   <!-- -->
     <!-- Scripts -->  
<script src="{{URL::asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}"></script>
{{--  --}}     <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
  <script  type="text/javascript" src="{{URL::asset('js/jquery.easing.min.js')}}"></script>
  <script  type="text/javascript" src="{{URL::asset('js/wow.js')}}"></script>
     <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/mousescroll.js')}}"></script>
    <script src="{{URL::asset('js/smoothscroll.js')}}"></script>
    <script src="{{URL::asset('js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{URL::asset('js/jquery.isotope.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.inview.min.js')}}"></script>
    <script src="{{URL::asset('js/plyr.js')}}"></script>
   <script src="{{URL::asset('js/anime.min.js')}}"></script>
     <script src="{{URL::asset('js/swiper.min.js')}}"></script>
    <script src="{{URL::asset('js/imagesloaded.pkgd.min.js')}}"></script>
     <script type="text/javascript" src="{{URL::asset('js/logic.js')}}"></script> 
   
    <!-- -->
    <script>
    (function() {
      new GridSlideshow(document.querySelector('.grid-pages'));
    })();
    </script>
</html>