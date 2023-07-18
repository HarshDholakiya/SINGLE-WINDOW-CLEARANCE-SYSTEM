<?php
	session_start();
	include "action.php";

	$q2         ="SELECT * FROM shopdetail";
    $d2         = mysqli_query($conn,$q2);
    $row2       = mysqli_fetch_array($d2,MYSQLI_ASSOC);
    //print_r($row2);

    // $_SESSION['USER']=$row2;


	// $q1  =  "SELECT id FROM shopdetail WHERE email = ".$_SESSION['USER']['email3'];
    // $data1   =  mysqli_fetch_assoc(mysqli_query($conn,$q1));
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type=image/x-icon href="Images/symbol1.jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Window Clearance Platform</title>
	<link href="Asc.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor=#0e213b>
	<section>
		<div class="header" id="mobile-nav" style="padding-left:35px" >			
		<a href="Homepage.php"><img class="img" src="Images/govn2.png" align=left></a>
		
		<div class="dropdown">
					<img class="img1" src="Images/logo.jpg">
		      <i class="arrow down"></i></button>
		       <div class="dropdown-content">
		       		<a href="#">Name</a>
		        	<a href="#">Edit Profile</a>
		        	<a href="Password.html">Change password</a>
		         	<a href="Homepage.html">logout</a>
		       </div>
		    </div>

			<!--
			<div id="n6" class="dropdown1" style="text-align: right;">
			<button class="dropbtn" class="active">
                    <img class="img1" src="profile.jpg" align=right width=40 height=40><i class="fa fa-caret-down"></i>-->
            <!--</button>
                <div class="dropdown-content">
                    <a href="Dashboard.aspx" id="A1">Dashboard
                    </a>
                    <a href="Changepassword.aspx" id="n61">Change Password
                    </a>
                    <a href="Logout.aspx" id="A2">Logout
                    </a>
                </div>
            </div>-->	
		
		<!--<div class="topnav" id="mobile-nav" style="padding-left:56px" >-->
			<p><font color= #53eded face="New Bold" class="h1">Single Window Clearance Platform

				</font>
			</p> 
		</div>

		<div class="body">
		
		<div class="table">
 			<table align="center" cellspacing=10px cellpadding=40px>
				<tr>
					<td class="tab1row"><table class="table2"><tr><td class="tab2row">Pending Application</td></tr><tr><td class="tab2row">78</td></tr></table>
					<td class="tab1row"><table class="table2"><tr><td class="tab2row">Approved Application</td></tr><tr><td class="tab2row">125</td></tr></table>
					<td class="tab1row"><table class="table2"><tr><td class="tab2row">Rejected Application</td></tr><tr><td class="tab2row">14</td></tr></table>
				</tr>	
			</table>	

		</div>

		<div class="tablea">
 			<h2>Application Details</h2>
			<table align="left" cellspacing=0px cellpadding=15px class="table3">
				<tr>
					<!-- <td>Email-ID</td> -->
					<td>Full Name</td>
					<td>Shop Name</td>
					<td>Category</td>
					<td>Status</td>
				</tr>
                <tr>
              
				<tr>
							<?php
							$result1= "select signup.email,signup.fullname,shopdetail.shopname,shopdetail.category from signup JOIN shopdetail on signup.email = shopdetail.email; ";
	 						// $result2=" SELECT`shopname`,`category` FROM `shopdetails` WHERE 1 ";
							$data1 = mysqli_query($conn,$result1);
							// $data2 = mysqli_query($conn,$result2);
								while($row1 = mysqli_fetch_assoc($data1))
								{
						?>

							<!-- <td><?php echo $row1['email']; ?></td> -->
							<td><?php echo $row1['fullname']; ?></td>
							<td><?php echo $row1['shopname']; ?></td>
							<td><?php echo $row1['category']; ?></td>			
							<td><a href="testRedirect.php?id=<?php echo $row1['email']; ?>">View</a></td>

							
					</tr>
					<?php
						    }
										
					?>
			</table>		
			</div>
		</div>	

		<!-- <div class="goapplication"><a href="mainpage.php"> Go To Appliaction </a>
		</div>	 -->
  
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