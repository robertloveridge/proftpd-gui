<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    // This is the controller for the users section in the application.
    // URL: /users/

    public function __construct() {
        parent::__construct();
        $this->load->model('/Table/Account/user_model', 'users');
    }

    public function index() {
        $this->list_all();
    }

    // URL /user/<user_id>/view
    public function view($user_id = null) {

        if ($user_id) {
            $columns = $this->users->get_columns();
            $user = $this->users->getBy(array(
                'id' => $user_id
            ));

            $data = array(
                'user' => $user,
                'columns' => $columns,
            );

            $this->template->show(array(
                'template' => 'user/view',
                'data' => $data,
            ));
        }
        else {
            echo "User ID not found";
        }
    }

    public function list_all() {
        $columns = $this->users->get_columns();
        $data = array(
            'js' => 'user/list.js?',
            'columns' => $columns
        );
        $this->template->show(array(
            'template' => 'user/list',
            'data' => $data,
        ));
    }

    public function expiring() {
        $columns = $this->users->get_columns();
        $data = array(
            'js' => 'user/expiring.js?',
            'columns' => $columns
        );
        $this->template->show(array(
            'template' => 'user/expiring',
            'data' => $data
        ));
    }

}
