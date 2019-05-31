<?php
include 'connect.php';
$queryResult = $link->query('SELECT * FROM user');
$result = [];
while ($fetchData = $queryResult->fetch_assoc()) {
    $result = $fetchData;
}
echo json_encode($result, JSON_UNESCAPED_UNICODE, 99999);
$link->close();
