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
if($action=='sua')
{   
    $id_nhac = isset($_GET['id'])?$_GET['id']:'';
    $data =$nhac->hiensua($id_nhac);
    include './views/nhac/suanhac.php';
}

if($action=='xulysua')
{
    $tennhac=$_POST['tennhac'];
    $video=time().'-'.$_FILES['video']['name'];
    move_uploaded_file($_FILES['video']['tmp_name'], "views/assets/video/$video");
    $tentacgia=$_POST['tentacgia'];
    $data=$nhac->suaNhac($tennhac,$video,$tentacgia);
    header('location: ./index.php?controller=nhaccontroller&action=index');
}
?>