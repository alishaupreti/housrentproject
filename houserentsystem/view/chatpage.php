<?php 
// $db['host'] = "localhost";
// $db['username'] = "root";
// $db['password'] = "";
// $db['db_name'] = "houserentsystem";
// $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);


?>

<?php
if(isset($_POST['send_message1'])){

  $message=$_POST['message'];
  $owner_id=$_POST['owner_id'];
  $customer_id=$_POST['customer_id'];
  
    
  $sql="INSERT INTO chat(message,owner_id,customer_id) VALUES ('$message','$owner_id','$customer_id')";
 $conn = db_connect();
  $query = mysqli_query($conn,$sql);
  if($query)
  {       
    // echo '<center><img style="width:60% !important;"class="d-block w-100" src="http://localhost/houserentsystem/images/message-success.png"></center>';
    // echo  '<center><h1> Message has been sent Succesfully. You will get your reply soon</h1></center';
    $alertmessage = ' Your Message has been sent succesfully' ;
echo "<script type='text/javascript'>
alert('$alertmessage');
</script>";

  }}?>
<?php
isset($_SESSION["email"]);
include('view/header.php');


if(isset($_POST['send_message']) || isset($_POST['send_message1'])){
  $conn = db_connect();
  
    $u_email=$_SESSION['user']['email_address'];
     $owner_id=$_POST['owner_id'];
     $owner_sql= "SELECT * FROM admin_user where owner_id='$owner_id'";
$owner_query = mysqli_query($conn,$owner_sql);
if(mysqli_num_rows($owner_query) >0)
{
    while ($rows=mysqli_fetch_assoc($owner_query)) {
        $owner_image_url = $rows['id_photo'];
        $owner_name = $rows['name'];

    }

}
    $sql="SELECT * FROM customer_user where email='$u_email'";
    $query=mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) >0)
    {
      while ($rows=mysqli_fetch_assoc($query)) {
        $customer_id=$rows['customer_id'];
        $image_url = $rows['id_photo'];
        $customer_name = $rows['name'];
   
    $sql1="SELECT * FROM chat where owner_id='$owner_id' AND customer_id='$customer_id' ";

    $query1 = mysqli_query($conn,$sql1);

?>

<style>
  h2{
color:white;
  }
  label{
color:white;
  }
  span{
    color:#673ab7;
    font-weight:bold;
  }
  .container {
    margin-top: 3%;
    width: 60%;
    padding-right:10%;
    padding-left:10%;
  }
  .btn-primary {
    background-color: ;
  }
  .display-chat{
    height:300px;
    background-color:lightgrey;
    margin-bottom:4%;
    overflow:auto;
    padding:15px;
  }
  .message{
    background-color: #c616e469;
    color: white;
    border-radius: 5px;
    padding: 5px;
    margin-bottom: 3%;
  }
  </style>

<center><h1 style="color:maroon;text-transform:uppercase;"> Send Message </h1>
</center> <br><br>
  <div class="display-chat">
<?php
     
  if(mysqli_num_rows($query1)>0)
  {
    while($row= mysqli_fetch_assoc($query1)) 
    {
?>
<?php

if(!empty($row['message'])){
?>
    
      <p>
      <div style="font-size:15px;padding:30px 15px;background-color:maroon"> 
      <a target=_blank id="text-size"href="<?php echo !empty($image_url)? $image_url : $base_url . "images/defaultuser.jpeg";?>"><img style="border-radius:100px;" src="<?php echo !empty($image_url)? $image_url : $base_url . "images/defaultuser.jpeg"; ?>" width=50 height=50></a> 
          <span style="color:white !important;"> <?php echo $customer_name;?> </span><br>        <span style="color:white !important;"><?php echo $row['message']; ?></span>
          <br><br>
</div>
          <?php
        
      }
            
      if(!empty($row['owner_message'])){
           ?>
      <div style="margin-top:10px;font-size:15px;padding:30px 15px;background-color:white">    
      <a target=_blank id="text-size"href="<?php echo !empty($owner_image_url)? $owner_image_url : $base_url . "admin-zone/images/defaultuser.jpeg";?>"><img style="border-radius:100px;" src="<?php echo !empty($owner_image_url)? $owner_image_url : $base_url . "admin-zone/images/defaultuser.jpeg"; ?>" width=50 height=50></a> <span style="color:black !important;"> <?php echo $owner_name;?> </span><br> 
          <span style="color:black !important;"><?php echo $row['owner_message']; ?></span>
      </div>
            </p>
     
    
    <br><br>
    <?php
}
?>

<?php
    }
  }
  else
  {
?>
<div class="message">
      <p>
        No previous chat available.
      </p>
</div>
<?php
  } 
?>



</div>

<form style="margin-top:5%" class="form-horizontal" method="POST" action="<?php echo $base_url?>?r=chatpage">
    <div class="form-group">
      <div class="col-sm-10"> 
      <input type="hidden" name="owner_id" value="<?php echo $owner_id; ?>">    
      <input type="hidden" name="customer_id" value="<?php echo $customer_id; ?>">
            
        <textarea name="message" class="form-control" placeholder="Type your message here..."></textarea>
      </div>
           
      <div class="col-sm-2">
        <input type="submit" name="send_message1" class="btn btn-primary" formmethod="post" value="Send">
      </div>

    </div>
  </form>
<center><button onclick="goBack()" class="btn btn-success">Go Back</button></center>
<br><br>
</body>
</html>

<?php
  }

}}
?>


 



<script>
function goBack() {
  window.location.href = '?r=site#search';


}
</script>
<?php

include('view/footer.php')
?>