<?php

session_start();
include "action.php";
if(isset($_GET['id'])){
$emaill=$_GET['id'];
}
else{
	$emaill="ayushhajare2002@gmail.com";
}
if(isset($_POST['approved'])){
	$check="SELECT * FROM `status` WHERE `email`='$emaill'";
	$cstore = mysqli_query($conn,$check);
        $crows	 =  mysqli_num_rows($cstore);
        if($crows==0){
	$run="INSERT INTO `status` (`email`, `value`) VALUES ('$emaill', '1');";
	$add=mysqli_query($conn, $run);
	header("Location:ApplicationStatusCol2.php");
		}
}
else if(isset($_POST['rejected'])){
	$run="INSERT INTO `status` (`email`, `value`) VALUES ('$emaill', '0');";
	$add=mysqli_query($conn, $run);
} 
$qu = "SELECT * FROM `userdetails` WHERE `email`='$emaill';";
$data = mysqli_query($conn, $qu)->fetch_assoc(); 

$qb = "select * from bankdetails WHERE `email`='$emaill'";
$data1 = mysqli_query($conn, $qb)->fetch_assoc();

$qd = "select * from documents WHERE `email`='$emaill'";
$data2 = mysqli_query($conn, $qd)->fetch_assoc();

$qs  = "select * from shopdetail WHERE `email`='$emaill'";
$data3 = mysqli_query($conn,$qs)->fetch_assoc();

// print_r($data2);




//$_SESSION['USER']=$data;
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<link rel="icon" type=image/x-icon href="Images/symbol1.jpeg">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Single Window Clearance Platform</title>
	<link href="Status.css" rel="stylesheet" type="text/css">

</head>

