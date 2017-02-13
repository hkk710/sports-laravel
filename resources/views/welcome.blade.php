<!DOCTYPE html>
<html>
<title>Amrita Annul Athletic Meet</title>

<!--bootstrap-->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<script src="{{ asset('js/app.js') }}"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6 {
    opacity: 0.9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/bio.jpg');
    min-height: 100%;
    opacity: 0.9;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    width: auto;
    height: auto;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url('images/contactus.jpg');
    min-height: 400px;
}

/* sixth image (footprint)*/
.bgimg-6 {
    background-image: url('images/rules2.png');
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6 {
        background-attachment: scroll;
    }
}

.wrapper{
  text-align:center;
  margin:0 auto;
  margin-top:30px;
  width:500px;
  font-family:Helvetica;
  font-size:12px;
}
.wrapper > h1, .wrapper > p{
  margin:0;
}


.face {
    position: absolute;
}

/* code for page content transmision*/


.slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }

/* upto here*/


element {
}
.w3-white, .w3-hover-white:hover {
    color: #fff !important;
    background-color: green !important;
}
.w3-animate-top {
    position: relative;
    -webkit-animation: animatetop 0.4s;
    animation: animatetop 0.4s;
}
.w3-card-2, .w3-example {
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12) !important;
}
.w3-navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}
}


.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.round
    {
        -moz-border-radius: 100px;
        border-radius: 100px;
        padding: 4px;
        background-color: orange;
        color: #000;
        border: 1px solid #fff;
    }

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '»';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}


/* Skew Forward */
.hvr-skew-forward {
  display: inline-block;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px transparent;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: transform;
  transition-property: transform;
  -webkit-transform-origin: 0 100%;
  transform-origin: 0 100%;

}
.hvr-skew-forward:hover, .hvr-skew-forward:focus, .hvr-skew-forward:active {
  -webkit-transform: skew(-10deg);
  transform: skew(-10deg);
  -webkit-transform: translateX(8px);
  transform: translateX(8px);
}

</style>
<script src="{{ asset('js/app.js') }}"></script>
<body>

<!-- Navbar (sit on top) -->

