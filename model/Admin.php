<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/28/2017
 * Time: 2:59 PM
 *
 *
 */


class Admin{
    private $admin_id;
    private $username;
    private $password;
    private $name;

    private $address;
    private $phone;
    private $email;



    private $nitesh;

    public function Customer(){

    }

    public function setAdminId($admin_id)
    {
        $this->admin_id = $admin_id;
    }

    public function getAdminId()
    {
        return $this->admin_id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNitesh($nitesh)
    {
        $this->nitesh = $nitesh;
    }

    public function getNitesh()
    {
        return $this->nitesh;
    }

}
