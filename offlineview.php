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
<h1><b>View Offlline Bokking</b></h1>
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

		$sql = "SELECT * FROM offline_booking";

		$result = $conn->query($sql);
		echo"<table align=center><tr><th>Registration_no</th><th>Patient_Name</th><th>Age</th><th>Contact</th><th>Department</th><th>Doctor_Name</th><th>DATE</th><th>Edit</th><th>Delete</th><th>Print</th></tr>";

		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				// HERE EVERY TABLE DATA WILL CONTAIN DIFFRENT ID TO PRINT
				echo "<tr><td id='a".$row['Registration_no']."'>".$row['Registration_no']."</td><td id='b".$row['Registration_no']."'>".$row['Patient_Name']."</td><td id='c".$row['Registration_no']."'>".$row['Age']."</td>";
				echo "<td id='d".$row['Registration_no']."'>".$row['Contact']."</td><td id='e".$row['Registration_no']."'>".$row['Department']."</td>";
				echo "<td id='f".$row['Registration_no']."'>".$row['Doctor_Name']."</td><td id='g".$row['Registration_no']."'>".$row['DATE']."</td>";

				// EDIT BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name=".$row['Registration_no']." value='Edit'></form></td>";
				// DELETE BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name='delete".$row['Registration_no']."' value='Delete'></form></td>";
				// PDF BUTTON CREATION
				echo "<td><form action='' method='GET'><input type='submit' name='print".$row['Registration_no']."' value='Print'></form></td></tr>";

				// UPDATE CODE STARTS FROM HERE
				if(isset($_GET[$row['Registration_no']])){
					echo"<form action='' method='POST'><div class='p' id='close'>";// CLASS P IS USED TO DECORATION AND ID CLOSE IS USED TO CLOSE THE POPUP PAGE
					echo"Update Information</br></br>";
					echo "Registration_no: <input type='text' name='Registration_no' value=".$row['Registration_no'].">";
					echo "</br></br>";
					echo "Patient_Name: <input type='text' name='Patient_Name' value=".$row['Patient_Name'].">";
					echo "</br></br>";
					echo "Age: <input type='text' name='Age' value=".$row['Age'].">";
					echo "</br></br>";
					echo "Contact: <input type='text' name='Contact' value=".$row['Contact'].">";
					echo "</br></br>";
					echo "Department: <input type='text' name='Department' value=".$row['Department'].">";
					echo "</br></br>";
					echo "Doctor_Name: <input type='text' name='Doctor_Name' value=".$row['Doctor_Name'].">";
					echo "</br></br>";
					echo "DATE: <input type='text' name='DATE' value=".$row['DATE'].">";
					echo "</br></br>";
					echo "</br></br>";

					echo"<input type='submit' name = 'submit' value='Update'>";
					echo"<input type='submit' name = 'cancle' value='Cancle'>";
					echo "</div></form>";

					if(isset($_POST['submit'])){
						$Registration_no = $_POST["Registration_no"];
						$Patient_Name = $_POST["Patient_Name"];
						$Age = $_POST["Age"];
						$Contact = $_POST["Contact"];
						$Department = $_POST["Department"];
						$Doctor_Name = $_POST["Doctor_Name"];
						$DATE = $_POST["DATE"];

						$ssql = "UPDATE offline_booking SET Registration_no='$Registration_no',Patient_Name='$Patient_Name', Age='$Age', Contact='$Contact', Department='$Department', Doctor_Name='$Doctor_Name', DATE='$DATE'
						WHERE Registration_no=".$row['Registration_no']."";
						
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
				if(isset($_GET['delete'.$row['Registration_no']])){
					$delete = "DELETE FROM offline_booking WHERE Registration_no=".$row['Registration_no']."";
					if ($conn->query($delete) === TRUE) {
					echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
					echo "<meta http-equiv='refresh' content='0'>"; // THIS IS FOR AUTO REFRESH CURRENT PAGE
					} else {
					echo "Delete Unsucessful". $conn->error;
					}
				}

				// PDF STARTS FROM HERE
				if(isset($_GET['print'.$row['Registration_no']])){

					echo "<script>
					var mywindow = window.open('', 'PRINT', 'height=400,width=600');
					mywindow.document.write('<html><head><title>' + document.title  + '</title>');
					mywindow.document.write('</head><body >');
					mywindow.document.write('<h1>' + 'Reader Information'  + '</h1>');
					mywindow.document.write(document.getElementById('a".$row['Registration_no']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('b".$row['Registration_no']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('c".$row['Registration_no']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('d".$row['Registration_no']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('e".$row['Registration_no']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('f".$row['Registration_no']."').innerHTML);
					mywindow.document.write(' -- ');
					mywindow.document.write(document.getElementById('g".$row['Registration_no']."').innerHTML);
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
   $sql = "SELECT Registration_no FROM offline_booking";
   
   if ($result = mysqli_query($conn,$sql)){
      $rowcount = mysqli_num_rows($result);
      
      printf("Total Offline Booking : %d .\n",$rowcount);
	  
	  $rowcount=$rowcount*50;
	  printf("Total Taka : %d .\n",$rowcount);
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