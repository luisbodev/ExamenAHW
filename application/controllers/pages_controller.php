<?php

//extendemos CI_Controller
class pages_controller extends CI_Controller{
    public function __construct() {
        //llamamos al constructor de la clase padre
        parent::__construct();
         
        //llamo al helper url
        $this->load->helper("url"); 
         
        //cargo la libreria de sesiones
        $this->load->library("session");
    }
     
    //controlador por defecto
    public function index(){
         
        $titulo["titulo"]="MENU";
        //cargo la cabecera y el pie de página
        $this->load->view("plantillas/cabecera",$titulo);
        $this->load->view("pages/index");
        $this->load->view("plantillas/pie");
    }
}