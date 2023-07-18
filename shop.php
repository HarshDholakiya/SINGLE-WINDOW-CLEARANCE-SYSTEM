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

	if(isset($_POST['upload']))
    {
        // $id         =$_POST['id'];
		$email=$_SESSION['mail'];
        // $email3     =$_POST['email3'];
        $sname      =$_POST['sname'];
        $saddress   =$_POST['saddress'];
        $category   =$_POST['category'];
        $district   =$_POST['district'];
        $state      =$_POST['state'];
        $pincode    =$_POST['pincode'];

        $location   ="shop_details/";
        $file1      =$_FILES['img1']['name'];
        $file_tmp1  =$_FILES['img1']['tmp_name'];
        $file2      =$_FILES['img2']['name'];
        $file_tmp2  =$_FILES['img2']['tmp_name'];
        $file3      =$_FILES['img3']['name'];
        $file_tmp3  =$_FILES['img3']['tmp_name'];
        $file4      =$_FILES['img4']['name'];
        $file_tmp4  =$_FILES['img4']['tmp_name'];
        $file5      =$_FILES['img5']['name'];
        $file_tmp5  =$_FILES['img5']['tmp_name'];
        // $data=[];
        // $data=[$file1,$file2,$file3,$file4,$file5];
        //print_r($data);  
        // echo $images=implode(' ',$data);  
        $query6 = "INSERT into shopdetail (email, shopname, shopaddress, category, district, state1, pincode, img1,img2,img3,img4,img5) values('$email', '$sname','$saddress','$category','$district','$state','$pincode','$file1','$file2','$file3','$file4','$file5')";
        $fire1 = mysqli_query($conn,$query6);
        if($fire1)
        {
            header('Location:payment.php' );

            move_uploaded_file($file_tmp1, $location.$file1);
            move_uploaded_file($file_tmp2, $location.$file2);
            move_uploaded_file($file_tmp3, $location.$file3);
            move_uploaded_file($file_tmp4, $location.$file4);
            move_uploaded_file($file_tmp5, $location.$file5);
            
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
	<link href="shop.css" rel="stylesheet" type="text/css">
</head>

<body bgcolor="#021329">
	<section>
		<div class="header" id="mobile-nav" style="padding-left:35px" >			
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

		<p><font color= #53eded face="New Bold" class="h1">Single Window Clearance Platform
			
			</font>
		</p> 
		</div>

		<div class="section">
		  <a href="mainpage.php">Dashboard</a>
		  <a href="User_Profile.php" style="pointer-events: none">User Profile</a>
		  <a href="documemts.php" style="pointer-events: none">Upload Documents</a>
		  <a href="shop.php">Shop Details</a>
		  <a href="payment.php" style="pointer-events: none">Payment</a>
		  <a href="ApplicationStatus.php" style="pointer-events: none">Application Status</a>
		</div>

<center>
	<div class="body1">	
	    <div class="container">
      <table class="log">
				<tr>
					<th><center>Shop Details</center></th>							
				</tr>
			</table>
		<form action="" method="POST" enctype="multipart/form-data">
	    <!-- <h3>Shop Details</h3> -->
		<!-- <input type="hidden" name="user_id" disabled="disabled" value="<?php echo $_SESSION['USER']['id'];?>"> -->
		<input type="email" input type="text" id="email" placeholder="User Email-ID" name="email3" disabled value="<?php  if(isset($_SESSION['mail'])) echo $_SESSION['mail'];?>">
		<br>
		<input type="text"id="shopname" name="sname" placeholder="Shop Name " pattern="[A-Za-Z]{3}" required><br>
	    <textarea id="Address" name="saddress" placeholder="Shop Address" style="height: 150px;width: 630px;font-family:Arial, Helvetica, sans-serif" required></textarea><br>
	     <label for="category"></label>
			 <select name="category" id="category"  from="Categoryform">
			 	<option value="">select shop sector</option>
			  <option value="Electonics">Electonics</option>
			  <option value="Clothing">Clothing</option>
			  <option value="Fashion">Fashion</option>
			  <option value="Supermarket">Supermarket</option>
			  <option value="Home Aplliances">Home Appliances</option>
	    <input type="text" name="district" id="text" placeholder="District"  required><br>
		<input type="text" id="text" name="state" placeholder="State"  required>
		<input type="text" id="text" name="pincode" placeholder="Pincode" pattern="[0-9]{6}" required>
  			

  	<div class="header-text">

</select>
		<h3><u class="write">Upload Documents</u></h3>	
		<label for="myfile"> Pan Card of Proprietor: (Only pdf)</label>
		<input type="file" id="photo" name="img1" accept=".pdf" required><br><br>
		
		<label for="myfile">Shop Address proof: (Only pdf)</label>
		<input type="file" id="aadhar" name="img2" accept=".pdf" required><br><br>
		
		<label for="myfile">ID proof of Proprietor: (Only pdf)</label>
		<input type="file" id="pan" name="img3" accept=".pdf" required><br><br>
		
		<label for="myfile">Payment challan: (Only pdf)</label>
		<input type="file" id="income" name="img4" accept=".pdf" required><br><br>
		
		<label for="myfile">Addtional Bussiness License: (Only pdf)</label>
		<input type="file" id="passbook" name="img5" accept=".pdf" required><br><br>
        <input type="submit" value="SUBMIT" name="upload">
		</form>
		</div>
        </div>
        </div></center>  

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