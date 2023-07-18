<?php session_start(); ?>
<?php
    include('action.php');

    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        

        $check_query = mysqli_query($conn, "SELECT * FROM signup where email ='$email' and pwd = '$password' and (roles = 'Collector' or roles = 'Authority') ");
        $result = mysqli_fetch_assoc($check_query);
        $rowCount = mysqli_num_rows($check_query);
        $rolles=$result['roles'];
        $_SESSION['Fullname']=$result['fullname'];

        if(!empty($email) && !empty($password) && ($rolles=='Collector' ||  $rolles=='Authority')){
            if($rowCount <= 0){
                ?>
                <script>
                    alert("Email/ Password is incorrect or not registered.");
                </script>
                <?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($conn, "INSERT INTO login (email, password, status) VALUES ('$email', '$password_hash', 0)");
                print_r($result);
            
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;

                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='hemangi.ramanuj18099@marwadieducation.edu.in';
                    $mail->Password='Ibtd@465';
    
                    $mail->setFrom('hemangi.ramanuj18099@marwadieducation.edu.in', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>";

                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "OTP has been sent to " . $email ?>");
                                    window.location.replace('verification1.php');
                                </script>
                                <?php
                            }
                }
            }
        }

        
        $check_query1 = mysqli_query($conn, "SELECT * FROM signup where email ='$email' and pwd = '$password' and (roles = 'User') ");
        $result11 = mysqli_fetch_assoc($check_query1);
        $rowCount1 = mysqli_num_rows($check_query1);
        $_SESSION['Fullname']=$result11['fullname'];

        if(!empty($email) && !empty($password)){
            if($rowCount1 <= 0){
                ?>
                <script>
                    alert("Email/ Password is incorrect or not registered.");
                </script>
                <?php
            }else{
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                $result = mysqli_query($conn, "INSERT INTO login (email, password, status) VALUES ('$email', '$password_hash', 0)");
                print_r($result);
            
    
                if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='hemangi.ramanuj18099@marwadieducation.edu.in';
                    $mail->Password='Ibtd@465';
    
                    $mail->setFrom('hemangi.ramanuj18099@marwadieducation.edu.in', 'OTP Verification');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your verify code";
                    $mail->Body="<p>Dear user, </p> <h3>Your verify OTP code is $otp <br></h3>";

                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "OTP has been sent to " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                            }
                }
            }
        }

      }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type=image/x-icon href="Images/symbol1.jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Window Clearance Platform</title>
	<link href="login.css" rel="stylesheet" type="text/css">
</head>

<body>
	<section>
		<div class="header" id="mobile-nav" style="padding-left:35px" >			
		<a href="Homepage.php"><img class="img" src="Images/govn2.png" align=left></a>
		

		<p><font color= #53eded face="New Bold" class="h1">Single Window Clearance Platform</font>
			</p> 
		</div>

		<div class="form-box">
			<table class="log">
				<tr>
					<th><center>Log in</center></th>
							
				</tr>
			</table>
			<div class="header-text">
			<form action="" method="POST">
			<label for="roles">Login Yourself</label>

			<!-- <select name="role" id="roles">
			  <option value="User">User</option>
			  <option value="Authority">Authority</option>
			  <option value="Collector">Collector</option>
			</select> -->
			<input placeholder="Email-ID" name="email" type="email" id="email" required>
			<input placeholder="Password" name="password" type="password" id="password" required>
			
			<input type="submit" name="login" value="SUBMIT" onclick="openPopup()">

      <!-- <button type="button" value="" name="login" onclick="openPopup()">REgister </button> -->
			
			<!-- <div class="popup" id="popup">
				<img src="Images/swp.png">
				<h2>Thank You!!!</h2>
				<p>You have been Logged in Single Window Platform.</p>
				<button type="button" onclick="location.href='mainpage.php'" >OK</button>
			</div>

			<script>
				let popup = document.getElementById("popup");

				function openPopup() {
					popup.classList.add("open-popup");
				}
	
			</script> -->

			<div class="containersignin">
				<center>
					<p><h6>Forget Password?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;New User? : <a href="signup2.php">Sign Up</a></h6></p>
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

</body>
</html>