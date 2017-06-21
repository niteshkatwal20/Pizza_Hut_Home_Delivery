<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/15/2017
 * Time: 5:06 PM
 */
include_once ('Action.php');
include_once ('../model/Customer.php');

class UserController extends DBConnection
{

    /**
     * UserController constructor.
     */
    public function UserController()
    {
        parent::DBConnection();
    }


    public function register(Customer $c)
    {
        $res = 0;

        $sql = "insert into user(`Id`, `Fname`, `Lname`, `Address`,`Phone_no`, `Email`, `Password`)  values (NULL, ?, ?, ?, ?, ?, ?)";

        try {
            $stm = $this -> getConnection()-> prepare($sql);

            $fname = $c -> getFirstName();
            $lname = $c -> getLastName();
            $add = $c -> getAddress();
			   $con = $c -> getPhoneNo();
            $email = $c -> getEmail();
         


            $pass = $c -> getPassword();

            $stm -> bind_param('ssssss', $fname, $lname, $add,  $con,$email, $pass);

           $this ->  $res = $stm -> execute();
            die($stm->error);

        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return $this ->  $res;
    }

    /**
     * @param Customer $c
     * @return array|null
     */
    /*
    public function showProfile(Customer $c)
    {
        $sql = "select Fname, Lname, Address, Phone_no , Email from user   where Id = ?";


        try {
            $stmt = $this->getConnection()->prepare($sql);
            $Id = $c->getId();
            $stmt -> bind_param("", $Id);
            $stmt -> execute();

            $res = $stmt -> get_result();

        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return mysqli_fetch_array($res);


    }*/


    public function login(Customer $c)
    {
        $sql = "select * from user where Email = ? and Password = ?";

        try {
            $email = $c -> getEmail();
            $password = $c -> getPassword();

            $stmt = $this -> getConnection()->prepare($sql);
            $stmt -> bind_param('ss', $email, $password);
            $stmt -> execute();

            while ($row = $stmt -> fetch()) {
                return true;
            }

        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return false;
    }

    public function getUserInfo(Customer $c) {
        $sql = "select * from user where Email = ? and Password = ?";

        try {
            $email = $c->getEmail();
            $password = $c->getPassword();

            $stmt = $this->getConnection()->prepare($sql);
            $stmt->bind_param('ss', $email, $password);
            $stmt->execute();

            $res = $stmt -> get_result();

        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return mysqli_fetch_array($res);
    }

    public function updateProfile(Customer $c) {
        $sql = "update user set Fname = ?, Lname = ?, Address = ?, Phone_no = ?,
                 Email = ? where Id = ?";

        try {
            $stm = $this -> getConnection() -> prepare($sql);

            $first_name = $c ->getFirstName();
            $last_name = $c -> getLastName();
            $address= $c -> getAddress();
            $phone = $c ->getPhoneNo();
            $emailadd= $c -> getEmail();
            $id = $c -> getId();

            $stm -> bind_param("sssssi", $first_name, $last_name, $address, $phone, $emailadd, $id);
            $res = $stm -> execute() or die($stm -> error);
        } catch (SQLiteException $e) {
            echo $e;
        }

        return $res;

    }


}


