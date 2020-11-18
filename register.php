<?php

    if( isset( $_POST['submit'] ) ){

       $connect =  mysqli_connect("localhost","root","","php_tutorial");

       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $mobile = $_POST['mobile'];
       $address = $_POST['address'];
        
       $register = mysqli_query( $connect , "INSERT INTO `register`( `firstname`, `lastname`, `email`, `mobile`, `address`) VALUES ('$firstname','$lastname','$email','$mobile','$address')" );

       if( $register ){
           echo "Successfully Registered.";
       }else{
           echo "Registration Failed.";
       }
    }

?>

<html>

<head>
    <title>
        Register
    </title>
</head>

<style>
    html{
        background-color: #56baed;
    }
    body{
        height: 100vh;
    }
    .wrapper{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;

    }

    .formcontent{
        background: white;
        padding: 30px;
        width: 25%;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
    }
    .icon{
        width: 40%;
    }
    .myinput{
        background-color: #f6f6f6;
        border: 2px solid #f6f6f6;
        padding: 15px 30px;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border-radius: 5px;
        text-align: center;
    }

    .mybutton{
        background-color: #56baed;
        border: none;
        color: white;
        padding: 15px 80px;
        font-size: 15px;
        border-radius: 5px;
        margin: 20px;
    }
    .mybutton:hover{
        background-color: #39ace7;
    }

    h2{
        font-size: 30px;
        border-bottom: 2px solid #5fbae9;
        
        margin: 40px 8px 10px 8px;
        text-align: center;
    }
    ul li{
        text-decoration: none;
        display: inline-block;
        border: 3px solid steelblue;
        padding: 10px;
    }
    ul li:hover{
        background-color: skyblue;
        transition: 0.5s;
    }

</style>

<body>

<ul>
        <a href="index.php"><li>Dashboard</li></a>
        <a href="datalist.php"><li>Datalist</li></a>
        <a href="register.php"><li>Register</li></a>
    </ul>
    
    <div class="wrapper">
        <div class="formcontent">
            <h2>REGISTER</h2>
            <image src="login.png" class="icon" >
            
            <form method="POST" >
                <input type="text" class="myinput" name="firstname" placeholder="First Name" >
                <input type="text" class="myinput" name="lastname" placeholder="Last Name" >
                <input type="email" class="myinput" name="email" placeholder="Email">
                <input type="number" class="myinput" name="mobile" placeholder="Mobile No.">
                <textarea type="text" class="myinput" name="address" placeholder="Address" rows="3"></textarea>
                <button type="submit" name="submit" class="mybutton" >REGISTER</button>
            </form>
        </div>
    </div>

</body>

</html>
