<?php

require_once '../../connect/db_connect.php';

$req = 'SELECT count(*) as student_count FROM STUDENT';
$res = $conn->query($req);

if ($res->num_rows > 0) {
    while ($row = $res->fetch_assoc()) {
        $students_number = $row['student_count'];
    }
    http_response_code(200);
    echo json_encode(array('student_count'=>$students_number));
}

$conn->close();
