<?php if ( ! defined('BASEPATH')) exit ('No direct script access allowed');

if (!function_exists('format_date')){
  function format_date($date,$format="") {
    if ($date == '0000-00-00 00:00:00' || !$date){
      return 'Never';
    }
    if (!$format){
      return date("d F Y, H:i:s", strtotime($date));
    }
    return date($format, strtotime($date));
  }
}
