<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/main.css') }}">

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
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .bgimg-5, .bgimg-6 {
    opacity: 0.8;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('images/back.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url('images/710.png');
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url('images/contactus.jpg');
    min-height: 400px;
}
/* Fourth image (team)*/
.bgimg-4 {
    background-image: url('images/team.jpg');
    min-height: 400px;
}

/* Fifth image (footprint)*/
.bgimg-5 {
    background-image: url('images/footprint.jpg');
    min-height: 400px;
}

/* sixth image (footprint)*/
.bgimg-6 {
    background-image: url('images/top10.jpg');
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


/*bar chart*/
#chart{
  position:relative;
  margin-top:40px;
  width:500px;
  height:200px;
}
@-webkit-keyframes bargrowth{
  0%   {max-height: 0%;}
  100%  {max-height: 100%;}
}
@keyframes bargrowth{
  0%   {max-height: 0%;}
  100%  {max-height: 100%;}
}
.bar{
  -webkit-animation: bargrowth 9000ms ease;
  animation: bargrowth 9000ms ease;
  position:absolute;
  bottom:0;
  display:inline-block;
  background: #89b800;
  box-shadow: 1px -1px #79a300, 2px -2px #79a300, 3px -3px #79a300,   4px -4px #79a300, 5px -5px #79a300, 6px -6px #79a300, 7px -7px   #79a300, 8px -8px #79a300, 9px -9px #79a300, 10px -10px #79a300;
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


#chart1{
  position:relative;
  margin-top:40px;
  width:500px;
  height:200px;
}
@-webkit-keyframes bargrowth{
  0%   {max-height: 0%;}
  100%  {max-height: 100%;}
}
@keyframes bargrowth{
  0%   {max-height: 0%;}
  100%  {max-height: 100%;}
}
.bar1{
  -webkit-animation: bargrowth 9000ms ease;
  animation: bargrowth 9000ms ease;
  position:absolute;
  bottom:0;
  display:inline-block;
  background: #89b800;
  box-shadow: 1px -1px #79a300, 2px -2px #79a300, 3px -3px #79a300,   4px -4px #79a300, 5px -5px #79a300, 6px -6px #79a300, 7px -7px   #79a300, 8px -8px #79a300, 9px -9px #79a300, 10px -10px #79a300;
}


.wrapper1{
  text-align:center;
  margin:0 auto;
  margin-top:30px;
  width:500px;
  font-family:Helvetica;
  font-size:12px;
}
.wrapper1 > h1, .wrapper1 > p{
  margin:0;
}

.face {
    position: absolute;
}

.data-y {
    background: none!important;
    font-size: 22px;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bold;
    color: #FFF;
    text-align: center;
    text-shadow: 1px 1px #666;
    -webkit-transform: translateZ(1px);
    -moz-transform: translateZ(1px);
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

</style>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/parsley.min.js') }}"></script>







<footer class="w3-center  w3-padding-16 w3-opacity w3-hover-opacity-off" style="background-color:green;color:white !important">
  <div class="w3-xlarge ">
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
     <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
    <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
  </div>
  <p>Copyright © 2016 | All rights reserved |Developed by <a href="#" title="AM.AR.U315BCA015,26,27&33" target="_blank" class="w3-hover-text-green">Group3</a></p>
</footer>
