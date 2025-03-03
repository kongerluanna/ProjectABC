<?php
$projectName = 'ProjectABC';
$databaseFile = $projectName.'_data.db';
$database = new SQLite3($databaseFile);
$query = "SELECT * FROM students WHERE schoolID=:schoolID";
$statement = $database->prepare($query);
$statement->bindValue(':schoolID', 1234, SQLITE3_TEXT);
$result = $statement->execute();
while ($row = $result->fetchArray()) {
    echo "{$row['name']} ({$row['age']})" . PHP_EOL;
}
?>