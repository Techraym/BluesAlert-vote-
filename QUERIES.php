<?php
//Get the results
SELECT koppel.sid as songid, COUNT(koppel.sid) as place,  songs.id as sid, songs.artist, songs.title FROM koppel, songs WHERE songs.id = koppel.sid GROUP BY (koppel.sid) ORDER BY place DESC

//delete verkeerde songs
DELETE koppel.*, songs.* FROM koppel, songs WHERE koppel.sid= songs.id AND songs.id = 1934
?>