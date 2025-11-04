
SELECT songs.artist AS artist, songs.title AS title, COUNT( title ) 
FROM songs, koppel, users
WHERE songs.id = koppel.sid
AND koppel.uid = users.id
AND users.active =1
GROUP BY title
ORDER BY COUNT( title ) DESC 


SELECT songs.artist as artist, songs.title as title, COUNT(title) from songs, koppel, users,usersex WHERE (songs.id = koppel.sid AND koppel.uid = users.id) OR (songs.id = koppel.sid AND koppel.uid = usersex.id) GROUP BY title ORDER by COUNT(title) DESC


SELECT songs.artist as artist, songs.title as title, COUNT(*) as place from songs GROUP BY songs.title ORDER BY place DESC