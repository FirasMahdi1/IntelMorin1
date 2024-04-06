<?php

require_once '../../connect/db_connect.php';

$query = "SELECT * FROM TUTOR;";

$res = $conn->query($query);

if ($res->num_rows > 0) {
    $tutors = array();
    while ($row = $res->fetch_assoc()) {
        $tutors[] = $row;
    }
    http_response_code(200);
    echo json_encode(array($tutors));
}