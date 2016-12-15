<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Adminpage extends MY_Controller {
    public function __construct() {

        parent::__construct();

// Load form and url and security helper library
        $this->load->helper(array('form','url','security'));

// Load form validation library
        $this->load->library('form_validation');

// Load session library
        $this->load->library('session');

// Load database
        $this->load->model('Post');
        $this->load->model('Adminmodel');

    }
    public function index() {
        $this->middle = 'main_page/admin_page'; // its your view name, change for as per requirement.
        $this->layout();
    }

    public function home(){
        $username = '';
        $this->data['users']=$this->Adminmodel->get_user_list();
        $this->middle= 'main_page/admin_page';
        $this->layout();
    }

    public function showpost($userid){
        //echo $userid;
        $this->data['posts']=$this->Post->get_by_user($userid);
        $this->middle='main_page/admin_post';
        $this->layout();
    }
    /**
     *POST function
     */

}
?>