<?php
require_once __DIR__.'/../../php/common/config.php';
require_once __DIR__.'/../../php/common/dbOperations.php';

class TimeManager{
	public function users()
	{
		$sql = 'SELECT id, last_name, first_name FROM user';
        $dbOps = new DBOperations();    
        return $dbOps->fetchData($sql); 
	}
	public function country()
	{
		$sql = 'SELECT * FROM `country`';
        $dbOps = new DBOperations();    
        return $dbOps->fetchData($sql); 
	}
	public function timeLine()
	{
		$sql = 'SELECT id, from_id, to_id, concat(ucase(mid(message,1,1)),lcase(mid(message,2))) as message, create_time FROM timeline ORDER BY create_time DESC';
        $dbOps = new DBOperations();    
        return $dbOps->fetchData($sql);
	}
	public function userDetails($id)
	{
		$sql = 'SELECT last_name FROM user WHERE id = '.$id.'';
        $dbOps = new DBOperations();    
        return $dbOps->fetchData($sql);
	}

	 public function insertChat($to,$message){
    
        $sql = 'INSERT INTO timeline (to_Id,message) VALUES (?,?)';
        $paramArray = array();
        $paramArray[] = $to;
        $paramArray[] = $message;
        $dbOps = new DBOperations();    
        return $dbOps->cudData($sql,'is',$paramArray);        
    }
}
?>