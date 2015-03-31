<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Queen Beds | Premieremurphybeds.com</title>
        <?php include 'modules/header.php'; ?>
    </head>
    <body>
        <?php $active_page
                = 1;
                
                
        $_SESSION['page'] = 'queen';
        ?>
        <script type='text/javascript' src='modules/paypal_dropdown.js' defer="defer"></script>
<?php include 'modules/navbar_top.php'; ?>

        <div class="container" id="main_container">
            
            <div class="row">
                
                    
                     <div class="col-sm-6 col-md-6">
                    
                    <div class="well">
                        <a href="#" data-toggle="modal" data-target="#pop_up_queen">
                            <img src="media/images/beds/new_queen.jpg" alt="Queen Murphy Bed">
                        </a>
                        
                           
                    </div>
                </div>
                
                <div class="col-sm-6 col-md-6">
                    
                    
                    <?php get_product($product); ?>

                </div>
            </div>
            <div id="content">
            <div class="jumbotron"> 
                <h3>Queen Sized Murphy Bed</h3>
                <p>Our Queen murphy bed combines the ultimate space-saving features that allow maximum room utilization, sleep capacity, and style.  When closed the room appears to have a beautifully crafted entertainment center; when open it comfortably sleeps two adults. With many wood options to choose from, the perfect design and color is available for any room. Add hutches and/or nightstands to complete the setting for any room.<br><small>*mattress not included*</small></p>
            </div>
            
                <?php include 'modules/product_description.php'; ?>
            </div>

        </div>

<?php include 'modules/footer.php'?>
        
        <!-- Pop up Modal for when a image is clicked -->
        <div class="modal fade" id="pop_up_queen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Murphy Bed Queen </h4>
      </div>
      <div class="modal-body">
          <img src="media/images/beds/new_queen.jpg" alt="Queen Murphy Bed.">
      </div>
      
    </div>
  </div>
</div>
    </body>
</html>
