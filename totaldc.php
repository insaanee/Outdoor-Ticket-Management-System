<?php include('header.php'); ?>

<style>
table, th, td {
    border: 1px solid green;
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

<body>
<body bgcolor="Thistle" style="text-align:center"; </body>

 

</style>
<h1><b>Online Booking Total Amount In Tk</b></h1>
</style>


    
   
   
   <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "htms";
	// Create connection
	 $connection_mysql = mysqli_connect("$servername","$username","$password","$dbname");

	if (mysqli_connect_errno($connection_mysql)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT Doctor_Id FROM doctor_Info";
   
   if ($result = mysqli_query($connection_mysql,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Total Doctor: %d .\n",$rowcount);
      mysqli_free_result($result);
   }
   mysqli_close($connection_mysql);
   
	
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