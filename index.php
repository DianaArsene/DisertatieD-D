<?php
session_start();
if(!empty($_POST["login"])) {
	$conn = mysqli_connect("localhost", "root", "", "users");
	$sql = "Select * from users where username = '" . $_POST["username"] . "' and password = '" . md5($_POST["password"]) . "'";
	$result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["id"] = $user["id"];
			
			if(!empty($_POST["remember"])) {
				setcookie ("user_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["user_login"])) {
					setcookie ("user_login","");
				}
				if(isset($_COOKIE["password"])) {
					setcookie ("password","");
				}
			}
	} else {
		$message = "Invalid Login";
	}
}
?>	
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<style>
	.loginmodal-container {
	  padding: 30px;
	  max-width: 350px;
	  width: 100% !important;
	  background-color: #F7F7F7;
	  margin: 0 auto;
	  border-radius: 2px;
	  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	  overflow: hidden;
	  font-family: roboto;
	}

	.loginmodal-container h1 {
	  text-align: center;
	  font-size: 1.8em;
	  font-family: roboto;
	}

	.loginmodal-container input[type=submit] {
	  width: 100%;
	  display: block;
	  margin-bottom: 10px;
	  position: relative;
	}

	.loginmodal-container input[type=text], input[type=password] {
	  height: 44px;
	  font-size: 16px;
	  width: 100%;
	  margin-bottom: 10px;
	  -webkit-appearance: none;
	  background: #fff;
	  border: 1px solid #d9d9d9;
	  border-top: 1px solid #c0c0c0;
	  /* border-radius: 2px; */
	  padding: 0 8px;
	  box-sizing: border-box;
	  -moz-box-sizing: border-box;
	}

	.loginmodal-container input[type=text]:hover, input[type=password]:hover {
	  border: 1px solid #b9b9b9;
	  border-top: 1px solid #a0a0a0;
	  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
	}

	.loginmodal {
	  text-align: center;
	  font-size: 14px;
	  font-family: 'Arial', sans-serif;
	  font-weight: 700;
	  height: 36px;
	  padding: 0 8px;
	/* border-radius: 3px; */
	/* -webkit-user-select: none;
	  user-select: none; */
	}

	.loginmodal-submit {
	  /* border: 1px solid #3079ed; */
	  border: 0px;
	  color: #fff;
	  text-shadow: 0 1px rgba(0,0,0,0.1); 
	  background-color: #4d90fe;
	  padding: 17px 0px;
	  font-family: roboto;
	  font-size: 14px;
	  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
	}

	.loginmodal-submit:hover {
	  /* border: 1px solid #2f5bb7; */
	  border: 0px;
	  text-shadow: 0 1px rgba(0,0,0,0.3);
	  background-color: #357ae8;
	  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
	}

	.loginmodal-container a {
	  text-decoration: none;
	  color: #666;
	  font-weight: 400;
	  text-align: center;
	  display: inline-block;
	  opacity: 0.6;
	  transition: opacity ease 0.5s;
	} 

	.login-help{
	  font-size: 12px;
	}
	#frmLogin {
		margin-top: 120px;
		margin-left: 150px;
		padding: 20px 60px;
		margin-bottom: 50px;
		background: #99ceff;
		color: #555;
		display: inline-block;		
		border-radius: 4px;
		width: 400px;
	}
	.field-group {
		margin-top:15px;
	}
	.input-field {
		padding: 8px;
		width: 200px;
		border: #A3C3E7 1px solid;
		border-radius: 4px;
	}
	/*.form-submit-button {
		background: #65C370;
		border: 0;
		padding: 8px 20px;
		border-radius: 4px;
		color: #FFF;
		text-transform: uppercase;
	}*/
	.member-dashboard {
		padding: 40px;
		background: #D2EDD5;
		color: #555;
		border-radius: 4px;
		display: inline-block;
	}
	.member-dashboard a {
		color: #FF0000;
		text-decoration:none;
	}
	.error-message {
		text-align:center;
		color:#FF0000;
	}
	.label-style{
		color:#ffffff;
		padding-right:30px;
	}
	.label-style1{
		color:#ffffff;
		padding-right:35px;
	}
	.title_login{
		float: right;
		text-align: center;
		margin-top: 0px;
		font-family: "Times New Roman", Times, serif;
	}
	.title_login  h1{
		margin-top: 0px;

	}
	.icon_login{
		float: left;
	}
	.title_wrapper{
		height: 100px;
	}
	.image_login{
		float:right;
		margin-top: 80px;
		margin-right: 150px;
	}
	.footer_style{
		padding-top: 80px;
		height:70px;
		background-color:#005cb3;
	}
	.header_login{
		height:70px;
		background-color:#005cb3;
		padding-top: 10px;
		padding-left: 20px;
	}
</style>
</head>
<body>
<?php if(empty($_SESSION["id"])) { ?>
					<div>
					<div class="header_login"></div>
					</div>
					<div>
					<div class="image_login"><img src="firstpage.png"></div>
					</div>
					<form action="" method="post" id="frmLogin">
						<div class="title_wrapper">
						<div class="icon_login"><img src="login.png"></div>
						<div class="title_login"><h1>LOGIN</h1></div>
						</div>
						<div class="error-message"><?php if(isset($message)) { echo $message; } ?></div>	
							<label for="login" class="label-style" >Username</label>
							<input name="username" type="text" class="form-control" placeholder="Username" value="<?php if(isset($_COOKIE["user_login"])) { echo $_COOKIE["user_login"]; } ?>" class="input-field">
							<label for="password" class="label-style" >Password</label>
							<input name="password" type="password" class="form-control" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
							<div><input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["user_login"])) { ?> checked <?php } ?> />
							<label for="remember-me" class="label-style">Remember me</label>
						</div>
						<div class="field-group">
							<div><input type="submit" name="login" value="Login" class="btn btn-primary form-control"></span></div>
						</div>       
					</form>
					
<?php } else { ?>
<div class="member-dashboard">You have Successfully logged in!. <a href="logout.php">Logout</a></div>
<?php } ?>

						
					
</body>
<footer>
<div class="footer_style"</div>
</footer>
</html>