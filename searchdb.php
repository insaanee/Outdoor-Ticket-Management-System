<html lang="en">

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
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


<body>
<body bgcolor="white" style="text-align:center"; </body>


<div class="navbar">
  <a href="home1.php">Home</a>
  
    <div class="dropdown">
    <button class="dropbtn">search 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="searchdb.php">Online</a>
      <a href="searchoff.php">Offline</a>
    </div>
  </div> 
 
  <div class="dropdown">
    <button class="dropbtn">View 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="Dview.php">Doctor information</a>
      <a href="onlineview.php">Online Booking</a>
      <a href="offlineview.php">Offline Booking</a>
    </div>
  </div> 
  
  <div class="dropdown">
    <button class="dropbtn">Insert 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="D.php">Doctor information</a>
      <a href="online.php">Online Booking</a>
	  <a href="offline.php">Offline Booking</a>
    </div>
  </div> 

</div>

           

<body>

<head>

</head>
<body>
<div class="flex-container">
<div id="header">
</div>


<form method="POST" style="text-align:center">
<h1>Search Date Wise</h1>
Search By Date:<br>
<input name="date" value="" type="date"><br>
<br>



<br><br>
<input value="Go" type="submit">
</form>
<article class="article">

  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "htms";
$id="";
if(isset($_POST["date"])){
$id=$_POST["date"];
}
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT Registration_no,Patient_Name,Age,Contact,Department,Doctor_Name,DATE FROM online_booking where DATE='$id'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo "<table border=1>";
	echo "<tr><th>Registration_no</th><th>Patient_Name</th><th>.Age</th><th>Contact</th><th>Department</th><th>Doctor_Name</th><th>DATE</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
	echo "<tr>";
        echo "<td>". $row["Registration_no"]. "</td><td>". $row["Patient_Name"]. "</td><td>". $row["Age"]. "</td><td>". $row["Contact"]."</td><td>". $row["Department"]."</td><td>". $row["Doctor_Name"]."</td><td>". $row["DATE"]."</td>";
	echo "</tr>";
    }
echo "</table>";
} else {
    echo "";
}

		if (mysqli_connect_errno($conn)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT Registration_no FROM online_booking where DATE='$id'";
   
   if ($result = mysqli_query($conn,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Total Online Booking : %d .\n",$rowcount);
	  
	  $rowcount=$rowcount*50;
	  printf("Total Taka : %d .\n",$rowcount);
      mysqli_free_result($result);
   }

mysqli_close($conn);
?> 
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</article>

</body>
    <head>
	
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
</head>
<body>



<div class="footer">
  <p>Developed By: Team Incognito</p>
</div>


</body>
</html>
