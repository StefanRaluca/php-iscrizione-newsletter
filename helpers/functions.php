<?php
$email = isset($_GET['email']) ? $_GET['email'] : '';

function validEmail($email)
{
    return (isset($email) && strpos($email, '@') !== false && strpos($email, '.') !== false);
}
;

if (!empty($email)) {
    if (!validEmail($email)) {
        echo '<div class="alert alert-danger text-center" role="alert">Invalid email.Try again </div>';
    } else {
        header("Location: helpers/userthankyou.php");
        exit;
    }
}
$emailUser = isset($_GET['email']) ? ($_GET['email']) : '';


?>