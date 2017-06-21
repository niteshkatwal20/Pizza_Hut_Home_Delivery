<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 6/15/2017
 * Time: 5:07 PM
 */
include ("../DBConnection/DBConnection.php");

class Action extends DBConnection{

    private $conn;

    public function Action() {
        parent::DBConnection();
        $this -> conn = parent::getConnection();
    }


    public function insert($table_name, $value) {
        $column = array_keys($value);
        $data = array_values($value);

        $sql = "INSERT INTO ".$table_name."(`".implode('` , `', $column)."`) VALUES('".implode("','", $data)."')";

        return parent::getConnection() -> query($sql);
    }


    public function select($table_name, $value, $where_clause)
    {
        $table_name1 = array($table_name);
        $value1 = array($value);
        $whereSQL = '';


        if (!empty($where_clause)) {
            if (substr(strtoupper(trim($where_clause)), 0, 5 != 'WHERE')) {
                $this->$whereSQL = " WHERE " . $where_clause;
            } else {
                $this->$whereSQL = " " . trim($where_clause);
            }
        }

        $sql = "SELECT " . implode(', ', $value1) . " FROM " . implode(', ', $table_name1) . $whereSQL;

        if ($sql) {
            return $this->conn->query($sql)->fetch_assoc();
        } else {

        }
    }



    public function update($table_name, $value, $where_clause='') {
        //check for optional where clause
        $whereSQl = '';
        if(!empty($where_clause)) {
            //check to see if the 'where' keyboard exists
            if(substr(strtoupper(trim($where_clause)), 0, 5 != 'WHERE')) {
                //not found, add key word
                $this -> $whereSQL = " WHERE ".$where_clause;
            } else {
                $this -> $whereSQl = " ".trim($where_clause);
            }
        }



        //start the actual SQL statement
        $sql = "UPDATE ".$table_name." SET ";

        //loop and build the column
        $sets = array();
        foreach($value as $column => $data) {
            $sets[] = "`".$column."` = '".$data."'";


        }

        $sql .= implode(', ', $sets);

        //append the where statement
        $sql .= $whereSQl;

        //run and return the query result
        return $this -> conn -> query($sql);
    }
}



