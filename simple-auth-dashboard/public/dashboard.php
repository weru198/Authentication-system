<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<h2>Dashboard</h2>

<p>Welcome, <strong><?php echo htmlspecialchars($_SESSION["email"]); ?></strong> 👋</p>
<p>You are successfully logged in.</p>

<a href="logout.php">Logout</a>
</body>
</html>
