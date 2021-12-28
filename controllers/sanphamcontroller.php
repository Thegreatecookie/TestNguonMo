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
?>



