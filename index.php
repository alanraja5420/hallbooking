<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div cl="hh">
<img src="" alt="Computer Man" style="width: 1400px;height:800px;">
    <div class="container">
        <h2>Login</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login </button>
        </form>
        <p>Don't have an account? <a href="register.php">Register</a></p>
    </div>
</div>    
</body>
</html>
