<?php

class VerifyLogin extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model','',TRUE);
    }

    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $username = $this->input->post('rolname');
        $this->form_validation->set_rules('rolname', 'Nombre', 'trim|required');
        $this->form_validation->set_rules('rolpassword', 'Clave', 'trim|required|callback_check_database');

        if($this->form_validation->run() == FALSE)
        {
            //Field validation failed.  User redirected to login page


            $this->load->view('templates/header');
            $this->load->view('login/login_view');
            $this->load->view('templates/footer');

        }
        else
        {
            //Go to private area
            $this->Login_model->logout();

            if($this->Login_model->get_grup_role($username)== R_ESTUDIANTE)

                redirect('elabora/index', 'refresh');
            else

            redirect('estudiante/index', 'refresh');
        }

    }

    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('rolname');

        //query the database
        $result = $this->Login_model->login($username, $password);

        if($result)
        {
            $sess_array = array();
            foreach($result as $row)
            {
                $sess_array = array(
                    'rolpassword' => $row->rolpassword,
                    'rolname' => $row->rolname
                );
                $this->session->set_userdata($sess_array);
            }
            $this->load->model('Login_model');
            $this->Login_model->set_role($username);
            return TRUE;
        }
        else
        {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}
?>