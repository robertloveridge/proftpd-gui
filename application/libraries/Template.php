<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {

    public function __construct(){
        $this->CI =& get_instance();
    }

    public function show($args){

        // the path to the template e.g. 'user/list'
        $template = $args['template'];

        // optional data
        $data = array_key_exists('data', $args) ? $args['data'] : array();

        $content_path = 'content/';
        $base_path = 'templates/';

        if (!isset($template)){
            echo 'Cannot render template. No template supplied.';
        }

        $this->CI->load->view($base_path . 'header', $data);
        $this->CI->load->view($base_path . 'menu', $data);
        $this->CI->load->view($content_path . $template, $data);
        $this->CI->load->view($base_path . 'footer', $data);

    }

}
