<?php
	//connect db and search for autocomplete values
	include_once("conn.php");
	$conn = conn();
	$searchTerm = $_GET['term'];
	$key = $_GET['k'];
	$sArtist = $_GET['artist'];
	if($key == 'a'){
		//get matched data from skills table
	    $query = "SELECT DISTINCT artist FROM songs WHERE artist LIKE '%".$searchTerm."%' ORDER BY artist ASC";
	}
	if($key == 't'){
		//get matched data from skills table
	    $query = "SELECT DISTINCT title FROM songs WHERE title LIKE '%".$searchTerm."%' ORDER BY title ASC";
	}
	$result = mysqli_query($query,$conn);
	//if(mysql_num_rows($result)>0) echo json_encode("Rijen gevonden"); else echo "Geen data";
    while ($row=mysqli_fetch_assoc($result)) {
    	if($key == 'a') $data[] = stripslashes(html_entity_decode($row['artist']));
		if($key == 't') $data[] = stripslashes(html_entity_decode($row['title']));
    }
    $data = array_unique($data);
    //return json data
    echo json_encode($data);
?>