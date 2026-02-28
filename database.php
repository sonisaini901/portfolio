<?php
// Database credentials
$servername = "sql303.ezyro.com";
$username = "ezyro_41185195";
$password = "56deae6";
$dbname = "ezyro_41185195_portfolio";

// 1. Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// 2. Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}