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
<h1><b>View Doctor Information</b></h1>
</style>


    
   
   
   <?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "htms";
	// Create connection
	$conn = new mysqli($servername, $username, $password,$dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully\n";

		$sql = "SELECT * FROM doctor_Info";

		$result = $conn->query($sql);
		echo"<table align=center><tr><th>Doctor_Name</th><th>Doctor_Department</th><th>Sun_To_Thus</th><th>Friday_To_Saturday</th><th>Doctor_Fee</th></tr>";

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				// HERE EVERY TABLE DATA WILL CONTAIN DIFFRENT ID TO PRINT
				echo "<tr><td id='a".$row['Doctor_Id']."'>".$row['Doctor_Name'];
				echo "<td id='c".$row['Doctor_Id']."'>".$row['Doctor_Department']."</td><td id='d".$row['Doctor_Id']."'>".$row['Sun_To_Thus']."</td>";
				echo "<td id='e".$row['Doctor_Id']."'>".$row['Friday_To_Saturday']."</td><td id='d".$row['Doctor_Id']."'>".$row['Doctor_Fee']."</td>";

				
					if(isset($_POST['submit'])){
						$Doctor_Name = $_POST["Doctor_Name"];
						$Doctor_Department = $_POST["Doctor_Department"];
						$Sun_To_Thus = $_POST["Sun_To_Thus"];
						$Friday_To_Saturday = $_POST["Friday_To_Saturday"];
						$Doctor_Fee = $_POST["Doctor_Fee"];

						
						
						if ($conn->query($ssql) === TRUE) {
						echo "<script type='text/javascript'>alert('Submitted successfully!')</script>";
						} else {
						echo "Upadate Unsucessful". $conn->error;
						}

					}
					if(isset($_POST['cancle'])){
						echo "<script>document.getElementById('close').style.display='none'</script>";
					}
				}





			}echo"</table>";
		
		
	$conn->close();
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