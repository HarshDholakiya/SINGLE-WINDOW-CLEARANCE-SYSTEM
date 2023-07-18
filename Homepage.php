<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" type=image/x-icon href="Images/symbol1.jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Window Clearance Platform</title>
	<link href="Hp.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
	<style>
		body{
			background-color: beige;
			width: 98.7%
			overflow-x: hidden !important;
		}	

		.popup{
		background-color: none;
		width: 80%;
		height: 70%;
		padding: 30px 20px 20px 20px;
		position: fixed;
		transform: translate(-50%,-50%);
		left: 50%;
		top: 50%;
		border-radius: 10px;
		display: none;
		font-family: 'Arial',sans-serif;
		text-align: center;
		z-index: 2;
	}

	.popup button{
		display: block;
		margin: -10px 0px -20px 1040px;
		/* margin-right:0px;
		margin-left:
		margin-top:-25px; */
		/* margin-bottom: -px; */
		/* margin: -50px 40px 0px 500px; */
		/* margin: -50px 450px -20px -10px; */
		background-color: transparent;
		font-size: 30px;
		color: #333;
		background: white;
		border-radius: 100%;
		width: 40px;
		height: 40px;
		border: none;
		outline: none;
		cursor: pointer;
		border: 3px solid black;
	}
	</style>
</head>



<div class="popup">
		<button id="close">&times;</button>
		<img src="Images/g20.jpg" height="335px" width="900px" style="z-index:-1;border-radius:50px;border:3px solid black;">
	</div>

	<script type="text/javascript">
		window.addEventListener("load",function(){
			setTimeout(
				function open(event){
					document.querySelector(".popup").style.display = "block";
				},
				500
				)
			document.querySelector("section").style.opacity="0.5";
			document.querySelector("#style").style.overflow="hidden";
		});

		document.querySelector("#close").addEventListener("click",function(){
			document.querySelector(".popup").style.display="none";
			document.querySelector("#style").style.overflow="auto";
			document.querySelector("section").style.opacity="1";
		});
	</script>
<body id="style">
	<section>
		<div class="header" id="mobile-nav" style="padding-left:35px" >			
		<a href="Homepage.php"><img class="img" src="Images/govn2.png" align=left width=70 height=70></a>
		

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
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<font face="Times New Roman" size="5px">
				<a href="Homepage.php" class="head">Home</a>
				<a href="sectors.php" class="head" target="new">Sectors</a>
				<a href="policy.php" class="head" target="new">Policy</a>
				<a href="about.php" class="head" target="new">About</a>
				<a href="login1.php" class="noticetitle3" target="new">Login</a>
				</font>
			</div>
				
				</font>
			</p> 
		</div>

		<!-- <div class="vido">
			<video autoplay loop muted plays-inline class="back-video"> 
				<source src="i2.mp4" type="video/mp4"> 
	
		</video> -->

		<div class="body1">
			<div class="class2">
			<div class="class3">
			<img src="Images/swp.png" class="imgb" align=right width="100" height="100">
			</div>
			<h1>Single Window Platform</h1>
		 	<h2>Government Of Gujarat</h2>
		 	<h3>For New Shop/Firm/Enterprise</h3><br>
			<a href="signup2.php"><span class="noticetitle" id="MainContent_Label1" style="display:inline-block;font-weight:bold;height:40px; width: 250px;">Regiter Now</span></a>
         </div>

		<div style="min-height: 50%;" class="simtext">	

		<div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog" style="width: 99%!important;">
                            <div class="modal-content">
                                <div class="modal-header"></div>
                                <div class="modal-body">
                                    <a target="_blank">
                                    	
                                    	<video id="MainContent_Image2" align="top" style="height:402px;width:42%;float: left;margin-top: -50px;" class="source1" controls autoplay>
                                    		<source src="Swp.mp4" type="video/mp4">
                                    	</video>
                                        <img id="MainContent_Image1" class="source2" src="Images/azadi.jpg" align="top" style="height:350px;width:57%;float: right;" >
                                    </a>
                                </div>
                            </div>
                        </div>
        </div>
    	
    	</div>

    	<div style="min-height: 50%;" class="simtext">
            
    	<div>
        <table width="26.1%" cellpadding="0" cellspacing="0">

    	<tr>
            <td id="Td1" class="noticetitle" align="center">
                <span id="MainContent_Label1" style="display:inline-block;font-weight:bold;height:40px; ">Sectors</span>
            </td>
            <td><a href="sectors.php" class="viewall" target="new">ViewAll</a></td>

        </tr>
    	</table>
    	</div>
    	</div>


    	<div style="min-height: 10%;" class="simtext">
            
    	<div>
        <table width="19.7%" cellpadding="0" cellspacing="0">

        <tr >

        	

