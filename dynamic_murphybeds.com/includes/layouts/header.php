<?php 
	if (!isset($layout_context)) {
		$layout_context = "public";
	}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Premiermurphybeds.com<?php if ($layout_context == "admin") { echo "Admin"; } ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
    </head>
	<body>
            <div class="jumbotron" id="header">
      <h1>Premiermurphybeds.com <?php if ($layout_context == "admin") { echo "Admin"; } ?></h1>
  
    </div>