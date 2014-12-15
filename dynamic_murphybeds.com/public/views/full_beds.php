
     <body>
        <?php $active_page
                = 2;
        $_SESSION['page'] = 'queen';
        ?>

         <script type='text/javascript' src='modules/paypal_dropdown.js' defer="defer"></script>

       
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <!-- Carousel image slider -->
                    <div class="well">
                        <!--<a href="#" data-toggle="modal" data-target="#mymodal"> -->
                        <img src="media/images/beds/slide_3.jpg" alt="">
                        <!--</a>
                        -->
                           
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
                <p>With the same wood and design options available for the queen bed, the full bed maximizes space for one adult while still creating the ambiance of beauty and elegance. The full is perfect for any studio apartment or room utilizing multiple functions.</p>
            </div>
            <?php include 'modules/product_description.php'; ?>
     
