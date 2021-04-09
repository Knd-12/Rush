<?php  require_once("../core/init.php");

    if ( !empty($_SESSION['user_id']) ) { // They ARE logged in

        // They shouldn't on the login page, if they are already logged in.
        // let's redirect them.
        header("Location: /posts/");
        exit();

    }

    (function(){
        // set dynamic vars to pass to html_head.php
        $title = 'Welcome to Rush';
        $description = 'Rush, the ultimate community for visual creators.';
        require_once(APP_ROOT."/elements/html_head.php");
        require_once(APP_ROOT."/elements/nav.php");
    })();

?>

<body id="signin">




    <div class="container">
        
            
        <div class="row">
                
            <div class="col-sm-5 px-4">
                    
                <br>
                <h4 class="text-light text-center p-3"> UPLOAD YOUR 7 SECONDS OF <strong>ULTIMATE</strong> ADRENELINE <span class="mycolor">RUSH</span></h4>
                
                
                
        
            
                

            
                <?php // If user already exists on account creation, display error message
                if ( !empty($_SESSION['login_err_msg']) ) {
                    echo '<p class="text-danger">'.$_SESSION['login_err_msg'].'</p>';
                    unset($_SESSION['login_err_msg']);
                }
                ?>

                <form  class="form" action="/api/users/login.php" method="post">


                

                    <div class="form-group">
                    
                            <input class="form-control" type="text" name="username" placeholder="Username" required >
                        </div>
                        <div class="form-group">
                        
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                            &nbsp; &nbsp; &nbsp;

                            <input type="checkbox" id="remember_me" name="_remember_me"/>
                            <label  for="remember_me">Keep me logged in</label>

                        <br>
                        <br>

                        <input class="btn btn-border px-5" type="submit" value="Sign in">

                        <br>
                        
                    
                        <p class="account text-center">New to Rush? &nbsp;
                        <a class="link" href="/users/signup.php">Signup</a></p>

                    </div><!-- .col-sm-6 -->

                </form>

            </div><!-- .row -->


                
            
                                
                
        </div> <!-- .row -->



    </div> <!-- .container -->


        


            
   

</body>




            

<?php require_once(APP_ROOT."/elements/footer.php");
