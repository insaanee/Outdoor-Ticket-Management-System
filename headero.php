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
<body>
<body style="text-align:center"; </body>
  
<div class="navbar">
  <a href="home.php">Home</a>
  <a href="available.php">Available Doctor</a>
</div>