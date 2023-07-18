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

    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="icon" type=image/x-icon href="Images/symbol1.jpeg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Window Clearance Platform</title>
    <link href="card.css" rel="stylesheet" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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

        <p><font color= #53eded face="New Bold" class="a1" style="margin-top: 5px !important;">Single Window Clearance Platform
            
            </font>
        </p> 
        </div>
	
    
<div class="container py-5">
    <!-- For demo purpose -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card ">
                <div class="card-header">
                    <div class="bg-white shadow-sm pt-2 pl-2 pr-2 pb-2">
                        <!-- Credit card form tabs -->
                        <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-0">
                            <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fas fa-credit-card mr-2"></i> Credit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> <i class="fab fa-paypal mr-2"></i> Debit Card </a> </li>
                            <li class="nav-item"> <a data-toggle="pill" href="#net-banking" class="nav-link "> <i class="fas fa-mobile-alt mr-2"></i> Net Banking </a> </li>
                        </ul>
                    </div> <!-- End -->
                    <!-- Credit card form content -->
                    <div class="tab-content">
                        <!-- credit card info-->
                        <div id="credit-card" class="tab-pane fade show active pt-3">
                            <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div><br>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card Number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid Card Number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                        </div>
                    </div> <!-- End -->
                    



                    <!-- Paypal info -->
                    <div id="paypal" class="tab-pane fade pt-3">

                        <form role="form" onsubmit="event.preventDefault()">
                                <div class="form-group"> <label for="username">
                                        <h6>Card Owner</h6>
                                    </label> <input type="text" name="username" placeholder="Card Owner Name" required class="form-control "> </div><br>
                                <div class="form-group"> <label for="cardNumber">
                                        <h6>Card Number</h6>
                                    </label>
                                    <div class="input-group"> <input type="text" name="cardNumber" placeholder="Valid Card Number" class="form-control " required>
                                        <div class="input-group-append"> <span class="input-group-text text-muted"> <i class="fab fa-cc-visa mx-1"></i> <i class="fab fa-cc-mastercard mx-1"></i> <i class="fab fa-cc-amex mx-1"></i> </span> </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group"> <label><span class="hidden-xs">
                                                    <h6>Expiration Date</h6>
                                                </span></label>
                                            <div class="input-group"> <input type="number" placeholder="MM" name="" class="form-control" required> <input type="number" placeholder="YY" name="" class="form-control" required> </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group mb-4"> <label data-toggle="tooltip" title="Three digit CV code on the back of your card">
                                                <h6>CVV <i class="fa fa-question-circle d-inline"></i></h6>
                                            </label> <input type="text" required class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="card-footer"> <button type="button" class="subscribe btn btn-primary btn-block shadow-sm"> Confirm Payment </button>
                            </form>
                    </div> <!-- End -->
                </form></div>
                    <!-- bank transfer info -->
                    <div id="net-banking" class="tab-pane fade pt-3">
                        <form role="form" onsubmit="event.preventDefault()">
                        <div class="form-group "> <label for="Select Your Bank">
                                <h6>Select your Bank</h6>
                            </label> <select class="form-control" id="ccmonth">
                                <option value="" selected disabled>--Please select your Bank--</option>
                                <option>ICICI Bank</option>
                                <option>Axis Bank</option>
                                <option>Bank of India</option>
                                <option>Punjab National Bank</option>
                                <option>State Bank of India</option>
                                <option>Bank of Baroda</option>
                                <!-- <option>Bank 7</option>
                                <option>Bank 8</option>
                                <option>Bank 9</option>
                                <option>Bank 10</option> -->
                            </select> </div><br>
                        <div class="form-group">
                            <p> <button type="button" class="btn btn-primary "><i class="fas fa-mobile-alt mr-2"></i> Proceed Payment</button> </p>
                        </div>
                        <p class="text-muted">Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to your Application Status. </p>

</form>                    </div> <!-- End -->
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
</form>
</div>
</div>

     <div class="footer2">
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