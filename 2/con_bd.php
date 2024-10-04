
<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'bdkerwin';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>