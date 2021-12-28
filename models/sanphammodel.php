<?php
class sanphammodel extends Db{
	function all()
	{
		return $this->selectQuery('select * from dianhac');
	}

	function delete($id_dianhac)
    { 
      $sql="delete from dianhac where id_dianhac=?";
      $arr=[$id_dianhac];
      return $this->updateQuery($sql, $arr);
    }

    function insert($id_dianhac,$tendianhac,$mota,$gia,$hinh,$id_theloai)
    { 
      $sql="INSERT INTO dianhac(id_dianhac,tendianhac,mota,gia,hinh,id_theloai) values (?,?,?,?,?,?)";
      $a=[$id_dianhac,$tendianhac,$mota,$gia,$hinh,$id_theloai];
      return $this->updateQuery($sql, $a);
    }

    function hiensua($id_dianhac)
    {
      $sql="select * from dianhac join theloai on dianhac.id_theloai = theloai.id_theloai WHERE id_dianhac='$_GET[id]'";
     $a=[$id_dianhac];
     return $this->selectQuery($sql, $a);
    }

    function suaSP($id_dianhac,$tendianhac,$mota,$gia,$hinh,$id_theloai)
    {
        $sql = "UPDATE dianhac SET tendianhac='".$tendianhac."',mota='".$mota."',gia='".$gia."',hinh='".$hinh."',id_theloai='".$id_theloai."' WHERE id_dianhac='$_GET[id]'";
        $a=[$id_dianhac,$tendianhac,$mota,$gia,$hinh,$id_theloai];
        return $this->updateQuery($sql, $a);
    }

    
}
?>