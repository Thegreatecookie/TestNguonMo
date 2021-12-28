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
    
        $data=$theloai->insert($id_theloai,$tentheloai);
        header('location: ./index.php?controller=theloaicontroller&action=index');
}

?>
