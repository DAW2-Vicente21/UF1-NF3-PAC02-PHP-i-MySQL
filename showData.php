<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'SELECT
        m.movie_name, p.people_fullname
    FROM
        movie m, people p
    WHERE
        m.movie_leadactor = p.people_id';

$result = mysqli_query($db,$query) or die(mysqli_error($db));


echo '<table border="1">';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    foreach ($row as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>