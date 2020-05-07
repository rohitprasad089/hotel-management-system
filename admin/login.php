<?php
session_start();
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
<!--login form-->
<div class="container">
<div class="row justify-content-center my-5">
<div class="card col-4 card1">
<center><i class="fas fa-users fa-5x"></i></center>
<hr>
<form method="post" class="p-3">
  <div class="form-group">
    <label for="exampleInputusername1">Username</label>
    <input type="text" class="form-control" name="username" id="exampleInputusername1" aria-describedby="usernameHelp">
    <small id="usernameHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="password" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">remember me</label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
  <div>
  </div>
</form>
<?php
if(isset($_POST['submit']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql=mysqli_query($conn,"select * from adminlogin where username='$username' && password='$password'");
        $count=0;
        $count=mysqli_num_rows($sql);
        if($count==0)
		{?>
		<p style="color:white; text-align:center; background-color:red;margin:auto; padding:5px;border-radius:5px;">Invalid user</p>
	<?php	}
		else{
    $_SESSION['username']=$_POST['username'];
   ?>
     <script>
     alert('welcome');
	 window.location('dashboard.php');
     </script>     
     <?php
  }}
else{} ?>

</div>
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