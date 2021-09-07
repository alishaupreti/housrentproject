<?php
include 'model/DbModel.php';
if(empty($_SESSION['user']['login'])){
	include 'view/search-property.php';
} else{
	include 'view/search-property.php';
	return;
}
?>