<?php

include 'model/DbModel.php';


if (empty($_POST)) {
    include 'view/login.php';
    return;
}

try {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = 'Email and password are required.';
      
        include 'view/login.php';
        return;
    }
    $email = filterText($_POST['email']);
    $password = filterText($_POST['password']);

    $user = db_login($email, $password);
    if ($user) {
        $_SESSION['user']['login'] = TRUE;
        $_SESSION['user']['email_address'] = $user['email'];
        $_SESSION['user']['user_id'] = $user['customer_id'];
        $_SESSION['user']['user_name'] = $user['name'];
        $_SESSION['user']['image_url'] = $user['id_photo'];
        if($user)
        header("location:?r=site");
        else
        header('location:/?r=login');

    } else {
        $error['body'] = 'No user found with given email and password.';
        $error['title'] = 'Info!!!';
        $error['type'] = 'info';
        setFlash('message', $error);
        include 'view/login.php';
        return;
    }
} catch (Exception $ex) {
    include 'controller/ErrorController.php';
}



