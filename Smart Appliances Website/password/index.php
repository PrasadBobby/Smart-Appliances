<html lang="EN">
	<head>
		<title>Login</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3-theme-red.css">


<style>

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

.content {
	font-size: 150%;
	padding: 3em 0;
}

.content h2 {
	margin: 0 0 0.1em;
	opacity: 0.1;
}

.bgcolor-1 { background: #f0efee; }
.bgcolor-2 { background: #f9f9f9; }
.bgcolor-3 { background: #e8e8e8; }
.bgcolor-4 { background: #2f3238; color: #fff; }
.bgcolor-5 { background: #df6659; color: #521e18; }
.bgcolor-6 { background: #2fa8ec; }
.bgcolor-7 { background: #d0d6d6; }
.bgcolor-8 { background: #3d4444; color: #fff; }


.input {
	position: relative;
	z-index: 1;
	display: inline-block;
	margin: 1em;
	max-width: 400px;
	width: calc(100% - 2em);
	vertical-align: top;
}

.input__field {
	position: relative;
	display: block;
	float: right;
	padding: 0.8em;
	width: 60%;
	border: none;
	border-radius: 0;
	background: #f0f0f0;
	color: #aaa;
	font-weight: bold;
	font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
	-webkit-appearance: none; /* for box shadows to show on iOS */
}

.input__field:focus {
	outline: none;
}

.input__label {
	display: inline-block;
	float: right;
	padding: 0 1em;
	width: 40%;
	color: #6a7989;
	font-weight: bold;
	font-size: 70.25%;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

.input__label-content {
	position: relative;
	display: block;
	padding: 1.6em 0;
	width: 100%;
}

.graphic {
	position: absolute;
	top: 0;
	left: 0;
	fill: none;
}

.icon {
	color: #ddd;
	font-size: 150%;
}


header, footer {
    padding: 1em;
    color: white;
    background-color: red;
    clear: left;
    text-align: center;
}


.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
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


body {
  background:url(https://images7.alphacoders.com/669/669963.jpg) no-repeat center;


}



.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:auto;
	position:auto;

}
.login-html{
	width:100%;
	height:100%;
	position:auto;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.5);

}



.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}


			.login_holder {
				padding:3px;
				margin-left:auto;
				margin-right:auto;
				margin-top:10%;
				display:table;
				
			}
			input[type='submit'] {
				float:right;
			}
		</style>
	</head>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">
<link rel="stylesheet" href="/lib/w3-theme-red.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body style="max-width:auto">


 <div class="login-wrap">
	<div class="login-html">
	<div class="login_holder">
	 <div class="container">
        <div style=" auto;">
		
		
		<form method="post" action="loginpage.php">
		
		
		<center><font color="white"><h2>Log-in</h2></font></center></br>
          
				<div class="form-group">
			<label for="username" class="control-label"><font color="#3498DB" size="4">Userid:</font></label>
			<font color="#eca29b"><input type="text" name="username" required /></font></div><br/>
			
			<div class="form-group">
			<label for="password"  class="control-label"><font color="#3498DB" size="4">Password:</font></label>
			<font color="red"><input type="password" name="password" required /></font></div><br/>
			
			<div id="snackbar">Loading...</div>
                <div class="form-group">
                    <center><input type="submit" name="btn-login" onclick="myFunction()" value="Login" class="btn btn-primary"></center>
                </div>
		</form>
		
	</div>
</div>
	</div>
	
	<font color="white"><h7>&copy; Ps Softwares</h7></font></br>

</div>
</div>	

<script>
function myFunction() {
    var x = document.getElementById("snackbar")
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
	</body>
</html>