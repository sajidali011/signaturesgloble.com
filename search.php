<?php
// $host = "localhost";
// $username = "u284410540_signatures";
// $password = "Siyom_tvasta01";
// $database = "u284410540_signatures";

$host = "localhost";
$username = "root";
$password = "";
$database = "shrikrishnaassociate.com";

$mysqli = new mysqli($host, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_GET['term'])) {
    $term = $mysqli->real_escape_string($_GET['term']);
    // Query to search for matching project names
    $query = "SELECT name, link FROM search_box WHERE name LIKE '%$term%' LIMIT 10";
    $result = $mysqli->query($query);

    $projects = [];
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }

    echo json_encode($projects);
}
?>
