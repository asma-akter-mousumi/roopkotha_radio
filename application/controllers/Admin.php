<?php

class Admin extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('school_model');
        $this->load->model('story_model');
        $this->load->model('playlist');
//$this->load->model('school_information');


        if (isset($this->session->userdata['logged_in'])) {
            $username = ($this->session->userdata['logged_in']['username']);
            $email = ($this->session->userdata['logged_in']['email']);
        } else {
            header("location: login");
        }
    }

    public function schedule() {
        $all = 1;
        $this->data = $this->playlist->get_all();

        $this->middle = 'schedule';
        $this->layout();
    }

    public function school_name() {
//$this->data =$this->playlist->get_playlist();

        $this->middle = 'school_name';
        $this->layout();
    }

    public function story_info() {
        $this->data = $this->school_model->get_all();
        $this->middle = 'form_save';
        $this->layout();
    }

    public function school_save($id = 0) {

        $this->form_validation->set_rules('school_name', 'School Name', 'required');
        $this->form_validation->set_rules('school_phone', 'School Phone', 'required');
        $this->form_validation->set_rules('school_email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('school_address', 'School Address', 'required');
        $this->form_validation->set_rules('school_divsion', 'School City', 'required');
        $this->form_validation->set_rules('school_dist', 'School District', 'required');
        $this->form_validation->set_rules('school_des', 'School History', 'required');


        if ($this->form_validation->run() == FALSE) {
// echo 'test';
            $this->middle = 'school_name';
            $this->layout();
        } else {

            $data = array(
                'school_Name' => $this->input->post('school_name'),
                'email' => $this->input->post('school_email'),
                'phone' => $this->input->post('school_phone'),
                'adress' => $this->input->post('school_address'),
                'city' => $this->input->post('school_divsion'),
                'school_dist' => $this->input->post('school_dist'),
                'zip_code' => $this->input->post('school_zip'),
                'history' => $this->input->post('school_des')
            );

            $this->school_model->form_insert($data, $id);

//Loading View
            redirect('admin/school_name', 'refresh');
        }


//
    }

    public function story_info_save() {
        echo "in";
        var_dump($_FILES);
     
    
        if ($this->input->post('story_save')) {
            $config['allowed_types'] = '*';
            if ($_FILES['userfile']['name']) {
                $config['upload_path'] = './uploads/';
                $config['file_name'] = $_FILES['userfile']['name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('userfile')) {
                    $upload_data = $this->upload->data();
      
                    $picture = $upload_data['file_path'].$upload_data['file_name'];
                
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    
                }
            } 

            if($_FILES['story_file']['name']){
                $config['upload_path'] = './uploads/vedio/';
                $config['file_name'] = $_FILES['story_file']['name'];
                  $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('story_file')) {
                    $upload_data = $this->upload->data();
                    $link = $upload_data['file_path'].$upload_data['file_name'];
             
                } else {
              $error = array('error' => $this->upload->display_errors());
                   
                }
            }
            $data = array(
            'teller_name' => $this->input->post('teller_name'),
            'school_name' => $this->input->post('school_name'),
            'teller_class' => $this->input->post('teller_class'),
            'teller_age' => $this->input->post('teller_age'),
            'story_link' => $link,
            'story_des' => $this->input->post('story_des'),
            'picture' => $picture,
        );

        $insertUserData = $this->story_model->form_insert($data);
        if ($insertUserData) {
            $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
        } else {
            $this->session->set_flashdata('error_msg', $error);
        }
        redirect('admin/story_info', 'refresh');
        }
    }

    public function create_playlist() {
        $config['upload_path'] = './uploads/admin';
        $config['allowed_types'] = '*';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('audiofile')) {
            $error = array('error' => $this->upload->display_errors());
//echo $error['error'];
        } else {
            $data = $this->upload->data();
            $file_name = $data['file_name'];
//$base=base_url();
            $file_path = 'uploads/admin/';
            $file_path.= $file_name;
        }

        if (!empty($file_name)) {

            $data = array(
                'name' => $this->input->post('name_playlist'),
                'file_name' => $file_name,
                'audio_url' => $file_path,
                'date_created' => date("Y-m-d"),
                'date_modified' => date("Y-m-d")
            );

            $insertUserData = $this->playlist->playlist_insert($data);
            if ($insertUserData) {
                $this->session->set_flashdata('success_msg', 'User data have been added successfully.');
            } else {
                $this->session->set_flashdata('error_msg', 'Some problems occured, please try again.');
            }
            redirect('admin/schedule', 'refresh');
        }
    }

    public function schedule_save() {

//var_dump($this->input->post('play_time'));exit();
        $play_name = $this->input->post('play_name');
        $data = $this->playlist->get_url($play_name);

        $schedule_date = $this->input->post('play_date') . ' ' . $this->input->post('play_time');
//var_dump( $schedule_date);exit();
        $url = $data['audio_url'];
        $url .= $data['file_name'];
        if (!empty($_POST)) {
            $data = array(
                'start_time' => $schedule_date,
                'playlist_name' => $this->input->post('play_name'),
                'date_created' => date("Y/m/d"),
                'modified_date' => date("Y/m/d"),
                'default_flag' => 0,
                'url' => $url,
            );

            $this->Playlist->schedule_insert($data);

//Loading View
        }

        redirect('admin/school_name', 'refresh');
    }

    public function default_play() {
        $playlist = $this->input->post('playlist_name');
        $data = $this->playlist->get_playlist($playlist);
        if (!empty($data)) {
            $data = array(
                'playlist_name' => $data['id'],
                'date_created' => date("Y/m/d"),
                'modified_date' => date("Y/m/d"),
                'default_flag' => 1,
                'url' => $data['audio_url'],
            );

            $this->playlist->schedule_update($data);
        }

        redirect('admin/schedule', 'refresh');
    }

    public function dashboard() {
        $data['school'] = $this->school_model->get_school_name();
        $data['story'] = $this->story_model->get_story();
        $data['playlist'] = $this->playlist->get_playlist();
        $data['schedule'] = $this->playlist->get_schedule();

        $this->data = $data;
        $this->middle = 'dashboard';
        $this->layout();
    }

    public function sc_edit_form($id) {

        $this->data['edit_info'] = $this->school_model->sc_edit_form($id);
        $this->middle = 'school_name';
        $this->layout();
    }

    public function st_edit_form($id) {
        $this->data['edit_info'] = $this->story_model->st_edit_form($id);
//$this->data['school_info']=$this->school_model->sc_edit_form( $this->data['edit_info']['school_name']);
        $this->data['school_info'] = $this->school_model->get_all();
        $this->middle = 'form_save';
        $this->layout();
    }

    public function delete() {
        $deleteid = $this->input->post('deleteId');
        $form_id = $this->input->post('form_id');
        switch ($form_id) {
            case "school":
                $result = $this->school_model->delete_school($deleteid);
                break;
            case "story":
                $result = $this->story_model->story_delete($deleteid);
                break;
            case "playlist":
                $result = $this->playlist->playlist_delete($deleteid);
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
    }

    public function table_view($form_id) {
        switch ($form_id) {
            case 1:
                $this->data['info'] = $this->school_model->get_all();
                $this->data['s'] = 1;
                $this->middle = 'table_view';
                $this->layout();
                break;
            case 2:
                $this->data['info'] = $this->story_model->story_all();
                $this->data['s'] = 2;
                $this->middle = 'table_view';
                $this->layout();
                break;
            case "playlist":
                $result = $this->playlist->get_all();
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
    }

}
