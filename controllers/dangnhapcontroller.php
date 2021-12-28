<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$dangnhap = new dangnhapmodel();
if ($action=='index')
{
    include './views/dangnhap/dangnhap.php';
}
if($action=='dangnhap')
{ 
    if(!isset($_SESSION)){
    session_start();
    $email=$_POST['username'];
    $matkhau=md5($_POST['matkhau']);
    $data=$dangnhap->dangnhap($email,$matkhau);
    if($data>0){
        header('location: ./index.php?controller=sanphamcontroller&action=index');
    }else{
        header('location: ./index.php?controller=dangnhapcontroller&action=index');
    }
   

}
}
?>
