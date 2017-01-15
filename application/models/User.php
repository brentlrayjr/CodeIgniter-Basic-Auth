<?php
/**
 * Created by PhpStorm.
 * User: brent
 * Date: 9/8/16
 * Time: 7:26 PM
 */

class User extends stdClass{

    var $id;
    var $firstName;
    var $lastName;
    var $email;
    var $role;
    var $status;
    var $dateTimeCreated;

    /**
     * Member constructor.
     * @param $id
     * @param $firstName
     * @param $lastName
     * @param $email
     * @param $role
     * @param $status
     * @param $dateTimeCreated
     */
    public function __construct($id, $firstName, $lastName, $email, $role, $status, $dateTimeCreated)
    {

        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->role = $role;
        $this->status = $status;
        $this->dateTimeCreated = $dateTimeCreated;

    }


}
