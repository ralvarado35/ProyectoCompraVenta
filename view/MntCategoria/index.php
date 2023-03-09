<?php
    require_once("../../config/conexion.php")
?>

<!doctype html>
<html lang="es" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none">
<head>   
    <title>Sistema de Compra y Venta | Categoria </title>
    <?php require_once("../html/head.php"); ?>
</head>
 
<body>

   
    <div id="layout-wrapper">

        
    <?php require_once("../html/header.php"); ?>

        <!-- ========== App Menu ========== -->

        <?php require_once("../html/menu.php"); ?>

     
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Mantemiento de Categoria</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Mantenimiento</a></li>
                                        <li class="breadcrumb-item active">Categoria</li>
                                    </ol>
                                </div>

                                

                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <!-- Buttons with Label Right -->
                                        <button type="button" id="btnNuevo" class="btn btn-primary btn-label waves-effect waves-light rounded-pill"><i class="ri-user-smile-line label-icon align-middle rounded-pill fs-16 me-2"></i> Nuevo Registro</button>
                                    </div>
                                    <div class="card-body">
                                        <table id="table_data" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Fecha Creacion</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                    <!-- end page title -->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php require_once("../html/footer.php"); ?>
       
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <?php require_once("../html/js.php"); ?>

</body>

</html>