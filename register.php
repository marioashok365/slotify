
<?php require  "includes/config.php";?>
<?php  require "includes/classes/Constant.php";?>
<?php  require "includes/classes/Account.php";
$account = new Account();
?>

<?php

function valueRememberer($value)
{
    if(isset($_POST[$value])) {
        echo $_POST[$value];
    }


}

?>

<?php  require "includes/handlers/register_handler.php"?>
<?php  require "includes/handlers/login_handler.php"?>

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
            <input type="text" id="loginUsername" name="loginUsername" placeholder="Eg Bart Simpson"  required>
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
            <input type="text" id="username" name="username" placeholder="Eg Bart Simpson" value="<?php valueRememberer('username'); ?>"  required>
            <?php

            echo $account->getError(Constant::$invalidUsername);
            echo $account->getError(Constant::$usernameExists);
            ?>
        </p>

        <p>
            <label for="firstname">Firstname:</label>
            <input type="text" id="firstname" name="firstname" placeholder="Eg Bart" value="<?php valueRememberer('firstname'); ?>" required>
            <?php

            echo $account->getError(Constant::$invalidFirstName);
            ?>
        </p>

        <p>
            <label for="lastname">Lastname:</label>
            <input type="text" id="lastname" name="lastname" placeholder="Eg Simpson" value="<?php valueRememberer('lastname'); ?>" required>
            <?php

            echo $account->getError(Constant::$invalidLastName);
            ?>
        </p>

        <p>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="bart@gmail.com" value="<?php valueRememberer('email'); ?>" required>
        </p>

        <p>
            <label for="email2">Confirm Email:</label>
            <input type="email" id="email2" name="email2" placeholder="bart@gmail.com" value="<?php valueRememberer('email2');?>" required>
            <?php
            echo $account->getError(Constant::$emailsDoNotMatch);
            echo $account->getError(Constant::$invalidEmailFormat);
            echo $account->getError(Constant::$emailExists);
            ?>
        </p>

        <p>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password" required>
        </p>

        <p>
            <label for="password2">Confirm Password:</label>
            <input type="password" id="password2" name="password2" placeholder="Enter your Password" required>
            <?php
            echo $account->getError(Constant::$passwordsDoNotMatch);
            echo $account->getError(Constant::$invalidPasswordFormat);
            echo $account->getError(Constant::$invalidPassword);
            ?>
        </p>



        <p>
            <button type="submit" name="registerButton">REGISTER</button>
        </p>
    </form>
</div>

</body>
</html>