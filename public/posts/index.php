<?php  require_once("../../core/init.php");
    (function(){
        // set dynamic vars to pass to html_head.php
        $title = 'Posts Page';
        $description = '';
        require_once(APP_ROOT."/elements/html_head.php");
        require_once(APP_ROOT."/elements/nav.php");
    })();

?>

<body id="page1">

<div class="container py-4">


    <?php // Display error message
    if ( !empty($_SESSION['api_msg_errs']) ) {

        echo '<p class="text-danger">';

            foreach ( $_SESSION['api_msg_errs'] as $error ) {
                echo $error;
                echo '<br>';
            }

        echo '</p>';

        unset($_SESSION['api_msg_errs']);
    }
    ?>

    <div class="row">
        

        <div class="col-sm-4 order-last order-md-first">
            
            <!-- ADD PROJECT FORM -->
            <div class="card border-success mt-3">
            
                <div class="card-header">
                    <h5>RUSH UPLOAD</h5>
                </div><!-- .card-header -->

                <div class="card-body">

                    <form action="/api/posts/add.php" method="post" enctype="multipart/form-data">

                    <!-- <img id="img-preview"> -->

                        <div class="form-group">
                            <input id="file-with-preview" type="file" name="fileToUpload" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="title" placeholder="Post Title:" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="description" placeholder="Post Description:" required></textarea>
                        </div>
                    
                        <input class="btn" type="submit" value="Submit">

                    </form>

                </div><!-- .card-body -->
                


            </div><!-- .card -->

           

            
        </div><!-- .col-md-4 -->





       
        <div class="col-sm-4">  <!-- POSTS LOOP (injected by ajax) -->
            
            <div id="search-message"></div>

            <div id="post-feed"></div>
        
        </div>



        <div class="col-sm-4">
             <!-- SEARCH BAR -->
             <div class="card border-info mt-3">
                

                <div class="card-body">
                    
                    <form id="search-posts-form" action="/posts/" method="get">
                            
                        <div class="form-group float-center">
                            
                            <input id="search-posts-form-input" type="search" class="form-control" name="search" placeholder="Search post" required>
                        </div>
                        <span class="clear-search-btn float-right text-danger p-2">Clear</span> 
                        <input class="btn float-right" type="submit" value="Submit">

                        <br>

                       
                   
                        
                        

                    </form>

                </div><!-- .card-body -->
            </div><!-- .card -->     
                    
            
            
        </div>



            




       


    </div><!-- .row -->

</div><!-- .container -->

</body>





<?php require_once(APP_ROOT."/elements/footer.php");


