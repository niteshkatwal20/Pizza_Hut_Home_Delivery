<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/28/2017
 * Time: 2:59 PM
 */

include_once ("../DBConnection/DBConnection.php");
include_once ("../model/Admin.php");


class AdminController extends DBConnection
{


    public function UserController()
    {
        parent::DBConnection();
    }


    public function register(Admin $a)
    {
        $res = 0;

        $sql = "insert into admin values (NULL, ?, ?, ?, ?, ?, ?)";

        try {
            $stm = $this -> getConnection()-> prepare($sql);

            $uname = $a -> getUsername();
            $pss = $a -> getPassword();
            $name = $a -> getName();
            $address = $a -> getAddress();
            $phone = $a -> getPhone();
            $email =$a -> getEmail();




            $stm -> bind_param('ssssss', $uname, $pss, $name,  $address,$phone, $email);

            $this ->  $res = $stm -> execute();
            die($stm->error);

        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return $this ->  $res;
    }



    public function showProfile(Admin $a)
    {
        $sql = "select `Username`, `Password`, `Name`,`Address` ,`Phone_no`,`Email` from admin where admin_id = ?";


        try {
            $stmt = $this->getConnection()->prepare($sql);
            $id= $a->getAdminId();
            $stmt -> bind_param("i", $id);
            $stmt -> execute();

            $res = $stmt -> get_result();

        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return mysqli_fetch_array($res);


    }


    public function login(Admin $a)
    {
        $sql = "select * from admin where Username = ? and Password = ?";

        try {
            $uname = $a -> getUsername();
            $password = $a -> getPassword();

            $stmt = $this -> getConnection()->prepare($sql);
            $stmt -> bind_param('ss', $uname, $password);
            $stmt -> execute();

            while ($row = $stmt -> fetch()) {
                return true;
            }

        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return false;
    }

    public function getUserInfo(Admin $a) {
        $sql = "select * from admin where Username = ? and Password = ?";

        try {
            $uname = $a->getEmail();
            $password = $a->getPassword();

            $stmt = $this->getConnection()->prepare($sql);
            $stmt->bind_param('ss', $uname, $password);
            $stmt->execute();

            $res = $stmt -> get_result();

        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return mysqli_fetch_array($res);
    }

    public function updateProfile(Admin $a) {
        $sql = "update admin set Username = ?, Name= ?, Address = ?, Phone_no = ?,
                 Email = ? where Id = ?";

        try {
            $stm = $this -> getConnection() -> prepare($sql);

            $uname = $a ->getUsername();
            $name = $a -> getName();
            $address= $a -> getAddress();
            $phone = $a ->getPhone();
            $email= $a -> getEmail();
            $id = $a -> getAdminId();

            $stm -> bind_param("sssssi", $uname, $name, $address, $phone, $email, $id);
            $res = $stm -> execute() or die($stm -> error);
        } catch (SQLiteException $e) {
            echo $e;
        }

        return $res;

    }


}


