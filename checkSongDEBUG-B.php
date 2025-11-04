<?php
/*
create some validation for double entries first */

include_once("conn.php");

//get data and check the email
$song1 = intval( $_GET['song1']);
$song2 = intval( $_GET['song2']);
$song3 = intval( $_GET['song3']);

if(($song1 < 1 && $song2 < 1 ) || ($song3 < 1 && $song2 < 1) || ($song1<1 && $song3<1) )
{
	echo json_encode(false);
	exit;
}
else if ($song1 == $song2 || $song2 == $song3 || $song1 == $song3) 
{

	echo json_encode('same');
	exit;
}
else
{
		$conn = conn();
		$q = "SELECT artist FROM songs WHERE (id='".$song1."' OR id='".$song2."' OR id='".$song3."') ORDER BY artist ASC";
		$r = mysqli_query($q, $conn) or DIE (mysqli_error());
		$end = array();

		while($row = mysqli_fetch_array($r)) $end[] = trim(strtolower($row['artist']));
		$count = array_count_values($end);
		$returnvalue = false;
		
		foreach($count as $key => $value)
		{
			if ($value > 2) $returnvalue = true;
		}
		
		echo json_encode($returnvalue); 
}
?>