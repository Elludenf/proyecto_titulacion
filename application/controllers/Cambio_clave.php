<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cambio_clave extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        if (isset($_SERVER['HTTP_REFERER'])) {


            $this->load->helper('form');
            $this->load->helper(array('form'));

            //
            $this->load->model('Cambio_model');
            $this->Cambio_model->logout();
            //
            $this->load->view('templates/header');
            $this->load->view('Cambio/cambio_view');
            $this->load->view('templates/footer');

        }  else{


            $this->load->view('templates/header');
            $this->load->view('templates/forbidden');
            $this->load->view('templates/footer');

        }
    }

}

?>