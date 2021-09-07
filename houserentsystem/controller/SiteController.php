<?php
include 'model/DbModel.php';
if(empty($_SESSION['user']['login'])){
    include 'view/index.php';
} else{
    include 'view/index.php';
}
?>