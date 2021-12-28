<?php 
class theloaimodel extends Db 
{
    //lay ra tat ca sach
    function all()
    {
        return $this->selectQuery('select * from theloai');
    }

    function random($n)
    {
        return $this->selectQuery("select * from theloai order by rand() limit 0, $n");
    }
    function byId($id_theloai)
    {
        $data = $this->selectQuery('select * from theloai where id_theloai=?', [$id_theloai]);
        if (count($data)>0) return $data[0];
        return [];
    }
    function search($kw)
    {
        $sql="select * from theloai where tentheloai like ?";
        $arr=["%$kw%"];
        return $this->selectQuery($sql, $arr);
    }
    
    function delete($id_theloai)
    { 
      $sql="delete from theloai where id_theloai=?";
      $arr=[$id_theloai];
      return $this->updateQuery($sql, $arr);
    }
    
    function insert($id_theloai,$tentheloai)
    { 
      $sql="INSERT INTO theloai(id_theloai, tentheloai) values (?,?)";
      $a=[$id_theloai,$tentheloai];
      return $this->updateQuery($sql, $a);
    }
    

    function hiensua($id_theloai)
    {
     $sql="SELECT * from theloai WHERE id_theloai='$_GET[id]'";
     $a=[$id_theloai];
     return $this->selectQuery($sql, $a);
    }
    
    function suatl($tentheloai)
    {
        $sql = "UPDATE theloai SET tentheloai='".$tentheloai."' WHERE id_theloai='$_GET[id]'";
        $a=[$tentheloai];
        return $this->updateQuery($sql, $a);

    }
    function kiemtrathem($id_theloai,$tentheloai)
    {
        $sql = "SELECT * FROM theloai WHERE id_theloai = '$id_theloai' OR tentheloai='$tentheloai'";
        $a=[$id_theloai,$tentheloai];
        return $this->updateQuery($sql, $a); 
    }

     function kiemtrasua($tentheloai)
    {
        $sql = "SELECT * FROM theloai WHERE tentheloai='$tentheloai'";
        $a=[$tentheloai];
        return $this->updateQuery($sql, $a); 
    }
}