<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Products | Premieremurphybeds.com</title>
        <?php include 'modules/header.php'; ?>
    </head>
    <body>
        <?php $active_page
                = 1;
        $_SESSION['page'] = 'Products';
        ?>
<?php include 'modules/navbar_top.php'; ?>
        <div class="container" id="main_container">
            
             <div id="content">   
                
                
                
                  <div class="page-header">
                        <h1>Premier Murphy Beds </h1>

                <p>Our Premier murphy bed combines the ultimate space-saving features that allow maximum room utilization, sleep capacity, and style.  When closed the room appears to have a beautifully crafted entertainment center; when open it comfortably sleeps two adults. With many wood options to choose from, the perfect design and color is available for any room. Add hutches and/or nightstands to complete the setting for any room.<br><small>*mattress not included*</small></p>
            
                    </div>

                
            
            
            <?php include 'modules/square_item_premier.php'; ?>

            
                <?php include 'modules/product_description.php'; ?>
            </div>

        </div>

<?php include 'modules/footer.php'?>
