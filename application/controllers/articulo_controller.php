<?php

//extendemos CI_Controller
class articulo_controller extends CI_Controller{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //llamo al helper url
        $this->load->helper("url"); 
         
        //llamo o incluyo el modelo
        $this->load->model("articulo_model");
         
        //cargo la libreria de sesiones
        $this->load->library("session");
    }
     
    //controlador por defecto
    public function index(){
         
        //array asociativo con la llamada al metodo
        //del modelo
        $articulo["ver"]=$this->articulo_model->ver();
         
        $titulo["titulo"]="Articulo";
        //cargo la cabecera y el pie de página
        $this->load->view("plantillas/cabecera",$titulo);
        //cargo la vista y le paso los datos
        $this->load->view("articulo/index_view",$articulo);
        $this->load->view("plantillas/pie");
    }

    public function buscar(){
        if($this->input->get("submit")){
            //llamo al metodo add
            $articulo["ver"]=$this->articulo_model->buscar(
                $this->input->get("keyword")
                );

            $titulo["titulo"]="Articulo";
            //cargo la cabecera y el pie de página
            $this->load->view("plantillas/cabecera",$titulo);
            //cargo la vista y le paso los datos
            $this->load->view("articulo/index_view",$articulo);
            $this->load->view("plantillas/pie");
        }
    }
     
    //controlador para añadir
    public function add(){
        //compruebo si se a enviado submit
        if($this->input->post("submit")){
         
        //llamo al metodo add
        $add=$this->articulo_model->add(
                $this->input->post("nombre"),
                $this->input->post("precio"),
                $this->input->post("tipo"),
                $this->input->post("id_proveedor")
                );
        }
        if($add==true){
            //Sesion de una sola ejecución
            $this->session->set_flashdata('correcto', 'Artículo añadido correctamente');
        }else{
            $this->session->set_flashdata('incorrecto', 'Error al añadir');
        }
         
        //redirecciono la pagina a la url por defecto
        redirect(base_url("index.php/articulo_controller/"));
    }

    //controlador para modificar al que
    
    //le paso por la url un parametro
    public function mod($id_proveedor){
        if(is_numeric($id_proveedor)){
        $titulo["titulo"]="Artículo";
          $datos["mod"]=$this->articulo_model->mod($id_proveedor);
          
          $this->load->view("plantillas/cabecera",$titulo);
          $this->load->view("articulo/modificar_view",$datos);
          $this->load->view("plantillas/pie");

          if($this->input->post("submit")){
                $mod=$this->articulo_model->mod(
                        $id_proveedor,
                        $this->input->post("submit"),
                        $this->input->post("nombre"),
                        $this->input->post("precio"),
                        $this->input->post("tipo"),
                        $this->input->post("id_proveedor")
                        );
                if($mod==true){
                    //Sesion de una sola ejecución
                    $this->session->set_flashdata('correcto', 'Artículo modificado correctamente');
                }else{
                    $this->session->set_flashdata('incorrecto', 'Error al modificar');
                }
                redirect(base_url("index.php/articulo_controller/"));
            }
        }else{
            redirect(base_url("index.php/articulo_controller/"));
        }
    }
     
    //Controlador para eliminar
    public function eliminar($id_proveedor){
        if(is_numeric($id_proveedor)){
          $eliminar=$this->articulo_model->eliminar($id_proveedor);
          if($eliminar==true){
              $this->session->set_flashdata('correcto', 'Artículo eliminado correctamente');
          }else{
              $this->session->set_flashdata('incorrecto', 'Error al eliminar');
          }
          redirect(base_url("index.php/articulo_controller/"));
        }else{
            redirect(base_url("index.php/articulo_controller/"));
        }
    }
}
?>
