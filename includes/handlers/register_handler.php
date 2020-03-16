<?php

function formSanitize($input)
{
    $input= strip_tags($input);
    $input=str_replace(" ","",$input);
    $input=strtolower(ucfirst($input));
    return $input;
}

function formSanitizeEmail($input)
{
    $input= strip_tags($input);
    $input=str_replace(" ","",$input);
    return $input;
}

function formSanitizePassword($input)
{
    $input= strip_tags($input);
    return $input;
}






if(isset($_POST['registerButton']))
{
    $username = formSanitize($_POST['username']);
    $first_name= formSanitize($_POST['firstname']);
    $last_name=formSanitize($_POST['lastname']);
    $email = formSanitizeEmail($_POST['email']);
    $email2=formSanitizeEmail($_POST['email2']);
    $password = formSanitizePassword($_POST['password']);
    $password2 = formSanitize($_POST['password2']);


    $wasSuccessful=$account->register($username,$first_name,$last_name,$email,$email2,$password,$password2);
    if($wasSuccessful)
    {
        header("Location:index.php");
    }


}

?>


