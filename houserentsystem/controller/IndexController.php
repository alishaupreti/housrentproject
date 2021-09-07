<?php
include 'model/DbModel.php';
if(empty($_SESSION['user']['login'])){
	header("location:" . $base_url . "?r=login");
} else{
	include 'view/view-property.php';
	return;
}
?>