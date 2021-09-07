<?php
unset($_SESSION["user"]["login"]);
unset($_SESSION['user']['id']);
unset($_SESSION['user']['name']);
redirect('login');
?>