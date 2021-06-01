<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'ALTER TABLE movie 
    ADD CONSTRAINT FK_movieActor
    FOREIGN KEY (movie_leadActor) REFERENCES people(people_id)';


echo 'Added relation beetwen tables!'
?>