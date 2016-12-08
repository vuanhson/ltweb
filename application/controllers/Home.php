<?php
/**
 * Created by PhpStorm.
 * User: taohansamu
 * Date: 09/12/2016
 * Time: 00:06
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends MY_Controller {
    public function index() {
        $this->middle = 'home/home'; // its your view name, change for as per requirement.
        $this->layout();
    }
}
?>