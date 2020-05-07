<?php
session_start();
if(!isset($_SESSION['username']))
{
  header('location:login.php');
}
 include('header.php');
 include('../connection.php');
 /* refreshing room data or checkout*/
 ?>
 <html>
 <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Hotel management system</title>
    <link rel="stylesheet" href="../stylesheet1.css">
<script src="https://kit.fontawesome.com/e59b510569.js" crossorigin="anonymous"></script>
  </head>
<body style=" background-color:#3d827d">
<!--room info -->
<div class="container">
<div class=mt-5>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Today Reservations</li>
  </ol>
</nav>
</div>
<center><h3>TODAY RESERVATIONS</h3></center>
<?php
echo"<table class='table table-striped table-dark'>";
echo "<th>id</th>";
echo "<th>NAME</th>";
echo "<th>CHECK_IN</th>";
echo "<th>CHECK_OUT</th>";
echo "<th>ADULTS</th>";
echo "<th>CHILDREN</th>";
echo "<th>PHONE</th>";
echo "<th>EMAIL</th>";
echo "<th>ROOM TYPE</th>";
echo "<th>ROOM NAME</th>";
$date=date('Y-m-d');
$query=mysqli_query($conn,"select * from booked where check_in='$date'");
while($row=mysqli_fetch_array($query))
{
	echo"<tr>";
	echo"<td>";echo $row['id'];echo"</td>";
	echo"<td>";echo $row['fullname'];echo"</td>";
	echo"<td>";echo $row['check_in'];echo"</td>";
	echo"<td>";echo $row['check_out'];echo"</td>";
	echo"<td>";echo $row['adults'];echo"</td>";
	echo"<td>";echo $row['children'];echo"</td>";
	echo"<td>";echo $row['phone'];echo"</td>";
	echo"<td>";echo $row['email'];echo"</td>";
	echo"<td>";echo $row['room_type'];echo"</td>";
	echo"<td>";echo $row['room_name'];echo"</td>";
	echo"</tr>";
	
}
echo"</table>";
?>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>
<?php
 include('footer.php');
 ?>