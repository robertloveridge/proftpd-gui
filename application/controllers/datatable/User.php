<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('/Table/Account/user_model', 'users');
    }

    public function list_all() {
        $this->users->orderBy(array(
            'userid' => 'ASC'
        ));
        $all_users = $this->users->get();
        $data = array();
        while ($user = $all_users->next()) {
            $status = '';
            if ($user->disabled) {
              $status = sprintf('<span class="label label-%s">%s</span>', 'danger', 'Disabled');
            }
            else {
              $status = sprintf('<span class="label label-%s">%s</span>', 'success', 'Active');
            }
            $row = array();
            $row[] = '<a href="/user/' . $user->id . '/view">' . $user->userid . '</a>';
            $row[] = format_date($user->last_login,"Y-m-d");
            $row[] = format_date($user->expires,"Y-m-d");
            $row[] = $status;
            $data[] = $row;
        }
        $output = array(
            "data" => $data,
        );
        echo json_encode($output);
    }

    public function expiring() {
        $all_users = $this->users->expiring();
        $data = array();
        while ($user = $all_users->next()) {
            $status = '';
            if ($user->disabled) {
              $status = sprintf('<span class="label label-%s">%s</span>', 'danger', 'Disabled');
            }
            else {
              $status = sprintf('<span class="label label-%s">%s</span>', 'success', 'Active');
            }
            $row = array();
            $row[] = '<a href="/user/' . $user->id . '/view">' . $user->userid . '</a>';
            $row[] = format_date($user->last_login,"Y-m-d");
            $row[] = format_date($user->expires,"Y-m-d");
            $row[] = $status;
            $data[] = $row;
        }
        $output = array(
            "data" => $data,
        );
        echo json_encode($output);
    }

}
