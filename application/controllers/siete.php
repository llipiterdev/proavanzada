<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siete extends CI_Controller {
        function __construct(){
            parent::__construct();
            $this->load->helper('form');
            $this->load->model('info7_model');

        }
        
        public function index()
        {
     

            $data['lista'] = $this->info7_model->obtener_info_7();
            $this->load->view('/cargarheaders/header');
            $this->load->view('/puntos/punto_7/resultado_punto_7',$data);
            $this->load->view('/cargarheaders/footer');
        }

        public function registrar_estudiante()
        {

            $this->load->view('/cargarheaders/header');
            $this->load->view('/puntos/punto_7/registrar_estudiante');
            $this->load->view('/cargarheaders/footer');
        }


    }
?>