<!DOCTYPE html>
<html lang="en">
<!--header-->
    <?php include './views/layouts/headerpage.php' ?>
<!--header-->
<body data-background-color="dark">
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <?php include './views/layouts/logoheader.php'?>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <?php include './views/layouts/navbarpage.php'?>
            <!-- End Navbar -->
        </div>
        <!-- Sidebar -->
        <?php include './views/layouts/sidebarmenu.php' ?>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">Dữ liệu</h4>
                        <ul class="breadcrumbs">
                            <li class="nav-home">
                                <a href="#">
                                    <i class="flaticon-home"></i>
                                </a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Danh Sách</a>
                            </li>
                            <li class="separator">
                                <i class="flaticon-right-arrow"></i>
                            </li>
                            <li class="nav-item">
                                <a href="#">Đĩa Nhạc</a>
                            </li>
                        </ul>
                    </div>
                     <div class="row" >           
                            <div class="col-md-12">
                                <div class="card"> 
                                    <form method="POST" action="index.php?controller=sanphamcontroller&action=xulysua&id=<?php echo $_GET['id']?>" enctype="multipart/form-data">
                                    <?php
                                    foreach ($data as $arr) {
                                    ?>
                                    <div class="card-header">
                                    <div class="card-title">Sửa đổi thông tin thể loại</div>
                                    </div>                                                 
                                    <div class="card-body">                       
                                        <div class="row">  
                                            <div class="col-md-6 pr-0">
                                                <div class="form-group form-group-default">
                                                    <label>Tên đĩa nhạc</label>
                                                    <input name="tendianhac" type="text" class="form-control" value="<?php echo $arr['tendianhac']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12 pr-0">
                                                <div class="form-group form-group-default">
                                                    <label>Mô tả</label>
                                                    <textarea name="mota" type="text" class="form-control" cols="30" rows="4" value="<?php echo $arr['mota']?>"><?php echo $arr['mota']?>
                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-0">
                                                <div class="form-group form-group-default">
                                                    <label>Giá</label>
                                                     <input name="gia" type="number" class="form-control" value="<?php echo $arr['gia']?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-0">
                                                <div class="form-group form-group-default">
                                                    <label>Hình</label>
                                                    <input name="hinh" type="file" class="form-control" value="<?php echo $arr['hinh']?>"><?php echo $arr['hinh']?>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-0">
                                                <div class="form-group form-group-default">
                                                    <select name="id_theloai" >
                                                    <option value="<?php echo $arr['id_theloai']?>"><?php echo $arr['tentheloai']?></option>   
                                                        <?php
                                                        foreach($dataTL as $arr)
                                                        {
                                                        ?>
                                                        <option value="<?php echo $arr['id_theloai']?>"><?php echo $arr['tentheloai']?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer no-bd">
                                        <button type="submit" id="addRowButton" class="btn btn-primary" name=sua>Thêm</button>
                                        <button herf="index.php?controller=sanphamcontroller&action=index" type="submit" class="btn btn-danger" data-dismiss="modal">Thoát</button>
                                    </div>
                                    <?php
                                     }
                                    ?>
                                    </form>
                                </div>
                            </div>  
                        </div>
                </div>
            </div>
            <!--footer-->
            <?php include'./views/layouts/footerpage.php'?>
            <!--end footer-->
        </div>
        
        <!-- Custom template | don't include it in your project! -->
        <div class="custom-template">
            <div class="title">Settings</div>
            <div class="custom-content">
                <div class="switcher">
                    <div class="switch-block">
                        <h4>Logo Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue"></button>
                            <button type="button" class="selected changeLogoHeaderColor" data-color="purple"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                            <br/>
                            <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                            <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Navbar Header</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeTopBarColor" data-color="dark"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="purple"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                            <button type="button" class="changeTopBarColor" data-color="green"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange"></button>
                            <button type="button" class="changeTopBarColor" data-color="red"></button>
                            <button type="button" class="changeTopBarColor" data-color="white"></button>
                            <br/>
                            <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                            <button type="button" class="changeTopBarColor" data-color="blue2"></button>
                            <button type="button" class="selected changeTopBarColor" data-color="purple2"></button>
                            <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                            <button type="button" class="changeTopBarColor" data-color="green2"></button>
                            <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                            <button type="button" class="changeTopBarColor" data-color="red2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Sidebar</h4>
                        <div class="btnSwitch">
                            <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark"></button>
                            <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                        </div>
                    </div>
                    <div class="switch-block">
                        <h4>Background</h4>
                        <div class="btnSwitch">
                            <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                            <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                            <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                            <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="custom-toggle">
                <i class="flaticon-settings"></i>
            </div>
        </div>
        <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <script src="./views/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="./views/assets/js/core/popper.min.js"></script>
    <script src="./views/assets/js/core/bootstrap.min.js"></script>
    <!-- jQuery UI -->
    <script src="./views/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="./views/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!-- Chart Circle -->
    <script src="./views/assets/js/plugin/chart-circle/circles.min.js"></script>
    <!-- jQuery Scrollbar -->
    <script src="./views/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Datatables -->
    <!-- Chart JS -->
    <script src="./views/assets/js/plugin/chart.js/chart.min.js"></script>
    <script src="./views/assets/js/plugin/datatables/datatables.min.js"></script>
    <!-- Sweet Alert -->
    <script src="./views/assets/js/plugin/sweetalert/sweetalert.min.js"></script>
    <!-- Atlantis JS -->
    <script src="./views/assets/js/atlantis.min.js"></script>
    <!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="./views/assets/js/setting-demo.js"></script>
    <script src="./views/assets/js/demo.js"></script>
    <script >
        $(document).ready(function() {
            $('#basic-datatables').DataTable({
            });

            $('#multi-filter-select').DataTable( {
                "pageLength": 5,
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                                );

                            column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                        } );

                        column.data().unique().sort().each( function ( d, j ) {
                            select.append( '<option value="'+d+'">'+d+'</option>' )
                        } );
                    } );
                }
            });

            // Add Row
            $('#add-row').DataTable({
                "pageLength": 5,
            });

            var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

            $('#addRowButton').click(function() {
                

            });
        });
    </script>
</body>
</html>
    