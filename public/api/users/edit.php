<?php require_once '../../../core/init.php';

// Make sure form data is submitted.
if ( !empty($_POST) && !empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['bio']) && !empty($_POST['timezone']) ) {

    $u = new User;
    $u->edit($_SESSION['user_id'], $_POST);

} else {
    $_SESSION['edit_acc_msg'] = '* All fields required';
}

header("Location: /users/");
exit();