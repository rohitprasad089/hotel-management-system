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
    <li class="breadcrumb-item active" aria-current="page">Delete Room</li>
  </ol>
</nav>
</div>
<div class="card p-5 m-5">
<center><h3>DELETE ROOM</h3></center>
<form class="" method="POST">
<div class="row justify-content-center">
<div class="col-5">
 <input type="text" class="form-control" name="t1" placeholder="Enter room name for search">
 </div>
 <div class="col-5">
 <input type="submit" class="form-control btn-primary" name="submit">
 </div>
 </div>
 </form>
 </div>
<?php
if(isset($_POST['submit']))
{
echo"<table class='table table-striped table-dark'>";
echo "<th>id</th>";
echo "<th>ROOM TYPE</th>";
echo "<th>ROOM NAME</th>";
echo "<th>TOTAL QUANTITY</th>";
echo "<th>PRICE</th>";
echo "<th>DELETE</th>";

$query=mysqli_query($conn,"select * from availability where room_name like('%$_POST[t1]%')");
while($row=mysqli_fetch_array($query))
{
	echo"<tr>";
	echo"<td>";echo $row['id'];echo"</td>";
	echo"<td>";echo $row['room_type'];echo"</td>";
	echo"<td>";echo $row['room_name'];echo"</td>";
	echo"<td>";echo $row['total_qty'];echo"</td>";
	echo"<td>";echo $row['price'];echo"</td>";
	echo"<td><a onClick=\"javascript: return confirm('Please confirm deletion');\" href='deleteroom.php?id=".$row["id"]."'>delete</a></td>"; 
	echo"</tr>";
	
}
echo"</table>";
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