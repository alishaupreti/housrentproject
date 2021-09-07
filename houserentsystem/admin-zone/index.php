
<?php
session_start();
$base_url = 'http://localhost/houserentsystem/admin-zone/';
$_SESSION['base_url'] = $base_url;
$_SESSION['active_url'] = '';
include 'Helper/SpecialCharHelper.php';
include 'Helper/FlashMessageHelper.php';
include 'Helper/ErrorHelper.php';
include 'Helper/RouteHelper.php';


if (isset($_GET['r'])) {
    $controller = $_GET['r'];
    switch ($controller) {
        case 'site':
            $_SESSION['active_url'] = 'site';
            include 'controller/SiteController.php';
            break;
            case 'addproperty':
                $_SESSION['active_url'] = 'addproperty';
                include 'controller/AddPropertyController.php';
                break;
                case 'updateproperty':
                    $_SESSION['active_url'] = 'updateproperty';
                    include 'controller/UpdatePropertyController.php';
                    break;
                    case 'deletebooking':
                        $_SESSION['active_url'] = 'deletebooking';
                        include 'controller/DeleteBookingController.php';
                        break;
                    case 'updateprofile':
                        $_SESSION['active_url'] = 'updateprofile';
                        include 'controller/UpdateProfileController.php';
                        break;
                case 'deleteproperty':
                    $_SESSION['active_url'] = 'deleteproperty';
                    include 'controller/DeletePropertyController.php';
                    break;
            case 'signup':
            $_SESSION['active_url'] = 'signup';
            include 'controller/SignupController.php';
            break;

        case 'login':
            $_SESSION['active_url'] = 'login';
            include 'controller/LoginController.php';
            break;
            case 'logout':
            include 'controller/LogoutController.php';
            break;
        default :
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    include 'controller/SiteController.php';
}
