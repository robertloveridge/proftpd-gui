<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    // This is the controller for the main application dashboard.
    // URL: /dashboard

    public function __construct() {
        parent::__construct();
        $this->load->model('/Table/Account/user_model', 'users');
    }

    public function index() {
        $expiring_count = $this->users->expiring_count();
        $data = array(
            'expiring_count' => $expiring_count,
        );
        $this->template->show(array(
            'template' => 'dashboard',
            'data'    => $data,
        ));
    }
}
