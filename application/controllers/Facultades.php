<?php
class Facultades extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pruebaDB');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['Facultades'] = $this->news_model->get_Facultades();
                $data['title'] = 'Facultades';

            $this->load->view('templates/header', $data);
             $this->load->view('Facultades/index', $data);
            $this->load->view('templates/footer');
        }

   
}