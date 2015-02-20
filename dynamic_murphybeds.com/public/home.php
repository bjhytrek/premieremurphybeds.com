
    <body>
        <?php $active_page
                = 0; ?>
        <!-- Responsive Grid System.-->

            <!-- Carousel image slider -->
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="media/images/beds/slide_1.jpg" data-slide-to="0" class="active"></li>
                    <li data-target="media/images/beds/slide_2.jpg" data-slide-to="1"></li>
                    <li data-target="media/images/beds/slide_3.jpg" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="media/images/beds/slide_1.jpg" alt="Queen Murphy Beds.">
                        <div class="carousel-caption">
                            <h3>Queen Murphy Bed</h3>
                            <!--<p></p> -->
                        </div>
                    </div>
                    <div class="item">
                        <img src="media/images/beds/slide_2.jpg" alt="Full Murphy Beds">
                        <div class="carousel-caption">
                            <h3>Full Murphy Bed</h3>
                            <!--<p></p> -->
                        </div>
                    </div>
                    <div class="item">
                        <img src="media/images/beds/slide_3.jpg" alt="Twin Murphy Beds">
                        <div class="carousel-caption">
                            <h3>Twin Murphy Bed</h3>
                            <!--<p></p> -->
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
            <!-- Main content-->
            <div class="jumbotron">
                <p>Premier Murphy Beds manufactures the highest quality beds in the business with the best prices! We use only the best materials, and build our beds right here in the USA. Our current line features top-grade wood with beautiful options for any room in the home. Our space saving features create a beautifully furnished room that maximizes space and efficiency.*mattress not included*</p>
            </div>
            <!--Queen thumbnail-->
            <div class="row ">
                <div class="col-xs-4 col-md-4">

                    <div class="thumbnail">
                        <a href="queen_beds.php"><img src="media/images/beds/queen_metro.jpg" alt="Queen Sized Murhpy Bed"></a>
                        <div class="caption">
                            <h3>Queen Sized Murphy Beds</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-md-4">

                    <div class="thumbnail">
                        <a href="full_beds.php"><img src="media/images/beds/queen_half.jpg" alt="Full Sized Murhpy Bed"></a>
                        <div class="caption">
                            <h3>Full Sized Murphy Beds</h3>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 col-md-4">

                    <div class="thumbnail">
                        <a href="twin_beds.php"><img src="media/images/beds/queen_1.jpg" alt="Double Sized Murhpy Bed"></a>
                        <div class="caption">
                            <h3>Twin Sized Murphy Beds</h3>
                            
                        </div>
                    </div>
                </div>


            </div>
            <?php include '/modules/warranty_return_policy.php'; ?>
    

   