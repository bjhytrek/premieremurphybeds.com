<!doctype html>
<html lang="en-us">
<head>
<?php include 'modules/head.php'; ?>
</head>
<body>
<header> 
<?php include 'modules/header.php'; ?>
 </header>
 <main id="bodystyle">
<div>
    <article>
          <h1>Presentation: PHP Variables</h1>
          <br>
         
		  

<h2>How to declare a variable</h2>
<p>
<ul>
<li>$count = 10;</li>
<li>$list_price = 34.34;</li>
<li>$first_name = 'Cpt.Steve';</li>
<li>$first_name = "Tony ";</li>
<li>$is_valid = false;</li>
</ul>
<h2>Variables that store strings:</h2>
	<ul>
		<li>$first_name = 'Captain Steve Rogers';</li>
		<li>$first_name = "Tony";</li>
	</ul>
<h2>Variables that store Doubles:</h2>
	<ul>
		<li>$list_price = 34.34;</li>
		<li>$grade = 43.43;</li>
	</ul>
<h2>Variables that store integers:</h2>
	<ul>
		<li>$number_of_craps_given = 0;</li>
		<li>$count = 10;</li>
		<li>$number_of_lamas = 999;</li>
	</ul>

<h2>Variables that store booleans:</h2>
	<ul>
		<li>$user_found = false;</li>
		<li>$is_valid = false;</li>
		<li>$presentations_suck = true;</li>
		<li>$are_pandas_sad = TRUE;</li>
	</ul>
<h2>RULES:</h2>
	<ul>

		<li>Case sensitive</li>


		<li>can have letters, numbers a,d underscores</li>

		<li>must start with "$" </li>


		<li>NO SPECIAL CHARACTERS %#*@(*(@(*+)!(*</li>

		<li>Cannot begin with digits or two underscores</li>


		<li>CANNOT use PHP reserved names like " $this "</li>
	</ul>

<h2>Getting data from an array and storing it in a variable:</h2>
	<ul>
	<li>$last_name = [
		"Jeffery" => "Holland",
		"Tony" => "Stark",
		"Tyrion" => "Lanister"
	];</li>
		 <li>$important_person = $last_name["Tony"];</li>
		 <li>$cool_guy = $last_name["Jeffery"];</li>
		 <li>$awesome_guy = $last_name["Tyrion"];</li>
		 
		 </ul>
		 <h2>Printing out our stored variables</h2>
		 <ul>
			 <li>echo ($important_person);</li>
			 
			 <li>echo($cool_guy);</li>
			 
			 <li>echo ($awesome_guy);</li>
		 </ul>
         </p> 
         
          
          
     </article>
</div>
</main>
<footer id="footer">
<?php include  'modules/footer.php'; ?>
</footer>
</body>
</html>