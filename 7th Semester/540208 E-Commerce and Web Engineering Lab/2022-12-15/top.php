<!--Header-->
<!doctype html>
<html>
	<head>
		<title> Welcome to Web Design </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style type="text/css">
			#container{
				width:  400px;
				margin:  0px auto;
			}
			nav{
				display: block;
				background-color: black;
				color:  white;
			}
			nav a {
				color:  white;
				padding:  5px 10px;
				display: inline-block;
				text-decoration: none;
				font-weight: bold;
			}
			nav a:hover{
				color:  yellow;
			}
			.row{
				margin-bottom: 10px;
				background-color: #CCC;
				padding:  5px;
			}
			.row label{
				width: 72px;
				display: inline-block;
				font-weight: bold;
			}
			.w3{
				width: 180px;
			}
			.msg{
				display: none;
				color:  red;
			}
			@media print{
				header, footer{
					display: none;
				}
			}
			footer{
				background-color: #EFEFEF;
				padding: 20px 10px;
				margin-top: 20px;
				border-top: 2px solid #CCC;
			}
		</style>
		<script type="text/javascript">
			function showMsg(){
				document.getElementById('msg').style.display = 'block';
			}
			function hideMsg(){
				document.getElementById('msg').style.display = 'none';
			}
		</script>
	</head>
	<body>
		<header>
			<h1> LMS - Library Management System </h1> 
			<nav>
				<a href="index.php">Home</a> 
				<a href="books.php">Booklist</a>
				<a href="reg.php">Registration</a>
				<a href="contact.php">Contact</a> 
				<a href="login.php">Login</a> 
			</nav>
		</header>
		<div id="container"> 