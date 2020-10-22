<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar {
    overflow: hidden;
    background-color: skyblue;
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
    background-color: skyblue;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: powderblue;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: powderblue;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white ;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: skyblue;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body bgcolor="skyblue">
<body style="text-align:center"; </body>
  <h1 style="color:SlateBlue"><b> Women's Medical College & Hospital</b></h1>
<div class="navbar">
  <a href="home.php">Home</a>
    <a href="amount.php">Total Amount</a>
  
  
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
<img src="doc.png" width="100%" title="Women's Hospital"><br><br>
<style>
.footer {
   position: 100%;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: skyblue;
   color: RoyalBlue ;
   text-align: center;
}
</style>
</head>
<body>



<div class="footer">
  <marquee><p>Developed By: Team Incognito</p></marquee>
</div>

</body>
</html>
