<?php

//extendemos CI_Model
class proveedor_model extends CI_Model{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //cargamos la base de datos
        $this->load->database();
    }
     
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM proveedor;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
     
    public function add($nombre,$apellido,$telefono,$direccion){
        
        $consulta=$this->db->query("INSERT INTO proveedor VALUES(NULL,'$nombre','$apellido','$telefono','$direccion');");
        if($consulta==true){
            return true;
        }else{
            return false;
        }
    }
     
    public function mod($id_proveedor,$modificar="NULL",$nombre="NULL",$apellido="NULL",$telefono="NULL",$direccion="NULL"){
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM proveedor WHERE id_proveedot=$id_proveedor");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
              UPDATE proveedir SET nombre='$nombre', apellido='$apellido',
              telefono='$telefono', direccion='$direccion' WHERE id_proveedor=$id_proveedor;
                  ");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }
     
    public function eliminar($id_proveedor){
       $consulta=$this->db->query("DELETE FROM proveedor WHERE id_proveedor=$id_proveedor");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
 
 
}
?>
