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
$sql="INSERT INTO doctor_info(Doctor_Name,Doctor_Id,Doctor_Department,Sun_To_Thus,Friday_To_Saturday,Room_No,Doctor_Fee) VALUES('$_POST[Doctor_Name]','$_POST[Doctor_Id]','$_POST[Doctor_Department]','$_POST[Sun_To_Thus]','$_POST[Friday_To_Saturday]','$_POST[Room_No]','$_POST[Doctor_Fee]')";   

if(mysqli_query($conn,$sql))
{
echo "Your record inserted";
}
else
{
echo "Error";
}
?>
