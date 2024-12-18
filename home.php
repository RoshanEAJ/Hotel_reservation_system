<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>
<!DOCTYPE html>
<HTML>
	
<HEAD>
<TITLE>Welcome</TITLE>
<link rel="stylesheet" href="style.css">
	
	<style>
        body {
          background-image: url('hotel-1330850_1.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center;
        }
        </style>

        <script>

          function checkValidation(){

            var cid = document.getElementById('cid').value;
            var cod = document.getElementById('cod').value;


            if(cid==""){
					document.getElementById("ciderror").innerHTML="Enter Check In Date";
                    document.getElementById("ciderror").style.color="red";
                    document.getElementById("cid").focus();
					
					return false;
				}

        if(cod==""){
					document.getElementById("coderror").innerHTML="Enter Check Out Date";
                    document.getElementById("coderror").style.color="red";
                    document.getElementById("cod").focus();
					
					return false;


          }

          

        }
        </script>

</HEAD>

<style>
input[type=text]{
  width: 80%;
  padding: 12px 20px;
  max-width:400px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #000080;
  border-radius: 4px;
  box-sizing: border-box;
  
}

input[type=submit] {
  width: 50%;
  background-color: #000080;
  color: white;
  padding: 14px;
  max-width:400px;
  font-size:15px;
  font-weight:bold;
  margin: 4px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  
}

input[type=date], select{
  width: 100%;
  padding: 12px 20px;
  max-width:400px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #000080;
  border-radius: 4px;
  box-sizing: border-box;
}

.pop{
  width:300px;
  background: white;
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%,-50%) scale(0.1);
  border-radius: 5px;
  padding: 0 30px 30px;
  visibility:hidden;
  padding-top:20px;
  transition: transform 0.4s, top 0.4s;

}

.open-popup{
  visibility: visible;
  top: 50%;
  transform: translate(-50%,-50%) scale(1);
}

.pop h2{
  font-family: sans-serif;
}

.pop button{
  width: 50%;
  cursor: pointer;
  background: #7FFF00;
  font-size:18px;
  color:white;
  margin:10px;
  font-weight:600;
  padding-top:5px;
  padding-bottom:5px;

}

</style>
	
	<header>

        <div class="logo">
            <a href="main.html">
                <img src="The-Kingsbury-Logo-New-Color-version.png" alt="">
            </a>
        </div>

        <ul class="menu">

            <li><a href="main.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="rooms.html">Rooms</a></li>
            <li><a href="dine.html">Dine</a></li>

            
            <a href="logout.php">
                <button type="submit" name="submit" class="btn1">Logout</button>
            </a>
            
        </ul>

    </header>
	
<BODY>

<h5 style="padding-right:1390px; font-size:15px; padding-top:5px;">User Dashboard</h5>
    <!-- <img src="./assets/bg.jpg" alt=""> -->
	<div class="phppot-container" >
    
        <div> </div><div class="page-header">
		</div>
		<div class="page-content jumbotron" style="">
  <h2 style="color:#000080; font-weight:bold; font-family:sans-serif; font-size: 30px;">Welcome <?php echo $username;?></h2></div>
  
	</div>


  <center>
  <form action="connection1.php" method='POST' onsubmit="return checkValidation()">

    <label for="date" >Check In Date:</label><br>
    <input type="date" id="cid" name="cid" >
    <span id="ciderror"></span>
    <br>
    <label for="date" >Check Out Date:</label><br>
    <input type="date" id="cod" name="cod">
    <span id="coderror"></span>
    <br>
    <label for="number" >Number of Adults:</label><br>

<select name="num" id="num" require>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>

</select>

<br>
<label for="number">Room Catagoty:</label><br>

<select name="text" id="text">
<option value="luxury">Luxury Room</option>
<option value="delux">Delux Room</option>
<option value="premier">Premier Room</option>

</select>

  
    <input type="submit" name="submit" onclick="openPopup()" value="BOOK">

    <div class="pop" id='pop'>
      <img src='check-tick-icon-14161.png' alt=''>
      <h2>Booking is Success!</h2>
      <button type="button" onclick="closePopup()" >OK</button>
    </div>

    <script>

let popup = document.getElementById("pop");

function openPopup(){
  popup.classList.add("open-popup");
}

function closePopup(){
  popup.classList.remove("close-popup");
}


</script>

  </form>

  </center>


  
	
	
	<footer>

    <div class="social">
        <a href="https://www.facebook.com/TheKingsbury/"><img src="facebook.png" alt=""></a>
        <a href="https://www.instagram.com/thekingsbury/?hl=en"><img src="icons8-instagram-48.png" alt=""></a>
        <a href="https://twitter.com/thekingsburylk?lang=en"><img src="icons8-twitter-48.png" alt=""></a>
        <a href="https://www.linkedin.com/in/thekingsburyhotel/?originalSubdomain=lk"><img src="icons8-linkedin-circled-48.png" alt=""></a>

    </div>

    <div class="info">
        <p>Copyright &copy; 2022 - KINGSBURY HOTEL</p>
        <p>Web Designed & Developed by Ghost</p>
    </div>


</footer>
	
</BODY>
</HTML>
