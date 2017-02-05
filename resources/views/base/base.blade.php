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
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}



//bar chart
// Add values to the values array and see what happens :)
var values = [3418.57,2786.00,699.86,659.48,471.06,430.68,430.68,403.76,349.93,349.93];

drawChart(values,"#chart",7) // You can adjust the margin between each bar by changing 10 to whatever you like

function drawChart(data,selector,padding){
  var max = Math.max.apply(Math, data);
  var chart = document.querySelector(selector);
  var barwidth = ((chart.offsetWidth-(values.length-1)*padding-(data.length)*10)/data.length);
  var sum = data.reduce(function(pv, cv) { return pv + cv; }, 0);
  var left = 0;
  for (var i in data){
    var newbar = document.createElement('div');
    newbar.setAttribute("class", "bar");
    newbar.style.width=barwidth+"px";
    newbar.style.height=((data[i]/max)*100)+"%";
    newbar.style.left=left+"px";
    chart.appendChild(newbar);
    left += (barwidth+padding+10);
  }
}

var values1 = [1000,10000,600,100,200,500,400,800,300,120];

drawChart(values1,"#chart1",10) // You can adjust the margin between each bar by changing 10 to whatever you like

function drawChart1(data,selector,padding){
  var max1 = Math.max.apply(Math, data);
  var chart1 = document.querySelector(selector);
  var barwidth1 = ((chart.offsetWidth-(values.length-1)*padding-(data.length)*10)/data.length);
  var sum1 = data.reduce(function(pv, cv) { return pv + cv; }, 0);
  var left1 = 0;
  for (var i in data){
    var newbar1 = document.createElement('div');
    newbar1.setAttribute("class", "bar1");
    newbar1.style.width=barwidth+"px";
    newbar1.style.height=((data[i]/max)*100)+"%";
    newbar1.style.left=left+"px";
    chart1.appendChild(newbar1);
    left1 += (barwidth+padding+10);
  }
}
//upto here


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