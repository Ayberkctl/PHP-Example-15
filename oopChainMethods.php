<?php

class Database{
    private $sql;
    public function from($tableName){
        $this->sql= 'SELECT * FROM '. $tableName;

        return $this;
    }
    public function select($columns){

        $this->sql= str_replace('*',$columns,$this->sql);
        return $this;
    }
    public function get(){
        return $this->sql;
    }
}
$db= new Database;

$sorgu = $db->from('users')->select('users_id, users_name')->get();
echo $sorgu;