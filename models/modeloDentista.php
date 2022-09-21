<?php

 class Dentista{
        private $Dentistas;
        private $Db;

 public function __construct(){
         $this->Dentistas=array();
         $this->Db= new PDO('mysql:host=localhost;dbname=detalwhite','root','');
 }

 //get and set OBTENER Y REGISTRAR USUARIOS
 
 public function getDentistas(){
         $sql="SELECT id_dentista, usuario, contraseña, nombre, especialidad FROM dentistas ";
         foreach ($this->Db->query($sql) as $res) {
                 $this->Dentistas[]=$res;
         }
         return $this->Dentistas;
 }

 public function setDentistas($nombre,$usuario,$contraseña,$especialidad){
        $busqueda= new Dentista();
        $dentista= $busqueda->getDentistas();
        $cont=0;
                for ($i=0; $i <count($dentista) ; $i++) { 
                 if($usuario==$dentista[$i]['usuario']){
                        echo "<script> alert('Este Usuario ya se encuentra registrado'); </script>";
                        return ;
                 }else{
                        $cont++;
                 }
                }

        $sql="INSERT INTO dentistas (`usuario`,`contraseña`,`nombre`,`especialidad`) VALUES ('".$usuario."','".$contraseña."','".$nombre."','".$especialidad."')";
        if($cont>0){
        $resul=$this->Db->query($sql);
        if($resul)
                return true;
        else
                return false;

        }
 }
 public function LoginDentista($user,$password){
        $sql="SELECT id_dentista, usuario, contraseña, nombre, especialidad FROM dentistas WHERE `usuario`='".$user."'";
                foreach ($this->Db->query($sql) as $result){
                        $this->Dentistas[]=$result;
                        if($this->Dentistas[0]['usuario']==$user){
                                
                                if($password==$this->Dentistas[0]['contraseña']){
                                        //GUARDAR DATOS
                                        session_start();
                                        $_SESSION['id_dentista']=$this->Dentistas[0]['id_dentista'];
                                        $_SESSION['usuario']=$user;
                                        $_SESSION['nombre']=$this->Dentistas[0]['nombre'];
                                        $_SESSION['espec']=$this->Dentistas[0]['especialidad'];
                                        
                                        
                                                header('Location:../views/vistaDentista.php');
                                                                        
                                        
                                }else{
                                        echo '<script> alert("La contraseña no coincide"); </script>';
                                }
                        }else {
                                echo '<script> alert("Usuario no encontrado en la base de datos"); </script>';
                        }
                }
 }
 

 public function SelecionarIdD($nombre){
        $sql="SELECT id_dentista, nombre, usuario FROM dentistas WHERE `nombre`='$nombre'";
                foreach($this->Db->query($sql) as $res){
                        $this->Dentistas[]=$res;
                        session_start();
                        $_SESSION['id_dentista']=$this->Dentistas[0]['id_dentista'];
                }
                return $this->Dentistas;
 }


 
        public function editDentistas($id_dentista,$nombre,$usuario,$contraseña,$especialidad){
                $busqueda= new Dentista();
                $dentista= $busqueda->getDentistas();
                $cont=0;
                        for ($i=0; $i <count($dentista) ; $i++) { 
                        if($usuario==$dentista[$i]['usuario']){
                                echo "<script> alert('Este Usuario ya se encuentra registrado'); </script>";
                                return ;
                        }else{
                                $cont++;
                        }
                        }

                $sql="UPDATE `dentistas` SET `nombre`='$nombre',`usuario`='$usuario',`contraseña`=sha1('$contraseña'),`especialidad`='$especialidad' WHERE `id_dentista`='$id_dentista'";
                if($cont>0){
                $resul=$this->Db->query($sql);
                if($resul)
                        return true;
                else
                        return false;

                }
        }


        public function delDentistas($id_dentista){
                //eliminar reservas de usuario
                $sql="DELETE FROM `reserva` WHERE `id_dentista`='$id_dentista'";
                        $res=$this->Db->query($sql);
                               
                //eliminar usuario
                $sql="DELETE FROM `dentistas` WHERE `id_dentista`='$id_dentista'";        
                                $resul=$this->Db->query($sql);
                                if($resul){
                                        echo '<script> alert("Dentista Eliminado"); </script>';
                                        return true;
                                }
                                else{
                                        echo '<script> alert("No se pudo Eliminar el Dentista"); </script>';
                                        return false;
                }
        }

}



?>