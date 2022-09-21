<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location:../index.php');
    }
    include_once('superior.php');
    //aqui empiezo a escribir
    

    ?><div class="container-fluid px-4">
        <h1 class="mt-4">Página Principal</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"> <a href="#">Inicio</a></li>
            <li class="breadcrumb-item active"> Tablas de Usuarios</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Página de inicio, navegación en modo usuario.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
                                Panel de control

            </div>
            <div class="card-body">
            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Usuarios</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../controllers/controladorUsuarioMod.php">Ir a Página Usuarios</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-black mb-4">
                                    <div class="card-body">Dentista</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../controllers/controlDentistaMod.php">Ir a Página Dentista</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Reservas</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../controllers/controladorReservaMod.php">Ir a Página reservas</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Agregar Usuario <i class="fa fa-plus-circle"></i></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="../views/addUser.php">Agregar Usuario</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
    </div>


    <?php
    //aqui termino
    include_once('inferior.php');
?>