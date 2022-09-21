<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header('Location:../index.php');
    }
    include_once('superior.php');
    //aqui empiezo a escribir
   

    ?><div class="container-fluid px-4">
        <h1 class="mt-4">Tablas de Usuarios</h1>    
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"> <a href="../views/vistaAdmin.php">Inicio</a></li>
            <li class="breadcrumb-item active"> Tablas de Usuarios</li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                Esta tabla contiene Datos de los usuarios en la base de datos de DentalWhite.
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
            <i class="fas fa-table me-1"></i>
                                Base de datos Usuarios

            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>usuario</th>
                                            <th>nombre</th>
                                            <th>telefono</th>
                                            <th>correo</th>
                                            <th>cargo</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>usuario</th>
                                            <th>nombre</th>
                                            <th>telefono</th>
                                            <th>correo</th>
                                            <th>cargo</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        
                                            for ($i=0; $i <count($datos) ; $i++) { 
                                                echo "<tr>
                                                      <td>".$datos[$i]['id']."</td>
                                                      <td>".$datos[$i]['usuario']."</td>
                                                      <td>".$datos[$i]['nombre']."</td>
                                                      <td>".$datos[$i]['telefono']."</td>
                                                      <td>".$datos[$i]['correo']."</td>
                                                      <td>".$datos[$i]['cargo']."</td>
                                                      
                                                      </tr>";
                                            }
                                        ?>
                                    </tbody>
                                        </table>
        </div>
    </div>


    <?php
    //aqui termino
    include_once('inferior.php');
?>