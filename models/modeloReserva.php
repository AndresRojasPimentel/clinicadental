<?php

 class Reserva{
        private $Reservas;
        private $Db;

 public function __construct(){
         $this->Reservas=array();
         $this->Db= new PDO('mysql:host=localhost;dbname=detalwhite','root','');
 }

 //get and set OBTENER Y REGISTRAR USUARIOS
 
 public function getReservas(){
         $sql="SELECT id_reserva, id, id_dentista, hora, fecha, nombre_reserva, telefono_reserva, asunto, estado FROM reserva ";
         foreach ($this->Db->query($sql) as $res) {
                 $this->Reservas[]=$res;
         }
         return $this->Reservas;
 }
 
 //RESERVAR CITA
 public function setReservas($id,$id_dentista,$hora,$fecha,$nombre_reserva,$telefono_reserva,$asunto){
        $sql="INSERT INTO reserva (`id`,`id_dentista`,`hora`,`fecha`,`nombre_reserva`,`telefono_reserva`,`asunto`,`estado`) VALUES ('".$id."','".$id_dentista."','".$hora."','".$fecha."','".$nombre_reserva."','".$telefono_reserva."','".$asunto."','pendiente')";
        $resul=$this->Db->query($sql);
        if($resul)
                return true;
        else
                return false;
}

//METODOS
                //obtener reserva segun la fecha seleccionada
        public function getReservaXdia($fecha){
                $sql="SELECT id_reserva, id, id_dentista, hora FROM reserva WHERE `fecha`='".$fecha."'";
                foreach ($this->Db->query($sql) as $res) {
                        $this->Reservas[]=$res;
                }
                return $this->Reservas;
        }

        public function getReservasDentista($id_dentista){
                $sql="SELECT id_reserva, id, id_dentista, hora, fecha, nombre_reserva, telefono_reserva, asunto FROM reserva WHERE `id_dentista`='$id_dentista' ";
                foreach ($this->Db->query($sql) as $res) {
                        $this->Reservas[]=$res;
                }
                return $this->Reservas;
        }

        public function getMisReservas($id){
                $sql="SELECT id_reserva, id, id_dentista, hora, fecha, nombre_reserva, telefono_reserva, asunto FROM reserva WHERE `id`='$id' ";
                foreach ($this->Db->query($sql) as $res) {
                        $this->Reservas[]=$res;
                }
                return $this->Reservas;
        }
        //obtener el día
        public function getDay(){
                date_default_timezone_set('America/lima');
                $dia=date("Y-n-j");
                return $dia;
        }
        public function getMisReservasD($id_dentista){
                $sql="SELECT id_reserva, id, id_dentista, hora, fecha, nombre_reserva, telefono_reserva, asunto, estado FROM reserva WHERE `id_dentista`='$id_dentista' AND`estado`='pendiente' ";
                foreach ($this->Db->query($sql) as $res) {
                        $this->Reservas[]=$res;
                }
                return $this->Reservas;
        }

        //actualizar Reservas
        public function ConcluirReserva(){
                $day=$this->getDay();
                $sql="UPDATE `reserva` SET `estado`='concluido' WHERE `fecha`='$day'";
                $resul=$this->Db->query($sql);
                if($resul)
                        return true;
                else
                        return false;

        }

        public function editReservas($id_reserva,$id,$id_dentista,$hora,$fecha,$nombre_reserva,$telefono_reserva,$asunto,$estado){
                $sql="UPDATE `reserva` SET `id`='$id',`id_dentista`='$id_dentista',`hora`='$hora',`fecha`='$fecha',`nombre_reserva`='$nombre_reserva',`telefono_reserva`='$telefono_reserva',`asunto`='$asunto',`estado`='$estado' WHERE `id_reserva`='$id_reserva'";
                $resul=$this->Db->query($sql);
                if($resul)
                        return true;
                else
                        return false;
        }

        public function delReservas($id_reserva){
                //eliminar reservas de usuario
                $sql="DELETE FROM `reserva` WHERE `id_reserva`='$id_reserva'";
                        $res=$this->Db->query($sql);
                        if($res){
                                echo '<script> alert("Reserva Eliminada"); </script>';
                                return true;
                        }
                        else{
                                echo '<script> alert("No se pudo Eliminar la reserva"); </script>';
                                return false;
                        }                      
        }



}






?>