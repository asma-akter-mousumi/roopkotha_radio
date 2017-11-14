<?php
	
    if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
    class School_model extends CI_Model {
		
        public function __construct()
        {
            parent::__construct();
		}
		
        public function form_insert($data,$id)
        {
           if($id==0) {
               $this->db->insert('school_info', $data);

               $this->session->set_flashdata('success_msg', 'Insert school Name successfully');
           }
           else {
               $this->db->where('id', $id);
               $this->db->update('school_info', $data);

               $this->session->set_flashdata('success_msg', 'Upadate school Name successfully');
           }
		}


		public function front_school(){
            $divi = $this->input->post('divi');
            $dist = $this->input->post('dist');
            $cond = array('school_info.city' => $divi, 'school_info.school_dist' => $dist);
            $this->db->select('school_name');
            $this->db->from('school_info');
            $this->db->where($cond);

            $query = $this->db->get();
            return $query->result_array();
        }
        public function get_school_name($dist='',$division='',$all=null)
        {
            if (!empty($dist) && !empty($division)) {

                $this->db->select('school_name');
                $this->db->from('school_info');
                $this->db->where('school_dist', $dist);
                $this->db->where('city', $division);
                $query = $this->db->get();
                return $query->result_array();
            }

            else {
                $this->db->select('*');
                $this->db->from('school_info');
                $this->db->limit(5);
                $query = $this->db->get();
                return $query->result_array();

            }
        }
        public function get_all(){
            $this->db->select('*');
            $this->db->from('school_info');
            $query = $this->db->get();
            return $query->result_array();
        }

        public function sc_edit_form($id){


          $this->db->where('id',$id);
           $sql= $this->db->get('school_info');
           return $sql->row_array();
        }
        public function delete_school($id){
            $this->db->where('id', $id);
        $this->db->delete('school_info');
        }
		
	}	