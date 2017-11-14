<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Front_Controller extends CI_Controller
{

    //set the class variable.
    var $template  = array();
    var $data      = array();
    //Load layout
    public function layout() {
        // making temlate and send data to view.
        $this->template['header']   = $this->load->view('layouts/header', $this->data, true);
        $this->template['menu']   = $this->load->view('front/include/menu', $this->data, true);
        //$this->template['footer'] = $this->load->view('layout/footer', $this->data, true);
        $this->template['middle'] = $this->load->view($this->middle, $this->data, true);
        $this->template['visitors'] = $this->load->view('layouts/visitors', $this->data, true);
        $this->load->view('layouts/index', $this->template);
    }
}