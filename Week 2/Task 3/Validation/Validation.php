<?php

class Validation {

  public $email;
  public $password;
  public $gender;


  public static function emailValidation($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
  }

  public static function passwordValidation($password) {
    return strlen($password) >= 8;
  }

  public static function genderValidation($gender) {
    return $gender === 'male' || $gender === 'female';
  }
}

?>