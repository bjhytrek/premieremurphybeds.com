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
                        <a href="#" data-toggle="modal" data-target="#pop_up_full">
                            <img src="media/images/beds/new_full.jpg" alt="Full Murphy Bed.">
                        </a>
                           
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
            <div class="jumbotron">
                <h3>Full Sized Murphy Bed</h3>
                <p>With the same wood and design options available for the queen bed, the full bed maximizes space for one adult while still creating the ambiance of beauty and elegance. The full is perfect for any studio apartment or room utilizing multiple functions.<br><small>*mattress not included*</small></p>
            </div>
            <div id="content">
                 <?php include 'modules/product_description.php'; ?>
            </div>
           
            </div>
            
        
       
        
        <?php include 'modules/footer.php'; ?>
         <div class="modal fade" id="pop_up_full" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Murphy Bed Twin </h4>
      </div>
      <div class="modal-body">
       <img src="media/images/beds/new_full.jpg" alt="Twin Murphy Bed.">
      </div>
      
    </div>
  </div>
</div>
    </body>
</html>
