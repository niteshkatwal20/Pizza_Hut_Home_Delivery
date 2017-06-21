<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/16/2017
 * Time: 9:51 AM
 */
include_once ("../DBConnection/DBConnection.php");
include_once ("../model/Item.php");

class ItemController extends DBConnection {

    public function ItemController() {
        parent::DBConnection();
    }

    public function createItem(Item $r) {
        $res = 0;

        $sql = "INSERT INTO item (`Id`, `item_name`,`item_no`,`price`) VALUES(NULL,?, ?, ?)";

        try {
            $stmt = $this->getConnection() -> prepare($sql);

            $name = $r -> getName();

            $no = $r -> getNo();
            $price=$r -> getPrice();


            $stmt -> bind_param("sid", $name,$no, $price);

            $this -> $res = $stmt -> execute();


        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return $this -> $res;
    }

}
?>