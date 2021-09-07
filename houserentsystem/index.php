
<?php

session_start();
$base_url = 'http://localhost/houserentsystem/';
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
            $_SESSION['active_url'] = 'site' ;
            include 'controller/SiteController.php';
            break;
        case 'login':
            $_SESSION['active_url'] = 'login';
            include 'controller/LoginController.php';
            break;
        case 'signup':
            $_SESSION['active_url'] = 'signup';
            include 'controller/SignupController.php';
            break;
            case 'logout':
            include 'controller/LogoutController.php';
            break;
            case 'search':
                $_SESSION['active_url'] = 'search';
                include 'controller/SearchController.php';
                break;
                case 'viewproperty':
                    $_SESSION['active_url'] = 'viewproperty';
                    include 'controller/ViewPropertyController.php';
                    break;
                    case 'chatpage':
                        $_SESSION['active_url'] = 'chatpage';
                        include 'controller/ChatPageController.php';
                        break;
        default :
            throwError(404, 'Requested page does not exists.');
            break;
    }
    return;
} else {
    header("Location: ?r=site");
exit();
}
