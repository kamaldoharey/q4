<?php
$conn = new mysqli("localhost", "root", "", "q4");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
