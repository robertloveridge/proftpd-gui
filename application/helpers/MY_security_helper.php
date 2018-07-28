<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

if (!function_exists('random_password')){
  function random_password($length = 15) {
      $letters_numbers = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $password = array();
      $alpha_length = strlen($letters_numbers) - 1;
      for ($i = 0; $i < $length; $i++) {
          $n = rand(0, $alpha_length);
          $password[] = $letters_numbers[$n];
      }
      return implode($password);
  }
}
