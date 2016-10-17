<?
function examFunction($db)
{
    $sql_query = "SELECT * FROM users";
    $result = $db->query($sql_query);

    echo "<ul>";

    while ($row = $result->fetch_array()) {
        $username = $row['username'];
        echo "<li>{$username}</li>";
    }

    echo "</ul>";
}

?>
