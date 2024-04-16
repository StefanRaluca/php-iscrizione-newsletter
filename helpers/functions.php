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
        echo '<div class="alert alert-success text-center" role="alert"> ' . 'You are in! Congratulations!' . '</div>';
    }
}
?>