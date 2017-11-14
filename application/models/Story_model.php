<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Story_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function form_insert($data)
    {
        $insert = $this->db->insert('story_information', $data);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }

        //$this->session->set_flashdata('success_msg', 'Insert Story Information successfully');
    }

    public function get_story()
    {

        $this->db->limit(5);
        $sql = $this->db->get('story_information');
        return $sql->result_array();
    }

    public function story_all_row()
    {
        $sql = $this->db->get('story_information');
        return $sql->num_rows();
    }

    public function story_all($limit, $start)
    {
        $this->db->limit($limit, $start);
        $sql = $this->db->get('story_information');
        return $sql->result_array();
    }

    public function get_story_divi($limit, $start)
    {
        $divi = $this->input->post('divi');
        $dist = $this->input->post('dist');
        $school = $this->input->post('school');
        if (isset($dist) &&isset($divi) &&isset($school)) {
            $cond = array('school_info.city' => $divi, 'school_info.school_dist' => $dist,'school_info.school_name'=>$school);
            $this->db->where($cond);
        }
        if (isset($dist) &&isset($divi)) {
            $cond = array('school_info.city' => $divi, 'school_info.school_dist' => $dist);
            $this->db->where($cond);
        }
        else{ $this->db->where('school_info.city', $divi);}

        $this->db->select('school_info.school_name,school_info.city,school_info.school_dist,story_information.story_link,story_information.story_des,story_information.picture');
       // echo $dist;

        $this->db->limit($limit, $start);
        $this->db->from('story_information');
        $this->db->join('school_info', 'school_info.id = story_information.school_name');
        $sql = $this->db->get();
        return $sql->result_array();
    }

    public function record_count()
    {
        return $this->db->count_all("story_information");
    }

    public function fetch_story($limit, $start, $search = '')
    {
        $this->db->limit($limit, $start);
        //$query = $this->db->get("story_information");
        if (!empty($search)) {
            $this->db->like('teller_name', $search);
            $this->db->or_like('school_name', $search);

        }
        $query = $this->db->get("story_information");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }

    function getRows($params)
    {
        $this->db->select('*');
        $this->db->from('story_information');
        //filter data by searched keywords
        if (!empty($params)) {
            $this->db->like('teller_name', $params);
            //$this->db->like('school_name',$params);
        }
        return $query = count($this->db->get());
        //return fetched data
        //return ($query->num_rows() > 0)?$query->result_array():FALSE;
    }
 function story_search($search){


        //$this->db->like('teller_name', $search);
        //$this->db->or_like('story_des', $search);
        $query_tes="teller_name` LIKE '%$search%' OR `story_des` LIKE '%$search%'";
        $res = $this->db->where($query_tes)->get('story_information');
//echo '$search'.$search;
        //echo $this->db->last_query();
        return $res->result_array();
    }
    public function st_edit_form($id)
    {


        $this->db->where('id', $id);
        $sql = $this->db->get('story_information');
        return $sql->row_array();
    }

    public function story_delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('story_information');
    }
}