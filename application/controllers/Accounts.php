<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(APPPATH.'models/Includes.php');


class Accounts extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_DB', 'user');
        $this->load->helper('url');
        $this->load->library('session');

    }



    public function login()
    {

      //Redirect user if session is active
      $user = $this->session->userdata('user');

      if(!is_null($user)){redirect(base_url().'Users');}
      else{$this->load->view('login.php');}

    }

    public function register()
    {

        $this->load->view('register.php');

    }

    //Function verifies email and password
    public function verify()
    {
        //Collect email and password from post data
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //
        if(is_null($email)||is_null($password)){

          $data = [];
          $data["message"] = "Missing POST data!";

          $this->load->view('restricted', $data);

        }

        //If credentials are valid, redirect to users' page, other wise load error screen
        if($this->user->verifyCredentials($email, $password)){

            $user = $this->user->byEmail($email);
            $this->session->set_userdata('user', $user);
            redirect(base_url().'Users');


        }
        else{

          $data = [];
          $data["message"] = "Missing POST data!";

          $this->load->view('restricted', $data);

        }

    }

    //Function create new user in DB from POST data
    public function create()
    {
        //Collect email and password from post data
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $firstName = $this->input->post('firstName');
        $lastName =$this->input->post('lastName');


        if(is_null($email)||is_null($password)||is_null($firstName)||is_null($lastName)){

            $data = [];
            $data["message"] = "Missing POST data!";

            $this->load->view('restricted', $data);

        }

        //
        if(!$this->user->emailExists($email)){

            $this->user->add($email, $password, $firstName, $lastName, "user");

            $user = $this->user->byEmail($email);
            $this->session->set_userdata('user', $user);
            redirect(base_url().'Accounts/login');


        }
        else{

          $data = [];
          $data["message"] = "Email already exists!";

          $this->load->view('restricted', $data);


        }

    }


}
