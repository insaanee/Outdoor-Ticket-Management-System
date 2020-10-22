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
		echo"<table align=center><tr><th>Doctor_Name</th><th>Doctor_Id</th><th>Doctor_Department</th><th>Sun_To_Thus</th><th>Friday_To_Saturday</th><th>Room_No</th><th>Doctor_Fee</th><th>Edit</th><th>Delete</th><th>Print</th></tr>";

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				// HERE EVERY TABLE DATA WILL CONTAIN DIFFRENT ID TO PRINT
				echo "<tr><td id='a".$row['Doctor_Id']."'>".$row['Doctor_Name']."</td><td id='b".$row['Doctor_Id']."'>".$row['Doctor_Id']."</td>";
				echo "<td id='c".$row['Doctor_Id']."'>".$row['Doctor_Department']."</td><td id='d".$row['Doctor_Id']."'>".$row['Sun_To_Thus']."</td>";
				echo "<td id='e".$row['Doctor_Id']."'>".$row['Friday_To_Saturday']."</td><td id='f".$row['Doctor_Id']."'>".$row['Room_No']."</td><td id='g".$row['Doctor_Id']."'>".$row['Doctor_Fee']."</td>";

				// EDIT BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name=".$row['Doctor_Id']." value='Edit'></form></td>";
				// DELETE BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name='delete".$row['Doctor_Id']."' value='Delete'></form></td>";
				// PDF BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name='print".$row['Doctor_Id']."' value='Print'></form></td></tr>";

				// UPDATE CODE STARTS FROM HERE
				if(isset($_GET[$row['Doctor_Id']])){
					echo"<form action='' method='POST'><div class='p' id='close'>";// CLASS P IS USED TO DECORATION AND ID CLOSE IS USED TO CLOSE THE POPUP PAGE
					echo"Update Information</br></br>";
					echo "Doctor_Name: <input type='text' name='Doctor_Name' value=".$row['Doctor_Name'].">";
					echo "</br></br>";
					echo "Doctor_Id: <input type='text' name='Doctor_Id' value=".$row['Doctor_Id'].">";
					echo "</br></br>";
					echo "Doctor_Department: <input type='text' name='Doctor_Department' value=".$row['Doctor_Department'].">";
					echo "</br></br>";
					echo "Sun_To_Thus: <input type='text' name='Sun_To_Thus' value=".$row['Sun_To_Thus'].">";
					echo "</br></br>";
					echo "Friday_To_Saturday: <input type='text' name='Friday_To_Saturday' value=".$row['Friday_To_Saturday'].">";
					echo "</br></br>";
					echo "Room_No: <input type='text' name='Room_No' value=".$row['Room_No'].">";
					echo "</br></br>";
					echo "Doctor_Fee: <input type='text' name='Doctor_Fee' value=".$row['Doctor_Fee'].">";
					echo "</br></br>";
					echo "</br></br>";

					echo"<input type='submit' name = 'submit' value='Update'>";
					echo"<input type='submit' name = 'cancle' value='Cancle'>";
					echo "</div></form>";

					if(isset($_POST['submit'])){
						$Doctor_Name = $_POST["Doctor_Name"];
						$Doctor_Id = $_POST["Doctor_Id"];
						$Doctor_Department = $_POST["Doctor_Department"];
						$Sun_To_Thus = $_POST["Sun_To_Thus"];
						$Friday_To_Saturday = $_POST["Friday_To_Saturday"];
						$Room_No = $_POST["Room_No"];
						$Doctor_Fee = $_POST["Doctor_Fee"];

						$ssql = "UPDATE doctor_Info SET Doctor_Name='$Doctor_Name', Doctor_Id='$Doctor_Id', Doctor_Department='$Doctor_Department', Sun_To_Thus='$Sun_To_Thus', Friday_To_Saturday='$Friday_To_Saturday', Room_No='$Room_No', Doctor_Fee='$Doctor_Fee'
						WHERE Doctor_Id=".$row['Doctor_Id']."";
						
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

				// DELETE CODE STARTS FORM HERE
				if(isset($_GET['delete'.$row['Doctor_Id']])){
					$delete = "DELETE FROM doctor_Info WHERE Doctor_Id=".$row['Doctor_Id']."";
					if ($conn->query($delete) === TRUE) {
					echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
					echo "<meta http-equiv='refresh' content='0'>"; // THIS IS FOR AUTO REFRESH CURRENT PAGE
					} else {
					echo "Delete Unsucessful". $conn->error;
					}
				}

				// PDF STARTS FROM HERE
				if(isset($_GET['print'.$row['Doctor_Id']])){

					echo "<script>
					var mywindow = window.open('', 'PRINT', 'height=400,width=600');
					mywindow.document.write('<html><head><title>' + document.title  + '</title>');
					mywindow.document.write('</head><body >');
					mywindow.document.write('<h1>' + 'Reader Information'  + '</h1>');
					mywindow.document.write(document.getElementById('a".$row['Doctor_Id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('b".$row['Doctor_Id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('c".$row['Doctor_Id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('d".$row['Doctor_Id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('e".$row['Doctor_Id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('f".$row['Doctor_Id']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('g".$row['Doctor_Id']."').innerHTML);
					mywindow.document.write('</body></html>');
					mywindow.document.close(); // necessary for IE >= 10
					mywindow.focus(); // necessary for IE >= 10*/

					mywindow.print();
					mywindow.close();
					history.back(); // IT WILL TAKE YOU BAKE PAGE
					</script>";
				}





			}echo"</table>";
		}else{
				echo "No search found!!!";
		}
		if (mysqli_connect_errno($conn)){
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $sql = "SELECT Doctor_Id FROM doctor_Info";
   
   if ($result = mysqli_query($conn,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Total Doctor: %d .\n",$rowcount);
      mysqli_free_result($result);
   }
		
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