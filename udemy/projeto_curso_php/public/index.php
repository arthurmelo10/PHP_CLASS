<?php

require_once(dirname(__FILE__, 2) . '/src/Config/database.php');

$sql = 'SELECT * FROM users';

$table = Database::createTableForDatabase();

$users = Database::createDataForUsersDatabase();

$result = Database::getResultFronQuery($sql);

while ($row = $result->fetch_assoc()) {
    print_r($row);
    echo '<br>';
}
