<?php session_start(); 
$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "main_swc";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(isset($_SESSION['mail'])){

    }
    if($conn)
    {
            //   echo "Connection OK";  
    }
    else
    {
        echo "Connection Failed".mysqli_connect_error();
    }

    if(isset($_POST['submit3']))    
    {
        $email=$_SESSION['mail'];
        $payment = $_POST['payment'];
        // $Cardh  = $_POST['Shopname'];
        // $Cardnum = $_POST['district'];
        // $ExpM    = $_POST['month'];
        // $ExpY  = $_POST['year'];
        // $CVV   = $_POST['cvv'];

        $query5  =  "INSERT INTO payment VALUES('$email', '$payment')";
        $data5   =  mysqli_query($conn,$query5);
        if($data5)
        {
            header('Location:card.php');
        }
        else
        {
            echo "Error : Try again later";
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
	<link href="payment.css" rel="stylesheet" type="text/css">
	<title>Single Window Clearance Platform</title>
	<link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" type="text/css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    <style>
    	body{
    		background-color: #021329;
    	}
    </style>
</head>

<body>
	<section>
		<div class="ader" id="mobile-nav" style="padding-left:35px" >			
		<a href="Homepage.php"><img class="img" src="Images/govn2.png" align=left></a>
		
		<div class="dropdown">
					<img class="img1" src="Images/logo.jpg">
		      <i class="arrow down"></i></button>
		       <div class="dropdown-content">
		       		<a href="#"><?php echo $_SESSION['Fullname'];?></a>
		        	<a href="#">Edit Profile</a>
		        	<a href="Password.php">Change password</a>
		         	<a href="Homepage.php">logout</a>
		       </div>
		    </div>

		<p><font color= #53eded face="New Bold" class="a1">Single Window Clearance Platform
		</font>
		</p> 
		</div>

		<div class="section">
		  <a href="mainpage.php">Dashboard</a>
		  <a href="User_Profile.php">User Profile</a>
		  <a href="documemts.php">Upload Documents</a>
		  <a href="shop.php">Shop Details</a>
		  <a href="payment.php">Payment</a>
		  <a href="ApplicationStatus.php">Application Status</a>
		</div>

        <center>
        <div class="body1">	
            <div class="container3">
						
            <center><h2 class="log"><b>Payment</b></h2></center>
            <div class="class1">
            	<form action="" method="POST">
				<label>Email-ID</label><br>	
				<input type="email" id="email" placeholder="User Email-ID" name="email4"  disabled value="<?php  if(isset($_SESSION['mail'])) echo $_SESSION['mail'];?>"><br><br>
				<label for="payfix">Payment</label><br>
	        		<input type="text"  placeholder="100/-" disabled="disabled"  id="text" name="payfix">
            	<center><input type="submit" value="Pay Now" name="submit3"></center>
            </div>
            </form>
            </div>
          </div>
        </center>
    
  <div class="footer2">
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