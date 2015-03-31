<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Test Page | Premieremurphybeds.com</title>
        <?php include 'modules/header.php'; ?>
  
    </head>
    <body>
        <?php $active_page
                = 1;
        $_SESSION['page'] = 'queen';
        ?>
<?php include 'modules/navbar_top.php'; ?>

        <div class="container" id="main_container">
          <script type="text/javascript">
function updateItemName() {
  var select = document.getElementById('select_stuff');
  var field = document.getElementById('item_name');

  field.value = select.options[select.selectedIndex].value;
};
</script>

<input type="hidden" name="item_name" id="item_name" value="" />

<select name="select_stuff" id="select_stuff" onchange="updateItemName()">
  <option value="Stuff 1" >Stuff 1</option>
  <option value="Stuff 2">Stuff 2</option>
</select>
        </div>

<?php include 'modules/footer.php';
include 'modules/image_modal.php';?>
    </body>
</html>
