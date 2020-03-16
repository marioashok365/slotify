<?php

if(isset($_POST['loginButton']))
{
    $username = formSanitize($_POST['loginUsername']);
    $password2 = formSanitize($_POST['loginPassword']);

}

