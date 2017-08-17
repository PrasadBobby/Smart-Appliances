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
	
	
</head>


<body>

	
	
	
	<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/310205/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=CPU+memory&type=line"></iframe>

	
	
	
	
	<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/310205/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Temparature&type=line"></iframe>

	
	<iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/310205/charts/3?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=Humidity&type=line"></iframe>


</body>
</html>