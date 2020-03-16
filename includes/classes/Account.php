<?php

class Account{

    private $errorArray;

    public function __construct()
    {
        $this->errorArray = [];

    }

    public  function  register($username,$firstname,$lastname,$email,$email2,$password,$password2)
    {
        $this->validateUsername($username);
        $this->validateFirstname($firstname);
        $this->validateLastname($lastname);
        $this->validateEmail($email,$email2);
        $this->validatePassword($password,$password2);

        if(empty($this->errorArray))
        {
            //Insert in to database
            return true;
        }else{
            return false;
        }


    }

    //Error checker

    public function getError($error)
    {
        if(!in_array($error,$this->errorArray)) {
            $error = "";
        }

        return "<span class='errorMessage' style='color:darkred;'>$error</span>";

    }


    //Username
    private  function validateUsername($username)
    {
        if(strlen($username)>30 or strlen($username)<6 )
        {
            array_push($this->errorArray,Constant::$invalidUsername);
        }
        //TODO: Check if username exists.
    }

    //Firstname
    private  function validateFirstname($firstname)
    {
        if(strlen($firstname)>30 or strlen($firstname)<2 )
        {
            array_push($this->errorArray,Constant::$invalidFirstName);
        }

    }
    //Lastname
    private  function validateLastname($lastname)
    {
        if(strlen($lastname)>30 or strlen($lastname)<2 )
        {
            array_push($this->errorArray,Constant::$invalidLastName);
        }

    }


    //Email
    private function validateEmail($email,$email2)
    {
        if($email!=$email2)
        {
            array_push($this->errorArray,Constant::$emailsDoNotMatch);


        }

        //TODO:Check if email exists.


        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            array_push($this->errorArray,Constant::$invalidEmailFormat);


        }


    }

    //Password
    private function validatePassword($password,$password2)
    {
        if($password!=$password2)
        {
            array_push($this->errorArray,Constant::$passwordsDoNotMatch);


        }

        if(preg_match("/[^A-Za-z0-9 ]/",$password))
        {
            array_push($this->errorArray,Constant::$invalidPasswordFormat);


        }

        if(strlen($password)>30 or strlen($password)<6 )
        {
            array_push($this->errorArray,Constant::$invalidPassword);
        }



    }


}