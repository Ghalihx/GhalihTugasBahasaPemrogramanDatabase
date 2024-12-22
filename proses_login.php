<?php
session_start();
include("koneksi.php");

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=:username";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->execute();

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && $password == $user['password']) { 
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $user['role']; 
    
    if ($user['role'] === 'admin') {
        header("Location: admin_dashboard.php");
    } elseif ($user['role'] === 'staff') {
        header("Location: staff_dashboard.php");
    } elseif ($user['role'] === 'customer') {
        header("Location: customer_dashboard.php");
    }
} else {
    include("index.php"); 
}

$conn = null;
?>
