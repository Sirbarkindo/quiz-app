<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Sign In</h1>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
        <p class="text-center">Didn't have an account? <a href="sign-up.php">Sign Up</a></p>
    </form>
    <footer>
    </footer>
</body>

</html>