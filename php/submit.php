<!DOCTYPE html>
<html>
    <head>
        <title>V Tie In</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="../assets/main.css">
    </head>
</html>
<body>
<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "vtieinlogin";

    $con = mysqli_connect($hostname,$username,$password,$dbname);
    if($con){
        echo "Database connection Error".mysqli_connect_error();
    }
    $firstname = $_REQUEST['fname'];
    $mname = $_REQUEST['mname'];
    $lastname = $_REQUEST['lname'];
    $age = $_REQUEST['age'];
    $gender = $_REQUEST['gender'];
    $username = $_REQUEST['userid'];
    $pass = $_REQUEST['password'];
    $prof = $_REQUEST['prof'];
    $regno = $_REQUEST['regno'];
    $adhaarno = $_REQUEST['aadno'];
    $hosname = $_REQUEST['hosno'];
    $college = $_REQUEST['collegename'];
    $stuaad = $_REQUEST['stuaadno'];
    $loc = $_REQUEST['location'];
    $occupation = $_REQUEST['occupation'];
    $mob = $_REQUEST['mobno'];
    $permanentaddress = $_REQUEST['peradd'];
    $presentaddress = $_REQUEST['preadd'];
    
    $sql = "INSERT INTO user VALUES('$firstname','$mname','$lastname','$age','$gender','$username','$pass','$prof','$mob','$presentaddress','$permanentaddress')";
    $doctor_sql = "INSERT INTO doctor VALUES('$regno','$adhaarno','$hosname')";
    $student_sql = "INSERT INTO student VALUES('$college','$stuaad')";
    $other_sql = "INSERT INTO other VALUES('$loc','$occupation')";
    if(mysqli_query($con,$sql)){
        if($prof =="doctor"){
            mysqli_query($con,$doctor_sql);
        }
        if($prof=="student"){
            mysqli_query($con,$student_sql);
        }
        if($prof=="other"){
            mysqli_query($con,$other_sql);
        }
        echo"Registered Successfully";
    }
    mysqli_close($con);
?>
<div class="container">
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About US</a></li>
                        <li><a href="#">Contact US</a></li>
                        <li id="right"><a href="#">Sign In</a></li>
                    </ul>
                </nav>
            </div>
            <div class="welcome">
                <h2>Welcomr to V Tie-in</h2>
            </div>
            <div class="signin">
                <div class="centerform">
                    <h3>Account Created Successfully.</h3>
                    <form action="login.php">
                        <table>
                            <tr>
                                <td><label for="login">Login </label></td>
                                <td><input type="text" id="login" name="login"></td>
                            </tr>
                            <tr>
                                <td><label for="accpass">Password </label></td>
                                <td><input type="password" id="accpass" name="accpassword"></td>
                            </tr>
                        </table>
                    </form>
                    <button type="submit" form="login" value="login">Login</button>
                </div>
            </div>
        </div>
</body>
