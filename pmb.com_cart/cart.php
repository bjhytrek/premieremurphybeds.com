<?php include('_php/functions.php'); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>My Cart | Premieremurphybeds.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
    </head>
    <body>
        <?php $active_page
                = 12;
        $_SESSION['page'] = 'queen';
        ?>
        <script type='text/javascript' src='modules/paypal_dropdown.js' defer="defer"></script>
<?php include 'modules/navbar_top.php'; ?>

        <div class="container" id="main_container">
            <div id="content">
                
	
		<?php notification(); ?>
	
		<h1>Premier Murphy Beds</h1>
		<h2>PayPal Shopping Cart</h2>
		
		<h3>Basket</h3>
		
                <a href="index.php">Back to Products</a>
		
		<form name="paypalCheckout" action="<?php echo PPCART_URL; ?>" method="post">
		
	        <input type="HIDDEN" name="business" value="<?php echo PPCART_ACCOUNT; ?>">
	        <input type="HIDDEN" name="cmd" value="_cart">
	        <input type="HIDDEN" name="upload" value="1">
	        <input type="hidden" name="currency_code" value="<?php echo PPCART_CURRENCY; ?>">
	        <input type="hidden" name="lc" value="<?php echo PPCART_COUNTRY; ?>">
	        <input type="hidden" name="return" value="<?php echo PPCART_RETURN_URL; ?>">   
		
			<?php getShoppingCart(); ?>
		
		</form>
    
    
		
	
      
   
 
            </div>
           
    </div>
        <?php        include 'modules/footer.php' ?>;
    </body>
</html>
