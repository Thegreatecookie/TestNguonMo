<?php
class usermodel extends Db
{
    function all()
    {
     return $this->selectQuery('select * from khachhang');
    }

    function search($kw)
    {
      $sql="SELECT * FROM khachhang where tenkh like ?";
      $arr=["%kw%"];
      return $this->selectQuery($sql, $arr);
    }


    function delete($email)
    { 
      $sql="delete from khachhang where email=?";
      $arr=[$email];
      return $this->updateQuery($sql, $arr);
    }

    function insert($email,$tenkh,$matkhau,$sodienthoai,$diachi)
    { 
      $sql="INSERT INTO khachhang(email,tenkh,matkhau,sodienthoai,diachi) values (?,?,?,?,?)";
      $a=[$email,$tenkh,$matkhau,$sodienthoai,$diachi];
      return $this->updateQuery($sql, $a);
    }

}
?>