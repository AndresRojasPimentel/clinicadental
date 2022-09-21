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
        $newUser=$reg->editDentistas($_POST['id_dentista'],$_POST['name'],$_POST['user'],$_POST['pass'],$_POST['espec']);
        if($newUser==true){
            echo "<script> alert('Actualizado Satisfactoriamente');</script>";
        }

    }

    //aqui empiezo a escribir
    

    ?><div class="container-fluid px-4">
        <h1 class="mt-4">Actualizar Dentistas</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"> <a href="../views/vistaAdmin.php">Inicio</a></li>
            <li class="breadcrumb-item active"> Actualizar Dentistas</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                En esta sección podra actualizar datos de los Dentistas en la base de datos de DentalWhite.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-edit me-1"></i>
                                Actualizar Datos Dentistas

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
                                <input type="text" id="form2Example1" class="form-control" name="id_dentista" placeholder="Necesario para Actualizar los datos" maxlength="49" required/>
                                
                                </div>          
                    </p>
                    <!-- <h2 class="about-title">Usuario</h2> -->
                    <p class="about-text" >
                                <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">USUARIO</label>
                                <input type="text" id="form2Example1" class="form-control" name="user" maxlength="49" required/>
                                
                                </div>          
                    </p>

                    <!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">CONTRASEÑA</label>
                                <input type="password" id="form1Example2" class="form-control" name="pass" required maxlength="40" />
                                
                            </div>
                    </p>
                    <!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">ESPECIALIDAD</label>
                                <input type="text" id="form1Example2" class="form-control" name="espec" required maxlength="40" />
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">NOMBRE</label>
                                <input type="text" id="form1Example2" class="form-control" name="name" required maxlength="40" />
                                
                            </div>
                    </p>
                    <!-- <h2 class="about-title">VALORES</h2> -->
                    <p class="about-text">
                            
                            <br>
                        <button type="submit" class="btn btn-primary btn-block" name="btnAgregarD">Modificar Dentista <i class="fa fa-edit me-2"></i> </button>
                    </p>
                    </form>

                <!-- AQUÍ DEJAR DE ESCRIBIR CONTENIDO -->

                
        </div>
    </div>


    <?php
    //aqui termino
    include_once('inferior.php');
?>