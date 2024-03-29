<?php require_once '../../../core/init.php';

// Make sure form data is submitted.
if ( !empty($_POST) && !empty($_POST['username']) && !empty($_POST['password']) ) {

    $u = new User;

    if ( $u->login($_POST) ) { // User login successful!!!
        
        header("Location: /posts/");
        exit();

    } else { // User login fail!!!! Create error message!

        $_SESSION['login_err_msg'] = '* Incorrect username/password combination';

        header("Location: /");
        exit();
    }

}

$_SESSION['login_err_msg'] = '* Username password required!';

header("Location: /");
exit();