<?php
    //page for thanks and sending validate code
    
    $post = $_POST;
	
	//connect db and insert the values
	include_once("db.php");
	//check inbouwen
	
	$result = newEntry($post);
	//print $result;
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>Blues Alert - Dutch Blues Top 100 allertijden</title>
    <link rel="stylesheet" href="style.css">   
  </head>
  <body> <header><img src="logo.jpg" /> </header>
    <h1>Blues Alert - Dutch Blues Top 100 allertijden</h1> 
  <section>
  	<h2><?php print $result?></h2>
	<h2>Hartelijk dank voor uw top nummers <?php ($post['naam']!=null && $post['naam']!="" ? print htmlentities($post['naam']) : print "Gast")?></h2>
	<p>Om uw inzending geldig te maken is u een email gestuurd, u kunt in de email gewoon op de link drukken, om uw stem definitief te maken.</p>
	<div>
		U kunt ook de validatie code uit de email hier plakken en op bevestigen drukken.
		<form action="validate.php" name="validateForm" method="get">
			<p>
    	<label for="validate">
    		<span>Validatie code</span>
    		<input type="text" id="v" name="v" />
    	</label>   
    	
    </p>
     <p>
    	<label for="bevestigen"><span></span>
    		<input type="submit" id="submit" name="submit" value="Bevestigen" />
     
    	</label>   
    	
    </p> 
		</form>
	</div>
  </section>

  </body>
</html>