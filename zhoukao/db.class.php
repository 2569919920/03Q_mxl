1<?php
class db{
    function __construct(){
        $con = @mysql_connect("127.0.0.1","root","root");
        mysql_select_db("1603Q");
    }
    private function prepareSql($arr,$type){
        $sql = "";
        foreach ($arr as $key => $value) {
            if(is_numeric($value)){
                $sql .= "$key=$value $type ";
            }else{
                $sql .= "$key='$value' $type ";
            }
        }
        $sql = rtrim($sql," $type ");
        return $sql;
    }
    public function find($table,$where){
        $type = "AND";
        $prepareSql = $this->prepareSql($where,$type);
        $sql = "select * from $table where $prepareSql";
        $res = mysql_query($sql);
        if(mysql_num_rows($res)>0){
            while($arr=mysql_fetch_assoc($res))
            {
                $data[]=$arr;
            }
        }else{
            $data = mysql_fetch_field($res);
        }
        return $data;
    }
    public function select($table){
        $sql = "SELECT * FROM $table";

        $res = mysql_query($sql);
        if(mysql_num_rows($res)>0){
            while($arr=mysql_fetch_assoc($res))
            {
                $data[]=$arr;
            }
        }else{
            $data = mysql_fetch_assoc($res);
        }
        return $data;
    }
    public function add($table,$data){
        $type = ",";
        $prepareSql = $this->prepareSql($data,$type);
        $sql = "INSERT INTO $table SET $prepareSql";
        $res = mysql_query($sql);
        return $res;
    }
    public function update($table,$data,$where){
        $content = $this->prepareSql($data,",");
        $where   = $this->prepareSql($where,"");
        $sql = "UPDATE $table SET $content WHERE $where";
        $res = mysql_query($sql);
        return $res;
    }
}