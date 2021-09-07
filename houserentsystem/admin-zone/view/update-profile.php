<?php


// $db['host'] = "localhost";
//     $db['username'] = "root";
//     $db['password'] = "";
//     $db['db_name'] = "houserentsystem";

//     $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);
?>

<?php
$conn = db_connect();
	$owner_id=$_POST['owner_id'];
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$phone_no=$_POST['phone_no'];
	$address=$_POST['address'];
    $id_photo = $_POST['id_photo'];
		$sql = "UPDATE admin_user SET name='$full_name',email='$email',id_photo='$id_photo',phone_no='$phone_no',address='$address' WHERE owner_id='$owner_id'";
		$query=mysqli_query($conn,$sql);
		if(!empty($query)){
			?>

<?php
$message = ' Your Profile has been succesfully Updated ' ;
echo "<script type='text/javascript'>
alert('$message');
window.location.href = '?r=site';
</script>";
?>

<!-- 
<style>
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
a.btn.btn-success {
    background-color: maroon !important;
    border: none;
    padding: 10px !important;
    font-size: 15px !important;
    color: white !important;
    text-decoration: none !important;
}
a.btn.btn-success:hover {
    background-color: white !important;
    border: 1px solid maroon;    
    padding: 10px !important;
    color: maroon !important;
    font-size:15px !important;
    text-decoration: none !important;
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
  <center><strong>Your Information has been updated.</strong></center>
</div></div><br><br><br>
<center> <a href="http://localhost/houserentsystem/admin-zone/?r=site" class="btn btn-success"> Go Back to Profile </a> </center> -->
<?php


	}

?>