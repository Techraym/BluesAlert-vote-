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
    <title>The Alice Dutch Blues Top100 Allertijden</title>
    <link rel="stylesheet" href="style.css">   
  </head>
  <body> <header><img src="logo.jpg" /> </header>
    <h1 style="text-align: center;">The Alice Dutch Blues Top100 Allertijden</h1> 
  <section>
  	<h2 style="text-align: center;"><?php print $result?></h2>
	<h2 style="text-align: center;">Bedankt voor jouw stem <?php ($post['naam']!=null && $post['naam']!="" ? print htmlentities($post['naam']) : print "Gast")?></h2>
	<p style="text-align: center;">Om uw stem te bevestigen hebben wij een e-mail gestuurd naar het opgegeven adres. 
		Klik op de link in deze e-mail om uw stem definitief te registreren. <br>

</p>
	<div>
		<p style="text-align: center;">U kunt ook de validatie code uit de email hier plakken en op bevestigen drukken.</p>
		<form action="validate.php" name="validateForm" method="get">
			<p style="text-align: center;">
    	<label for="validate">
    		<span>Validatie code</span>
    		<input type="text" id="v" name="v" />
    	</label>   
    	
    </p>
     <p style="text-align: center;">
    	<label for="bevestigen"><span></span>
    		<input type="submit" id="submit" name="submit" value="Bevestigen" />
     
    	</label>   
    	
    </p> 
		</form>
	</div>
  </section>

  </body>
</html>