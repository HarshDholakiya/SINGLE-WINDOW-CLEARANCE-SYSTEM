<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type=image/x-icon href="Images/symbol1.jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Window Clearance Platform</title>
	<link href="signup.css" rel="stylesheet" type="text/css">
	</head>

<body>
	<section id="sec">
		<div class="header" id="mobile-nav" style="padding-left:35px" >			
		<a href="Homepage.php"><img class="img" src="Images/govn2.png" align=left></a>
		<!-- <img class="img1" src="Images/logo.jpg" align=right> -->

		<p><font color= #53eded face="New Bold" class="h1">Single Window Clearance Platform</font>
			</p> 
		</div>
		<div id="warn" role="alert"></div>
		<div class="form-box">
			<table class="log">
				<tr>
					<th><center>Sign up</center></th>
							
				</tr>
			</table>
			<div class="header-text">
			<form  method="POST">
			<label for="roles">Register Yourself</label>

			
			<!-- <select name="roles" id="roles" required>
			  <option value="User">User</option>
			  <option value="Authority">Authority</option>
			  <option value="Collector">Collector</option>
			</select> -->
			<input placeholder="Full Name" id="fullname" type="text" name="fullname" required>
			<input placeholder="Email ID" id="email" type="email" name="email" required>
			<input placeholder="Password" id="pwd" type="password" name="pwd" required>
			<input placeholder="Confirm Password" id="cpwd" type="password"  name="cpwd" required>
			
			<input type="submit" value="REGISTER" name="signup" id="submit">
			
			<div class="containersignin">
				<center>
					<p><h6>Already have an account?: <a href="login1.php">Log in</a></h6></p>
				</center>
			</div>
			</div>
			</form>
			</div>
        
  <div class="footer">
  <div class="contain">
  <div class="col">
    <h1>Company</h1>
    <ul>
      <a href="about.php"><li>About Us</li></a>
    </ul>
  </div>
  <div class="col">
    <h1>Sectors</h1>
    <ul>
      <li>Shops</li>
      <li>Firm</li>
      <li>Enterprise</li>
      <li>Business</li>
    </ul>
  </div>
  
  <div class="col">
    <h1>Resources</h1>
    <ul>
      <a href="Images/user.jpg"><li>Roadmap (User)</li></a>
      <a href="Images/authority.jpg"><li>Roadmap (Authority)</li></a>
      <li>Working Video</li>
    </ul>
  </div>
  <div class="col">
    <h1>Support</h1>
    <ul>
      <a href="contactus.php"><li>Contact us</li></a>
      <a href="FAQS.php"><li>FAQs</li></a>
    </ul>
  </div>

<div class="clearfix"></div>
</div>
</div>

		<div class="footer1">
			<a href="#startup"><img src="Images/sti.png" width=320 height=120 alt="StartUpIndia" class="footimg"></a>
			<a href="#digital"><img src="Images/di.png" width=260 height=120 alt="Digital India" class="footimg"></a>
			<a href="#amritmahotsav"><img src="Images/akam.png" width=260 height=120 alt="Azadi-Ka-Amrit-Mahotsav" class="footimg"></a>
			<a href="#makeinindia"><img src="Images/mii.jpg" width=260 height=120 alt="Make in India" class="footimg"></a>
			<a href="#skillinida"><img src="Images/si.jpg" width=260 height=120 alt="Skill India" class="footimg"></a>
		</div>

</section>
<div class="popup" id="popup">
				<img src="Images/swp.png">
				<h2>Thank You!!!</h2>
				<p>You have been successfully registered in Single Window Platform.
                    Want to redirect to Login page?
                </p>
                <button type="button" id="button" onclick="location.href='login1.php'">OK</button>
				<button type="button" id="button1">CANCEL</button>
			</div>
<script>
	let s=document.getElementById('submit')
	let warn=document.getElementById("warn");
        let popup = document.getElementById("popup"); 
        let sec = document.getElementById("sec");
		let fn = document.getElementById("fullname");
		let em = document.getElementById("email");
		// let ro = document.getElementById("roles");

	// 	button.addEventListener('click',location.href='login.php') 
	
	// // submit.onclick=Validateform
	// let button=document.getElementById('button')
	// // s.addEventListener('click',Validateform)
    let button1=document.getElementById('button1')
    button1.addEventListener('click',function(){
        sec.classList.remove("blur");
        popup.classList.remove("open-popup");
		location.href="signup2.php"
    })

	</script>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
</body>
</html>
<?php

//Connection 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_swc";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
        //   echo "Hello ";  
}
else
{
    echo "Connection Failed".mysqli_connect_error();
}


error_reporting(E_ALL);
//First query
if(isset($_POST['signup'])) 
{
    // $Roles    = $_POST['roles'];
    $Fullname = $_POST['fullname'];
    $Email    = $_POST['email'];
    $Pwd      = $_POST['pwd'];
    $Cpwd     = $_POST['cpwd'];
	if($Pwd!=$Cpwd)
	{
		echo '<script type="text/JavaScript">
  warn.className="alert alert-danger op";
  warn.innerHTML="PASSWORD AND CONFIRM PASSWORD DO NOT MATCH";
//   ro.value="'.$Roles.'";
  fn.value="'. $Fullname .' ";
  em.value="'. $Email .' ";
  </script>';
	}
	else {
		try {
			$query1  =  "INSERT INTO signup VALUES('User','$Fullname','$Email', '$Pwd')";
    		$data1   =  mysqli_query($conn,$query1);
		} catch (Exception $e) {
			echo '<script type="text/JavaScript">
			warn.className="alert alert-primary op";
			warn.innerHTML="USER ALREADY EXISTS WITH '. $Email .' ";
			// ro.value="'.$Roles.'";
			fn.value="'. $Fullname .' ";
			em.value="'. $Email .' ";
			</script>';
		}
    
    if($data1)
    {
        echo '<script type="text/JavaScript">
        sec.classList.add("blur");
        popup.classList.add("open-popup");
        
        
        // console.log(body)
        // location.href="signup2.php" 
        //    let z=confirm("Your details submitted suceesfully click ok if you want to redirect to login page")
        //    if(z){
        //     location.href="login.php"
        //    }
        //    else{
        //     location.href="signup.php"
        //    }
        </script>';
        
        // header('Location:signup2.php');
        // echo "welcome $Fullname";
    }
    
	}
}
?>
<!-- // function Validateform(){
		
		// let x=document.getElementById('fullname').value
		// let y=document.getElementById('email').value
		// let z=document.getElementById('pwd').value
		// let w=document.getElementById('cpwd').value

		// if(x == ''){
		// 	alert('Please fill the full name');
		// 	return false;
		// }
		// if(y == ''){
		// 	alert('Please fill the email address');
		// 	return false;
		// }
		// else if(z == ''){
		// 	alert('Please fill the password');
		// 	return false;
		// }
		// else if(w == ''){
		// 	alert('Please fill the Confirm password');
		// 	return false;
		// }
		// else
	// 	 if(w != z){
	// 		alert('Please fill the Confirm password as same as password');
	// 		return false;
	// 	}
	// 	else{
	// 	// alert('Sucessfully registred')
		
	// 		}
	// 		return true;
	// 		// location.href="login.php"
	// } -->