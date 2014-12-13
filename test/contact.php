<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Queen Beds | Premieremurphybeds.com</title>
        <?php include 'modules/header.php'; ?>
    </head>
    <body>
        <?php $active_page
                = 5;
        $_SESSION['page'] = 'Contact';
        ?>
        
<?php include 'modules/navbar_top.php'; ?>
        
        <div class="container" id="main_container">
            <div class="jumbotron">
                <h1>Contact us</h1>
                <p>We are always here to help or answer any questions you may have. E-mail us, and we will respond quickly.</p>
                <h3><a onclick="javascript:window.open('mailto:sales@premiermurphybeds.com?','mail');event.preventDefault()" href="mailto:sales@premiermurphybeds.com?">sales@premiermuphybeds.com</a></h3>
            </div>
        </div>

<?php include 'modules/footer.php';
include 'modules/image_modal.php';?>
    </body>
</html>
