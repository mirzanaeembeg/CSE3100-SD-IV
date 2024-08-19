<?php
function check_auth() {
    if (!isset($_SESSION['user_id'])) {
        $_SESSION['redirect_url'] = $_SERVER['PHP_SELF'];
        $_SESSION['message'] = "Please sign in to access this page.";
        return false;
    }
    return true;
}
?>