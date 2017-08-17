<?php
	if (isset($_GET['error'])) {
	$error = $_GET['error'];
?>
<html lang="EN">
	<head>
		<meta charset="utf-8">
		<style>
			.holder {
				padding:3px;
				margin-left:auto;
				margin-right:auto;
				margin-top:10%;
				display:table;
				border:solid 1px #cccccc;
				border-width: thin;
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

  <div class="container">
        <div style=" auto;">
	<div class="holder">
		<label for="errormsg">Note: </label><label for="error"><?php echo $error; ?></label>
	</div>
</div></div></div></div>
	</body>
</html>
<?php } ?>