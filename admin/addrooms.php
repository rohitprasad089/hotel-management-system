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
    <li class="breadcrumb-item active" aria-current="page">Add Rooms</li>
  </ol>
</nav>
</div>
<div class="card m-5 py-3 bg-light">

<center><h3>ADD ROOM</h3></center>
<form method="post">
<div class="row justify-content-center">
<div class="col-5">
<input type="text" class="form-group form-control" name="room_name" placeholder="Room Name" required> 
</div>
<div class="col-5">
<select type="select" class="form-group form-control" name="room_type"> 
<option>AC</option>
<option>NON AC</option>
</select>
</div>
<div class="col-5">
<input type="text" class="form-group form-control" name="price" placeholder="Price" required> 
</div>
<div class="col-5">
<input type="text" class="form-group form-control" name="total_qty" placeholder="Quantity" required> 
</div>
<div class="col-5">
<input type=submit class="form-control form-group btn-primary" name="submit" value="ADD ROOM">
</div>
</div>
</form>
<?php
if (isset($_POST['submit']))
{
		$room_name=$_POST['room_name'];
		$room_type=$_POST['room_type'];
		$price=$_POST['price'];
		$total_qty=$_POST['total_qty'];
		$query=mysqli_query($conn,"INSERT INTO availability VALUES('','$room_type','$room_name','$total_qty','$total_qty','$price')");	
		if ($query){
			echo "<script>alert('Room Added Successfully');</script>";
		}
		else{
			echo "<script>alert('Sorry');</script>";
		}
}
?>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
</body>
</html>
<?php
 include('footer.php');
 ?>