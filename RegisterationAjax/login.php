<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Sign In</title>
</head>
<body>
<main>
    <form method="post" action="loginscript.php">
        <h1>Sign In</h1>
        
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Enter Email" id="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Enter Password" id="password" required>
        </div>
        <button type="submit" name="login">Login</button>
        <footer>New User ? <a href="registeration.php">Sign Up</a></footer>
    </form>
</main>
</body>
</html>