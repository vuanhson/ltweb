<?php
/**
 * Created by PhpStorm.
 * User: taohansamu
 * Date: 09/12/2016
 * Time: 00:06
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Page extends MY_Controller {
    public function index() {
        $this->middle = 'main_page/home'; // its your view name, change for as per requirement.
        $this->layout();
    }
    public function write_blog(){
        $this->middle= 'main_page/';
    }
    public function home(){
        $this->middle= 'main_page/home';
        $this->layout();
    }
}
?>