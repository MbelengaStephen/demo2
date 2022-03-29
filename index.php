<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <form action="login.php" method="post">
        <h2>Log In.</h2>
            <?php if (isset($_GET["error"])){ ?>
                <p class="error" > <?php $_GET["error"]; ?> </p>
            <?php  } ?>
    <label for="username" >User Name</label>
    <input type="text" name="username" placeholder="User Name"><br>
    <label for="password">Password</label>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit" >Login</button>
    </form>
</body>
</html>
