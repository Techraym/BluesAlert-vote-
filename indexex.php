<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <title>Blues Alert - Nederlandse Blues Top 100 allertijden</title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
 <meta property="og:url"           content="https://top100.wiekentraymond.nl/index.php" />
    <meta property="og:type"          content="BluesAlert " />
    <meta property="og:title"         content="Nederlandse Blues Top 100 Allertijden" />
    <meta property="og:description"   content="Stem voor uw eigen top 6 nummers van Nederlandse Blues Artiesten" />
    <meta property="og:image"         content="https://top100.wiekentraymond.nl/logo.jpg" />
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="script.js"></script>
  </head>
  <body>
	  <?php
	  include_once("conn.php");
    	$conn = conn();
		$q = "SELECT songs.id as id,songs.artist as artist, songs.title as title FROM songs,users,koppel WHERE songs.id = koppel.sid AND users.id = koppel.uid AND users.active = 1 ORDER BY songs.artist";
		$r = mysql_query($q, $conn) OR DIE (mysql_error());
		$list = "<ul id='lijst'>";
		$select = "";
		$artistFirst =array();
		$titleFirst =array();
		
		while($row=mysql_fetch_array($r)) {
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
    <h1>Blues Alert - Nederlandse Blues Top 100 allertijden</h1>
    
   <form name="stemForm" id="goo" action="thanks.php" method="post" accept-charset="UTF-8" novalidate="novalidate">
  
 
  <section>
    <h2>Kies uw beste Nederlandse Blues allertijden.</h2>
    <p> Op initiatief van <a href="https://www.facebook.com/Bluesalert">BluesAlert</a> de Nederlandse blues artiesten top 100 allertijden. Voor meer informatie: <a href="https://www.facebook.com/bluesalertdutchtop100/" title="BluesAlert Dutch Top 100 allertijden Facebook pagina">BluesAlert Top 100 Allertijden</a> facebookpagina</p>
    <p>Bij verplichte velden staat een <strong><abbr title="required">*</abbr></strong>.</p>
	  <p>U kunt 3 songs kiezen uit de reeds bestaande lijst en tevens 3 zelf gekozen songs invullen. Voorwaarde is dat u niet vaker dan 2 keer dezelfde artiest invult !</p>
       <p>
      <label for="naam">
        <span>Uw naam</span>
        <input type="text" id="naam" name="naam" />
      </label>
    </p>
    <p>
    	<label for="email">
    		<span>Uw email adres</span>
    		<input type="text" id="email" name="email" required />
        <strong><abbr title="required">*</abbr></strong>
    	</label>   
    </p>
    <p>
      <label for="song1">
        <span>Song 1 </span>
       <select name="song1" id="song1" required>
		   <option value="0">Selecteer Song:</option>
				<?php print $select;?>
		</select>
        <strong><abbr title="required">*</abbr></strong>
      </label>
    </p>
	  <p>
      <label for="song2">
        <span>Song 2 </span>
       <select name="song2" id="song2" required>
		   <option value="0">Selecteer Song:</option>
				<?php print $select;?>
		</select>
        <strong><abbr title="required">*</abbr></strong>
      </label>
    </p>
	  <p>
      <label for="song3">
        <span>Song 3 </span>
       <select name="song3" id="song3" required>
		   <option value="0">Selecteer Song:</option>
				<?php print $select;?>
		</select>
        <strong><abbr title="required">*</abbr></strong>
      </label>
    </p>
    	
    <label for="artiest4">
        <span>Artiest 4 </span>
        <input type="text" id="artiest4" name="artiest4" />
       
      </label>
    </p>
    <p>
    	<label for="titel4">
    		<span>Titel 4</span>
    		<input type="text" id="titel4" name="titel4" />
			
    	</label>   
    	
    </p>
        <p>
    <label for="artiest5">
        <span>Artiest 5 </span>
        <input type="text" id="artiest5" name="artiest5" />
		
      </label>
    </p>
    <p>
    	<label for="titel5">
    		<span>Titel 5</span>
    		<input type="text" id="titel5" name="titel5" />
		
    	</label>   
    	
    </p>
	     <p>
    <label for="artiest6">
        <span>Artiest 6 </span>
        <input type="text" id="artiest6" name="artiest6" />
		
      </label>
    </p>
    <p>
    	<label for="titel6">
    		<span>Titel 6</span>
    		<input type="text" id="titel6" name="titel6" />
		
    	</label>   
    	
    </p>
     <p>
    	<label for="versturen">
    		<input type="submit" id="submit" name="submit" value="Versturen" />
     
    	</label>   
    	
    </p>
	<!--<h2>Reeds ingestuurde nummers</h2>
	
	<p>
		<?php //print $list;?>
	</p>-->
  </section>
 </form>
  </body>
</html>