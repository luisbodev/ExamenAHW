<?php

//extendemos CI_Controller
class proveedor_controller extends CI_Controller{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //llamo al helper url
        $this->load->helper("url"); 
         
        //llamo o incluyo el modelo
        $this->load->model("proveedor_model");
         
        //cargo la libreria de sesiones
        $this->load->library("session");
    }
     
    //controlador por defecto
    public function index(){
         
        //array asociativo con la llamada al metodo
        //del modelo
        $proveedor["ver"]=$this->proveedor_model->ver();
         
        $titulo="Proveedor";
        //cargo la cabecera y el pie de página
        $this->load->view("plantillas/cabecera",$titulo);
        //cargo la vista y le paso los datos
        $this->load->view("proveedor/index_view",$proveedor);
        $this->load->view("plantillas/pie");
    }
     
    //controlador para añadir
    public function add(){
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
         
        //llamo al metodo add
        $add=$this->proveedor_model->add(
                $this->input->post("nombre"),
                $this->input->post("apellido"),
                $this->input->post("telefono"),
                $this->input->post("direccion")
                );
        }
        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto', 'Proveedor añadido correctamente');
        }else{
            $this->session->set_flashdata('incorrecto', 'Proveedor añadido Incorrectamente');
        }
         
        //redirecciono la pagina a la url por defecto
        redirect(base_url("proveedor_controller/"));
    }

    //controlador para modificar al que
    
    //le paso por la url un parametro
    public function mod($id_proveedor){
        if(is_numeric($id_proveedor)){
        $titulo="Proveedor";
          $datos["mod"]=$this->proveedor_model->mod($id_proveedor);
          $this->load->view("proveedor/modificar_view",$datos);
          $this->load->view("plantillas/cabecera",$titulo);
          $this->load->view("plantillas/pie");

          if($this->input->post("submit")){
                $mod=$this->usuarios_model->mod(
                        $id_proveedor,
                        $this->input->post("submit"),
                        $this->input->post("nombre"),
                        $this->input->post("apellido"),
                        $this->input->post("telefono"),
                        $this->input->post("direccion")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Proveedor modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Proveedor modificado incorrectamente');
                }
                redirect(base_url("proveedor_controller/"));
            }
        }else{
            redirect(base_url("proveedor_controller/"));
        }
    }
     
    //Controlador para eliminar
    public function eliminar($id_proveedor){
        if(is_numeric($id_proveedor)){
          $eliminar=$this->proveedor_model->eliminar($id_proveedor);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'proveedor eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'proveedor eliminado incorrectamente');
          }
          redirect(base_url("proveedor_controller/"));
        }else{
            redirect(base_url("proveedor_controller/"));
        }
    }
}
?>
