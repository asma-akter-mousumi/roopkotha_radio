<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('story_model');
        $this->load->model('school_model');
        $this->load->model('playlist');
        $this->load->library('email');
    }

    public function index() {

        $this->load->view("front/intro");
    }

    public function home() {

        $this->middle = 'front/home';
        $this->layout_front();
    }

    public function contact() {
        $this->middle = 'front/contact';
        $this->layout_front();
    }

    public function contact_mail() {
        
    }

    public function story() {

        $res = $this->story_model->story_all_row();
        $config['base_url'] = site_url() . "/form/story";
        $config['total_rows'] = $res;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['per_page'] = 7;

        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $str_links = $this->pagination->create_links();
        $data["link"] = explode('&nbsp;', $str_links);
        $data['results'] = $this->story_model->story_all($config["per_page"], $page);
        $this->data = $data;
        $this->middle = 'front/story';
        $this->layout_front();
    }

    public function story_view() {

        $this->load->model('story_model');
        $data['results'] = $this->story_model->get_story();
        $this->data = $data;
        $this->middle = 'story_view';
        $this->layout();

        //var_dump($query->result());
    }

    function search_school() {

        $results = $this->school_model->front_school();
        foreach ($results as $row) {
            echo "<option value='$row[school_name]'>$row[school_name]</option>";
        }
    }

    public function search_mobile() {

        $search = $this->input->post('search');
        $data = $this->story_model->story_search($search);



        $i = 1;
        //var_dump($data);
        foreach ($data as $row) {
            echo "<div class='row'style='background-color: #EE4323; border-radius: 4px;    margin-top: 10px;    margin-right: 0px;padding: 6px'>

                    <div class='col-md-2' style='text-align: center'><img src='$row[picture]'
                                                                          style='height: 40px;width: 40px'></div>
                    <div class='col-md-8' style='text-align: center'>
                        <div class='row'>

                        <p> <h5 style='color: white'> $row[teller_name]</h5></p>
                        <p style='color: white;font-size: 8px'> $row[story_des] </p>

                        </div>
                    </div>
                    <div class='col-md-2' style='margin-top: 15px;text-align: center'>

                        <p><i class='icon icon-play-circle icon-2x' id='story_pa-$i' style='color: white' onclick='togglePlaystory($i)'></i><small style='color: #dad7d7'>১০:১৫</small></p>
                    </div>
<audio id='story-" . $i++ . "' src='$row[story_link]'></audio>

        </div>";
        }
    }

    public function search_story() {


        $res = $this->story_model->story_all_row();
        $config['base_url'] = site_url() . "/form/story";
        $config['total_rows'] = $res;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        $config['per_page'] = 2;
        $config["uri_segment"] = 3;
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $str_links = $this->pagination->create_links();
        $data["link"] = explode('&nbsp;', $str_links);

        $results = $this->story_model->get_story_divi($config["per_page"], $page);
        $i = 1;
        //var_dump($results);
        foreach ($results as $row) {
            echo "<div class='row'style='background-color: #EE4323; border-radius: 4px;    margin-top: 10px;    margin-right: 0px;padding: 6px'>

                    <div class='col-md-2' style='text-align: center'><img src='$row[picture]'
                                                                          style='height: 40px;width: 40px'></div>
                    <div class='col-md-8' style='text-align: center'>
                        <div class='row'>

                        <p> <h5 style='color: white'> $row[story_des]</h5></p>
                        <p style='color: white;font-size: 8px'> এক ছিল কুজোবুড়িএক ছিল কুজোবুড়িএক ছিল কুজোবুড়িএক ছিল
                            কুজোবুড়িএক ছিল কুজোবুড়ি </p>

                        </div>
                    </div>
                    <div class='col-md-2' style='margin-top: 15px;text-align: center'>

                        <p><i id='story_pa-" . $i . "' class='icon icon-play-circle icon-2x' style='color: white' onclick='togglePlaystory( $i )'></i><small style='color: #dad7d7'>১০:১৫</small></p>
                    </div>
<audio id='story-" . $i++ . "' src='" . base_url() . "$row[story_link]'></audio>

        </div>";
        }
    }

}
