<?php
$db = mysqli_connect(gethostname(), 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

$query = 'SELECT
        movie_name, people_fullname, 
    FROM
        movie, people
    WHERE
        movie.movie_LeadActor = people.people_id';

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

