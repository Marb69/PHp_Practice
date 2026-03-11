<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>




    <div class="container">
        <form action="/auth/login.php" method="POST" id="form">

 

            <?php if (isset($_GET['error'])  && $_GET['error'] === 'invalid'): 
                
            ?>
                <p style="color:red;">Invalid username or password!</p>
            <?php endif ?>

            <div class="input-g">
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter your Username" required>
            </div>
            <div class="input-g">
                <label for="password">Password</label>
                <input type="text" name="password" placeholder="Enter your Passwrod" required>
            </div>

            <button id="login-btn">Login</button>
        </form>
    </div>

</body>

</html>