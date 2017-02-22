<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Mat_ap_x_est extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Mat_ap_x_est_model');
    } 

    /*
     * Listing of mat_ap_x_est
     */
    function index()
    {
        $data['mat_ap_x_est'] = $this->Mat_ap_x_est_model->get_all_mat_ap_x_est();

        $this->load->view('mat_ap_x_est/index',$data);
    }

    /*
     * Adding a new mat_ap_x_est
     */
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('est_codigo','Estudiante','required');
        $this->form_validation->set_rules('mat_codigo','Materia','required');
        if($this->form_validation->run())
        {
            echo 'INSERCION';
            $params = array(
                'mat_codigo'=>$this->input->post('mat_codigo'),
                'est_codigo'=>$this->input->post('est_codigo'),
            );
            
            $mat_ap_x_est_id = $this->Mat_ap_x_est_model->add_mat_ap_x_est($params);
            redirect('mat_ap_x_est/index');
        }
        else
        {
            $this->load->model('Materia_model');
            $data['all_materias'] = $this->Materia_model->get_all_materias();
            $this->load->model('Estudiante_model');
            $data['all_estudiantes'] = $this->Estudiante_model->get_all_estudiantes();

            $this->load->view('mat_ap_x_est/add',$data);
        }
    }  

    /*
     * Editing a mat_ap_x_est
     */
    function edit($mat_codigo,$est_codigo)
    {   
        // check if the mat_ap_x_est exists before trying to edit it
        $mat_ap_x_est = $this->Mat_ap_x_est_model->get_mat_ap_x_est($mat_codigo,$est_codigo);
        
        if(isset($mat_ap_x_est['mat_codigo'])&&isset($mat_ap_x_est['est_codigo']))
        {
            if($this->form_validation->run())
            {   
                $params = array(
                );

                $this->Mat_ap_x_est_model->update_mat_ap_x_est($mat_codigo,$est_codigo,$params);
                redirect('mat_ap_x_est/index');
            }
            else
            {   
                $data['mat_ap_x_est'] = $this->Mat_ap_x_est_model->get_mat_ap_x_est($mat_codigo,$est_codigo);

                $this->load->model('Materia_model');
                $data['all_materias'] = $this->Materia_model->get_all_materias();
                $this->load->model('Estudiante_model');
                $data['all_estudiantes'] = $this->Estudiante_model->get_all_estudiantes();

                $this->load->view('mat_ap_x_est/edit',$data);
            }
        }
        else
            show_error('The mat_ap_x_est you are trying to edit does not exist.');
    } 

    /*
     * Deleting mat_ap_x_est
     */
    function remove($mat_codigo,$est_codigo)
    {
        $mat_ap_x_est = $this->Mat_ap_x_est_model->get_mat_ap_x_est($mat_codigo,$est_codigo);

        // check if the mat_ap_x_est exists before trying to delete it
        if(isset($mat_ap_x_est['mat_codigo'])&&isset($mat_ap_x_est['est_codigo']))
        {
            $this->Mat_ap_x_est_model->delete_mat_ap_x_est($mat_codigo,$est_codigo);
            redirect('mat_ap_x_est/index');
        }
        else
            show_error('The mat_ap_x_est you are trying to delete does not exist.');
    }
    
}
