<?php 
include './config.php';
function loadClass($className)
{
    include "./models/$className.php";
}
spl_autoload_register('loadClass');
?>
<?php 
    $c = isset($_GET['controller'])?$_GET['controller']:'dangnhapcontroller';
    if ($c=='dangnhapcontroller')
    {
        include './controllers/dangnhapcontroller.php';
    }
    if ($c=='theloaicontroller')
    {
        include './controllers/theloaicontroller.php';
    }
    if ($c=='sanphamcontroller')
    {
        include './controllers/sanphamcontroller.php';
    }
     if ($c=='usercontroller')
    {
        include './controllers/usercontroller.php';
    }
    if ($c=='nhaccontroller')
    {
        include './controllers/nhaccontroller.php';
    }
    
?>
			