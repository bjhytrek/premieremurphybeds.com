<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Full Murphy Bed | Premieremurphybeds.com</title>
            <?php include 'modules/header.php';?>
    </head>
     <body>
        <?php $active_page
                = 2;
        $_SESSION['page'] = 'queen';
        ?>
<?php include 'modules/navbar_top.php'; ?>
         <script type='text/javascript' src='modules/paypal_dropdown.js' defer="defer"></script>

        <div class="container" id="main_container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <!-- Carousel image slider -->
                    <div class="well">
                        <!--<a href="#" data-toggle="modal" data-target="#mymodal"> -->
                            <img src="media/images/hutch_3.jpg" alt="">
                        <!--</a>
                        -->
                           
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="page-header">
                        <h1>Full Sized Murphy Bed</h1>
                    </div>
                    <h3>Customize Your Bed</h3>
                    <?php include 'modules/full_buy_now.php'; ?>

                </div>
            </div>
            <?php include 'modules/product_description.php'; ?>
            </div>
            
        
       
        
        <?php include 'modules/footer.php'; ?>
    </body>
</html>
