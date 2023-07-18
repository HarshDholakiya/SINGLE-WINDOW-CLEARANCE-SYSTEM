<?php
include "action.php";
$q1 = "SELECT * FROM userdetails";
$result1 = mysqli_query($q1, $conn)

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type=image/x-icon href="symbol1.jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Window Clearance Platform</title>
	<link href="Asc.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor=#0e213b>
	<section>
		<div class="header" id="mobile-nav" style="padding-left:35px" >			
		<a href="Homepage.php"><img class="img" src="govn2.png" align=left></a>
		
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
					<td class="tab1row"><table class="table2"><tr><td class="tab2row">Pending Application</td></tr><tr><td class="tab2row">278</td></tr></table>
					<td class="tab1row"><table class="table2"><tr><td class="tab2row">Approved Application</td></tr><tr><td class="tab2row">525</td></tr></table>
					<td class="tab1row"><table class="table2"><tr><td class="tab2row">Rejected Application</td></tr><tr><td class="tab2row">27</td></tr></table>
				</tr>	
			</table>	

		</div>

		<div class="tablea">
 			<h2>Application Details</h2>
			<table align="left" cellspacing=0px cellpadding=15px class="table3">
				<tr>
					<td>Email-ID</td>
					<td>Full Name</td>
					<td>Shop Name</td>
					<td>Category</td>
					<td>Status</td>
				</tr>
                <tr>
                <?php
                    while($r1 = mysqli_fetch_assoc($result1))
                    {
                    ?>
                    <td><?php echo $r1['email1'];?></td>
                    <?php
                    }
                ?>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="noticetitle3"><a href="Status.php">View</a></td>
				</tr>
			</table>		
			</div>
		</div>	

		<div class="goapplication"><a href="mainpage.php"> Go To Appliaction </a>
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
      <a href="user.jpg"><li>Roadmap (User)</li></a>
      <a href="authority.jpg"><li>Roadmap (Authority)</li></a>
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
			<a href="#startup"><img src="sti.png" width=320 height=120 alt="StartUpIndia" class="footimg"></a>
			<a href="#digital"><img src="di.png" width=260 height=120 alt="Digital India" class="footimg"></a>
			<a href="#amritmahotsav"><img src="akam.png" width=260 height=120 alt="Azadi-Ka-Amrit-Mahotsav" class="footimg"></a>
			<a href="#makeinindia"><img src="mii.jpg" width=260 height=120 alt="Make in India" class="footimg"></a>
			<a href="#skillinida"><img src="si.jpg" width=260 height=120 alt="Skill India" class="footimg"></a>
		</div>


	</section>

</body>
</html>