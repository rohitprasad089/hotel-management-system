 <?php
 include('header.php');
 include('connection.php');
 /* refreshing room data or checkout*/
 ?>
 <html>
 <head>
 <style>
 body{
	  background-image:url("images/hotel4.jpg");
 }
 </style>
 <script src="validation.js"></script>
 </head>
<body>
 <!--booking portal -->

  <div class="row m-5 justify-content-between">
  <div class="col-lg-8 col-md-10 abc">
  <div class="">
<h5>Welcome to Vacation Rental</h5>
<span class=heading>Book a room for your vacation</span>
</div>
 </div>
<div class="col-lg-4 col-md-10">
<div class="card card-item mt-5">
    <form class=p-2 method="POST" name="availability" onsubmit="return validateavailability()">
	<?php 
	date_default_timezone_set("Asia/Kolkata");
	$date=date('Y-m-d');
	echo"<div class=col-6>";
	echo "$date</div>" ;
	?>
        <div class="booking-heading">BOOK YOUR ROOM</div>
        <div class=row>
        <div class=col-6> <input type="text" class="form-control form-group" placeholder="Check In" name="check_in"
        onfocus="(this.type='date')"
        onblur="(this.type='text')" required>
		<div class="error text-warning" id="inerror"></div>
		</div> 
       <div class=col-6> <input type="text" class="form-control form-group" placeholder="Check Out" name="check_out"
        onfocus="(this.type='date')"
        onblur="(this.type='text')" required>
		<div class="error text-warning" id="outerror"></div>
		</div>
        </div>
		 <div class=row>
		 <div class=col-6><select class="form-control form-group" name="room_name">
        <option>Room Name</option>
        <option>suite</option>
        <option>standard</option>
        <option>family</option>
        <option>deluxe</option>
        <option>luxary</option>
		<option>superior</option>
		</select>
		<div class="error text-warning" id="nameerror"></div>
        </div>
		 <div class=col-6><select class="form-control form-group" name="room_type">
        <option>Room Type</option>
        <option>AC</option>
        <option>NON AC</option>
       </select>
		<div class="error text-warning" id="typeerror"></div>
	   </div>
        </div>
        <div class="row justify-content-center  pt-3">
        <div class=col-7><input type=submit class="form-control form-group btn-primary" name="submit" value="CHECK AVAILABILITY!"></div>
        </div>
    </form>
	<?php
if(isset($_POST['submit']))
	{
	 $check_in=$_POST['check_in'];
	 $check_out=$_POST['check_out'];
	 $room_name=$_POST['room_name'];
	 $room_type=$_POST['room_type'];
	 
	 $query="SELECT quantity from availability where room_name='$room_name' && room_type='$room_type'";
	$sql=mysqli_query($conn,$query) or die( mysqli_error($conn));
	while($row=mysqli_fetch_array($sql))
	{
		$qty=$row['quantity'];
	}
	$count=0;
	 $query1="SELECT check_in,check_out from booked where room_name='$room_name' && room_type='$room_type'";
	$sql1=mysqli_query($conn,$query1) or die( mysqli_error($conn));
	while($row=mysqli_fetch_array($sql1))
	{
		$in= $row['check_in'];
		$out= $row['check_out'];
		if ((($check_in<=$in&&$check_out>$in)||($check_in>=$in&&$check_out<$out))&&$qty==0)
	{
		$count=$count+1;
	}
	}
	if($count>0)
	{
		echo "<script>alert('not available');</script>";
	}
	else{
		echo "<script>alert('available');</script>";
	}
	}
	?>
</div>
</div>
</div>
</div>
              <!-- cards-->
			  <div class="container-fluid">
			  <div class="pt-5">
        <div class="row">
              <div class=col-4>
              <div class=card>
              <div class=p-4>
              <img class=img-fluid src="images/services-1.jpg" width=auto height=300>
             <center> <span class=card-heading>Map Direction</h2></center>
              <p class=card-heading2>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
             <center> <a href="#"><button type="button" class="btn btn-success">Read More</button></a></center>
              </div>
              </div>
              </div>
              <div class=col-4>
              <div class=card>
              <div class=p-4>
              <img class=img-fluid src="images/services-2.jpg" width=auto height=300>
             <center> <span class=card-heading>Accomodation Services</h2></center>
              <p class=card-heading2>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
             <center> <a href="#"><button type="button" class="btn btn-success">Read More</button></a></center>
              </div>
              </div>
              </div>
              <div class=col-4>
              <div class=card>
              <div class=p-4>
              <img class=img-fluid src="images/services-3.jpg" width=auto height=300>
             <center> <span class=card-heading>Great Experience</h2></center>
              <p class=card-heading2>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
             <center> <a href="#"><button type="button" class="btn btn-success">Read More</button></a></center>
              </div>
              </div>
              </div>
</div>
</div>
</div>
</body>
</html>
<?php
 include('footer.htm');
 ?>