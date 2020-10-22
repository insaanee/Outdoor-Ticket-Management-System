<?php include('headero.php'); ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
	background-image: url("docc.jpg");
	
	
}
.navbar {
    overflow: hidden;
    background-color: green;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 120px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 18px;
    background-color: green;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: LimeGreen ;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: LimeGreen ;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: green;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
 <body    style="text-align:center"; </body>                                       
                                                                     <h1>  <b>Online Booking </b>   <br></h1>


<form action="" method="post">
  <b>Patient_Name:<b><br>
  <input type="varchar" name="Patient_Name" value="">
  <br>
  <b>Age:<b><br>
  <input type="int" name="Age" value="">
<br>
 Contact:<br>
  <input type="int" name="Contact" value="">
<br>
 Department:<br>
  <input type="varchar" name="Department" value="">
 <br>
  Doctor_Name:<br>
  <input type="varchar" name="Doctor_Name" value="">
<br>
DATE:<br>
  <input type="varchar" name="DATE" value="">
<br>
<br><br>
  <input type="submit" value="Submit">
</form> 

<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "htms";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}
error_reporting(0);
$Patient_Name = $_POST['Patient_Name'];
$Age = $_POST['Age'];
$Contact = $_POST['Contact'];
$Department = $_POST['Department'];
$Doctor_Name = $_POST['Doctor_Name'];
$DATE = $_POST['DATE'];

$sql = "INSERT INTO online_booking (Patient_Name, Age, Contact, Department, Doctor_Name,DATE) VALUES('$Patient_Name','$Age ','$Contact','$Department','$Doctor_Name','$DATE')";
// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Record Insert Succesfully ";
} else {
    if ($Patient_Name== "" || $Age== "" || $Contact== "" || $Department== "" || $Doctor_Name== ""  || $DATE== "") {
         echo "Please input your values! ";
    }else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>




<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: green;
   color: white;
   text-align: center;
}
</style>
<?php include('footer.php'); ?>
</head>
</html>