<body bgcolor=#0e213b>
	<section>
		<div class="header" id="mobile-nav" style="padding-left:35px">
			<a href="Homepage.php"><img class="img" src="Images/govn2.png" align=left></a>
			<img class="img1" src="Images/logo.jpg" align=right>

			<p>
				<font color=#53eded face="New Bold" class="h1">Single Window Clearance Platform

				</font>
			</p>
		</div>

		<div class="table1">
			<table>
				<br>
				<tr rowspan="8">
					<font color="black"><b>User Details</b></font>
				</tr>
				<br><br>
				<tr>
					<th>email</th>
					<th>DOB</th>
					<th>Gender</th>
					<th>Mobile Number</th>
					<th>Aadhar Number</th>
					<th>Pan Number</th>
					<th>Address</th>
					<th>Cast</th>
				</tr>
				<tr>
					<td value=""><?php echo " ".$emaill?></td>
					<td><?php echo " ".$data['dob']?></td>
					<td><?php echo " ".$data['gender']?></td>
					<td><?php echo " ".$data['MobileNumber']?></td>
					<td><?php echo " ".$data['AadharNumber']?></td>
					<td><?php echo " ".$data['PanNumber']?></td>
					<td><?php echo " ".$data['Address']?></td>
					<td><?php echo " ".$data['Cast']?></td>
				</tr>
			</table>
			<br>
			<br>
			<table>
				<tr rowspan="8">
					<font color="black"><b>Bank Details</b></font>
				</tr>
				<br><br>
				<tr>
                    
					<th>State</th>
					<th>District</th>
					<th>Bank Name</th>
					<th>Branch Name</th>
					<th>IFS Code</th>
					<th>Confirm IFS Code</th>
					<th>Account No.</th>
					<th>Confirm Account No.</th>
				</tr>
				<tr>
					<!-- <td><?php echo " ".$data1['email']?></td> -->
					<td><?php echo " ".$data1['State']?></td>
					<td><?php echo " ".$data1['District']?></td>
					<td><?php echo " ".$data1['BankName']?></td>
					<td><?php echo " ".$data1['BranchName']?></td>
					<td><?php echo " ".$data1['IFSCode']?></td>
					<td><?php echo " ".$data1['ConfirmIFSCode']?></td>
					<td><?php echo " ".$data1['Account']?></td>
					<td><?php echo " ".$data1['ConfirmAccount']?></td>
				</tr>
			</table>
			<br>
			<br>
			
			<table>
				<tr rowspan="6">
					<font color="black"><b>Upload Documents</b></font>
				</tr><br><br>
				<tr>
					<!-- <th>Email ID</th> -->
					<th>Profile Photo</th>
					<th>Aadhar Card</th>
					<th>Pan Card</th>
					<th>Income Certificate</th>
					<th>First page of Passbook.</th>
				</tr>
				<tr>
					<!-- <td><?php echo " ".$data2['']?></td> -->
			
					<td><a href="<?php echo "/SemiFinal/upload/".$data2['img1'];?>" target="new">Profile Photo</a></td>
					<td><a href="<?php echo "/SemiFinal/upload/".$data2['img2'];?>" target="new" >Aadhar Card</a></td>
					<td><a href="<?php echo "/SemiFinal/upload/".$data2['img3'];?>" target="new" >Pan Card</a></td>
					<td><a href="<?php echo "/SemiFinal/upload/".$data2['img4'];?>" target="new" >Income Certificate</a></td>
					<td><a href="<?php echo "/SemiFinal/upload/".$data2['img5'];?>" target="new" >First page of Passbook</a></td>
				</tr>
			</table>
			<br>
			<br>
			
			<table>
				<tr rowspan="12">
					<font color="black"><b>Shop Details</b></font>
				</tr>
				<br><br>
				<tr>
					
					<th>Shop Name</th>
					<th>Shop Address</th>
					<th>Shop Category</th>
					<th>District</th>
					<th>State</th>
					<th>Pincode</th>
                    <th>Pan Card of Proprietor</th>
					<th>Shop Address proof</th>
					<th>ID proof of Proprietor</th>
					<th>Payment challan</th>
					<th>Addtional Bussiness License</th>

				</tr>
				<tr>
					<td><?php echo " ".$data3['shopname']?></td>
					<td><?php echo " ".$data3['shopaddress']?></td>
					<td><?php echo " ".$data3['category']?></td>
					<td><?php echo " ".$data3['district']?></td>
					<td><?php echo " ".$data3['state1']?></td>
					<td><?php echo " ".$data3['pincode']?></td>
					<td><a href="<?php echo "/SemiFinal/shop_details/".$data3['img1'];?>" target="new">Pan card of Proprietor</a></td>
					<td><a href="<?php echo "/SemiFinal/shop_details/".$data3['img2'];?>" target="new">Shop Address Proof</a></td>
					<td><a href="<?php echo "/SemiFinal/shop_details/".$data3['img3'];?>" target="new">ID proof of Proprietor</a></td>
					<td><a href="<?php echo "/SemiFinal/shop_details/".$data3['img4'];?>" target="new">Payment Challan</a></td>
					<td><a href="<?php echo "/SemiFinal/shop_details/".$data3['img5'];?>" target="new">Additional Business License</a></td>
				</tr>
			</table>
			<br>
			<br>
			<form  method="post">
			<input type=submit value="Approved" name="approved">
			<a href="mailto:<?php echo"".$data['email']?>"><input type="button" value="Rejected" name="rejected"></a>
			</form>
			<br>
			<br>
			<br>

<!-- 			
			<br>
			<br>
			<input type=button value="Approved" name="approved">
			<input type=button value="Rejected" name="rejected"> -->
		</div>

		<div class="footer">
			<div class="contain">
				<div class="col">
					<h1>Company</h1>
					<ul>
						<a href="about.php">
							<li>About Us</li>
						</a>
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
						<a href="Images/user.jpg">
							<li>Roadmap (User)</li>
						</a>
						<a href="Images/authority.jpg">
							<li>Roadmap (Authority)</li>
						</a>
						<li>Working Video</li>
					</ul>
				</div>
				<div class="col">
					<h1>Support</h1>
					<ul>
						<a href="contactus.php">
							<li>Contact us</li>
						</a>
						<a href="FAQS.php">
							<li>FAQs</li>
						</a>
					</ul>
				</div>

				<div class="clearfix"></div>
			</div>
		</div>

		<div class="footer1">
			<a href="#startup"><img src="Images/sti.png" width=320 height=120 alt="StartUpIndia" class="footimg"></a>
			<a href="#digital"><img src="Images/di.png" width=260 height=120 alt="Digital India" class="footimg"></a>
			<a href="#amritmahotsav"><img src="Images/akam.png" width=260 height=120 alt="Azadi-Ka-Amrit-Mahotsav"
					class="footimg"></a>
			<a href="#makeinindia"><img src="Images/mii.jpg" width=260 height=120 alt="Make in India" class="footimg"></a>
			<a href="#skillinida"><img src="Images/si.jpg" width=260 height=120 alt="Skill India" class="footimg"></a>
		</div>


	</section>

</body>

</html> 


