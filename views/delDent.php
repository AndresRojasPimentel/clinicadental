<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location:../index.php');
    }
    include_once('superior.php');
    //si el usuario apreta boton agregar
    if(isset($_POST['btnAgregarD'])){
        include_once('../models/modeloDentista.php');
        $reg= new Dentista;
        $newUser=$reg->delDentistas($_POST['id_dentista']);
        

    }

    //aqui empiezo a escribir
    

    ?><div class="container-fluid px-4">
        <h1 class="mt-4">Eliminar Dentistas</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"> <a href="../views/vistaAdmin.php">Inicio</a></li>
            <li class="breadcrumb-item active"> Eliminar Dentistas</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                En esta sección podra Eliminar Dentistas de la base de datos de DentalWhite.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-user-slash me-1"></i>
                                Eliminar Datos Dentistas

            </div>
            <div class="card-body">
                <!-- AQUI ESCRIBIR EL CONTENIDO -->

                <form action="#" method="post">
                    
                
                </div>
                <div class="container about-container wow fadeInUp">
                <div class="row">
                    <div class="col-md-6 col-md-push-6 about-content">
                        <!-- <h2 class="about-title">Usuario</h2> -->
                    <p class="about-text" >
                                <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">ID DE DENTISTA</label>
                                <input type="text" id="form2Example1" class="form-control" name="id_dentista" placeholder="Dentista se eliminará Definitivamente de la base de datos" maxlength="49" required/>
                                
                                </div>          
                    </p>
                    
                    <!-- <h2 class="about-title">VALORES</h2> -->
                    <p class="about-text">
                            
                            <br>
                        <button type="submit" class="btn btn-primary btn-block" name="btnAgregarD">Eliminar Dentista <i class="fa fa-user-slash me-2"></i> </button>
                    </p>
                    </form>

                <!-- AQUÍ DEJAR DE ESCRIBIR CONTENIDO -->

                
        </div>
    </div>


    <?php
    //aqui termino
    include_once('inferior.php');
?>