<!-- Flickity HTML init -->
<div class="carousel" data-flickity='{ "groupCells": true }'>
 
		
			<a href="Pdf/Electricalshop.pdf"><img src="Images/shope.jpeg" height="300px" width="300px" title="Electronics Shop" alt="ElectronicsShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Toyshop.pdf"><img src="Images/shopt.jpeg"  height="300px" width="300px" title="Toy Shop" alt="ToyShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Stationaryshop.pdf"><img src="Images/shops.jpeg"  height="300px" width="300px"  title="Stationary Shop" alt="StationaryShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Mechanicalshop.pdf"><img src="Images/shopm.jpeg"  height="300px" width="300px" title="Mechanical Shop" alt="MechanicalShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Foodshop.pdf"><img src="Images/shopf.jpeg"  height="300px" width="300px" title="Food Shop" alt="FoodShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Homeinterior.pdf"><img src="Images/shophi.jpeg"  height="300px" width="300px" title="Home Interior" alt="HomeInterior" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Fashionshop.pdf"><img src="Images/shopfs.jpeg"  height="300px" width="300px" title="Fashion Shop" alt="FashionShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Medicalshop.pdf"><img src="Images/shopmd.jpeg"  height="300px" width="300px" title="Medical Shop" alt="MedicalShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Sportsshop.pdf"><img src="Images/shopsp.jpeg"  height="300px" width="300px" title="Sports Shop" alt="SportsShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Parlorsaloon.pdf"><img src="Images/shopb.jpeg"  height="300px" width="300px" title="Parlor & Saloon" alt="Parlour&Saloon" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Personalcare.pdf"><img src="Images/shoppc1.jpg"  height="300px" width="300px" title="Personal Care" alt="PersonalCare" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Jewelleryshop.pdf"><img src="Images/shopjw.jpg"  height="300px" width="300px" title="Jewellery Shop" alt="JewelleryShop" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Beautysaloon.pdf"><img src="Images/shopbs.jpeg"  height="300px" width="300px" title="Beauty & Saloon" alt="Beauty&Saloon" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Travelagency.pdf"><img src="Images/shopta.jpeg"  height="300px" width="300px" title="Travel Agency" alt="TravelAgency" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Ticketbooking.pdf"><img src="Images/shoptb.jpeg"  height="300px" width="300px" title="Ticket Booking" alt="TicketBooking" class="allshops" style="border: 1px solid black"></a>
			<a href="Pdf/Enterprise.pdf"><img src="Images/shopent.jpeg"  height="300px" width="300px" title="Enterprise" alt="Enterprise" class="allshops" style="border: 1px solid black"></a>
		</div>
        </tr>	


    	</table>
    	</div>
    	</div>
    	<div class="class6">
			<div class="class3">
			<img src="Images/sectorsback.jpg" class="imgb" align=right width="100" height="100">
			</div>
			<h2>The Sectors we are providing fo that the enterpreneurs can open a new Start-up. As people of gujarat are the most interested to start various bussinesses. The Single Window Clearance Platform provides various sectors to the users for the start-up.</h2>
			<h3><ul>
				<li>Shops</li>
				<li>Firm</li>
				<li>Enterprise</li>
				<li>Business</li>
			</ul></h3>
			<h2>Here on clicking on each sectors you will be able to get the required documents to start and sectors. These can be the general documents required to start any particular sectors. These may be not necessary to submit. Check that documnents that are necessary to submit.</h2>
			<a href="Pdf/Commondoc.pdf"><span class="noticetitle4" id="MainContent_Label1" style="display:inline-block;font-weight:bold;height:40px; width: 250px;">Click Here</span></a>
         </div>

    	<div style="min-height: 50%;" class="simtext">
            
    	<div>
        <table width="14%" cellpadding="0" cellspacing="0">

    	<tr>
            <td id="Td1" class="noticetitle" align="center">
                <span id="MainContent_Label1" style="display:inline-block;font-weight:bold;height:40px; ">Working</span>
            </td>
        </tr>

    	</table>
    	</div>
    	</div>

    	<img src="Images/user.jpg" class="umap" width=280 height=200 title="" alt="UserRoadMap">
    	<div class="class7">
			<div class="class3">
			<img src="Images/about1.png" class="imgb" align=right width="100" height="100">
			</div>
			<h2>
				<ul><br>
					<li>Step 1: Users have to register themselves.</li>
					<li>Step 2: Once they successfully register themselves, they have to login.</li>
					<li>Step 3: Once they will login the dashboard will be open.</li>
					<li>Step 4: Users have to complete their profile.</li>
					<li>Step 5: Users have to upload the required documents.</li>
					<li>Step 6: Now users have to submit all the shop details</li>
					<li>Step 7: Once they submit all the details they will have to pay the required amount.</li>
					<li>Step 8: Now the details will be sent to the authorities.</li>
					<li>Step 9: The authorities will be able to verify the documents.</li>
					<li>Step 10: Once the documents will get verified and certificate will be generated.</li>
				</ul>
			</h2>
			
         </div>
    	<img src="Images/authority.jpg" class="amap" width=280 height=200 title="" alt="AuthorityRoadMAp">

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
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
</body>
</html>