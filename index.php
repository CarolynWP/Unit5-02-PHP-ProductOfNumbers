<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />

		<!-- Witch Hazel Tree Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
		
		<!-- title -->
    <title>NUMBERS. NUMBERS. NUMBERS!!</title>
	</head>
	
	<!-- Body -->
	<body>
		<div class="margin">
			<?php echo "<h2>NUMBERS ARE AMAZING! I CAN'T STOP THINKING ABOUT NUMBERS!!!! ARE YOU THINKING ABOUT NUMBERS??? I HOPE YOU ARE. I KNOW I AM. PLEASE GIVE ME TWO NUMBERS TO THINK ABOUT. I WILL YET AGAIN CREATE A NEW NUMBER WITH THEM!!! THE MORE THE MERRIER!!! THATS WHAT I ALWAYS SAY WHEN I THINK ABOUT NUMBERS!!! I LOVE NUMBERS!!!!</h2>" ?>

<?php echo '<img src="./images/number.png" width="300px" alt="Number guy but he is the happiest guy around. He loves his numbers.">' ?>

			<!-- First number text box -->
			<?php echo '<h2>DONT YOU D A R E ADD ANY DECIMALS.</h2>' ?>
			<form method = "post">
				<?php echo '<p>YOUR FIRST AMAZING NUMBER!</p>' ?>
				<input type="number" name="first" step="1">  
				<br>
				
				<!-- Second number text box -->
				<form method = "post">
				<?php echo '<p>YOUR SECOND AMAZING NUMBER!</p>' ?>
				<input type="number" name="second" step="1">  
				<br>
				<br>
					
				<!-- Submit button -->
				<input type = "submit" name = "submit" value="ENTER!">  
					<br>
					<br>
				<!-- calculation area -->
				<?php   
					if (isset($_POST["submit"])) {   
						// variables
						$first= $_POST["first"]; 
						$second= $_POST["second"]; 
						$sum= $first;
						
						//For loop for positive numbers
					 for ($counter = 0;$counter <= $second; $counter++) {
						 if ($counter = $second){
						 $sum = $sum + $counter;
						 }
						 else {
							 $sum = $sum + $counter;
						 }
						} 
					
						 //For loop for negative numbers
						for ($counter = 0;$counter >= $second; $counter--){
								 if ($counter = $second){
							 $sum = $sum + $counter;
								 }
							else {
								$sum = $sum + $counter;
							}
						} 
						
						//output
						echo "<h4>$sum! $sum IS THE NUMBER!! I LOVE THIS NUMBER SO MUCH!! ITS NOT MY FAVOURITE THOUGH, I CAN NEVER HAVE FAVOURITES. THEY'RE ALL MY FAVOURITE!</h4>";
						
					}
					?>
						<br>
					<br>
				</form>	
		</div>
	</body>
</html>