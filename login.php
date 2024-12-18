<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<!DOCTYPE html>
<HTML>
<HEAD>


<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>


<style>
        body {
          background-image: url('roberto-nickson-MA82mPIZeGI-unsplash11.jpg');
        }
        </style>
        

<style>
	
.sign-up-container{
	margin-top: 280px;
  	background-color: gray;
  	padding: 28px;
  	margin-right: 590px;
  	margin-left: 640px;
}

#btn{
	color:white;
	font-weight:bold;
	background: #000080;
	cursor: pointer;
	padding: 8px 8px;
	margin-left:80px;
	margin-top: 15px;
	
}

.heading{
	text-align: center;
	font-family: sans-serif;
	font-weight: 5000px;
	color:white;
}

.inline-block{
	font-family: sans-serif;
	color:white;
}

.sign-up-container{
	font-family: sans-serif;
	
}

.input-box-330{
	width: 200px;
		height: 25px;
}


</style>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="user-registration.php" style="color:aqua">Sign up</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="POST" onsubmit="return loginValidation()">
					<div class="heading">Login</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">
						<div class="inline-block">
								Username<span class="required error" id="username-info"></span>
							
							<input class="input-box-330" type="text" name="username" id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
								Password<span class="required error" id="login-password-info"></span>
							
							<input class="input-box-330" type="password" name="login-password" id="login-password">
						</div>

					</div>

					<div class="row">
						<input class="btn" type="submit" name="login-btn" id="btn" value="Login">
					</div>
				</form>
			</div>
		</div>
	</div>

	
</BODY>
</HTML>
