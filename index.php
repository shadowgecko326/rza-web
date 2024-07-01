<!DOCTYPE html>
<html>
<head>
    <title>RZA-login</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<!-- this is login form where the user can add-->
<form action="login.php" method="post">
    <h2>Login</h2>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <label>User Name</label>
    <input type="text" name="uname" placeholder="User Name"><br>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password"><br>

    <button type="submit">Login</button>
    <a href="homepage.php">Home</a>

    <a href="register.php">Register</a>
</form>

</body>
</html>