<?php
class Db{
    private $conn;
    public function __construct($host,$user,$pass,$db){
        $this->conn=new mysqli($host,$user,$pass,$db);
        if($this->conn->connect_errno){
            die("Connection Fail for: ".$this->conn->connect_error);
        }
    }
    public function __call($method,$params){
        //echo $params[1];
        extract($params[0]);
        switch($action){
            case "read":
            if(isset($where)){
                $sql="SELECT $cols FROM $table WHERE $where";
                $result=$this->conn->query($sql);
                if($result->num_rows>0){
                    return $result->fetch_assoc();
                }
            }
            else{
                $sql="SELECT $cols FROM $table";
                $result=$this->conn->query($sql);
                if($result->num_rows>0){
                    return $result->fetch_all(MYSQLI_ASSOC);
                }
            }
            break;
            case "insert":
            $sql="INSERT INTO $table SET $cols";
            $result=$this->conn->query($sql);
            if($this->conn->affected_rows>0){
                return true;
            }
            break;
            case "update":
            $sql="UPDATE $table SET $cols WHERE $where";
            $result=$this->conn->query($sql);
            if($this->conn->affected_rows>0){
                return true;
            }
            break;
            case "delete":
            $sql="DELETE FROM $table WHERE $where";
            $result=$this->conn->query($sql);
            if($this->conn->affected_rows>0){
                return true;
            }
            break;
            default:
            return false;
            break;
        }
    }
         
}
 
$connect=new Db("localhost","root","","php85");
echo "<pre>";
print_r($connect->read(array("table"=>"students","cols"=>"*","action"=>"read")));
//print_r($connect->readAll(array("table"=>"students","cols"=>"*")));
/*print_r($connect->getById(array("table"=>"students","cols"=>"name,mobile","where"=>"id=19","action"=>"read")));*/
//echo $connect->Add(array("table"=>"students","cols"=>"name='Iftekhar',mobile='0122113323',address='Laxmipur,Bangladesh'","action"=>"insert"))?"Insert Success":"Insert Fail";
 
//echo $connect->removeData(array("table"=>"students","action"=>"delete","where"=>"id=19"))?"Delete Success":"Delete Fail";
echo "</pre>";