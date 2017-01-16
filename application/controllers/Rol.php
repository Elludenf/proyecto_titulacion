<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Rol extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Rol_model');
    } 

    /*
     * Listing of roles
     */
    function index()
    {
        $data['roles'] = $this->Rol_model->get_all_roles();

        $this->load->view('roles/index',$data);
    }

    /*
     * Adding a new rol
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('rol_descripcion','Rol Descripcion','required|max_length[50]');
		
		if($this->form_validation->run())     
        {
            $this->db->select_max('rol_codigo');
            $result= $this->db->get('roles')->row_array();
            $params = array(
                'rol_codigo' => $result['rol_codigo']+1,
				'rol_descripcion' => $this->input->post('rol_descripcion'),
            );
            
            $rol_id = $this->Rol_model->add_rol($params);
            redirect('rol/index');
        }
        else
        {
            $this->load->view('roles/add');
        }
    }  

    /*
     * Editing a rol
     */
    function edit($rol_codigo)
    {
        $this->load->library('form_validation');
        // check if the rol exists before trying to edit it
        $rol = $this->Rol_model->get_rol($rol_codigo);
        
        if(isset($rol['rol_codigo']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('rol_descripcion','Rol Descripcion','required|max_length[50]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'rol_descripcion' => $this->input->post('rol_descripcion'),
                );

                $this->Rol_model->update_rol($rol_codigo,$params);            
                redirect('rol/index');
            }
            else
            {   
                $data['rol'] = $this->Rol_model->get_rol($rol_codigo);
                //i
                //cargo permisos de tabla cruzada
                $this->load->model('Permxrol_model');
                $data['all_permisos'] = $this->Permxrol_model->get_perm_x_rol($rol_codigo);
                //Cargo caracteristicas del permiso
                $this->load->model('Permiso_model');
                $res=[];
                foreach ($data['all_permisos'] as $pxr){
                    $res[$pxr['zpermcodigo']] = $this->Permiso_model->get_permiso($pxr['zpermcodigo']);
                }
                $data['permisos_detalle'] = $res;
                //////
                $this->load->view('roles/edit',$data);
            }
        }
        else
            show_error('The rol you are trying to edit does not exist.');
    } 

    /*
     * Deleting rol
     */
    function remove($rol_codigo)
    {
        $rol = $this->Rol_model->get_rol($rol_codigo);

        // check if the rol exists before trying to delete it
        if(isset($rol['rol_codigo']))
        {
            $this->Rol_model->delete_rol($rol_codigo);
            redirect('rol/index');
        }
        else
            show_error('The rol you are trying to delete does not exist.');
    }
    
}
