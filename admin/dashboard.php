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
<!--dashboard  contents -->
	<main>
	<div class="container">
		<div class="my-5">
		<a href=""><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="fas fa-id-badge fa-3x icons"></i><br>PROFILE</button></a>
		<a href="addrooms.php"><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="fas fa-bed fa-3x icons"></i><br>ADD ROOMS</button></a>
		<a href="roominfo.php"><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="fas fa-bed fa-3x icons"></i><br>ROOM INFO</button></a>
		<a href="request.php"><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="far fa-envelope fa-3x icons"></i><br>BOOKING  REQUESTS</button></a>
		<a href="customers.php"><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="fas fa-users fa-3x icons"></i><br>CUSTOMERS</button></a>
		<a href="update.php"><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="fas fa-user-edit fa-3x icons"></i><br>UPDATE</button></a>
		<a href="deleterooms.php"><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="fas fa-trash-alt fa-3x icons"></i><br>DELETE ROOM</button></a>
		<a href="todayreservation.php"><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="far fa-calendar-alt fa-3x icons"></i><br>TODAY RESERVATIONS</button></a>
		<a href="logout.php"><button type="button" class="buttons btn-outline-dark ml-4 py-3"><i class="fas fa-sign-out-alt fa-3x icons"></i><br>LOGOUT</button></a>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </main>
</body>
</html>
<?php
 include('footer.php');
 ?>