<?php if( ! defined('BASEPATH'))  exit('No direct script access allowed');

    class Login_model extends CI_Controller{

        

        public function __construct() {
            parent::__construct();
           

       }

       public function login($username, $password){

        /*Nos devuelve una fila*/
            $this->db->where('correo', $username);
            $this->db->where('contra', $password);
            $q= $this->db->get('usuario');
            if($q->num_rows()>0){
                return true;
            } else{
                return false;
            }

       }
      


    }

