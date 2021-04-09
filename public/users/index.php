<?php  require_once("../../core/init.php");
    (function(){
        // set dynamic vars to pass to html_head.php
        $title = 'Profile Page';
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

                <a class=" link2 float-right py-2" href="/users/edit.php">Edit &nbsp;<i class="far fa-edit float-right" aria-hidden="true"></i></a>
                <h2>My Profile</h2>
                
                <hr>

                <h5>Username</h5>
                <p class="float-right"><?=$user['username']?></p>
                <br>

                <h5>First Name</h5>
                <p class="float-right"><?=$user['firstname']?></p>
                <br>

                <h5>Last Name</h5>
                <p class="float-right"><?=$user['lastname']?></p>
                <br>

                <h5>Timezone</h5>
                <p class="float-right"><?=$user['timezone']?></p>
                <br>

                <h5>Bio</h5>
                <p class="float-right"><?=$user['bio']?></p>
                <br><br>

                

            </div><!-- .col-sm-6 -->      
           

            
        </div><!-- .row -->

    </div><!-- .container -->



</body>


<?php require_once(APP_ROOT."/elements/footer.php");
