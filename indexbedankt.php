<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>The Alice Dutch Blues Top100 Allertijden</title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
 <meta property="og:url"           content="https://top100.wiekentraymond.nl/index.php" />
    <meta property="og:type"          content="BluesAlert " />
    <meta property="og:title"         content="The Alice Dutch Blues Top100 Allertijden" />
    <meta property="og:description"   content="Stem voor uw eigen top 6 nummers van Nederlandse Blues Artiesten" />
    <meta property="og:image"         content="https://top100.wiekentraymond.nl/logo.jpg" />
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="validate.js"></script>
  </head>
  <body>
	 
	  <?php
	  include_once "conn.php";
    	$conn = conn();
		$q = "SELECT songs.id as id,songs.artist as artist, songs.title as title FROM songs ORDER BY songs.artist";
		$r = mysqli_query($conn, $q);
		$list = "<ul id='lijst'>";
		$select = "";
		$artistFirst =array();
		$titleFirst =array();
		
		while($row=mysqli_fetch_array($r)) {
			$id = $row['id'];
			$artiest = trim(strtolower(stripslashes($row['artist'])));
			$titel = trim(strtolower(stripslashes($row['title'])));
			//$q2 = "SELECT * FROM songs WHERE artist = '".$row['artist']."'";
				//$r2 = mysql_query($q2) or DIE (mysql_error());
				//while($chk = mysql_fetch_array($r2)) {
				//	$chkT = trim(strtolower(stripslashes($chk['title'])));
					
				//}
				
			if (in_array($artiest, $artistFirst)) {
    			if (in_array($titel, $titleFirst)) {
    				
				} else {
					$titleFirst[] = $titel;
					$list.= "<li>".ucwords($artiest)." - ".ucwords($titel)."</li>";
					$select.="<option value='$id'>".ucwords($artiest)." - ".ucwords($titel)."</option>";
					
				}
			} else {
				$artistFirst[] = $artiest;
				$titleFirst[] = $titel;				
				$list.= "<li>".ucwords($artiest)." - ".ucwords($titel)."</li>";
				$select.="<option value='$id'>".ucwords($artiest)." - ".ucwords($titel)."</option>";
			}
				
			
		}
		$list.= "</ul>";
	?> 
	  <header><img src="logo.jpg" /> </header>
    <h1 style="text-align: center;">The Alice Dutch Blues Top100 Allertijden</h1>
    
  
  
 
  <section>
    <h1 style="text-align: center;">Bedankt voor het stemmen, we komen spoedig met de uitslag</h1>
    <p style="text-align: center;">De Alice Dutch Blues Top 100 Allertijden is een bijzondere lijst die de rijke traditie van Nederlandse bluesmuziek viert. Met een focus op bands en artiesten uit Nederland, biedt deze top 100 een unieke inkijk in de bijdragen van Nederlandse artiesten aan het blues genre door de jaren heen.
<br><br>
De lijst omvat een breed scala aan stijlen binnen de blues, variërend van traditionele delta blues tot meer eigentijdse interpretaties en fusies met andere muziekgenres. Wat deze lijst onderscheidt, is de diversiteit van de Nederlandse bluesband en artiest die erin worden vertegenwoordigd, waarbij elke groep zijn eigen unieke geluid en stempel op het genre drukt.
<br><br>
Stem op jouw favorieten uit de Dutch Top100 Allertijden of voeg jouw plaat toe als ie nog niet in de lijst staat. <br><br><br><br>
</p>
    <p style="text-align: center;"> De Alice Dutch Blues Top 100 Allertijden word medemogelijk gemaakt door het team van <a href="https://www.facebook.com/Bluesalert">BluesAlert</a> en <a href="https://www.facebook.com/bluesalertdutchtop100/" title="BluesAlert Dutch Top 100 allertijden">BluesAlert Top 100 Allertijden</a></p>
    
	<!--<h2>Reeds ingestuurde nummers</h2>
	
	<p style="text-align: center;">
		<?php //print $list;?>
	</p>-->
  </section>

  </body>
</html>