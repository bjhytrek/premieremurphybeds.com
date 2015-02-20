<?php if(isset($_SESSION['page'])){
     switch ('page'){
         case 'queen':
             $page= "Queen Murphy Bed";
             break;
         case 'full':
             $page= "Full Murphy Bed";
             break;
         case 'twin':
             $page= 'Twin Murphy Bed';
             break;
     }
    }
    ?>
<div id="mymodal" class="modal fade" tabindex="1">
    <div class="container">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">x</button>
    <h3><?php echo $page ;?></h3>
    </div> <!--modal-header--> 
    <div class="modal-body">
        <p><?php echo $page;?><img src="media/images/hutch_3.jpg" class="pull-right" /><?php echo $page; ?></p>
    </div><!--modal-body-->
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal">Close</button>
    </div><!--modal-footer-->
</div>
</div><!--Modal hide fade-->