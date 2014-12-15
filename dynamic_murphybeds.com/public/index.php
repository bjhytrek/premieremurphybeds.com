<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<div class="container" id="main_container">
  <div id="navigation">
		<?php echo public_navigation($current_subject, $current_page); ?>
  </div>
  <div id="page">
		<?php if ($current_page) {
		
     include ("/views/".$current_page["content"]);
			
			
		 } else { ?>
			
			<p>Welcome!</p>
			
		<?php }?>
</div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
