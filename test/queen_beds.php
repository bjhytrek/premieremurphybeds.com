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
                        <img src="media/images/beds/slide_1.jpg" alt="Queen Murphy Bed">
                        </a>
                        
                           
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
            <div class="jumbotron">
                <h3>Queen Sized Murphy Bed</h3>
                <p>Our queen bed features the option to include one or two hutches, with shelves. When closed the room appears to have a beautifully crafted entertainment center; when open it comfortably sleeps two adults. With many wood options to choose from the perfect design and color is available for any room.</p>
            </div>
<?php include 'modules/product_description.php'; ?>
            
<h3 id="testing"></h3>
        </div>

<?php include 'modules/footer.php'?>
        <div class="modal fade" id="pop_up_queen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Murphy Bed Queen </h4>
      </div>
      <div class="modal-body">
          <img src="media/images/beds/slide_1.jpg" alt="Twin Murphy Bed.">
      </div>
      
    </div>
  </div>
</div>
    </body>
</html>
