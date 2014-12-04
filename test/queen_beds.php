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
        ?>
<?php include 'modules/navbar_top.php'; ?>

        <div class="container" id="main_container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <!-- Carousel image slider -->
                    <div class="well">
<?php include 'modules/queen_slider.php'; ?>
                    <div class="row">
                        

                            <div id="myCarousel" class="carousel slide">

                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                                    <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">

                                    <div class="item">
                                        <div class="row-fluid">
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--/row-fluid-->
                                    </div><!--/item-->

                                    <div class="item active">
                                        <div class="row-fluid">
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--/row-fluid-->
                                    </div><!--/item-->

                                    <div class="item">
                                        <div class="row-fluid">
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                            <div class="span3"><a href="#x" class="thumbnail"><img src="http://placehold.it/100x100" alt="Image" style="max-width:100%;"></a></div>
                                        </div><!--/row-fluid-->
                                    </div><!--/item-->

                                </div><!--/carousel-inner-->

                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                            </div><!--/myCarousel-->

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
        </div>

<?php include 'modules/footer.php'; ?>
    </body>
</html>
