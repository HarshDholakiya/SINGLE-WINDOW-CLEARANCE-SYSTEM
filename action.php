<?php

    //Connection 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "main_swc";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if($conn)
    {
            //   echo "Hello ";  
    }
    else
    {
        echo "Connection Failed".mysqli_connect_error();
    }


    error_reporting(E_ALL);
    //First query
    if(isset($_POST['signup'])) 
    {
        // $id        = $_POST['id'];
        // $Roles    = $_POST['roles'];
        $Fullname = $_POST['fullname'];
        $emails    = $_POST['email'];
        $Pwd      = $_POST['pwd'];
        $Cpwd     = $_POST['cpwd'];

        $query1  =  "INSERT INTO signup(fullname,email,pwd) VALUES('$Fullname','$emails', '$Pwd')";
        $data1   =  mysqli_query($conn,$query1);
        if($data1)
        {
            //echo "welcome $Fullname";
            header('Location:login1.php');
        }
        else
        {
            echo "Error : Try again later";
        }

    } 

    //Sec$ond query
    // if(isset($_POST['login'])) 
    // {
    //     // $Role   = $_POST['role'];
    //     $email  = $_POST['email'];
    //     $password    = $_POST['password'];

    //     $query2  =  "SELECT * FROM signup WHERE email = '$email' and pwd = '$password' and (Roles = 'Collector') ";
    //     $data2   =  mysqli_query($conn,$query2);
    //     $row = mysqli_fetch_array($data2,MYSQLI_ASSOC);
        
    //     $count = mysqli_num_rows($data2);
        
    //     if($count == 1)
    //     {
    //         session_start();
    //         $_SESSION['login_user'] = $email;
    //         $_SESSION['USER'] = $row;

    //         //echo "welcome $EMAIL";
    //         header('Location:collectordesh.php');
    //     }
        
    //     else
    //     {
    //         echo "your email-id/password is incorrect";
    //     }

    //     $query2aa  =  "SELECT * FROM signup WHERE email = '$email' and pwd = '$password' and (Roles = 'User') ";
    //     $data2aa   =  mysqli_query($conn,$query2aa);
    //     $rowaa = mysqli_fetch_array($data2aa,MYSQLI_ASSOC);
        
    //     $count = mysqli_num_rows($data2aa);
        
    //     if($count == 1)
    //     {
    //         session_start();
    //         $_SESSION['login_user'] = $email;
    //         $_SESSION['USER'] = $row;
    //         //echo "welcome $EMAIL";
    //         header('Location:mainpage.php');
    //     }
    //     else
    //     {
    //         echo "your email-id/password is incorrect";
    //     }
    // }

    //Third query
    if(isset($_POST['register']))
    {
        $email          = $_POST['email1'];
        // $id             = $_POST['id'];
        $name           = $_POST['fname'];
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


        $query3a = "INSERT INTO userdetails VALUES('$name','$dob', '$gender','$MobileNumber','$AadharNumber','$PanNumber','$Address','$Cast')";
        $data3a = mysqli_query($conn,$query3a);
        if($data3a)
        {
            header('Location:documemts.php');
        }
        else
        {
            echo "Failed";
        }

        $query3b   = "INSERT INTO bankdetails VALUES('$State', '$District', '$BankName', '$BranchName', '$IFSCode', '$ConfirmIFSCode', '$Account', '$ConfirmAccount')";
        $data3b    = mysqli_query($conn,$query3b);
        if($data3b)
        {
            echo "Data inserted into the Database";
        }
        else
        {
            echo "Failed";
        } 
    }

    if(isset($_POST['submit1']))
    { 

        $name1=$_POST['email2'];
        $location="upload/";
        $file1=$_FILES['img1']['name'];
        $file_tmp1=$_FILES['img1']['tmp_name'];
        $file2=$_FILES['img2']['name'];
        $file_tmp2=$_FILES['img2']['tmp_name'];
        $file3=$_FILES['img3']['name'];
        $file_tmp3=$_FILES['img3']['tmp_name'];
        $file4=$_FILES['img4']['name'];
        $file_tmp4=$_FILES['img4']['tmp_name'];
        $file5=$_FILES['img5']['name'];
        $file_tmp5=$_FILES['img5']['tmp_name'];
        $data=[];
        $data=[$file1,$file2,$file3,$file4,$file5];
        //print_r($data);  
        echo $images=implode(' ',$data);  
        $query4="INSERT into documents(email2,IMAGE) values('$name1','$images')";
        $fire=mysqli_query($conn,$query4);
        if($fire)
        {
            header('Location:shop.php' );

            move_uploaded_file($file_tmp1, $location.$file1);
            move_uploaded_file($file_tmp2, $location.$file2);
            move_uploaded_file($file_tmp3, $location.$file3);
            move_uploaded_file($file_tmp4, $location.$file4);
            move_uploaded_file($file_tmp5, $location.$file5);
       }
    }

    if(isset($_POST['upload']))
    {
        $id         =$_POST['id'];
        $email3     =$_POST['email3'];
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
        $data=[];
        $data=[$file1,$file2,$file3,$file4,$file5];
        //print_r($data);  
        echo $images=implode(' ',$data);  
        $query6 = "INSERT into shopdetail (id, shopname, shopaddress, category, district, state1, pincode, IMAGES) values('$id' , '$sname','$saddress','$category','$district','$state','$pincode','$images')";
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

    if(isset($_POST['submit3']))    
    {
        $email4 = $_POST['email4'];
        $Cardh  = $_POST['Shopname'];
        $Cardnum = $_POST['district'];
        $ExpM    = $_POST['month'];
        $ExpY  = $_POST['year'];
        $CVV   = $_POST['cvv'];

        $query5  =  "INSERT INTO payment VALUES('$email4', '$Cardh', '$Cardnum', '$ExpM', '$ExpY','$CVV')";
        $data5   =  mysqli_query($conn,$query5);
        if($data5)
        {
            header('Location: mainpage.php');
        }
        else
        {
            echo "Error : Try again later";
        }
    }

    if(isset($_POST['register2']))
    {
        $email          = $_POST['email6'];
        $name           = $_POST['fname2'];
        $dob            = $_POST['DOB'];
        $gender         = $_POST['gender'];
        $MobileNumber   = $_POST['mnumber'];
        $City           = $_POST['City'];
        $pincode        = $_POST['anumber'];
        

        $query6 = "INSERT INTO collectorprofile VALUES('$email','$name','$dob', '$gender','$MobileNumber','$City','$pincode')";
        $data6 = mysqli_query($conn,$query6);
        if($data6)
        {
            header('Location:ApplicationStatusCol.php');
        }
        else
        {
            echo "Failed";
        }
    }

    /*if(isset($_POST['Submit6']))
    {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$Phoneno = $_POST['Phoneno'];
	$email6 = $_POST['email6'];
	$Subject1 = $_POST['subject1']
	$query="INSERT INTO contactus (firstname,lastname,Phoneno,email6,Subject1) VALUES ('$firstname','$lastname','$Phoneno','$email6','$subject1')";
	$run=mysqli_query($conn,$query);

	if($run)
	{
		//header('Location:shop.html' );
		echo "Your Query Sent Successfully";
	}
	else
	{
		echo "Erroer: Try again Later";
	}

    }*/

    

    // // //Fourth query
    // // if(isset($_POST['submit']))
    // // {
	// //     $firstname =  $_POST['firstname'];
	// //     $lastname  =  $_POST['lastname'];
	// //     $Phoneno   =  $_POST['Phoneno'];
	// //     $email     =  $_POST['email'];
    // //     $Subject     =  $_POST['subject'];

	// //     $query4     = "INSERT INTO Contactus VALUES('$firstname', '$lastname', '$phoneno', '$email', '$Subject')";
	// //     $data4      =  mysqli_query($conn,$query4);
    // //     if($data4)
    // //     {
    // //         header('Location: ' . $_SERVER['HTTP_REFERER']);
    // //     } 
    // // else 
    //   //  {
    //    //     echo "Error : Try again later";
    //     //

?>