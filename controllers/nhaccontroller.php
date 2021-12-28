<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$nhac=new nhacmodel();
if ($action=='index')
{
    $data =$nhac->all();
    include './views/nhac/nhac.php';
}
?>