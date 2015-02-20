<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Twin Murphy Bed | Premieremurphybeds.com</title>
            <?php include 'modules/header.php';?>
    </head>
    <body>
        <?php $active_page = 3; ?>
        <?php include 'modules/navbar_top.php';?>
        <script type='text/javascript' src='modules/paypal_dropdown.js' defer="defer"></script>
        <div class="container" id="main_container">
            <div class="row">
                    <div class="col-sm-6 col-md-6">
                    <!-- Carousel image slider -->
                    <div class="well">
                        <a href="#" data-toggle="modal" data-target="#pop_up_twin">
                        <img src="media/images/beds/new_twin.jpg" alt="Twin Murphy Bed.">
                        </a>
                    </div>
                        
                    
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="page-header">
                    <h1>Twin Sized Murphy Bed</h1>
                    </div>
                    <h3>Customize Your Bed</h3>
                    <?php include 'modules/twin_buy_now.php'; ?>

                </div>
            </div>
            
            <div class="jumbotron">
                <h3>Twin Sized Murphy Bed</h3>
                <p>The twin is the ultimate space saving design without sacrificing style. Perfect for kids or to maximize the space of a smaller room the twin is ultimate combination of beauty and efficiency.</p>
            </div>
            <?php include 'modules/product_description.php'; ?>
            </div>
            
        
       
        
        <?php include 'modules/footer.php'; ?>
        <!-- Modal -->
<div class="modal fade" id="pop_up_twin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Murphy Bed Twin </h4>
      </div>
      <div class="modal-body">
       <img src="media/images/beds/new_twin.jpg" alt="Twin Murphy Bed.">
      </div>
      
    </div>
  </div>
</div>
    </body>
</html>
