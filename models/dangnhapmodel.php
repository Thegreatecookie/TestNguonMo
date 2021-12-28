<?php
class dangnhapmodel extends Db{
	function getdangnhap($email,$matkhau)
	{
		$sql='select * from admin where username=? and matkhau = ?';
		$arr=[$email,$matkhau];
		return $this->selectQuery($sql, $arr);
        
	}
	
    function dangnhap($email,$matkhau)
    {
    	$sql='select * from admin where username=? and matkhau = ?';
    	$arr=[$email,$matkhau];
    	return $this->updateQuery($sql, $arr);
    }

}
?>