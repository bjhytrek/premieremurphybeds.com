<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="{{base_url}}" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.0.4" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1421725598" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1421725598" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance0" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle" style="font-family: Arial,sans-serif; font-size: 40px;">Premier Murphy Beds</h4>
</div><div id="wb_element_instance1" class="wb_element"><img alt="" src="gallery/a8daca5d1007f2ff5a5e818ae76d309f_148x139.png"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance2" class="wb_element" style=" line-height: normal;"><h5 class="wb-stl-subtitle" style="text-align: center;">Welcome</h5>
<h1 class="wb-stl-heading1" style="text-align: center;">Our new web site is coming very soon</h1></div><div id="wb_element_instance3" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #00a9e1;"></div></div><div id="wb_element_instance4" class="wb_element"><div style="font-size: 1px; overflow: hidden; line-height: 1px; padding: 0; background: transparent; float: none; position: relative; margin: 1px 0 0 0; width: 100%; height: 1px; left: 0; top: 50%; border-top: 3px solid #00a9e1;"></div></div><div id="wb_element_instance6" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance6");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance6").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 191px;">
	
<div id="wb_element_instance5" class="wb_element" style=" line-height: normal;"><h1 class="wb-stl-heading1" style="text-align: center;">Contact us</h1>

<p style="text-align: center;"> </p>

<p class="wb-stl-normal" style="text-align: center;"><a href="mailto:Sales@premiermurphybeds.com">Sales@premiermurphybeds.com</a></p>
</div><div id="wb_element_instance7" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(232);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>