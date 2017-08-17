<?php
session_start();
if(!isset($_SESSION['username'])){
        // not logged in
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<meta charset="UTF-8">
	<title>Smart Home</title>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- importamos la libreria de firebase cliente para javascript -->

    <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script>

    <!-- Logica de comunicación con firebase  -->
     <script src="js/script.js"></script>
	
   <!--  <link rel="stylesheet" href="css/estilos.css">-->
    <!--  <link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>-->
	
	
	<!--for-mobile-apps-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Peak Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--//for-mobile-apps-->	
	<!--js-->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script src="js/modernizr.custom.97074.js"></script>

	<!--js-->
	<!--start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!--start-smoth-scrolling-->


  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and professional web design">
	  <meta name="keywords" content="web design, affordable web design, professional web design">
  	<meta name="author" content="Brad Traversy">
    <link rel="stylesheet" href="./css/style.css">
	
	
	
		<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="style.css" />	
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>

	
	
	<style>
	//old data
	@import url(http://fonts.googleapis.com/css?family=Raleway:200,500,700,800);


@font-face {
	font-weight: normal;
	font-style: normal;
	font-family: 'codropsicons';
	src:url('../fonts/codropsicons/codropsicons.eot');
	src:url('../fonts/codropsicons/codropsicons.eot?#iefix') format('embedded-opentype'),
		url('../fonts/codropsicons/codropsicons.woff') format('woff'),
		url('../fonts/codropsicons/codropsicons.ttf') format('truetype'),
		url('../fonts/codropsicons/codropsicons.svg#codropsicons') format('svg');
}


*, *:after, *:before { -webkit-box-sizing: border-box; box-sizing: border-box; }

body {
	background: #f9f7f6;
	color: #404d5b;
	font-weight: 500;
	font-size: 1.05em;
	font-family: 'Raleway', Arial, sans-serif;
  margin: 0 auto;
	text-align: center;
}



#snackbar {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #333;
    color: #fff;
    text-align: center;
    border-radius: 2px;
    padding: 16px;
    position: fixed;
    z-index: 1;
    left: 50%;
    bottom: 30px;
    font-size: 17px;
}

#snackbar.show {
    visibility: visible;
    -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
    animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
.button {
    background-color: #f44336; /* Red */
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.buttons {
    background-color: #00FF00; /* Green */
    border: none;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button3:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	 
}


#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 100px;
  height: 100px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}






body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
  background-color:#161615;
}

/* Global */
.container{
  width:80%;
  margin:auto;
  overflow:hidden;
}

ul{
  margin:0;
  padding:0;
}

.button_1{
  height:38px;
  background:#e8491d;
  border:0;
  padding-left: 20px;
  padding-right:20px;
  color:#ffffff;
}

.dark{
  padding:15px;
  background:#35424a;
  color:#ffffff;
  margin-top:10px;
  margin-bottom:10px;
}

/* Header **/
header{
  background:#35424a;
  color:#ffffff;
  padding-top:30px;
  min-height:70px;
  border-bottom:#e8491d 3px solid;
}

header a{
  color:#ffffff;
  text-decoration:none;
  text-transform: uppercase;
  font-size:16px;
}

header li{
  float:left;
  display:inline;
  padding: 0 20px 0 20px;
}

header #branding{
  float:left;
}

header #branding h1{
  margin:0;
}

header nav{
  float:right;
  margin-top:10px;
}

header .highlight, header .current a{
  color:#e8491d;
  font-weight:bold;
}

header a:hover{
  color:#cccccc;
  font-weight:bold;
}

/* Showcase */
#showcase{
  min-height:400px;
  background:url('large.jpg') no-repeat 0;
  text-align:center;
  color:#ffffff;
}

#showcase h1{
  margin-top:100px;
  font-size:55px;
  margin-bottom:10px;
}

#showcase p{
  font-size:20px;
}

/* Newsletter */
#newsletter{
  padding:15px;
  color:#ffffff;
  background:#35424a
}

#newsletter h1{
  float:left;
}

#newsletter form {
  float:right;
  margin-top:15px;
}

#newsletter input[type="email"]{
  padding:4px;
  height:25px;
  width:250px;
}

