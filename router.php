<?php

switch($_SERVER["REQUEST_URI"]) {
    default:
        http_response_code(404);
        echo json_encode(['error' => 'Not Found']);
        exit;
}