<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$sanpham = new sanphammodel();
$theloai=new theloaimodel();
if ($action=='index')
{
    $data =$sanpham->all();
    $dataTL=$theloai->all();
 
    include './views/sanpham/sanpham.php';
}

if($action=='them'){
  $id_dianhac=$_POST['id_dianhac'];
  $tendianhac=$_POST['tendianhac'];
  $mota=$_POST['mota'];
  $gia=$_POST['gia'];
  $hinh=time().'-'.$_FILES['hinh']['name'];
  move_uploaded_file($_FILES['hinh']['tmp_name'], "views/assets/img/$hinh");
  $id_theloai=$_POST['id_theloai'];
  $data=$sanpham->insert($id_dianhac,$tendianhac,$mota,$gia,$hinh,$id_theloai);
  header('location: ./index.php?controller=sanphamcontroller&action=index');
}

if($action=='sua')
{   
    $id_dianhac = isset($_GET['id'])?$_GET['id']:'';
    $data =$sanpham->hiensua($id_dianhac);
    $dataTL=$theloai->all();
    include './views/sanpham/suasanpham.php';
}

if($action=='xulysua')
{
    $tendianhac=$_POST['tendianhac'];
    $mota=$_POST['mota'];
    $gia=$_POST['gia'];
    $hinh=time().'-'.$_FILES['hinh']['name'];
    move_uploaded_file($_FILES['hinh']['tmp_name'], "views/assets/img/$hinh");
    $id_theloai=$_POST['id_theloai'];
    $data=$sanpham->suaSP($id_dianhac,$tendianhac,$mota,$gia,$hinh,$id_theloai);
    header('location: ./index.php?controller=sanphamcontroller&action=index');
}

if($action=='delete')
{
  $id_dianhac= isset($_GET['id'])?$_GET['id']:'';
  if($id_dianhac!='')
  {
    $data=$sanpham->delete($id_dianhac);
    header('location: ./index.php?controller=sanphamcontroller&action=index');
  }
}
?>



