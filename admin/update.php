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
    <li class="breadcrumb-item active" aria-current="page">Update</li>
  </ol>
</nav>
</div>
<div class="card bg-light py-3 m-5">
<center><h3>UPDATE</h3></center>
<form method="post">
	<div class="row justify-content-center">
		 <div class=col-5>
		 <select class="form-control form-group" name="room_name">
        <option>Room Name</option>
        <option>suite</option>
        <option>standard</option>
        <option>family</option>
        <option>deluxe</option>
        <option>luxary</option>
		<option>superior</option>
		</select>
        </div>
		 <div class=col-5><select class="form-control form-group" name="room_type">
        <option>Room Type</option>
        <option>AC</option>
        <option>NON AC</option>
       </select>
        </div>
		 <div class=col-5>
		 <input type="text" class="form-control form-group" name="price" placeholder="new price">
		 </div>
		 <div class=col-5>
		 <input type="text" class="form-control form-group" name="total_qty" placeholder="increase quantity">
		 </div>
        <div class=col-5><input type=submit class="form-control form-group btn-primary" name="submit" value="BOOK  NOW!"></div>
        </div>
    </form>
	</div>
	<?php
	if(isset($_POST['submit']))
	{	
		$room_name=$_POST['room_name'];
		$room_type=$_POST['room_type'];
		$price=$_POST['price'];
		$total_qty=$_POST['total_qty'];
		$query=mysqli_query($conn,"update availability set price='$price',total_qty=total_qty+'$total_qty',quantity=quantity+'$total_qty' where room_name='$room_name' AND room_type='$room_type'");	
		if ($query){
			echo "<script>alert('Record Updated Successfully');</script>";
		}
		else{
			echo "<script>alert('Sorry');</script>";
		}
	}
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