<?php

 class Usuario{
        private $Dentistas;
        private $Usuarios;
        private $Db;

 public function __construct(){
         $this->Dentistas=array();
         $this->Usuarios=array();
         $this->Db= new PDO('mysql:host=localhost;dbname=detalwhite','root','');
 }

 //get and set OBTENER Y REGISTRAR USUARIOS
 
 public function getUsuarios(){
         $sql="SELECT id, usuario, contraseña, nombre, correo, telefono,cargo FROM usuarios ";
         foreach ($this->Db->query($sql) as $res) {
                 $this->Usuarios[]=$res;
         }
         return $this->Usuarios;
         
 }

 public function setUsuarios($nombre,$telefono,$usuario,$contraseña,$correo){
        //BUSCAR QUE NO SE REPITA EL NOMBRE
        $busqueda= new Usuario();
        $user= $busqueda->getUsuarios();
        $cont=0;
                for ($i=0; $i <count($user) ; $i++) { 
                 if($usuario==$user[$i]['usuario']){
                        echo "<script> alert('Este Usuario ya se encuentra registrado'); </script>";
                        return ;
                 }else{
                         //SI NO ENCONTRO QUE AUMENTE EL CONTADOR.
                         

                        $cont++;
                 }
                }

                // SI NO SE REPETIO EL NOMBRE, EJECUTAR SQL DE REGISTRO
        $sql="INSERT INTO usuarios (`usuario`,`contraseña`,`correo`,`nombre`,`telefono`,`cargo`) VALUES ('".$usuario."',sha1('".$contraseña."'),'".$correo."','".$nombre."','".$telefono."','2')";
        if($cont>0){
                $resul=$this->Db->query($sql);
                if($resul){
                        echo '<script> alert("Usuario Registrado, Bienvenido"); </script>';
                        return true;
                }
                else{
                        return false;
                }
        } 

        
        }
        public function Login($us,$pas){
                $sql="SELECT id, usuario, contraseña, nombre, correo, telefono, cargo FROM usuarios WHERE `usuario`='".$us."'";
                foreach ($this->Db->query($sql) as $res){
                        $this->Usuarios[]=$res;
                        if($this->Usuarios[0]['usuario']==$us){
                                
                                if($pas==$this->Usuarios[0]['contraseña']){

                                        //guardar datos
                                        session_start();
                                        $_SESSION['id']=$this->Usuarios[0]['id'];
                                        $_SESSION['usuario']=$us;
                                        $_SESSION['nombre']=$this->Usuarios[0]['nombre'];
                                        $_SESSION['correo']=$this->Usuarios[0]['correo'];
                                        $_SESSION['telefono']=$this->Usuarios[0]['telefono'];
                                        $_SESSION['cargo']=$this->Usuarios[0]['cargo'];
                                        
                                       
                                        if($this->Usuarios[0]['cargo']==1)
                                                header('Location:../views/vistaAdmin.php');
                                        else if($this->Usuarios[0]['cargo']==2)
                                                header('Location:../views/vistaUsuario.php');                                        
                                        
                                }else{
                                        echo '<script> alert("La contraseña no coincide"); </script>';
                                }
                        }else {
                                echo '<script> alert("Usuario no encontrado en la base de datos"); </script>';
                                   
                        }
                        
                }
                
        }

 //metodos
        public function editUsuarios($id,$nombre,$telefono,$usuario,$contraseña,$correo,$cargo){
        //BUSCAR QUE NO SE REPITA EL NOMBRE
        $busqueda= new Usuario();
        $user= $busqueda->getUsuarios();
        $cont=0;
                for ($i=0; $i <count($user) ; $i++) { 
                 if($usuario==$user[$i]['usuario']){
                        echo "<script> alert('Este Usuario ya se encuentra registrado'); </script>";
                        return ;
                 }else{
                         //SI NO ENCONTRO QUE AUMENTE EL CONTADOR.
                         

                        $cont++;
                 }
                }

                // SI NO SE REPETIO EL NOMBRE, EJECUTAR SQL DE REGISTRO
        $sql="UPDATE `usuarios` SET `usuario`='$usuario',`contraseña`=sha1('$contraseña'),`correo`='$correo',`nombre`='$nombre',`telefono`='$telefono',`cargo`='$cargo' WHERE `id`='$id'";
        if($cont>0){
                $resul=$this->Db->query($sql);
                if($resul){
                        echo '<script> alert("Usuario Actualizado"); </script>';
                        return true;
                }
                else{
                        echo '<script> alert("No se pudo actualizar el Usuario"); </script>';
                        return false;
                }
        } 

        
        }

        public function delUsuarios($id){
                //eliminar reservas de usuario
                $sql="DELETE FROM `reserva` WHERE `id`='$id'";
                        $res=$this->Db->query($sql);
                               
                //eliminar usuario
                $sql="DELETE FROM `usuarios` WHERE `id`='$id'";        
                                $resul=$this->Db->query($sql);
                                if($resul){
                                        echo '<script> alert("Usuario Eliminado"); </script>';
                                        return true;
                                }
                                else{
                                        echo '<script> alert("No se pudo Eliminar el usuario"); </script>';
                                        return false;
                }
        }

        


}




?>