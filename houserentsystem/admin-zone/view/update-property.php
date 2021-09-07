
<?php

// $db['host'] = "localhost";
//     $db['username'] = "root";
//     $db['password'] = "";
//     $db['db_name'] = "houserentsystem";

//     $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);

if(!empty($_SESSION['user']['login'])){
if(isset($_POST['update_property'])){
	update_property();
}
}


function update_property(){

	global $property_id,$province,$zone,$district,$city,$vdc_municipality,$ward_no,$area_tole,$contact_no,$property_type,$estimated_price,$total_rooms,$bedroom,$living_room,$kitchen,$bathroom,$description,$owner_id,$booked;



	$conn = db_connect();
	$province=validate($_POST['province']);
	$zone=validate($_POST['zone']);
	$district=validate($_POST['district']);
	$city=validate($_POST['city']);
	$vdc_municipality=validate($_POST['vdc_municipality']);
	$ward_no=validate($_POST['ward_no']);
	$area_tole=validate($_POST['area_tole']);
	$contact_no=validate($_POST['contact_no']);
	$property_type=validate($_POST['property_type']);
	$estimated_price=validate($_POST['estimated_price']);
	$total_rooms=validate($_POST['total_rooms']);
	$bedroom=validate($_POST['bedroom']);
	$living_room=validate($_POST['living_room']);
	$kitchen=validate($_POST['kitchen']);
	$bathroom=validate($_POST['bathroom']);
	$description=validate($_POST['description']);
   	$booked=validate($_POST['booked']);
   	$u_email=$_SESSION['user']['user_email'];
        $sql1="SELECT * from admin_user where email='$u_email'";
        $result1= mysqli_query($conn,$sql1);

        if(mysqli_num_rows($result1)>0)
      {
          while($rowss=mysqli_fetch_assoc($result1)){
            $owner_id=$rowss['owner_id'];

   	$sql = "UPDATE property_list SET province='$province',zone='$zone',district='$district', city='$city' , vdc_municipality='$vdc_municipality',ward_no='$ward_no',area_tole='$area_tole', contact_no='$contact_no',property_type='$property_type',estimated_price='$estimated_price',total_rooms='$total_rooms',bedroom='$bedroom',living_room='$living_room',kitchen='$kitchen',bathroom='$bathroom',description='$description',booked='$booked'";
		$query=mysqli_query($conn,$sql);

		if(!empty($query)){
			
?>

<!-- <style>
.alert {
  padding: 20px;
  background-color: #DC143C;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<script>
	window.setTimeout(function() {
    $(".alert").fadeTo(1000, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
</script>
<div class="container">
<div class="alert" role='alert'>
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <center><strong>Your Property has been added succesfully.</strong></center>
</div></div> -->


<?php
$message = ' Your Property has been succesfully Updated ' ;
echo "<script type='text/javascript'>
alert('$message');
window.location.href = '?r=site';
</script>";
		}
		else{
			echo "error";
		}

}
}}


function validate($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}




 ?>