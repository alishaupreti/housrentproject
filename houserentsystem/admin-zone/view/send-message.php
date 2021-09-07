<style>

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
}
</style>
<?php


$db['host'] = "localhost";
    $db['username'] = "root";
    $db['password'] = "";
    $db['db_name'] = "houserentsystem";

    $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);
?>
<?php
if( !empty ($_POST['send_message1'])){

  $message=$_POST['message'];
  $owner_id=$_POST['owner_id'];
  $customer_id=$_POST['customer_id'];
  
    
  $sql="INSERT INTO chat(owner_message,owner_id,customer_id) VALUES ('$message','$owner_id','$customer_id')";

  $query = mysqli_query($conn,$sql);
  if($query)
  {       
    echo '<center><img style="width:60% !important;"class="d-block w-100" src="http://localhost/houserentsystem/images/message-success.png"></center>';
    echo  '<center><h1> Message has been sent Succesfully</h1></center';
      

  }?>
<center> <a href="http://localhost/houserentsystem/admin-zone/?r=site" class="btn btn-success"> Go to Profile </a> </center>
  <?php
}
?>