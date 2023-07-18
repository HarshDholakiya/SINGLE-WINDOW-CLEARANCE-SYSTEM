<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type=image/x-icon href="Images/symbol1.jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Window Clearance Platform</title>
	<link href="popup.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor=#131724>
	<section>
		<div class="header" id="mobile-nav" style="padding-left:35px" >			
			
				<div>
					<a href="Homepage.php"><img class="img" src="Images/govn2.png" align=left></a>
				</div>

				<div class="dropdown">
					<img class="img1" src="Images/logo.jpg">
		      <i class="arrow down"></i></button>
		       <div class="dropdown-content">
		       		<a href="#">Name</a>
		        	<a href="#">Edit Profile</a>
		        	<a href="Password.php">Change password</a>
		         	<a href="Homepage.php">logout</a>
		       </div>
		    </div>

				<p><font color= #53eded face="New Bold" class="h1">Single Window Clearance Platform</font>
					</p> 
				
		</div>


		<div class="form-box">
			
			<div class="popup" id="popup">
				<img src="Images/swp.png">
				<h2>Thank You!!!</h2>
				<p>You have been successfully registered in Single Window Platform.</p>
				<button type="button" id="button" onclick="location.href='login.php'">OK</button>
			</div>
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
<!-- <script>
	let s=document.getElementById('submit')
	function Validateform(){
		let x=document.getElementById('fullname').value
		let y=document.getElementById('email').value
		let z=document.getElementById('pwd').value
		let w=document.getElementById('cpwd').value

		console.log(x)
		console.log(y)
		console.log(z)
		console.log(w)
		if(x == ''){
			alert('Please fill the full name');
			return false;
		}
		if(y == ''){
			alert('Please fill the email address');
			return false;
		}
		else if(z == ''){
			alert('Please fill the password');
			return false;
		}
		else if(w == ''){
			alert('Please fill the Confirm password');
			return false;
		}
		else if(w != z){
			alert('Please fill the Confirm password as same as password');
			return false;
		}
		else{
		// alert('Sucessfully registred')
		button.addEventListener('click',location.href='login.php')
		let popup = document.getElementById("popup");
			 
					popup.classList.add("open-popup");
			   
			}
			// location.href="login.php"
	}
	// submit.onclick=Validateform
	let button=document.getElementById('button')
	s.addEventListener('click',Validateform)
	</script> -->
</body>
</html>