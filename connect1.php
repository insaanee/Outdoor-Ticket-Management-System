<?php
$servername="localhost";
$username="root";
$password="";
$db_name="htms";
$conn=mysqli_connect($servername,$username,$password,$db_name);
if(! $conn)
{
die("Error");
}
else{
echo "Succesfully";
}
$sql="INSERT INTO offline_booking(Patient_Name,Age,Contact,Department,Doctor_Name,DATE) VALUES('$_POST[Patient_Name]','$_POST[Age]','$_POST[Contact]','$_POST[Department]','$_POST[Doctor_Name]','$_POST[DATE]')";

if(mysqli_query($conn,$sql))
{
echo "Your record inserted";
}
else
{
echo "Error";
}
?>
