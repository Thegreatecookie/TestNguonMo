<?php 
$action =isset($_GET['action'])?$_GET['action']:'index';
$theloai = new theloaimodel();
if ($action=='index')
{
    $data =$theloai->all();
    include './views/theloai/theloai.php';

}

if($action=='them'){
    $id_theloai=trim($_POST['id_theloai']);
    $tentheloai=trim($_POST['tentheloai']);
    $data=$theloai->kiemtrathem($id_theloai,$tentheloai);
    if($data==0)
    {
        $data=$theloai->insert($id_theloai,$tentheloai);
        header('location: ./index.php?controller=theloaicontroller&action=index');
    }else{
        echo '<script language="javascript">window.location="index.php?controller=theloaicontroller";alert("Bị trùng mã danh mục hoặc tên danh mục!"); </script>';
        die ();
    }
}

if($action=='sua')
{   
    $id_theloai = isset($_GET['id'])?$_GET['id']:'';
    $data =$theloai->hiensua($id_theloai);
    include './views/theloai/suatheloai.php';
}

if($action=='xulysua')
{
   if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $errors=array();
        if(empty($_POST['tentheloai']))
        {
            $errors['tentheloai'] = "Không được để trống tên";
            $id_theloai = isset($_GET['id'])?$_GET['id']:'';
            $data =$theloai->hiensua($id_theloai);
            include './views/theloai/suatheloai.php';
        }else{
           $tentheloai=$_POST['tentheloai'];
        }      
        if(empty($errors))
        {
            $data=$theloai->suatl($tentheloai);
            header('location: ./index.php?controller=theloaicontroller&action=index');
        }
    }
}
if ($action=='delete')
{
  $id_theloai= isset($_GET['id'])?$_GET['id']:'';
  if($id_theloai!='')
  {
    $data=$theloai->delete($id_theloai);
  }
  header('location: ./index.php?controller=theloaicontroller&action=index');   
}
?>
