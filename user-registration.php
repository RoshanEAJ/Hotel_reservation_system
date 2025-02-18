<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>User Registration</TITLE>
	<link rel="stylesheet" href="style.css">

</HEAD>
<style>
		body{
			
        background-image: url('mara-conan-design-O_6dZUyxezo-unsplash55.jpg');
		
        background-position: center;
  background-repeat: no-repeat;
  background-size: cover; 
    }
.sign-up-container{
  background-image: linear-gradient(to right, #708090,#40E0D0);
	padding: 30px;
	margin-top: 120px;
	
}
.form-label{
color:white !important;
}
.btn{
	font-weight:bold;
	background: #000080;
	margin-top: 10px;
  	color: white;
  	border: none;
  	border-radius: 4px;
  	cursor: pointer;
	font-size:16px;
	
	
}
	
.signup-heading{
	text-align: center;
	font-size:20px;
}
	
.inline-block{
	
  	padding: 10px 20px;
  	margin: 8px 0;
  	box-sizing: border-box;
	
}
	.input-box-330{
		width: 250px;
		height: 30px;
	}

	.login-signup{
		text-decoration: underline;
		
	}	

	
</style>
<BODY>
	
	<header>

        <div class="logo">
            <a href="#">
                <img src="The-Kingsbury-Logo-New-Color-version.png" alt="">
            </a>
        </div>

        <ul class="menu">

            <li><a href="main.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="rooms.html">Rooms</a></li>
            <li><a href="dine.html">Dine</a></li>

            
            <a href="login.php">
                <button type="submit" name="submit" class="btn1">Login</button>
            </a>
            
        </ul>

    </header>
	
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="login.php" style="color:aqua">Login</a>
			</div>
			<div class="">
				<form name="sign-up" action="" method="post" onsubmit="return signupValidation()">
					
					<div class="signup-heading" style="color:white">Registration</div>
				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
		
    }
    ?>	<div class="error-msg" id="error-msg"></div>
					
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username" id="username">
							
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="signup-password-info"></span>
							</div>
							<input class="input-box-330" type="password" name="signup-password" id="signup-password">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Confirm Password<span class="required error" id="confirm-password-info"></span>
							</div>
							<input class="input-box-330" type="password" name="confirm-password" id="confirm-password">
						</div>
					</div>
					<div class="row">
						<input class="btn" type="submit" name="btn" id="btn" value="Sign up">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
function signupValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");
	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
	$("#username-info").html("").hide();
	$("#email-info").html("").hide();
	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
