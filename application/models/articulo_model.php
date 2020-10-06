<?php

//extendemos CI_Model
class articulo_model extends CI_Model{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //cargamos la base de datos
        $this->load->database();
    }
     
    public function ver(){
        //Hacemos una consulta
        $consulta=$this->db->query("SELECT * FROM articulo;");
         
        //Devolvemos el resultado de la consulta
        return $consulta->result();
    }
     
    public function add($nombre,$precio,$tipo,$id_proveedor){
        
        $consulta=$this->db->query("INSERT INTO articulo VALUES(NULL,'$nombre','$precio','$tipo','$id_proveedor');");
        if($consulta==true){
            return true;
        }else{
            return false;
        }
    }
     
    public function mod($id_articulo,$modificar="NULL",$nombre="NULL",$precio="NULL",$tipo="NULL",$id_proveedor="NULL"){
        if($modificar=="NULL"){
            $consulta=$this->db->query("SELECT * FROM articulo WHERE id_articulo=$id_articulo");
            return $consulta->result();
        }else{
          $consulta=$this->db->query("
              UPDATE articulo SET nombre='$nombre', precio='$precio',
              tipo='$tipo', id_proveedor='$id_proveedor' WHERE id_articulo=$id_articulo;
                  ");
          if($consulta==true){
              return true;
          }else{
              return false;
          }
        }
    }
     
    public function eliminar($id_articulo){
       $consulta=$this->db->query("DELETE FROM articulo WHERE id_articulo=$id_articulo");
       if($consulta==true){
           return true;
       }else{
           return false;
       }
    }
 
 
}
?>
