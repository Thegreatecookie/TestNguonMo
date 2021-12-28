<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$theloai = new theloaimodel();
if ($action=='index')
{
    $data =$theloai->all();
    include './views/theloai/theloai.php';

}
?>
