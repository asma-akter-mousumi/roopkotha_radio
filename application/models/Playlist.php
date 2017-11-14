<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Playlist extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function playlist_insert($data)
    {

        $insert = $this->db->insert('playlist', $data);
        if ($insert) {
            $this->session->set_flashdata('success_msg', 'Add Play list successfully');
            return $this->db->insert_id();
        } else {
            return false;
        }


    }

    public function get_playlist($playlist = '', $all = 0)
    {

        if (!empty($playlist) && $all == 0) {
            $sql = $this->db->query("SELECT * FROM playlist where name='$playlist'");
            return $sql->row_array();
        } else if (empty($playlist) && $all == 0) {
            $this->db->limit(5);
            $sql = $this->db->get('playlist');

            return $sql->result_array();
        } else {

            $sql = $this->db->get('playlist');

            return $sql->result_array();
        }
    }

    public function get_all()
    {
        $sql = $this->db->get('playlist');

        return $sql->result_array();

    }

    public function get_url($play_name = '')
    {
        $sql = $this->db->query("SELECT audio_url,file_name FROM playlist where name='$play_name';");
        return $sql->row_array();
    }

    public function schedule_insert($data)
    {

        $this->db->insert('schedule', $data);

        $this->session->set_flashdata('success_msg', 'Insert school Name successfully');
    }


    public function schedule_update($data)
    {
        $this->db->where('default_flag', 1);
        $this->db->update('schedule', $data);

        $this->session->set_flashdata('success_msg', 'added playlist successfully');
    }

    public function get_de_playlist()
    {


       $sql=$this->db->where('default_flag',0)->get('playlist');
       return $sql->row_array();

    }


    public function get_schedule($cur_date = '')
    {
        if (empty($cur_date)) {

            $this->db->limit(5);
            $sql = $this->db->get('schedule');
            return $sql->result_array();
        } else {
            $cur_time = strtotime(gmdate("Y-m-d H:i:s", time() - (21600)));
            $sql = $this->db->query("SELECT * FROM schedule where date >'$cur_date' and default_flag=0");
            return $sql->row_array();
        }

    }
    public function playlist_delete($id){

        $this->db->where('id', $id);
        $this->db->delete('playlist');
    }

}