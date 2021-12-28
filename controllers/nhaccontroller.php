<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$nhac=new nhacmodel();
if ($action=='index')
{
    $data =$nhac->all();
    include './views/nhac/nhac.php';
}
if($action=='them')
{
    $id_nhac=$_POST['id_nhac'];
    $tennhac=$_POST['tennhac'];
    $tentacgia=$_POST['tentacgia'];
    $video=time().'-'.$_FILES['video']['name'];
    move_uploaded_file($_FILES['video']['tmp_name'], "views/assets/video/$video");
    $data=$nhac->insert($id_nhac,$tennhac,$video,$tentacgia);
    header('location: ./index.php?controller=nhaccontroller&action=index');
}
?>