<?php
require_once 'DataBase.php';

class User extends DataBase{
    protected $tableName = "usertable";

    // funtion to add users
    public function add($data){
        if(!empty($data)){
            $fileds=$placeholder=[];
            foreach ($variable as $field => $value) {
                $fileds[]=$field;
                $placeholder[]=":{field}";
            }
        }
        //$sql="INSERT INTO {$this->tableName} (pname,email,phone) VALUES (:pname,:email,:phone)";
        $sql="INSERT INTO {$this->tableName} (". implode(',',$fileds). ") VALUES (". implode(',',$placeholder).")";
        $stmt=$this->conn->prepare($sql);
        try {
            $this->conn->beginTransaction();
            $stmt->execute($data);
            $lastInsertedId=$this->conn->lastInsertId();
            $this->conn->commit();
            return $lastInsertedId;
        } catch (PDOException $e) {
            echo "Error:".$e->getMessage();
            $this->conn->rollback();
        }
    }

    // funtion to get rows
    public function getRows($start=0,$limit=4){
        $sql="SELECT * FROM {$this->tableName} ORDER BY DESC LIMIT {$start},{$limit}";
        $stmt=$this->conn->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount()>0){
            $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
        }else{
            $result=[];
        }
        return $result;
    } 

    // funtion to get single row

    // funtion to count of rows

    // funtion to upload photo 

    // funtion to update

    // funtion to delete

    // funtion to search 

}



?>