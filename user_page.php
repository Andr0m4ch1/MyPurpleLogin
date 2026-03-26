<?php
session_start();
if (!isset($_SESSION['email']))
    {
        header ('Location: index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color: #b69dc9; display: flex; justify-content: center; align-items: center; height: 100vh;">
    <div class="admin-container">
        <h1>Welcome <span> <?=$_SESSION['name']; ?>,</span> this is an <span> user </span> page!</h1>
        <button onclick="window.location.href='logout.php'">Logout</button>
    </div>
</body>
</html>