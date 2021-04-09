<?php  require_once("../../core/init.php");
    (function(){
        // set dynamic vars to pass to html_head.php
        $title = 'Edit Profile';
        $description = '';
        require_once(APP_ROOT."/elements/html_head.php");
        require_once(APP_ROOT."/elements/nav.php");
    })();

    $u = new User;
    $user = $u->get_by_id($_SESSION['user_id']);

?>

<body id="page1">

    <div class="container p-5">

        <div class="row">
            <div class="col-sm-6">

                <h2>Edit Profile</h2>
                <hr>

                <?php // If user already exists on account creation, display error message
                if ( !empty($_SESSION['edit_acc_msg']) ) {
                    echo '<p class="text-danger">'.$_SESSION['edit_acc_msg'].'</p>';
                    unset($_SESSION['edit_acc_msg']);
                }
                ?>

                <form action="/api/users/edit.php" method="post">
                
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" type="text" name="username" autocomplete="new-password" value="<?=$user['username']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="password" autocomplete="new-password" placeholder="Leave empty to keep same password...">
                    </div>
                
                    <div class="form-group">

                        <label>Your Timezone</label>
                        <select class="form-control chosen-select" name="timezone" required>
                        
                            <option></option>

                            <?php
                            $timezone_identifiers = DateTimeZone::listIdentifiers();

                            foreach ($timezone_identifiers as $timezone) { 
                                
                                $selected = ''; // pre select users timezone from database.
                                if ( $timezone == $user['timezone'] ) {
                                    $selected = 'selected';
                                }

                                echo '<option '.$selected.'>'.$timezone.'</option>';
                            }
                            ?>


                        </select>

                    </div>

                    <h4>Profile Info</h4>
                    <hr>

                    <div class="form-group">
                        <label>First Name</label>
                        <input class="form-control" type="text" name="firstname" value="<?=$user['firstname']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" name="lastname" value="<?=$user['lastname']?>" required>
                    </div>
                    <div class="form-group">
                        <label>Bio</label>
                        <textarea class="form-control" name="bio" required><?=$user['bio']?></textarea>
                    </div>

                    <input class="btn" type="submit" value="Save changes">
                    <br>
                    <br>
                    <br>

                </form>




            </div><!-- .col-sm-6 -->
        </div><!-- .row -->

    </div><!-- .container -->

</body>

<?php require_once(APP_ROOT."/elements/footer.php");
