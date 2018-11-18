<?php
session_start();
if(!empty($_POST["login"])) {
	$conn = mysqli_connect("localhost", "root", "", "erp");

	$sql = "Select * from users where username = '" . $_POST["username"] . "' and password = '" . md5($_POST["password"]) . "'";
	$result = mysqli_query($conn,$sql);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["id"] = $user["id"];
			$_SESSION["user"] = $user["username"];
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
		echo $_POST["username"] . '  *** pswdmd5: ' . md5($_POST["password"]) . '  *** psw  ' . $_POST["password"];
		$message = "Invalid Login";
	}
}
?>	
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="indexStyle.css">
</head>
<body>
<?php if(empty($_SESSION["id"])) { ?>
					<div>
					<div class="header_login"></div>
					</div>
					<div>
                                            <div class="image_login"><img src="image.png"></div>
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
<?php } else { 
	if($_SESSION["user"]=="admin")
	{
		header('Location: admin.php');
		die();
	}
	else{
		header('Location: meniu.php');
	die;
	}
} ?>
					
</body>
<footer>
<div class="footer_style"</div>
</footer>
</html>
