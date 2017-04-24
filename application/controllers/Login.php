<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $this->load->helper('form');
        $this->load->helper(array('form'));

        //
        $this->load->model('Login_model');
        $this->Login_model->logout();
        //
        $this->load->view('templates/header');
        $this->load->view('login/login_view');
        $this->load->view('templates/footer');
    }




}

?>