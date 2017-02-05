<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB TEAM</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <script src="{{ asset('js/app.js') }}"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">

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
        <script src="{{ asset('js/parsley.min.js') }}"></script>
    </head>
    <body>
        <div class="w3-top" data-spy="scroll" style="color:#fff !important">
          <ul class="w3-navbar w3-card-2 w3-animate-top w3-black" style="color:#000;" id="myNavbar">
            <li><a href="#">HOME</a></li>
            <li class="w3-hide-small w3-right">
            <nav class="collapse navbar-collapse navbar-right " role="navigation">
                                <li><a href="{{ url('registernow') }}">Register Now</a></li>
                                <li><a href="#events">Events </a></li>
                            <!--    <li><a href="#cricketteams">Cricket Teams</a></li> -->
                                <li><a href="#registrations">Registrations</a></li>
                            <!--    <li><a href="#superoverregistration">SuperOver Registration</a></li>-->
                                <li><a href="#rules">Rules</a></li>
                                <li><a href="#contact">Contact</a></li>
                    <!--        @if (Route::has('login'))
                           <li> <a href="{{ url('/login') }}">Login</a></li>
                           <li> <a href="{{ url('/register') }}">Register</a></li>
                       @endif-->
                            </nav>
                            </li>
          </ul>
        </div>
         <P class="text-center"><img src="{{asset('images/logo_full.png')}}" alt="logo"></p>
             <div class="w3-container w3-padding-64 w3-center"  style="background-color:#000;color:#fff !important">
                 <h3 class="text-center " style="color:red;"><strong><span class="fa fa-users" style="color:#fff!important" aria-hidden="true"> &nbsp; WEB TEAM </span></strong></h3>
                 <h3 class="text-center " style="color:red;"><strong><span  style="color:#fff!important">___________________________</span></strong></h3>
                <br>
                <br>
                <div class="w3-row"><br>

                <div class="w3-quarter col-md-offset-0">
                  <img src="{{asset('images/HARIKRISHNAAJ.jpg')}}" alt="" draggable="false" style="width:55%" class="w3-circle w3-hover-opacity">
                  <h3>HARIKRISHNA AJ</h3>
                  <p>BCA(2015-2018)</p>
                  <p>Ph: &nbsp; 9447103444</p>
                  <div class="w3-large ">
                  <p><a href="https://facebook.com/HKK710" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a> &nbsp;
                      <a href="https://twitter.com/HARIKRI32583827" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a> &nbsp;
                      <a href="https://github.com/hkk710" class="w3-hover-text-green"><i class="fa fa-github"></i></a></p>
                  </div>
                </div>

                <div class="w3-quarter col-md-offset-1">
                  <img src="{{asset('images/arjun.jpg')}}" alt="" draggable="false" style="width:55%" class="w3-circle w3-hover-opacity">
                  <h3>ARJUN NM</h3>
                  <p>BCA(2015-2018)</p>
                  <p>Ph: &nbsp; 9961148876</p>
                  <div class="w3-large ">
                   <p><a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a> &nbsp;
                       <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a> &nbsp;
                       <a href="#" class="w3-hover-text-green"><i class="fa fa-github"></i></a></p>
                   </div>
                </div>

                <div class="w3-quarter col-md-offset-1">
                  <img src="{{asset('images/vasudev.jpg')}}" alt="" draggable="false" style="width:55%" class="w3-circle w3-hover-opacity">
                  <h3>VASUDEV R NAIR</h3>
                  <p>BCA(2015-2018)</p>
                  <p>Ph: &nbsp; 7561896668</p>
                  <div class="w3-large ">
                   <p><a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a> &nbsp;
                       <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a> &nbsp;
                       <a href="#" class="w3-hover-text-green"><i class="fa fa-github"></i></a></p>
                   </div>
                </div>
                </div>
                </div>
                 </div>
    </body>
    <footer class="w3-center w3-padding-16 " style="background-color:#000;color:white !important">
      <p>Copyright © 2016 | All rights reserved |Developed by <a href="{{ url('webteam') }}" title="AM.AR.U315BCA0 15,27&67" target="_blank" class="w3-hover-text-green">Web-Team</a></p>
    </footer>
</html>