/* Boxes */
#boxes{
  margin-top:0px;
}

#boxes .box{
  float:left;
  text-align: center;
  width:30%;
  padding:10px;
}

#boxes .box img{
  width:90px;
}

/*room*/
#room{
  margin-top:20px;
}

#room .box{
  float:left;
  text-align: center;
  width:30%;
  padding:10px;
}

#room .box img{
  width:90px;
}

/* Sidebar */
aside#sidebar{
  float:right;
  width:30%;
  margin-top:10px;
}

aside#sidebar .quote input, aside#sidebar .quote textarea{
  width:90%;
  padding:5px;
}

/* Main-col */
article#main-col{
  float:left;
  width:65%;
}

/* Services */
ul#services li{
  list-style: none;
  padding:20px;
  border: #cccccc solid 1px;
  margin-bottom:5px;
  background:#e6e6e6;
}

footer{
  padding:20px;
  margin-top:20px;
  color:#ffffff;
  background-color:#e8491d;
  text-align: center;
}

/* Media Queries */
@media(max-width: 768px){
  header #branding,
  header nav,
  header nav li,
  #newsletter h1,
  #newsletter form,
  #boxes .box,
  article#main-col,
  aside#sidebar{
    float:none;
    text-align:center;
    width:100%;
  }

  header{
    padding-bottom:20px;
  }

  #showcase h1{
    margin-top:40px;
  }

  #newsletter button, .quote button{
    display:block;
    width:100%;
  }

  #newsletter form input[type="email"], .quote input, .quote textarea{
    width:100%;
    margin-bottom:5px;
  }
}



//images

div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 0px;
    text-align: center;
    text-color: #000000;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

//new data for switch	
.bild {
  position:absolute;
  display:none;
  width:1000px;
  height:735px;
}
.bg { 
  position: fixed; 
  top: 0; 
  left: 0;
  z-index: -99;
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;  
  z-index: -999;
 }
.bgwidth { width: 100%; }
.bgheight { height: 100%; } 
.switch {
  position: relative;
  display: block;
  vertical-align: top;
  width: 100px;
  height: 30px;
  padding: 0px;
  margin: 0 10px 10px 0;
  background: linear-gradient(to bottom, #eeeeee, #FFFFFF 25px);
  background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF 25px);
  border-radius: 18px;
  box-shadow: inset 0 -1px white, inset 0 1px 1px rgba(0, 0, 0, 0.05);
  cursor: pointer;
}

