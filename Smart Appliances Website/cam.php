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
  
	     <script src="js/servoscript.js"></script>
	
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

body {
	background: #f9f7f6;
	color: #404d5b;
	font-weight: 500;
	font-size: 1.05em;
	font-family: 'Raleway', Arial, sans-serif;
  margin: 0 auto;
	text-align: center;
}





#myDiv {
  display: none;
  text-align: center;
}






body{
  font: 15px/1.5 Arial, Helvetica,sans-serif;
  padding:0;
  margin:0;
  background-color:#f4f4f4;
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
	
//knob


/* SWITCH
--------------------------------------------- */
.switch_wrapper {
  position: relative;

 
  width: 220px;
  height: 220px;
  margin: auto;
  font-weight: 700;
  color: #eee;
  transform: translateZ(0);
}

.switch_wrapper .switch_knob,
.switch_wrapper .first-ring,
.switch_wrapper .second-ring,
.switch_wrapper .inner-circle,
.switch_wrapper .light,
.switch_wrapper .dot {
  position: absolute;
  left: 50%;
  top: 50%;
}

.switch {
  position: relative;
  width: 220px;
  height: 220px;
  border-radius: 100%;
  background: #555;
}

.switch_Off {
  color: #bdc3c7;
}

.switch_Green {
  color: #1abc9c;
}

.switch_Blue {
  color: #3498db;
}

.switch_Red {
  color: #e74c3c;
}

.first-ring {
  z-index: 4;
  width: 60%;
  height: 60%;
  margin: -30% 0 0 -30%;
  border-radius: 50%;
  background: rgba(0, 0, 0, 0.1);
}

.second-ring {
  width: 85.71429%;
  height: 85.71429%;
  margin: -42.85714% 0 0 -42.85714%;
  border-radius: 50%;
  background: #bbb;
}

.inner-circle {
  width: 85.71429%;
  height: 85.71429%;
  margin: -42.85714% 0 0 -42.85714%;
  border-radius: 50%;
  background: #eee;
}

.switch .switch_knob {
  z-index: 3;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.switch .switch_knob label {
  z-index: 2;
  position: absolute;
  top: 25%;
  left: 30%;
  width: 40%;
  height: 50%;
  margin-top: -25%;
  -webkit-transform-origin: bottom;
  border-radius: 55% 55% 0% 0% / 15% 15% 0% 0%;
}

.switch .switch_knob label:after {
 content: attr(data-on);
  position: absolute;
  bottom: 0;
  right: 0;
  width: 80%;
  height: 85%;
  -webkit-transform: rotate(45deg);
  -webkit-transform-origin: right;
  border-radius: 100% 0% 0% 0% / 50% 0% 0% 0%;
}

.switch .switch_knob label:before {
  content: attr(data-on);
  position: absolute;
  bottom: 0;
  width: 80%;
  height: 85%;
  -webkit-transform: rotate(-45deg);
  -webkit-transform-origin: left;
  border-radius: 0% 100% 0% 0% / 0% 50% 0% 0%;
}

.switch .switch_knob label span {
  z-index: 2;
  position: absolute;
  top: 0%;
  width: 100%;
  font-size: 15px;
  line-height: 4;
  text-align: center;
  text-shadow: 0 1px 0 #444;
}

.switch .switch_knob label:nth-child(2) {
  transform: rotate(90deg);
}

.switch .switch_knob label:nth-child(2) span {
  transform: rotate(-90deg);
}

.switch .switch_knob label:nth-child(3) {
  transform: rotate(180deg);
}

.switch .switch_knob label:nth-child(3) span {
  transform: rotate(180deg);
}

.switch .switch_knob label:nth-child(4) {
  transform: rotate(270deg);
}

.switch .switch_knob label:nth-child(4) span {
  transform: rotate(90deg);
}

.switch .switch_knob input {
  position: absolute;
  opacity: 0;
  visibility: hidden;
}

/* SWITCH LIGHT */
.switch .light {
  z-index: 10;
  width: 50%;
  height: 100px;
  margin-top: -50px;
  transform-origin: 0% 50%;
  transform: rotate(-90deg);
  transition: all .5s;
}

.switch .light span {
  opacity: .4;
  position: absolute;
  top: 0;
  left: 15px;
  width: 100px;
  height: 100px;
  background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.8) 0%, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0) 100%);
}

/* SWITCH LIGHT POSITION */
.switch #switch_Off:checked ~ .light {
  transform: rotate(-90deg);
}

.switch #switch_Green:checked ~ .light {
  transform: rotate(0deg);
}

.switch #switch_Blue:checked ~ .light {
  transform: rotate(90deg);
}

.switch #switch_Red:checked ~ .light {
  transform: rotate(180deg);
}

