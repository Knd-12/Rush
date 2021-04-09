<?php require_once '../../../core/init.php';

// Make sure form data is submitted.
if ( !empty($_POST) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['bio']) && !empty($_POST['timezone']) ) {

    $u = new User;

    if ( $u->exists($_POST['username']) ) { // User exists in our system. DON'T ADD THEM!
        
        $_SESSION['create_acc_msg'] = '* Username already exists';

        header("Location: /");
        exit();

    } else { // User DOES NOT exist in our system. Create them!!!!
        $new_user_id = $u->add($_POST);
        $_SESSION['user_id'] = $new_user_id;

        header("Location: /posts/");
        exit();
    }

}

$_SESSION['create_acc_msg'] = '* All fields required';

header("Location: /");
exit();