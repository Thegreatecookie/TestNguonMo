<?php 
class nhacmodel extends Db 
{
    function all()
    {
        return $this->selectQuery('select * from nhac');
    }

   
    function search($kw)
    {
        $sql="select * from nhac where tennhac like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
    
    function delete($id_nhac)
    { 
      $sql="delete from nhac where id_nhac=?";
      $arr=[$id_nhac];
      return $this->updateQuery($sql, $arr);
    }

    function insert($id_nhac,$tennhac,$video,$tentacgia)
    { 
      $sql="INSERT INTO nhac(id_nhac, tennhac, video, tentacgia) values (?,?,?,?)";
      $a=[$id_nhac,$tennhac,$video,$tentacgia];
      return $this->updateQuery($sql, $a);
    }
    

    function hiensua($id_nhac)
    {
     $sql="SELECT * from nhac WHERE id_nhac='$_GET[id]'";
     $a=[$id_nhac];
     return $this->selectQuery($sql, $a);
    }
    
    function suaNhac($tennhac,$video,$tentacgia)
    {
        $sql = "UPDATE nhac SET tennhac='".$tennhac."',video='".$video."',tentacgia='".$tentacgia."' WHERE id_nhac='$_GET[id]'";
        $a=[$tennhac,$video,$tentacgia];
        return $this->updateQuery($sql, $a);

    }
    
    
}