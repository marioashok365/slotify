<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Slotify</title>
</head>
<body>


<div id="loginContainer">
    <form action="register.php" method="post" id="loginFOrm">
        <h2>Login to your account.</h2>
        <p>
            <label for="loginUsername">Username:</label>
            <input type="text" id="loginUsername" name="loginUsername" placeholder="Eg Bart Simpson" required>
        </p>

        <p>
            <label for="loginPassword">Password:</label>
            <input type="password" id="loginPassword" name="loginPassword" placeholder="Enter your Password" required>
        </p>

        <p>
            <button type="submit" name="loginButton">LOGIN</button>
        </p>
    </form>
    <br>

    <form action="register.php" method="post" id="registerFOrm">
        <h2>Create your free account.</h2>
        <p>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" placeholder="Eg Bart Simpson" required>
        </p>

        <p>
            <label for="firstname">Firstname:</label>
            <input type="text" id="firstname" name="firstname" placeholder="Eg Bart" required>
        </p>

        <p>
            <label for="lastname">Lastname:</label>
            <input type="text" id="lastname" name="lastname" placeholder="Eg Simpson" required>
        </p>

        <p>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="bart@gmail.com" required>
        </p>

        <p>
            <label for="email2">Confirm Email:</label>
            <input type="email" id="email2" name="email2" placeholder="bart@gmail.com" required>
        </p>

        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
        </p>

        <p>
            <label for="password2">Confirm Password:</label>
            <input type="password" id="password2" name="password2" placeholder="Enter your Password" required>
        </p>



        <p>
            <button type="submit" name="registerButton">REGISTER</button>
        </p>
    </form>
</div>

</body>
</html>