@if (Session::has('success'))
    <div class="modal fade" id="myModal" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Success!</h4>
                </div>
                <div class="modal-body">
                    {{ Session::get('success') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#myModal').modal('show');
    </script>
@endif
<div class="w3-top" data-spy="scroll" style="color:#fff !important">
  <ul class="w3-navbar w3-card-2 w3-animate-top w3-black" style="color:#000;" id="myNavbar">
    <li><a href="#">HOME</a></li>
    <li class="w3-hide-small w3-right">
    <nav class="collapse navbar-collapse navbar-right " role="navigation">
                        <li><a href="{{ url('registernow') }}">Register Now</a></li>
                        <li><a href="#events">Events </a></li>
                    <!--    <li><a href="#cricketteams">Cricket Teams</a></li> -->
                        <li><a href="{{ url('register') }}">Registrations</a></li>
                    <!--    <li><a href="#superoverregistration">SuperOver Registration</a></li>-->
                        <li><a href="#rules">Rules</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li> <a href="{{ url('/result_view') }}">View Results</a></li>
                    @if (Auth::check())
                        <li> <a href="{{ url('/results') }}">Result Entry</a></li>
                   @endif
                    </nav>
                    </li>
  </ul>
</div>
<!-- First Parallax Image with Logo Text -->

<div class="bgimg-1 w3-display-container" id="registernow">
  <div class="w3-display-middle" style="white-space:nowrap;">
      <!--<P class="text-center"><img src="{{asset('images/logo_full.png')}}" alt="logo"></p>-->
    <!--<center><a href="{{ url('/results') }}" style="text-decoration:none"><span class="w3-center w3-padding-xlarge w3-orange w3-xlarge w3-wide w3-animate-opacity slideanim hvr-skew-forward" data-hover="NOW" style="border-radius:10px;text-decoration:none;"><strong>REGISTER <span class="w3-hide-small hvr-skew-forward"></span>NOW</strong></span></a></center>-->
<br>
    <!--<h2 class="text-center slideanim" style="color:red"><span class="fa fa-calendar-o"> &nbsp; </span>27th, 28th Jan 2017</h2>-->

     <!-- <h3 class="text-center slideanim" style="color:red;"><span class="fa fa-map-marker"></span> Amrita School of Engineering, Amritapuri</h3>-->
  </div>
</div>

<!-- Container (About Section) -->
<div style=" opacity: 0.7;background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; width: auto; background-image:url('images/sky.jpg')">

<div id="events" class="w3-content w3-container w3-padding-64" style="color:#000">
  <h3 class="w3-center slideanim">Events</h3>
  <p class="w3-center slideanim"></p>
  <div class="row">
        <table class="table table-striped table-hover table-bordered slideanim" id="event_table" style="background-color: #fff">
        <tr>
            <th>Men</th>
            <th>Women</th>
        </tr>
        <!--<tr>
              <td colspan="2">
          <center>March Past</center></td>
      </tr>-->
        <tr>
            <td>100mtr</td>
            <td>100mtr</td>
        </tr>
        <tr>
            <td>200mtr</td>
            <td>200mtr</td>
        </tr>
        <tr>
            <td>400mtr</td>
            <td>400mtr</td>
        </tr>
        <tr>
            <td>800mtr</td>
            <td>800mtr</td>
        </tr>
        <tr>
            <td>1500mtr</td>
            <td>1500mtr</td>
        </tr>
        <!--<tr>
            <td>5000mtr</td>
            <td>100mtr hurdles</td>
        </tr>-->
        <tr>
            <td></td>
            <!--<td>10000mtr</td>-->
            <td>medley relay</td>
        </tr>
        <tr>
            <td>110mtr hurdles</td>
            <td>4x100mtr relay</td>
        </tr>
        <tr>
            <td>400mtr hurdles</td>
            <td>Triple jump</td>
        </tr>
        <tr>
            <td>4x100mtr relay</td>
            <td>long jump</td>
        </tr>
        <tr>
            <td>4x400mtr relay</td>
            <!--<td>high jump</td>-->
            <td></td>
        </tr>
        <tr>
            <td>long jump</td>
            <td>discuss throw</td>
        </tr>
        <tr>
            <td>high jump</td>
            <td>hammer throw</td>
        </tr>
        <tr>
            <td>triple jump</td>
            <td>javelin throw</td>
        </tr>
        <tr>
            <td>shot put</td>
            <td>shot put</td>
        </tr>
        <tr>
            <td>javelin throw</td>
            <td></td>
        </tr>
        <tr>
            <td>Hammer throw</td>
            <td></td>
        </tr>
        <tr>
            <td>Discuss throw</td>
            <td></td>
        </tr>
        </table>
  </div>
</div>
</div>
</div>
<!-- Second Parallax Image with Portfolio Text -->

<!-- Container (Portfolio Section) -->
<div <div style=" opacity: 1.0;background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; width: auto; background-color:#000;">
<div id="departments" class="w3-content w3-container w3-padding-64" style="color:#fff!important">
<h3 class="w3-center w3-container slideanim"></h3>
  <p class="w3-container w3-center slideanim"></p>
  <!-- Amrita school of engineering -->
  <h2 class="slideanim"><center>Departments</center></h2>
  <br>
  <br>
  <div class="panel-group slideanim"  id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default" style="background-color:#a52a2a; box-shadow:20px " >
 <div class="panel-heading" role="tab" id="headingOne" style="background-color:#a52a2a ; border-radius:50px;">
    <h4 class="panel-title" style="border-radius:50px; ">
     <a style="border-radius:50px;" class="collapsed" role="button" data-toggle="collapse"  data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
         <!-- Amrita school of engineering -->
        <!--<h3 ><center>CSA</center></h3>--> <h3><center>First Year</center></h3>
      </a>
    </h4>
  </div>

  <div id="collapseOne" class="panel-collapse collapse "  role="tabpanel" aria-labelledby="headingOne">
    <div class="panel-body" style="color:#000; border-radius:50px;">
        <p><center>BSC BIOTECHNOLOGY</center></p>
        <p><center>BSC MICROBIOLOGY</center></p>
        <!--Amrita school of engineering-->
        <!--<p><center>BCA</center></p>
        <p><center>MCA</center></p>-->
    </div>
  </div>
</div>

<div class="panel panel-default" style="background-color:#a52a2a ">
  <div class="panel-heading" role="tab" id="headingTwo" style="background-color:#a52a2a; border-radius:50px; ">
    <h4 class="panel-title" style="border-radius:50px;">
      <a style="border-radius:50px;"  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h3 ><center>Second Year</center></h3>
        <!-- Amrita school of engineering -->
        <!--<h3 ><center>CSE</center></h3>-->
      </a>
    </h4>
  </div>
  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
    <div class="panel-body" style="border-radius:50px;">
        <p><center>BSC BIOTECHNOLOGY</center></p>
        <p><center>BSC MICROBIOLOGY</center></p>
        <!-- Amrita school of engineering  -->
        <!--
        <p><center>Btech</center></p>
        <p><center>E-learning</center></p>
        <p><center>WNA</center></p>
        <p><center>Cyber</center></p>-->
  </div>
</div>
</div>
<div class="panel panel-default" style="background-color:#a52a2a ">
  <div class="panel-heading" role="tab" id="headingThree" style="background-color:#a52a2a; border-radius:50px; ">
    <h4 class="panel-title" style="border-radius:50px;">
      <a style="border-radius:50px;"  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h3><center>Third Year</center></h3>
          <!-- Amrita school of engineering  -->
        <!--<h3 ><center>ECE</center></h3>-->
      </a>
    </h4>
  </div>
  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
    <div class="panel-body" style="border-radius:50px;">

        <!-- Amrita school of engineering -->
        <!--<p><center>Btech</center></p>
        <p><center>VLSI</center></p>-->
  </div>
</div>
</div>
<div class="panel panel-default" style="background-color:#a52a2a ">
  <div class="panel-heading" role="tab" id="headingFour" style="background-color:#a52a2a; border-radius:50px; ">
    <h4 class="panel-title" style="border-radius:50px;">
      <a style="border-radius:50px;"  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <h3 ><center>EEE</center></h3>
      </a>
    </h4>
  </div>
  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
    <div class="panel-body" style="border-radius:50px;">
        <p><center>Btech</center></p>
        <p><center>Power Engg</center></p>
        <p><center>CSI</center></p>
  </div>
</div>
</div>

<div class="panel panel-default"  style="background-color:#a52a2a ">
  <div class="panel-heading" role="tab" id="headingFive"  style="background-color:#a52a2a; border-radius:50px; ">
    <h4 class="panel-title" style="border-radius:50px;">
      <a style="border-radius:50px;"  class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <h3 ><center>Mech</center></h3>
      </a>
    </h4>
  </div>
  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
    <div class="panel-body" style="border-radius:50px;">
        <p><center>Btech</center></p>
        <p><center>TF</center></p>
        <p><center>Robotics and Auto</center></p>
    </div>
  </div>
  </div>
</div>
</div>
 </div>

 <div class="bgimg-6 w3-display-container">
   <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-light-grey w3-wide">Rules &  Regulations</span>
   </div>
 </div>


 <!-- Container (Portfolio Section) -->
 <div style="background-color:#000;color:#fff!important;">
 <div id="rules" class="w3-content w3-container w3-padding-64">
   <h2 class=" w3-container slideanim">Rules & Regulations</h2>
   <p class="w3-container w3-center slideanim" style="background-color:#fff;color:#000!important"></p>
  </div>
 <div class="row" style="background-color:#000;color:#fff!important">
   <div class="col-sm-12 col-xs-70" style="background-color:#000;color:#fff!important">
   <div>
       <ul class="col-md-offset-3">
           <li class="fa fa-check"> All students on the rolls of Amrita School Of Engineering are eligible to participate.</li><br>
           <li class="fa fa-check"> The sports meet is conducted on Inter Branch Basis.</li><br>
           <li class="fa fa-check"> A single student can enter for a maximum of 3 individual items.</li><br>
           <li class="fa fa-check"> An individual event will be conducted only if there is a minimum of 3 participants.</li><br>
           <li class="fa fa-check"> For team events,there can be a maximum of two team per batch. </li><br>
           <li class="fa fa-check"> First, second, and third prizes will be given for each individual item.</li><br>
           <li class="fa fa-check"> The overall championship will be awarded to the branch scoring maximum points based on the points for sports events.</li><br>
           <li class="fa fa-check"> Registration will be closed at 2:00pm on 25th Jan</li><br>
       </ul>

   </div>
 </div>
 </div>
 </div>



<!-- Third Parallax Image with Portfolio Text -->
<!-- Container (footprint) -->
<!--<a id="superoverregistration"   href="{{url('/cricket')}}"><P class="text-center"><img src="{{asset('images/superover.png')}}" alt="Home" class="logo"></p></a>-->

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-light-grey w3-wide">CONTACT US</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div style=" opacity: 1.0;background-attachment: fixed; background-position: center; background-repeat: no-repeat; background-size: cover; width: auto; background-image:url('images/sky.jpg')">
<div id="contact" class="w3-content w3-container w3-padding-64">
  @if (Session::has('success'))
    <div class="w3-panel w3-green">
      <h3>Success!</h3>
      <p>{{ Session::get('success') }}</p>
    </div>
  @endif
  <h3 class="w3-center slideanim">CONTACT US</h3>
</div>
<!-- Footer -->
<footer class="w3-center  w3-padding-16 w3-opacity w3-hover-opacity-off" style="background-color:#000;color:white !important">
  <div class="w3-xlarge ">
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
     <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
  </div>
  <p>Copyright © 2016 | All rights reserved |Developed by <a href="{{ url('/webteam') }}" title="AM.AR.U315BCA0 15,27&67" target="_blank" class="w3-hover-text-green">Web-Team</a></p>
</footer>

<!-- Add Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
<!-- Google Map Location -->
var myCenter = new google.maps.LatLng(9.093855, 76.491880);

function initialize() {
var mapProp = {
  center: myCenter,
  zoom: 12,
  scrollwheel: false,
  draggable: false,
  mapTypeId: google.maps.MapTypeId.ROADMAP
  };

var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
  position: myCenter,
});

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-black";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-black", "");
    }
}
//any problem remove the below code
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})

</script>
</body>
</html>
