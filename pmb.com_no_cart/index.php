<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Premieremurphybeds.com</title>
        <?php include 'modules/header.php'; ?>
    <body>
        <?php $active_page
                = 0;
        ?>
<?php include 'modules/navbar_top.php'; ?>
        <!-- Responsive Grid System.-->

        <div class="container" id="main_container">
            <!-- Carousel image slider -->
            <!--
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators 
                <ol class="carousel-indicators">
                    <li data-target="media/images/beds/slide_1.jpg" data-slide-to="0" class="active"></li>
                    <li data-target="media/images/beds/slide_2.jpg" data-slide-to="1"></li>
                    <li data-target="media/images/beds/slide_3.jpg" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides 
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="media/images/beds/slide_1.jpg" alt="Queen Murphy Beds.">
                        <div class="carousel-caption">
                            <h3>Queen Murphy Bed</h3>
                            
                        </div>
                    </div>
                    <div class="item">
                        <img src="media/images/beds/slide_2.jpg" alt="Full Murphy Beds">
                        <div class="carousel-caption">
                            <h3>Full Murphy Bed</h3>
                           
                        </div>
                    </div>
                    <div class="item">
                        <img src="media/images/beds/slide_3.jpg" alt="Twin Murphy Beds">
                        <div class="carousel-caption">
                            <h3>Twin Murphy Bed</h3>
                            
                        </div>
                    </div>
                </div>

                <!-- Controls
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            -->
            <!-- Picture to replace image slider for now -->
            <div id="carousel">
                <img src="media/images/beds/slide_1.jpg" alt="Fold down Queen Bed, premieremurphybeds.com">
            </div>
        

            <div id="content">
                
            
            <!-- Main content-->
            <div class="jumbotron">
                <p>Premier Murphy Beds manufactures the highest quality beds in the business with the best prices! We use only the best materials, and build our beds right here in the USA. Our current line features top-grade wood with beautiful options for any room in the home. Our space saving features create a beautifully furnished room that maximizes space and efficiency.<br><small>*mattress not included*</small></p>
            </div>
            <!--Queen bed-->
            <div class="row">
                <div class="col-md-3 col-xs-4 col-lg-3 col-sm-3">
                    
                        <a href="queen_beds.php"><img src="media/images/beds/new_queen.jpg" alt="Queen Sized Murhpy Bed"></a>   
                
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                    <a href="queen_beds.php"><h3>Queen Sized Murphy Bed</h3></a>
                    <p>Our queen murphy bed combines the ultimate space-saving features that allow maximum room utilization, sleep capacity, and style..</p>
                </div>
            </div>
            <hr>
            
            <!--Full bed-->
            <div class="row">
                <div class="col-md-3 col-xs-4 col-lg-3 col-sm-3">
                    
                        <a href="full_beds.php"><img src="media/images/beds/new_full.jpg" alt="Full Sized Murhpy Bed"></a>   
                
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                    <a href="full_beds.php"><h3>Full Sized Murphy Bed</h3></a>
                    <p>With the same wood and design options available for the queen bed, the full bed maximizes space for one adult while still creating the ambiance of beauty and elegance..</p>
                </div>
            </div>
            <hr>
            <!--Twin Bed -->
            <div class="row">
                <div class="col-md-3 col-xs-4 col-lg-3 col-sm-3">
                    
                        <a href="twin_beds.php"><img src="media/images/beds/new_twin.jpg" alt="Twin Sized Murhpy Bed"></a>   
                
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6">
                    <a href="twin_beds.php"><h3>Twin Sized Murphy Bed</h3></a>
                    <p>The twin is the ultimate space saving design without sacrificing style. Perfect for kids or to maximize the space of a smaller room the twin is ultimate combination of beauty and efficiency.</p>
                </div>
            </div>
    
<?php include 'modules/warranty_return_policy.php'; ?>
        </div>
        </div>


<?php include 'modules/footer.php'; ?>
    </body>
</html>