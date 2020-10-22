<html><head>


<?php
include'header.php';
?>
</center>

<center>

 <div class="container">

<h2>Online Booking</h2>

<form action="connect2.php" method="POST">
Patient_Name:<br>
  <input type="varchar" name="Patient_Name" value="">
  <br><br>
Age:<br>
   <input type="int" name="Age" value="">
  <br><br>
Contact:<br>
  <input type="int" name="Contact" value="">
  <br><br>
Department:<br>
  <input type="varchar" name="Department" value="">
  <br><br>
Doctor_Name:<br>
  <input type="varchar" name="Doctor_Name" value="">
  <br><br>
DATE:<br>
  <input type="date" name="DATE" value="">
  <br><br><br>
  <input type="submit" value="Submit">
</form> 



  
  







<?php include('footer.php'); ?>






</body></html>