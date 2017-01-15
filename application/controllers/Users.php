<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Require file which handlers inclusion of non-CodeIgniter models
require_once(APPPATH.'models/Includes.php');

class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        //Load CodeIgniter's User DB model with 'users' alias
        $this->load->model('User_DB', 'users');

        //Load url helper
        $this->load->helper('url');

        //Load sessions library
        $this->load->library('session');

    }



    public function index()
    {

        $user = $this->session->userdata('user');
        if(is_null($user)){redirect(base_url().'Users/login');}

        $data = [];
        $data['users'] = $this->users->all();
        $this->load->view('users', $data);
    }

    //Function returns a JSON response containing all users
    public function all()
    {

      $response = new  stdClass();
               $response->success = true;
               $response->users = $this->users->all();

               $this->output
                   ->set_content_type('application/json')
                   ->set_output(json_encode($response));

    }

}
