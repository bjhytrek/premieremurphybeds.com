<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Queen Beds | Premieremurphybeds.com</title>
        <?php include 'modules/header.php'; ?>
        <?php include 'modules/queen_dropdown.php'; ?>
    </head>
    <body>
        <?php $active_page
                = 1;
        $_SESSION['page'] = 'queen';
        ?>
<?php include 'modules/navbar_top.php'; ?>

        <div class="container" id="main_container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <!-- Carousel image slider -->
                    <div class="well">
                        <a href="#" data-toggle="modal" data-target="#mymodal"><img src="media/images/hutch_3.jpg" alt=""></a>
                        <div class="row">
                          <div class="col-sm-6 col-sm-3">
                            <a href="#" class="thumbnail">
                              <img src="http://placehold.it/150x150" alt="...">
                            </a>
                          </div>  
                        </div>      
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="page-header">
                        <h1>Queen Sized Murphy Bed</h1>
                    </div>
                    <h3>Customize Your Bed</h3>
<?php include 'modules/queen_buy_now.php'; ?>

                </div>
            </div>
<?php include 'modules/product_description.php'; ?>
            
<h3 id="testing"></h3>
        </div>

<?php include 'modules/footer.php';
include 'modules/image_modal.php';?>
    </body>
</html>
