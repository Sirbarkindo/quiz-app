<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1>Sign Up</h1>
    <form action="process.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="username" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Sign Up">
        <p class="text-center">Already have an account? <a href="sign-in.php">Log In</a></p>
    </form>
    <footer>
    </footer>
</body>

</html>