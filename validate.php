<?php

include_once("conn.php");

//get data and check the email
$v = trim($_GET['v']);
$conn = conn();

$q = "UPDATE users SET active = 1 WHERE hash = '$v'";
$r = mysqli_query($conn,$q);
//get affected rows to check whether the user is confirmed

if(mysqli_affected_rows($conn)>0){
	$p ="<h2>Hartelijk dank, uw stemmen zijn bevestigd !</h2><div>";
	$q2 = "SELECT id, name FROM users WHERE hash = '$v'";
	$r2 = mysqli_query($conn,$q2) or DIE ("ongeldige query voor user");
	$row = mysqli_fetch_assoc($r2);
	$uid=$row['id'];
	$name= $row['name'];
	
	$q3= "SELECT songs.title as tit, songs.artist as art FROM songs, koppel WHERE songs.id = koppel.sid AND koppel.uid = $uid";
	$r3 = mysqli_query($conn,$q3) OR DIE (mysqli_error($conn));
	if(mysqli_num_rows($r3)>0)
	{
		
		$p .="<ul>";
		while($row=mysqli_fetch_array($r3))
		{
		
			$art = stripslashes($row['art']);
			$tit= stripslashes($row['tit']);
			$p .="<li>$art - $tit</li>";
		}
		$p .="</ul>";
	}
	
}else{
	$p = "<h2 class='error'>Uw stemlijst is al bevestigd of er is iets mis gegaan met uw bevestiging, probeert u het dan opnieuw</h2>";
}
?>
<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
     <meta property="og:url"           content="https://top100.wiekentraymond.nl/index.php" />
    <meta property="og:type"          content="BluesAlert " />
    <meta property="og:title"         content="Nederlandse Blues Top 100 Allertijden" />
    <meta property="og:description"   content="Stem voor uw eigen top nummers van Nederlandse Blues bands/artiesten" />
    <meta property="og:image"         content="https://top100.wiekentraymond.nl/logo.jpg" />
    <title>The Alice Dutch Blues Top100 Allertijden</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <link rel="stylesheet" href="style.css">
	<body> <header><img src="logo.jpg" /> </header><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v2.5&appId=373084959436589";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<?php
		print $p;
		
?>
		
	
	</body>
</html>
