<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/20/2017
 * Time: 8:36 PM
 */
class order{
    private $id;
    private $item_name;
    private $qty;
    private $item_type;
    private $time;
    private $address;

    public function customer()
    {

    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setItemName($item_name)
    {
        $this->item_name = $item_name;
    }

    public function getItemName()
    {
        return $this->item_name;
    }

    public function setQty($qty)
    {
        $this->qty = $qty;
    }

    public function getQty()
    {
        return $this->qty;
    }

    public function setItemType($item_type)
    {
        $this->item_type = $item_type;
    }

    public function getItemType()
    {
        return $this->item_type;
    }

    public function setTime($time)
    {
        $this->time = $time;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }
}