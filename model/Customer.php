<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/15/2017
 * Time: 5:22 PM
 */
class Customer{
    private $id;
    private $firstName;
    private $lastName;
    private $email;

    private $phone_no;
    private $address;


    private $password;
    private $nitesh;

    public function Customer(){

    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setPhoneNo($phone_no)
    {
        $this->phone_no = $phone_no;
    }

    public function getPhoneNo()
    {
        return $this->phone_no;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
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
