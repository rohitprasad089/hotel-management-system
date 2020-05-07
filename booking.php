 <?php
 include('header.php');
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

  <div class="row m-5 justify-content-center">
 
<div class="col-lg-4 col-md-10">
<div class="card card-item">
    <form class=p-3 method="POST" name="booking" onsubmit="return validatebooking()">
    <div class=row>
	<?php echo $date=date('Y-m-d');?> 
        <div class=col-12><span class="booking-heading">BOOK YOUR ROOM</div>
        </div>
        <div class=row>
        <div class=col-12><input type=text class="form-control form-group" name="fullname" placeholder="fullname" required></div>
        </div>
        <div class=row>
        <div class=col-6> <input type="text" class="form-control form-group" placeholder="Check In" name="check_in"
        onfocus="(this.type='date')"
        onblur="(this.type='text')" value=""  required>
		<div class="error text-warning" id="inerror"></div>
		</div>   
       <div class=col-6> <input type="text" class="form-control form-group" placeholder="Check Out" name="check_out"
        onfocus="(this.type='date')"
        onblur="(this.type='text')"  required> 
		<div class="error text-warning" id="outerror"></div>
		</div>
        </div>
		 <div class=row>
		 <div class=col-6><select class="form-control form-group" name="room_name"  required>
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
		 <div class=col-6><select class="form-control form-group" name="room_type"  required>
        <option>Room Type</option>
        <option>AC</option>
        <option>NON AC</option>
       </select>
	   <div class="error text-warning" id="typeerror"></div>
        </div>
		</div>
        <div class=row>
        <div class=col-6><select class="form-control form-group" name="adults" placeholder="Adults"  required>
        <option>Adults</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option></select>
        <div class="error text-warning" id="adulterror"></div>
		</div>
        <div class=col-6><select class="form-control form-group" name="children" placeholder="Children"  required>
        <option>Children</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option></select>
		<div class="error text-warning" id="childrenerror"></div>
	   </div></div>
        <div class=row>
        <div class=col-12><input type=number class="form-control form-group" name="phone" placeholder="phone" required>
		<div class="error text-warning" id="phoneerror"></div>
		</div>
        </div>
		<div class=row>
        <div class=col-12><input type="email" class="form-control form-group" name="email" placeholder="Email" required></div>
        </div>
        <div class=row>
        <div class=col-12> <input type="text" class="form-control form-group" placeholder="Arrival Timing" name="time"
        onfocus="(this.type='time')"
        onblur="(this.type='text')"> </div>
        </div>
        <div class="row">
        <div class=col-12><input type=submit class="form-control form-group btn-primary" name="submit" value="BOOK  NOW!"></div>
        </div>
    </form>
<?php
include('connection.php');
if(isset($_POST['submit']))
		{
	 $fullname=$_POST['fullname'];
	 $check_in=$_POST['check_in'];
	 $check_out=$_POST['check_out'];
	 $adults=$_POST['adults'];
	 $children=$_POST['children'];
	 $phone=$_POST['phone'];
	 $email=$_POST['email'];
	 $time=$_POST['time'];
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
		echo "<script>alert('Sorry! room is not available')</script>";
	}
	 else{
	 $query="INSERT INTO booked VALUES('','$date','$fullname','$check_in','$check_out','$adults','$children','$phone','$email','$time','$room_name','$room_type')";
	$sql=mysqli_query($conn,$query);
	if($sql)
	{
		mysqli_query($conn,"update availability set quantity=quantity-1 where room_name='$room_name' AND room_type='$room_type'");
		?>
		<script> alert("successful");</script>
		<?php
		}}}
?>
</div>
</div>
</div>
</div>

</body>
</html>
<?php
 include('footer.htm');
 
 ?>