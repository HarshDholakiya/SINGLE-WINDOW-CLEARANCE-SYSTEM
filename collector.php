
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="icon" type=image/x-icon href="Images/symbol1.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Window Clearance Platform</title>
    <link href="collectormain.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section>
        <div class="ader" id="mobile-nav" style="padding-left:35px">
            <a href="Homepage.php"><img class="img" src="Images/govn2.png" align=left></a>
            
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
            <p>
                <font color=#53eded class="a1">Single Window Clearance Platform</font>
            </p>
        </div>

        <div class="section">
            <a href="collectordesh.php">Dashboard</a>
            <a href="Collector.php">Collector Profile</a>	
            <a href="ApplicationStatusCol.php">Application Status</a>
        </div>

        <!--<div class="register">-->
        <section id="sec6" class="">
            <form id="details" class="form-control" action="action.php" method="POST">
                <div id="div6" class="d-flex justify-content-around">

                    <div id="f1" class="">

                        <!--<form>-->
                        <div id="form2" class="d-flex justify-content-around">
                            <div id="div6a">
                                <div><p class='nav-link'>COLLECTOR DETAILS</p></div>
                            </div>
                        </div>

                        <div id="f3a" class="form-control">
                            <div class="mb-3">
                                <label for="emailid" class="form-label">Email ID*</label>
                                <input type="email" class="form-control" placeholder="Email-ID" id="email" name="email6" required>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Name*</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="fname2"
                                    required>
                            </div>

                            <div class="mb-3">
                                <label for="DOB" class="form-label">DOB*</label>
                                <input type="date" class="form-control" id="DOB" placeholder="DD/MM/YYYY" name="DOB"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="gender" class="form-label">Gender*</label><br>
                                <input type="radio" id="male" name="gender" value="Male" required>
                                <label for="male" class="form-label">Male</label>
                                <input type="radio" id="female" name="gender" value="Female" required>
                                <label for="female" class="form-label">Female</label>
                                <input type="radio" id="others" name="gender" value="Others" required>
                                <label for="others" class="form-label">Others</label>
                            </div>
                            <div class="mb-3">
                                <label for="mnumber" class="form-label">Mobile Number*</label>
                                <input type="tel" class="form-control" pattern="[1-9]{1}[0-9]{9}" id="number"
                                    placeholder="+91" title="10 digits" name="mnumber" required>
                            </div>
                            <div class="mb-3">
                                <label for="City" class="form-label">City*</label>
                                <input type="textbox" class="form-control" id="address" placeholder="" name="City"
                                required>
                            </div>
                            <div class="mb-3">
                                <label for="anumber" class="form-label">Pin code*</label>
                                <input type="tel" class="form-control" id="number" pattern="[0-9]{6}" placeholder=""
                                    name="anumber" required>
                            </div>
                            <div class="mb-3">
                                <!--<label for="pnumber" class="form-label">Pan Number*</label>
                                <input type="tel" class="form-control" id="pnumber" placeholder="" name="pnumber"
                                    required>-->
                            </div>
                        </div>

                            <div class="mb-3">
                                <!--<label for="cast" class="form-label">Cast*</label><br>
                                <input type="radio" id="open" name="cast" value="Open">
                                <label for="open" class="form-label">OPEN</label>
                                <input type="radio" id="obc" name="cast" value="OBC">
                                <label for="obc" class="form-label">OBC</label>
                                <input type="radio" id="sc" name="cast" value="SC">
                                <label for="sc" class="form-label">SC</label>
                                <input type="radio" id="st" name="cast" value="ST">
                                <label for="st" class="form-label">ST</label>-->
                            </div>
                        

                            <!--</form>-->
                        </div>

                    </div>


                    <!--<div id="f2" class="">

                        <!--<form>
                        <div id="form2" class="d-flex justify-content-around">
                            <div id="div6a">
                                <div><a href="#" class="nav-link">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BANK DETAILS</a></div>
                            </div>
                        </div>

                        <div id="f3b" class="form-control">
                            <div class="mb-3 mt-3">
                                <label for="state" class="form-label">State*</label>
                                <input type="text" class="form-control" id="state" name="state"
                                    placeholder="Ex. Gujarat">
                            </div>
                            <div class="mb-3">
                                <label for="district" class="form-label">District*</label>
                                <input type="text" class="form-control" id="district" name="district"
                                    placeholder="Ex. Rajkot">
                            </div>
                            <div class="mb-3">
                                <label for="bank" class="form-label">Bank Name*</label>
                                <input type="text" id="bank" class="form-control" name="bank" required>
                            </div>
                            <div class="mb-3">
                                <label for="bname" form-label>Branch Name*</label>
                                <input type="text" class="form-control" id="bname" name="bname" required>
                            </div>
                            <div class="mb-3">
                                <label for="ifscode" class="form-label">IFS Code*</label>
                                <input type="text" class="form-control" id="ifscode" name="ifscode" required>
                            </div>
                            <div class="mb-3">
                                <label for="c_ifscode" class="form-label">Confirm IFS Code*</label>
                                <input type="text" id="c_ifscode" class="form-control" name="c_ifscode" required>
                            </div>
                            <div class="mb-3">
                                <label for="account" class="form-label">Account NO.*</label>
                                <input type="text" id="account" name="account" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="c_account" class="form-label"> Confirm Account NO.*</label>
                                <input type="text" class="form-control" id="c_account" name="c_account" required>
                            </div><br>
                            <div class="mb-4">
                                <input type="checkbox" name="txt" id="txt" required>&nbsp; <label for="txt"
                                    class="form-label">I hearby declare that all the
                                    information given by me is true and correct</label>

                            </div>

                        </div>
                        <!--</form>-->

                    </div>-->

                </div>
                <div id="button" class=" d-flex justify-content-around mt-1 p-1 float-none form-label">

                    <input id="submit" type="submit" name="register2" class="btn btn-success" values="Submit">
                    <input id="reset" type="reset" name="cancel" class="btn btn-danger " values="Cancel">

                </div>
            </form>
        


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