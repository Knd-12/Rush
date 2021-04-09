<?php  require_once("../../core/init.php");

    if ( !empty($_SESSION['user_id']) ) { // They ARE logged in

        // They shouldn't on the login page, if they are already logged in.
        // let's redirect them.
        header("Location: /posts/");
        exit();

    }

    (function(){
        // set dynamic vars to pass to html_head.php
        $title = 'Welcome to Travelgram';
        $description = 'Travelgram, the ultimate community for visual creators.';
        require_once(APP_ROOT."/elements/html_head.php");
        require_once(APP_ROOT."/elements/nav.php");
    })();

?>

<body id="signup">
    




<div class="container">
 
    
    <div class="row">

        <div class="col-sm-1"></div>

        <div class="col-sm-5">

                
            
                <?php // If user already exists on account creation, display error message
                    if ( !empty($_SESSION['create_acc_msg']) ) {
                        echo '<p class="text-danger">'.$_SESSION['create_acc_msg'].'</p>';
                        unset($_SESSION['create_acc_msg']);
                    }
                    ?>
    
                        <form class="form" action="/api/users/add.php" method="post">
                            <h3 class="new-account text-left m-2"><strong>Create New Account</strong></h3>
                            
                            <br>
                                        
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="username" autocomplete="new-username" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" autocomplete="new-password" required>
                            </div>
                        
                            <div class="form-group">
        
                                <label>Your Timezone</label>
                                <select id="signup-timezone-select" class="form-control chosen-select" name="timezone" required>
                                
                                    <option></option>
        
                                    <?php
                                    $timezone_identifiers = DateTimeZone::listIdentifiers();
        
                                    foreach ($timezone_identifiers as $timezone) {
                                        echo '<option>'.$timezone.'</option>';
                                    }
                                    ?>
    
                                 </select>
    
                            </div>
        
                            <h4>Profile Info</h4>
                            <hr>
        
                            <div class="form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" name="firstname" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" name="lastname" required>
                            </div>
                            <div class="form-group">
                                <label>Bio</label>
                                <textarea class="form-control" type="text" name="bio" required></textarea>
                            </div>
    
                            <input class="btn btn-border px-5" type="submit" value="Create Account">
                            <br>
                            <p class="sign-in text-center">Already have an account? &nbsp;<a class="link" href="/index.php">Sign in</a></p>
                            <br> <br>
    
                        </form>
    
                    </div>  

                </div>      
    
            
            </div>
    
                
        </div><!-- .col-sm-5 -->

    

        

       
       
       

   
        
        


            
           
                        

    </div><!-- .row -->


</div><!-- .container -->

</body>





<?php require_once(APP_ROOT."/elements/footer.php");
