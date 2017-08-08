<?php
	require '../functions/config.php';	
?>

<!DOCTYPE html>
<head>
	<title>Home</title>
	<meta charset = "UTF-8">
	<meta name ="viewport" content= "width=device-width, initial-scale=1">
	<meta name="google-signin-client_id" content="318964194980-44lqckdukj727t3amrcbflkdssmtvlek.apps.googleusercontent.com"><!-- google sign-in -->
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel ="stylesheet" href ="../css/home.css">
	<!-- javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src ="../js/register_login.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<script src="https://apis.google.com/js/platform.js" async defer></script><!--Google Platform Library -->
</head>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.9&appId=445764725785421";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div class= "container-fluid">
			<div class = "default-panel">
				<div class= "panel-body text-center">
					<div class="col-xs-3">
					<div id= "status"><p></p></div>
						<form action="../functions/config.php" id="register_form" name="registerform">
							<fieldset>
								<legend>Register</legend>
									<div>
										<input type = "text" name="rname" id ="reg_uname" placeholder = "Username" ><br>
										<span id ="rname_error" class="rname_error"></span><br>
									</div>
									<div>
										<input type = "text" name="remail" id="reg_email" placeholder = "Email" ><br>
										<span id ="remail_error" class="remail_error"></span><br>
									</div>
									<div>
										<input type = "password" name="rpword1" id="reg_pword1" placeholder="Password" maxlength="8" ><br>
										<span id ="rpword1_error" class="rpword1_error"></span><br>
									</div>
									<div>
										<input type = "password" name="rpword2" id="reg_pword2" placeholder = "Confirm Password" maxlength="8"><br>
										<span id ="rpword2_error" class="rpword2_error"></span><br>
									</div>
									<div>
										<input type="button" value="Register" name="reg_button" id="reg_submit">&nbsp; &nbsp; &nbsp;
									</div>
							</fieldset>
						</form>
					</div>
					<div id = "login" class="col-xs-3">
						<fieldset>
							<legend>Login</legend>
							<form id="login_form" name ="logform">
									<div>
										<input type = "text" name="lname" id="log_uname" placeholder = "Username" ><br>
										<!--<a href ="recoveruname.hmtl">Forgot username?</a>-->
										<span id ="lname_error" class="error"></span><br>
									</div>
									<div>
										<input type = "password" name="lpword1" id="log_pword1" placeholder = "Password" ><br>
										<span id ="lpword_error" class="error"></span><br>
									</div>
									<div>
										<a href ="recoverpword.html">Forgot Password?</a><br>
									</div>
									<div>
										<input type = "button" value="Submit" id="log_submit"><br><br>
									</div>
									<div>
										<span>or</span><br><br>
									</div>
									<div>
										<div class="fb-login-button" data-width="200" data-max-rows="1" data-size="medium" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div><br>
										<div><com.twitter.sdk.android.core.identity.TwitterLoginButton android:id="@+id/login_button" android:layout_width="wrap_content" android:layout_height="wrap_content" /></div><br>
										<div class="g-signin2"></div>
									</div>
							</form>
						</fieldset>
					</div>
				</div>
			</div>
		</div> 
		<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
</body>	
</html>