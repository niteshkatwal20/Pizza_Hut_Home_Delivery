<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/20/2017
 * Time: 8:44 PM
 */
include_once ('../DBConnection/DBConnection.php');
include_once ('../model/Order.php');

class OrderController extends DBConnection{
public function OrderController(){

}
    public function orderItem(Order $r){
        $res = 0;

        $sql = "INSERT INTO order (`Id`, `item_name`,`qty`,`item_type`,`time`,`address`) VALUES(NULL,?, ?, ?,?,?)";

        try {
            $stmt = $this->getConnection() -> prepare($sql);

       $item_name = $r -> getItemName();
            $qty = $r -> getQty();
            $item_type = $r -> getItemType();
            $time = $r -> getTime();
            $add = $r -> getAddress();


            $stmt -> bind_param("sists",$item_name,$qty,$item_type,$time,$add);

            $this -> $res = $stmt -> execute();


        } catch (SQLiteException $ex) {
            echo $ex;
        }

        return $this -> $res;
    }

}
?>