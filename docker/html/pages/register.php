<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main1.css">
    <title>Register</title>
</head>
<body>
    <div class="login-vlak">
        <form action="register_logic.php" name="register_logic" method="POST" class="vlak-login">
            <label for="">Username:</label>
            <input type="text" name="username" placeholder="Username" required>
            <label for="">Password: </label>
            <input type="password" name="password" placeholder="Password" required>
            <label for="">Email: </label>
            <input type="email" name="email" placeholder="Email" required>
            <input type="submit" value="register">
            
        </form>
    </div>
    
</body>
</html> 