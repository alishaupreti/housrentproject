<?php
include 'model/DbModel.php';
if(empty($_SESSION['user']['login'])){
	include 'view/view-property.php';
} else{
	include 'view/view-property.php';
	return;
}
?>