.switch-input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
.switch-label {
  position: relative;
  display: block;
  height: inherit;
  font-size: 10px;
  text-transform: uppercase;
  background: #eceeef;
  border-radius: inherit;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.12), inset 0 0 2px rgba(0, 0, 0, 0.15);
}
.switch-label:before, .switch-label:after {
  position: absolute;
  top: 50%;
  margin-top: -.5em;
  line-height: 1;
  -webkit-transition: inherit;
  -moz-transition: inherit;
  -o-transition: inherit;
  transition: inherit;
}
.switch-label:before {
  content: attr(data-off) hide;
  right: 11px;
  color: #aaaaaa;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
}
.switch-label:after {
  content: attr(data-on) hide;
  left: 11px;
  color: #FFFFFF;
  text-shadow: 0 1px rgba(0, 0, 0, 0.2);
  opacity: 0;
}
.switch-input:checked ~ .switch-label {
 background-color: #7CFC00;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.15), inset 0 0 3px rgba(0, 0, 0, 0.2);
}
.switch-input:checked ~ .switch-label:before {
  opacity: 0;
}
.switch-input:checked ~ .switch-label:after {
  opacity: 1;
}
.switch-handle {
  position: absolute;
  top: 0px;
  left: 4px;
  width: 28px;
  height: 28px;
  background: linear-gradient(to bottom, #FFFFFF 40%, #f0f0f0);
  background-image: -webkit-linear-gradient(top, #FFFFFF 40%, #f0f0f0);
  border-radius: 100%;
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.2);
}
.switch-handle:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -6px 0 0 -6px;
  width: 12px;
  height: 12px;
  background: linear-gradient(to bottom, #eeeeee, #FFFFFF);
  background-image: -webkit-linear-gradient(top, #eeeeee, #FFFFFF);
  border-radius: 6px;
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.02);
}
.switch-input:checked ~ .switch-handle {
  left: 74px;
  box-shadow: -1px 1px 5px rgba(0, 0, 0, 0.2);
}
 
/* Transition
========================== */
.switch-label, .switch-handle {
  transition: All 0.3s ease;
  -webkit-transition: All 0.3s ease;
  -moz-transition: All 0.3s ease;
  -o-transition: All 0.3s ease;
}



h2{
   font-family: 'Fjalla One', sans-serif;
  color: #000000;
  font-size: 35px;
  text-shadow: 1px 1px 7px rgba(150, 150, 150, 1);
   margin-top:0px;
}
h3{

  color: white;
  font-size: 25px;
  text-shadow: 1px 1px 7px rgba(150, 150, 150, 1);
}




	</style>
</head>


<body>


<header>
      <div class="container">
        <div id="branding">
          <a href="http://smarthomes.atwebpages.com/home.php"><h1><span class="highlight">Smart</span> Home</h1></a>
        </div>
        <nav>
			<a href="#" id="menu-icon"></a>
          <ul>
           
           <li><a href="profile.php" class="current">Profile</a></li>
            <li><a href="logout.php" class="current">Logout</a></li>
          </ul>
        </nav>
		
		
      </div>
    </header>
	

		
  <section id="boxes">
<div class="responsive">
  <div class="gallery">
 
      <img src="livingroom.jpg" alt="livingroom" width="800" height="600">

    <div class="desc">Living Room</div>

<div align="center"> <h3>Lights</h3>

  
    <label class="switch">
      <input class="switch-input" type="checkbox" id="livswitch" />
      <span class="switch-label" data-on="livOn" data-off="livOff"></span> 
      <span class="switch-handle"></span> 
    </label> </br></br></br>

  </div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="bedroom.jpeg" alt="bedroom" width="800" height="600">
    <div class="desc">Bed Room</div>
	
	<div align="center"> <h3>Lights</h3>

  
    <label class="switch">
      <input class="switch-input" type="checkbox" id="bedswitch" />
      <span class="switch-label" data-on="bedOn" data-off="bedOff"></span> 
      <span class="switch-handle"></span> 
    </label> </br></br></br>

</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="kitchen.jpg" alt="kitchen" width="800" height="400">

    <div class="desc">Kitchen</div>
	
	<div align="center"> <h3>kitchen Light</h3>

    <label class="switch">
      <input class="switch-input" type="checkbox" id="kitchenswitch" />
      <span class="switch-label" data-on="kitchenOn" data-off="kitchenOff"></span> 
      <span class="switch-handle"></span> 
    </label>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a href="timerswitch.html">  <img src="timer.png" alt="Timer" width="800" height="400"> </a>

    <div class="desc">Timer</div>
	
	<div align="center"> <h3>set time to switch</h3>

   
  </div>
</div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="bath.jpeg" alt="garagedoor" width="800" height="400">

    <div class="desc">Bathroom</div>
	
	<div align="center"> <h3>LED</h3>

    <label class="switch">
      <input class="switch-input" type="checkbox" id="doorswitch" />
      <span class="switch-label" data-on="doornOn" data-off="doorOff"></span> 
      <span class="switch-handle"></span> 
    </label>
  </div>
</div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="dining.jpeg" alt="Dining" width="800" height="400">

    <div class="desc">Dining</div>
	
	<div align="center"> <h3>Dining Light</h3>

    <label class="switch">
      <input class="switch-input" type="checkbox" id="diningswitch" />
      <span class="switch-label" data-on="diningOn" data-off="diningOff"></span> 
      <span class="switch-handle"></span> 
    </label>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="door.gif" alt="bathroom" width="800" height="400">

    <div class="desc">Garage Door</div>
	
	<div align="center"> <h3>Open / Close</h3>

    <label class="switch">
      <input class="switch-input" type="checkbox" id="bathswitch" />
      <span class="switch-label" data-on="bathOn" data-off="bathOff"></span> 
      <span class="switch-handle"></span> 
    </label>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="lawn.jpg" alt="Lawn" width="800" height="400">

    <div class="desc">Lawn</div>
	
	<div align="center"> <h3>Lawn Light</h3>

    <label class="switch">
      <input class="switch-input" type="checkbox" id="lawnswitch" />
      <span class="switch-label" data-on="lawnOn" data-off="lawnOff"></span> 
      <span class="switch-handle"></span> 
    </label>
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
  <a href="cam.php">
      <img src="camera.gif" alt="Lawn" width="800" height="400">

    <div class="desc"></div>
	
	<div align="center"> <h3>Camera</h3>

  </div>
  </a>
</div>
</div>

<div class="responsive">
  <div class="gallery">
  <a href="graphs.php">
      <img src="graph.png" alt="Graph" width="800" height="400">

    <div class="desc">Graphs</div>
	
	<div align="center"> <font color="red"><h3>Temparature, Humidity,C.P.U</h3></font>
</a>
  
  </div>
</div>
</div>

<div class="responsive">
  <div class="gallery">
  <a href="home2.php">
      <img src="homemap.jpg" alt="Graph" width="800" height="400">

    <div class="desc">Home2</div>
	
	<div align="center"> <font color="red"><h3>Second Home</h3></font>
</a>
  
  </div>
</div>
</div>

</section>	



<!--
<div style="border-bottom:1px solid #000;background:url('lawn.jpg') center;"> 
<div align="left"> <h2>Lawn</h2></div></br>

<div align="center"> <h3>Water</h3>

	<div class="button-holder">
			<a href="time.html" class="button">Set Time</a>
		</div>

    <label class="switch">
      <input class="switch-input" type="checkbox" id="waterswitch" />
      <span class="switch-label" data-on="waterOn" data-off="waterOff"></span> 
      <span class="switch-handle"></span> 
    </label>

<div align="center"> <h3>Lights</h3>

  
    <label class="switch">
      <input class="switch-input" type="checkbox" id="lawnswitch" />
      <span class="switch-label" data-on="lawnOn" data-off="lawnOff"></span> 
      <span class="switch-handle"></span> 
    </label> </br></br></br>

</div>
</div>
</div>

<div style="border-bottom:1px solid #000;background:url('door.gif') center;height:auto"> 
<div align="left"> <h2>Garage Door</h2></div></br>
<div align="center"><h2>Open/Close</h2>

    <label class="switch">
      <input class="switch-input" type="checkbox" id="garagedoor" />
      <span class="switch-label" data-on="doorOn" data-off="doorOff"></span> 
      <span class="switch-handle"></span> 
    </label> </br></br></br>
	
</div>
</div>


<div class="responsive">
  <div class="gallery">
  <a href="home2.php">
      <img src="homemap.jpg" alt="Graph" width="800" height="400">

    <div class="desc">Home2</div>
	
	<div align="center"> <font color="red"><h3></h3></font>
</a>
  
  </div>
</div>
</div>

 -->
<!--
<img id="Image-Maps-Com-image-maps-2017-07-13-021340" src="http://www.image-maps.com/m/private/0/sifbr85qn9l1d0ldq4gfi4fvv2_garage.gif" border="0" width="auto" height="auto" orgWidth="2400" orgHeight="2400" usemap="#image-maps-2017-07-13-021340" alt="" />
<map name="image-maps-2017-07-13-021340" id="ImageMapsCom-image-maps-2017-07-13-021340">
<area  alt="" title=""  data-on="garageon" data-off="garageoff" shape="rect" coords="512,888,1900,2108" style="outline:none;" target="_self"     />
<area shape="rect" coords="2398,2398,2400,2400" alt="Image Map" style="outline:none;" title="Image Map" />
</map>
-->

<!--
<a href="cam.php">
<div style="border-bottom:1px solid #000;background:url('camera.gif') center;height:auto"> 
<div align="left"> <h2>Camera</h2>
</div></br>
-->


<div class="clearfix"></div>
    <footer>
      <p>Ps Softwares, Copyright &copy; 2017</p>
    </footer>
</body>
</html>

