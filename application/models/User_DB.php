<?php

require_once(APPPATH.'models/Includes.php');

use Carbon\Carbon;

class User_DB extends CI_Model
{


    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    //Queries user from DB by email and compares hash to provided password
    public function verifyCredentials($email, $password)
    {

        $query = $this->db->get_where('User', array('email' => $email));

        $row = $query->row();

        if (isset($row)&&password_verify($password, $row->hash)) {return true;}

        return false;

    }

    //Queries all users from DB
    public function all(){

        $query = $this->db->get('User');

            $users = [];
            foreach ($query->result() as $row) {
                $user = new User($row->id, $row->firstName, $row->lastName, $row->email, $row->role, $row->status, $row->dateTimeCreated);
                $users[] = $user;
            }

        return $users;


    }

    //Queries user from DB by email
    public function byEmail($email)
    {

        $query = $this->db->get_where('User', array('email' => $email));

        $row = $query->row();

        if (isset($row)) {

          $user = new User($row->id, $row->firstName, $row->lastName, $row->email, $row->role, $row->status, $row->dateTimeCreated);
            return $user;

        }

        return null;

    }

    //Queries user from DB by id
    public function byId($id)
    {

        $query = $this->db->get_where('User', array('id' => $id));

        $row = $query->row();

        if (isset($row)) {

            $user = new User($row->id, $row->firstName, $row->lastName, $row->email, $row->role, $row->status, $row->dateTimeCreated);
            return $user;

        }

        return null;

    }

    //Changes hash stored in DB
    public function resetPassword($email, $password)
    {

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $query = $this->db->get_where('User', array('email' => $email, 'hash' => $hash));

        $user = $query->custom_row_object(0, 'User');

        if (isset($user)) {

            $this->db->set('hash', $hash);
            $this->db->where('id', $user->id);
            $this->db->update('User');
            return true;
        }

        return false;

    }

    //Checks if email exists in DB
    public function emailExists($email)
    {

        $query = $this->db->get_where('User', array('email' => $email));

        $row = $query->row();

        if (isset($row)) {
            return true;
        }

        return false;

    }

    //Add User function inserts user in DB, returns true if successful, false if email exists
    public function add($email, $password, $firstName, $lastName, $role)
    {

        if (!$this->emailExists($email)){

            $user = new User(uniqid(), $firstName, $lastName, $email, $role, 'active', Carbon::now()->toIso8601String());
            $this->db->insert('User', $user);
            $this->db->reset_query();

            $this->db->set('hash', password_hash($password, PASSWORD_DEFAULT));
            $this->db->where('id', $user->id);
            $this->db->update('User');

            return true;

            }

            return false;

    }

    //Remove user from DB
    public function remove($id) {

        $this->db->where('id', $id);
        $this->db->delete('User');

    }

    //Update user in DB
    public function update(User $user) {

        $this->db->replace('User', $user);
        return true;

    }

    //Get user count from DB
    public function count(){

        $this->db->from('User');
        return $this->db->count_all_results();

    }

}