/* SWITCH LIGHT */
.switch .dot {
  z-index: 6;
  width: 50%;
  height: 12px;
  margin-top: -6px;
  transform-origin: 0% 50%;
  transition: all .5s;
}

.switch .dot span {
  position: absolute;
  top: 0;
  left: 30px;
  width: 12px;
  height: 12px;
  border-radius: 100%;
  background: #555;
}

/* SWITCH LIGHT POSITION */
.switch #switch_Off:checked ~ .dot {
  transform: rotate(-90deg);
}

.switch #switch_Off:checked ~ .dot span {
  transform: rotate(90deg);
}

.switch #switch_Green:checked ~ .dot {
  transform: rotate(0deg);
}

.switch #switch_Green:checked ~ .dot span {
  transform: rotate(0deg);
}

.switch #switch_Blue:checked ~ .dot {
  transform: rotate(90deg);
}

.switch #switch_Blue:checked ~ .dot span {
  transform: rotate(90deg);
}

.switch #switch_Red:checked ~ .dot {
  transform: rotate(180deg);
}

.switch #switch_Red:checked ~ .dot span {
  transform: rotate(180deg);
}

/* LINE */
.switch hr.line {
  z-index: 1;
  position: absolute;
  top: 50%;
  width: 100%;
  height: 0;
  margin-top: -1px;
  border-width: 1px 0;
  border-style: solid;
  border-top-color: #3c3d3f;
  border-bottom-color: #666769;
}

.switch hr.line:nth-child(1) {
  transform: rotate(-45deg);
}

.switch hr.line:nth-child(2) {
  transform: rotate(45deg);
}


	</style>
</head>


<body oncontextmenu="return false">

<header>
      <div class="container">
        <div id="branding">
         <h1><span class="highlight">Smart</span> Home</h1>
        </div>
        <nav>
			<a href="#" id="menu-icon"></a>
          <ul>
             <li><a href="home.php" class="current">Home</a></li>
           <li><a href="profile.php" class="current">Profile</a></li>
            <li><a href="logout.php" class="current">Logout</a></li>
          </ul>
        </nav>
		
		
      </div>
    </header>
<iframe width="640" height="360" src="https://www.youtube.com/embed/zrSVN_ShF_I" frameborder="0" allowfullscreen></iframe>
</br></br></br>
<!--
<span style="display:inline-block;padding:5px;border:1px solid #fc0; font-size: 140%;font-weight: bold;">
<div class="switch_wrapper">
  <div class="switch">

    <div class="switch_knob">
      <label for="switch_Off" class="switch_Off"><span class="winners"  data-off="thirtyOff">30</span></label>
      <label for="switch_Green" class="switch_Green"><span class="winners" data-off="sxityOff">60</span></label>
      <label for="switch_Blue" class="switch_Blue"><span class="winners" data-on="ninty" data-off="nintyOff">90</span></label>
      <label for="switch_Red" class="switch_Red"><span class="winners" data-on="eighty" data-off="eightyOff">180</span></label>
     
	 <input id="switch_Green" name="switch" onclick="green()" checked type="radio">
      <input id="switch_Off" name="switch" onclick="off()" checked type="radio">
      <input id="switch_Blue" name="switch" onclick="blue()" type="radio">
      <input id="switch_Red" name="switch" onclick="red()" type="radio">
    
	<div class="light"><span></span></div>
      <div class="dot"><span></span></div>
      <div class="first-ring">
        <div class="second-ring">
          <div class="inner-circle">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</span>

<div class="clearfix"></div>
    <footer>
      <p>Ps Softwares, Copyright &copy; 2017</p>
    </footer>
	
	<script type="text/javascript">
    function mousehandler(e) {
        var myevent = (isNS) ? e : event;
        var eventbutton = (isNS) ? myevent.which : myevent.button;
        if ((eventbutton == 2) || (eventbutton == 3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    function disableCtrlKeyCombination(e) {
        var forbiddenKeys = new Array("a", "s", "c", "x", "u");
        var key;
        var isCtrl;
        if (window.event) {
            key = window.event.keyCode;
            //IE
            if (window.event.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        else {
            key = e.which;
            //firefox
            if (e.ctrlKey)
                isCtrl = true;
            else
                isCtrl = false;
        }
        if (isCtrl) {
            for (i = 0; i < forbiddenKeys.length; i++) {
                //case-insensitive comparation
                if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                    return false;
                }
            }
        }
        return true;
    }
</script>

<script>
//var xmlhttp;
//xmlhttp=new XMLHttpRequest();

function off()
{

	console.log("thirty")
	//xmlhttp.open("GET","cgi-bin/forward.cgi",true);
	//xmlhttp.send();
}
function green()
{
	console.log("sixty")

}
function blue()
{
	console.log("ninty")
	
}
function red()
{
	console.log("eighty")

}

        
</script>
-->
</body>
</html>

