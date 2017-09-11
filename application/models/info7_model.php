<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info7_model extends CI_Model {
        function __construct(){
            parent::__construct();
            $this->load->database();
        }

        public function obtener_info_7()
        {
            $this->db->select('materia.id_materia,
            materia.nombre_materia,
            materia.salon,
            materia.modulo,
            materia.cupos,
            tipo_materia.tipo_materia,
            horario.dia,
            horario.hora_inicio,
            horario.hora_fin');
            $this->db->from('materia');
            $this->db->join('tipo_materia', 'materia.id_tipo_materia = tipo_materia.id_tipo_materia', 'inner' );
            $this->db->join('horario', 'materia.id_horario = horario.id_horario', 'inner');       
            $query = $this->db->get();
            
            if($query->num_rows() > 0) return $query;
            else return false;
        }

        public function resgitrar_estudiante()
        {
            $data = array(
                'title' => 'My title' ,
                'name' => 'My Name' ,
                'date' => 'My date'
             );
             
             $this->db->insert('mytable', $data); 
        }
    }
?>