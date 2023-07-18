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
    
	// $roles=$_SESSION['Roles'];
    if(isset($_SESSION['mail'])){
        $email=$_SESSION['mail'];
        $userdata = "SELECT * FROM `userdetails` WHERE `email`='$email'";
        $ustore = mysqli_query($conn,$userdata);
        $urows	 =  mysqli_num_rows($ustore);
        $bankdata = "SELECT * FROM `bankdetails` WHERE `email`='$email'";
        $bstore = mysqli_query($conn,$bankdata);
        $brows	 =  mysqli_num_rows($bstore);
        if($urows==1 && $brows==1){
            $value	 =  mysqli_fetch_assoc($ustore);
            $value1	 =  mysqli_fetch_assoc($bstore);
            // echo $value['MobileNumber'];
        }
    }
    if(isset($value1['ConfirmAccount']) && isset($value['Address']) && isset($_POST['register'])){
        $udatadelete = "DELETE FROM userdetails WHERE `email`='$email' ";
        $udelete = mysqli_query($conn,$udatadelete);
        $bdatadelete = "DELETE FROM bankdetails WHERE `email`='$email'";
        $bdelete = mysqli_query($conn,$bdatadelete);
    }
    
     if(isset($_POST['register']) )
    {
        $email=$_SESSION['mail'];
		// $roles=$_SESSION['Roles'];
        // $name           = $_POST['fname'];
        $dob            = $_POST['DOB'];
        $gender         = $_POST['gender'];
        $MobileNumber   = $_POST['mnumber'];
        $AadharNumber   = $_POST['anumber'];
        $PanNumber      = $_POST['pnumber'];
        $Address        = $_POST['address'];
        $Cast           = $_POST['cast'];
        $State          = $_POST['state'];
        $District       = $_POST['district'];
        $BankName       = $_POST['bank'];
        $BranchName     = $_POST['bname'];
        $IFSCode        = $_POST['ifscode'];
        $ConfirmIFSCode = $_POST['c_ifscode'];
        $Account        = $_POST['account'];
        $ConfirmAccount = $_POST['c_account'];


        $query3a = "INSERT INTO userdetails VALUES('$email',' $dob','$gender','$MobileNumber','$AadharNumber','$PanNumber','$Address','$Cast')";
        $data3a = mysqli_query($conn,$query3a);
        if($data3a)
        {
            // header('Location:documemts.php');
        }
        else
        {
            echo "Failed";
        }

        $query3b   = "INSERT INTO bankdetails VALUES('$email','$State', '$District', '$BankName', '$BranchName', '$IFSCode', '$ConfirmIFSCode', '$Account', '$ConfirmAccount')";
        $data3b    = mysqli_query($conn,$query3b);
        if($data3b)
        {
            header('Location:documemts.php');
        }
        else
        {
            echo "Failed";
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
    <link href="User_Profile.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body bgcolor=#131724>
    <section>
        <div class="ader" id="mobile-nav" style="padding-left:35px">
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

            <p>
                <font color=#53eded face="New Bold" class="a1">Single Window Clearance Platform</font>
            </p>
        </div>

        <div class="section">
            <a href="mainpage.php">Dashboard</a>
            <a href="User_Profile.php">User Profile</a>
            <a href="documemts.php" style="pointer-events: none">Upload Documents</a>
            <a href="shop.php" style="pointer-events: none">Shop Details</a>
            <a href="payment.php" style="pointer-events: none">Payment</a>
            <a href="ApplicationStatus.php" style="pointer-events: none">Application Status</a>
        </div>

        <!--<div class="register">-->
        <section id="sec6" class="">
            <form id="details" class="form-control" method="POST">
                <div id="div6" class="d-flex justify-content-around">

                    <div id="f1" class="">

                        <!--<form>-->
                        <div id="form2" class="d-flex justify-content-around">
                            <div id="div6a">
                                <div><a href="#" class="nav-link">USER DETAILS</a></div>
                            </div>
                        </div>

                        <div id="f3a" class="form-control">
                            <div class="mb-3">
                                <label for="emailid" class="form-label">Email ID*</label>
                                <!-- <input type="text" name="user_id" disabled="disabled" value=""> -->
                                <input type="email" class="form-control" disabled="disabled" id="email" name="email1" disabled value="<?php  if(isset($_SESSION['mail'])) echo $_SESSION['mail'];?>" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Name*</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="fname" disabled value="<?php  if(isset($_SESSION['Fullname'])) echo $_SESSION['Fullname'];?>"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="DOB" class="form-label">DOB*</label>
                                <input type="date" class="form-control" id="DOB" placeholder="DD/MM/YYYY"  name="DOB" value="<?php  if(isset($value['dob'])) echo $value['dob'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender*</label><br>
                                <input type="radio" id="male" name="gender" value="Male" <?php  if(isset($value['gender'])){ echo ($value['gender']=='Male')?'checked':'';}?>>
                                <label for="male" class="form-label">Male</label>
                                <input type="radio" id="female" name="gender" value="Female" <?php  if(isset($value['gender'])){ echo ($value['gender']=='Female')?'checked':'';}?>>
                                <label for="female" class="form-label">Female</label>
                                <input type="radio" id="others" name="gender" value="Others" <?php  if(isset($value['gender'])){ echo ($value['gender']=='Others')?'checked':'';}?>>
                                <label for="others" class="form-label">Others</label>
                            </div>
                            <div class="mb-3">
                                <label for="mnumber" class="form-label">Mobile Number*</label>
                                <input type="tel" class="form-control" pattern="[1-9]{1}[0-9]{9}" id="number" value="<?php  if(isset($value['MobileNumber'])) echo $value['MobileNumber'];?>"
                                    placeholder="+91" title="10 digits" name="mnumber" required>
                            </div>
                            <div class="mb-3">
                                <label for="anumber" class="form-label">Aadhar Number*</label>
                                <input type="tel" class="form-control" id="anumber" pattern="[0-9]{12}" placeholder="" value="<?php  if(isset($value['AadharNumber'])) echo $value['AadharNumber'];?>"
                                    name="anumber" required>
                            </div>
                            <div class="mb-3">
                                <label for="pnumber" class="form-label">Pan Number*</label>
                                <input type="tel" class="form-control" id="pnumber" placeholder="" name="pnumber" value="<?php  if(isset($value['PanNumber'])) echo $value['PanNumber'];?>"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address*</label>
                                <input type="textbox" class="form-control" id="address" placeholder="" name="address" value="<?php  if(isset($value['Address'])) echo $value['Address'];?>"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="cast" class="form-label">Cast*</label><br>
                                <input type="radio" id="open" name="cast" value="Open" <?php  if(isset($value['Cast'])){ echo ($value['Cast']=='Open')?'checked':'';}?>>
                                <label for="open" class="form-label">OPEN</label>
                                <input type="radio" id="obc" name="cast" value="OBC" <?php  if(isset($value['Cast'])){ echo ($value['Cast']=='OBC')?'checked':'';}?>>
                                <label for="obc" class="form-label">OBC</label>
                                <input type="radio" id="sc" name="cast" value="SC" <?php  if(isset($value['Cast'])){ echo ($value['Cast']=='SC')?'checked':'';}?>>
                                <label for="sc" class="form-label">SC</label>
                                <input type="radio" id="st" name="cast" value="ST" <?php  if(isset($value['Cast'])){ echo ($value['Cast']=='ST')?'checked':'';}?>>
                                <label for="st" class="form-label">ST</label>
                            </div>

                            <!--</form>-->
                        </div>

                    </div>


                    <div id="f2" class="">

                        <!--<form>-->
                        <div id="form2" class="d-flex justify-content-around">
                            <div id="div6a">
                                <div><a href="#" class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BANK
                                        DETAILS</a></div>
                            </div>
                        </div>

                        <div id="f3b" class="form-control">
                            <div class="mb-3 mt-3">
                                <label for="state" class="form-label">State*</label>
                                <input type="text" class="form-control" id="state" name="state" value="<?php  if(isset($value1['State'])) echo $value1['State'];?>"
                                    placeholder="Ex. Gujarat">
                            </div>
                            <div class="mb-3">
                                <label for="district" class="form-label">District*</label>
                                <input type="text" class="form-control" id="district" name="district" value="<?php  if(isset($value1['District'])) echo $value1['District'];?>"
                                    placeholder="Ex. Rajkot">
                            </div>
                            <div class="mb-3">
                                <label for="bank" class="form-label">Bank Name*</label>
                                <input type="text" id="bank" class="form-control" name="bank" value="<?php  if(isset($value1['BankName'])) echo $value1['BankName'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="bname" form-label>Branch Name*</label>
                                <input type="text" class="form-control" id="bname" name="bname" value="<?php  if(isset($value1['BranchName'])) echo $value1['BranchName'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="ifscode" class="form-label">IFS Code*</label>
                                <input type="text" class="form-control" id="ifscode" name="ifscode" value="<?php  if(isset($value1['IFSCode'])) echo $value1['IFSCode'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="c_ifscode" class="form-label">Confirm IFS Code*</label>
                                <input type="text" id="c_ifscode" class="form-control" name="c_ifscode" value="<?php  if(isset($value1['ConfirmIFSCode'])) echo $value1['ConfirmIFSCode'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="account" class="form-label">Account NO.*</label>
                                <input type="text" id="account" name="account" class="form-control" value="<?php  if(isset($value1['Account'])) echo $value1['Account'];?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="c_account" class="form-label"> Confirm Account NO.*</label>
                                <input type="text" class="form-control" id="c_account" name="c_account" value="<?php  if(isset($value1['ConfirmAccount'])) echo $value1['ConfirmAccount'];?>" required>
                            </div><br>
                            <div class="mb-3">
                                <input type="checkbox" name="txt" id="txt" required>&nbsp; <label for="txt"
                                    class="form-label">I hearby declare that all the
                                    information given by me is true and correct</label>

                            </div>

                        </div>
                        <!--</form>-->

                    </div>

                </div>
                <div id="button" class=" d-flex justify-content-around mt-1 p-1 float-none form-label">

                    <button id="button1" type="submit" name="register" class="btn btn-success" values="Submit">Submit</button>
                    <button type="reset" name="cancel" class="btn btn-danger" values="Cancel">Reset</button>

                </div>
            </form>



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
                            <a href="user.jpg">
                                <li>Roadmap (User)</li>
                            </a>
                            <a href="authority.jpg">
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
        <script>
        </script>
</body>
</html>
<?php
if(isset($value1['ConfirmAccount']) && isset($value['Address'])){
echo '<script type="text/JavaScript">
console.log("sds");
let button1=document.getElementById("button1");
button1.innerHTML="Update";
</script>';
}
?>