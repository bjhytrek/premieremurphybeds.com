<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Full Murphy Bed | Premieremurphybeds.com</title>
            <?php include 'modules/header.php';?>
    </head>
    <body>
        <?php $active_page = 2; 
        $full = 'Full Murphy Bed';
        $_SESSION['page'] = $full;
        ?>?>
        <?php include 'modules/navbar_top.php';?>
        
        <div class="container" id="main_container">
            <div class="row">
                    <div class="col-sm-6 col-md-6">
                <!-- Carousel image slider -->
                <?php include 'modules/full_slider.php'; ?>
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
