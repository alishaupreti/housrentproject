
<?php

function db_connect() {
    $db['host'] = "localhost";
    $db['username'] = "root";
    $db['password'] = "";
    $db['db_name'] = "houserentsystem";

    $conn = new mysqli($db['host'], $db['username'], $db['password'], $db['db_name']);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function find_user_by_email($email) {
    $conn = db_connect();
    $sql = "SELECT * FROM admin_user where email='$email' limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}


function get_user_by_id($id)
{
    $conn = db_connect();
    $sql = "select * from admin_user where id = " . $id . " Limit 1"  ;
    $result = $conn->query($sql);
    $conn->close();
     if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return false;
    }
}

function view_users()
{
$conn = db_connect();
$sql = "select * from admin_user";
$result = $conn->query($sql);
$conn->close();
if($result->num_rows > 0)
{
    return $result;
}
else
{
    return false;
}

}

function find_user_by_id($id) {
    $conn = db_connect();
    $sql = "SELECT * FROM admin_user where id=$id limit 1";
    $result = $conn->query($sql);
    //var_dump($result);die;
    $conn->close();
    if ($result->num_rows > 0) {
        return $result;
    } else {
        return false;
    }
}

function signup_new_user($name, $email, $password, $address, $phone, $target) {
    $conn = db_connect();
    $stmt = $conn->prepare("INSERT INTO admin_user (name,email,password,address,phone_no,id_photo) values(?, ?, ?,?, ?, ?)");
    $stmt->bind_param('ssssis', $name, $email, $password, $address, $phone, $target);
    $result = $stmt->execute();
    if ($result) {
        $stmt->close();
        $conn->close();
        return $result;
    } else {
        $stmt->close();
        $conn->close();
        return false;
    }
}



function db_login($email, $password) {

    $conn = db_connect();

    $sql = "SELECT * FROM admin_user where email='$email' and password='$password' limit 1";
    $result = $conn->query($sql);
    $conn->close();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return false;
    }
}

