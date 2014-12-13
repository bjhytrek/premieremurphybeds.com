<?php

?>
<!--Header with Navbar  -->
<div class="navbar navbar-default navbar-default-top" id="navbar">
            <div class="container">
            <div class=".navbar-header">
                    <a href="index.php" class="navbar-brand" id="nav_title">Premier Murphy Beds</a>
                    <button type="button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target= ".navbar-collapse">
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                            <span class = "icon-bar"></span>
                    </button>
            </div>
            <div class = "collapse navbar-collapse navHeaderCollapse">
                <!--for mobile navbar display-->
                <ul class = "nav navbar-nav navbar-right">
                     <?php
                     
                     $pages = array(
                        '<a href="index.php">Home</a></li>',
                        '<a href="queen_beds.php">Queen Beds</a>',
                        '<a href="full_beds.php">Full Beds</a>',
                        '<a href="twin_beds.php">Twin Beds</a>',
                        '<a href="compare.php">Compare</a>',
                       '<a href="contact.php">Contact</a>',
                     );
                        
                       
                        foreach($pages as $page=>$content){
                    $li_str = '<li>';
                    if($page == $active_page){
                        $li_str = '<li class="active">';
                    }
                    $li_str .= $content.'</li>';
                    echo $li_str;
                }
                ?>
                </ul>
        </div>
    </div>
</div>

