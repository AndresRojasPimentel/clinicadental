<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location:../index.php');
    }
    include_once('superior.php');
    //si el usuario apreta boton agregar
    if(isset($_POST['btnAgregar'])){
        include_once('../models/modeloReserva.php');
        $reg= new Reserva;
        $newReg=$reg->setReservas($_POST['id'],$_POST['id_dentista'],$_POST['hora'],$_POST['fecha'],$_POST['name'],$_POST['telf'],$_POST['asunt']);
        if($newReg==true)
        echo "<script> alert('Reserva Registrada');</script>";

    }

    //aqui empiezo a escribir
    

    ?><div class="container-fluid px-4">
        <h1 class="mt-4">Agregar Reservas</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"> <a href="../views/vistaAdmin.php">Inicio</a></li>
            <li class="breadcrumb-item active"> Agregar Reservas</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                En esta sección podra agregar Reservas a la base de datos de DentalWhite.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-calendar-plus me-1"></i>
                                Agregar Reservas

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
                                <label class="form-label" for="form2Example1">ID DE USUARIO</label>
                                <input type="text" id="form2Example1" class="form-control" value="<?php error_reporting(0); echo "".$_POST['id']."";?>" name="id" maxlength="49" required/>
                                
                                </div>          
                    </p>

                    <!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">ID DE DENTISTA</label>
                                <input type="text" id="form1Example2" class="form-control" value="<?php error_reporting(0); echo "".$_POST['id_dentista']."";?>" name="id_dentista" required maxlength="40" />
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2" >FECHA</label>

                                <input type="date" id="form1Example2" class="form-control" value="<?php error_reporting(0); echo "".$_POST['fecha']."";?>" onchange="this.form.submit()"  name="fecha" required maxlength="40" min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
                                
                            </div>
                    </p>
                    <!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">HORA</label>
                                <select name="hora" class="form-control" id="">
                                    <?php
                                    require_once('../models/modeloReserva.php');
                                    //esto es para mostrar reservas totales
                                    $calendar=$_POST['fecha'];
                                    
                                    $reserva= new Reserva();
                                    $horas=$reserva->getReservaXdia($calendar);
                                    $time=9;
                                    echo "<form action='vistaSelectDentista.php' method='post'>";
                                    for ($i=0; $i <8 ; $i++) { 
                                        //falta buscar reservas por días
                                        
                                    
                                        if($horas[0]['hora']==$time.":00hs"||$horas[1]['hora']==$time.":00hs"||$horas[2]['hora']==$time.":00hs"||
                                        $horas[3]['hora']==$time.":00hs"||$horas[4]['hora']==$time.":00hs"||$horas[5]['hora']==$time.":00hs"||
                                        $horas[6]['hora']==$time.":00hs"||$horas[7]['hora']==$time.":00hs"||$horas[8]['hora']==$time.":00hs")
                                        
                                            echo "<option value='".$time.":00hs' disabled>".$time.":00hs </option> ";
                                            else
                                            echo "<option value='".$time.":00hs'>".$time.":00hs </option>";
                                            $time++;
                                            
                                    }
                                    
                                    ?>
                                    
                                </select>
                                <!-- 
                                <input type="email" id="form1Example2" class="form-control" name="espec" required maxlength="10" /> -->
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">NOMBRE DE RESERVANTE</label>
                                <input type="text" id="form1Example2" class="form-control" value="<?php error_reporting(0); echo "".$_POST['name']."";?>" name="name" required maxlength="40" />
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">TELÉFONO DE RESERVANTE</label>
                                <input type="text" id="form1Example2" class="form-control" value="<?php error_reporting(0); echo "".$_POST['telf']."";?>" name="telf" required maxlength="9" />
                                
                            </div>
                    </p><!-- <h2 class="about-title">MISIÓN</h2> -->
                    <p class="about-text">
                            <div class="form-outline mb-2">
                                <label class="form-label" for="form1Example2">ASUNTO DE LA RESERVA</label>
                                <input type="text" id="form1Example2" class="form-control" value="<?php error_reporting(0); echo "".$_POST['asunt']."";?>" name="asunt" required maxlength="40" />
                                
                            </div>
                    </p>
                    <!-- <h2 class="about-title">VALORES</h2> -->
                    <p class="about-text">
                            
                            <br>
                        <button type="submit" class="btn btn-primary btn-block" name="btnAgregar">Agregar Reserva <i class="fa fa-calendar-plus me-2"></i> </button>
                    </p>
                    </form>

                <!-- AQUÍ DEJAR DE ESCRIBIR CONTENIDO -->

                
        </div>
    </div>


    <?php
    //aqui termino
    include_once('inferior.php');
?>