<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */


class Estudiante extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        $this->load->model('Estudiante_model');
        $this->load->helper('url');

    }

    /*
   * Listing of estudiante
   */
    private $limit = 5;
    function index()
    {

        $data['estudiante'] = $this->Estudiante_model->get_all_estudiantes();

        /*Empiezo de paginacion*/
        $total_rows = $this->Estudiante_model->count();

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'/estudiante/index';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;',$page_links );
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('estudiante/index', $data);
        $this->load->view('templates/footer');
    }
    /*search query*/
    function buscarEstudiante() {


        $data['estudiante'] = $this->Estudiante_model->getEstudianteBusqueda($this->input->post('search'));

        /*Empiezo de paginacion*/
        $total_rows = $this->Estudiante_model->countParamSearch($this->input->post('search'));

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url().'/estudiante/index';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;',$page_links );
        /*Fin de paginacion*/


        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('estudiante/index', $data);
        $this->load->view('templates/footer');
    }
    /*
     * page of reports
     */

    function reportes()
    {
        $data['estudiante'] = $this->Estudiante_model->get_all_estudiantes();

        /*Empiezo de paginacion*/
        $total_rows = $this->Estudiante_model->count();

        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url() . '/estudiante/reportes';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;', $page_links);
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('estudiante/reportes', $data);
        $this->load->view('templates/footer');


    }

    /*
     * all students graduate
     */

    function graduados()
    {
        $data['estudiante'] = $this->Estudiante_model->get_estudiantes_graduados();
        $total_rows=$this->Estudiante_model->count();
        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url() . '/estudiante/graduado';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;', $page_links);
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('estudiante/graduados', $data);
        $this->load->view('templates/footer');


    }
    /*
     * all students disertacion
     */

    function disertacion(){
        $data['estudiante'] = $this->Estudiante_model->get_estudiantes_disertacion();
        $total_rows=$this->Estudiante_model->count();
        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url() . '/estudiante/disertacion';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;', $page_links);
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('estudiante/disertacion', $data);
        $this->load->view('templates/footer');




    }

    /*
     * all students titulacion
     */

    function titulacion(){
        $data['estudiante'] = $this->Estudiante_model->get_estudiantes_titulacion();
        $total_rows=$this->Estudiante_model->count();
        $this->load->library('pagination');
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $this->limit;
        $config['uri_segment'] = 3;
        $config['base_url'] = base_url() . '/estudiante/titulacion';
        $this->pagination->initialize($config);

        $page_links = $this->pagination->create_links();
        $data['links'] = explode('&nbsp;', $page_links);
        /*Fin de paginacion*/

        $this->load->helper('form');
        $this->load->helper(array('form'));
        $this->load->view('templates/header');
        $this->load->view('estudiante/titulacion', $data);
        $this->load->view('templates/footer');




    }

    /*
     * Adding a new estudiante
     */
    function add()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('carr_codigo','Carr Codigo','required|integer');
        $this->form_validation->set_rules('est_nombre1','Est Nombre1','required');
        $this->form_validation->set_rules('est_apellido1','Est Apellido1','required');
        $this->form_validation->set_rules('est_tipoid','Est Tipoid','required|max_length[3]');
        $this->form_validation->set_rules('est_id','Est Id','required');
        $this->form_validation->set_rules('est_direccion','Est Direccion','required');
        $this->form_validation->set_rules('est_celular','Est Celular','required');
        $this->form_validation->set_rules('est_mail','Est Mail','required|valid_email');
        $this->form_validation->set_rules('est_fechanac','Est Fechanac','required');
        $this->form_validation->set_rules('est_sexo','Est Sexo','required|max_length[1]');
        $this->form_validation->set_rules('est_fechaingreso','Est Fechaingreso','required');
        $this->form_validation->set_rules('est_mailpuce','Est Mailpuce','valid_email');

        if($this->form_validation->run())
        {
            //$this->db->select_max('per_codigo');
            //$result= $this->db->get('estudiante')->row_array();
            $params = array(
                'carr_codigo' => $this->input->post('carr_codigo'),
                'est_nombre1' => $this->input->post('est_nombre1'),
                'est_nombre2' => $this->input->post('est_nombre2'),
                'est_apellido1' => $this->input->post('est_apellido1'),
                'est_apellido2' => $this->input->post('est_apellido2'),
                'est_tipoid' => $this->input->post('est_tipoid'),
                'est_id' => $this->input->post('est_id'),
                'est_direccion' => $this->input->post('est_direccion'),
                'est_telefono' => $this->input->post('est_telefono'),
                'est_celular' => $this->input->post('est_celular'),
                'est_mail' => $this->input->post('est_mail'),
                'est_mailpuce' => $this->input->post('est_mailpuce'),
                'est_fechanac' => $this->input->post('est_fechanac'),
                'est_sexo' => $this->input->post('est_sexo'),
                'est_foto' => $this->input->post('est_foto'),
                'est_fechaingreso' => $this->input->post('est_fechaingreso'),
                'est_fechaestimadagraduacion' => $this->input->post('est_fechaestimadagraduacion'),
                'est_fechagraduacion' => $this->input->post('est_fechagraduacion'),
            );

            $estudiante_id = $this->Estudiante_model->add_estudiante($params);
            $this->Estudiante_model->add_user($params['est_mailpuce'],$params['est_id']);
            redirect('estudiante/index');
        }
        else
        {



            $this->load->model('Carrera_model');
            $data['all_carreras'] = $this->Carrera_model->get_all_carreras();

            $this->load->view('templates/header');
            $this->load->view('estudiante/add',$data);
            $this->load->view('templates/footer');
        }
    }

    /*
     * Editing a estudiante
     */
    function edit($est_codigo)
    {
        $this->load->library('form_validation');
        // check if the estudiante exists before trying to edit it
        $estudiante = $this->Estudiante_model->get_estudiante($est_codigo);

        if(isset($estudiante['est_codigo']))
        {
            $this->load->library('form_validation');

            $this->form_validation->set_rules('carr_codigo','Carr Codigo','required|integer');
            $this->form_validation->set_rules('est_nombre1','Est Nombre1','required');
            $this->form_validation->set_rules('est_apellido1','Est Apellido1','required');
            $this->form_validation->set_rules('est_tipoid','Est Tipoid','required|max_length[3]');
            $this->form_validation->set_rules('est_id','Est Id','required');
            $this->form_validation->set_rules('est_direccion','Est Direccion','required');
            $this->form_validation->set_rules('est_celular','Est Celular','required');
            $this->form_validation->set_rules('est_mail','Est Mail','required|valid_email');
            $this->form_validation->set_rules('est_fechanac','Est Fechanac','required');
            $this->form_validation->set_rules('est_sexo','Est Sexo','required|max_length[1]');
            $this->form_validation->set_rules('est_fechaingreso','Est Fechaingreso','required');
            $this->form_validation->set_rules('est_mailpuce','Est Mailpuce','valid_email');

            if($this->form_validation->run())
            {
                $params = array(
                    'carr_codigo' => $this->input->post('carr_codigo'),
                    'est_nombre1' => $this->input->post('est_nombre1'),
                    'est_nombre2' => $this->input->post('est_nombre2'),
                    'est_apellido1' => $this->input->post('est_apellido1'),
                    'est_apellido2' => $this->input->post('est_apellido2'),
                    'est_tipoid' => $this->input->post('est_tipoid'),
                    'est_id' => $this->input->post('est_id'),
                    'est_direccion' => $this->input->post('est_direccion'),
                    'est_telefono' => $this->input->post('est_telefono'),
                    'est_celular' => $this->input->post('est_celular'),
                    'est_mail' => $this->input->post('est_mail'),
                    'est_mailpuce' => $this->input->post('est_mailpuce'),
                    'est_fechanac' => $this->input->post('est_fechanac'),
                    'est_sexo' => $this->input->post('est_sexo'),
                    'est_foto' => $this->input->post('est_foto'),
                    'est_fechaingreso' => $this->input->post('est_fechaingreso'),
                    'est_fechaestimadagraduacion' => $this->input->post('est_fechaestimadagraduacion'),
                    'est_fechagraduacion' => $this->input->post('est_fechagraduacion'),
                );

                $this->Estudiante_model->update_estudiante($est_codigo,$params);
                redirect('estudiante/index');
            }
            else
            {
                $data['estudiante'] = $this->Estudiante_model->get_estudiante($est_codigo);

                $this->load->model('Carrera_model');
                $data['all_carreras'] = $this->Carrera_model->get_all_carreras();
                $this->load->view('templates/header');
                $this->load->view('estudiante/edit',$data);
                $this->load->view('templates/footer');
            }
        }
        else
            show_error('The estudiante you are trying to edit does not exist.');
    }

    /*
     * Deleting estudiante
     */
    function remove($est_codigo)
    {
        $estudiante = $this->Estudiante_model->get_estudiante($est_codigo);

        // check if the estudiante exists before trying to delete it
        if(isset($estudiante['est_codigo']))
        {
            $this->Estudiante_model->delete_estudiante($est_codigo);
            redirect('estudiante/index');
        }
        else
            show_error('The estudiante you are trying to delete does not exist.');
    }


    /*
    * imprimir reportes
    */
    /**
     *
     */


    function imprimir_disertacion()
    {
        // Se carga la libreria fpdf
        require('fpdf/fpdf.php');
        require('fpdf/pdf.php');


        // Se obtienen los alumnos de la base de datos

        $alumnos = $this->Estudiante_model->get_disertacion_reportes();

        // Creacion del PDF

        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */
        $pdf = new Pdf('DISERTACION');
        // Agregamos una página
        $pdf->addPage('L');

        // Define el alias para el número de página que se imprimirá en el pie
        $pdf->AliasNbPages();

        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */

        $pdf->SetLeftMargin(15);
        $pdf->SetRightMargin(15);
        $pdf->SetFillColor(200, 200, 200);


        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $pdf->SetFont('Arial', 'B', 4);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        $pdf->Cell(15, 7, 'COD. ESTUDIANTE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'COD. CARRERA',1,0, 'C', '1');
        $pdf->Cell(15, 7, 'PRI. NOMBRE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'SEG. NOMBRE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'PRI. APELLIDO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'SEG. APELLIDO',1,0, 'C', '1');
        $pdf->Cell(10, 7, 'TIP.ID', 1,0, 'C', '1');
        $pdf->Cell(10, 7, 'ID', 1,0, 'C', '1');
        $pdf->Cell(20, 7, 'DIRECCION', 1,0, 'C', '1');
        $pdf->Cell(12, 7, 'TELF', 1,0,'C', '1');
        $pdf->Cell(12, 7, 'CELULAR', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'CORREO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'CORREO PUCE', 1,0, 'C', '1');
        $pdf->Cell(18, 7, 'FECHA NACIMIENTO', 1,0, 'C', '1');
        $pdf->Cell(8, 7, 'SEXO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'FECHA INGRESO', 1,0, 'C', '1');
        $pdf->Cell(22, 7, 'FECHA EST.GRADUACION', 1,0, 'L', '1');
        $pdf->Cell(20, 7, 'FECHA GREADUACION', 1,0, 'L', '1');
        $pdf->Ln(6);

        foreach ($alumnos as $alumno) {


            // Se imprimen los datos de cada alumno
            $pdf->Cell(15, 7, $alumno['est_codigo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['carr_codigo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['est_nombre1'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_nombre2'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_apellido1'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_apellido2'], 'B', 0, 'L', 0);
            $pdf->Cell(10, 7, $alumno['est_tipoid'], 'B', 0, 'C', 0);
            $pdf->Cell(10, 7, $alumno['est_id'], 'B', 0, 'L', 0);
            $pdf->Cell(20, 7, $alumno['est_direccion'], 'B', 0, 'L', 0);
            $pdf->Cell(12, 7, $alumno['est_telefono'], 'B', 0, 'L', 0);
            $pdf->Cell(12, 7, $alumno['est_celular'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_mail'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_mailpuce'], 'B', 0, 'L', 0);
            $pdf->Cell(18, 7, $alumno['est_fechanac'], 'B', 0, 'C', 0);
            $pdf->Cell(8, 7, $alumno['est_sexo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['est_fechaingreso'], 'B', 0, 'C', 0);
            $pdf->Cell(22, 7, $alumno['est_fechaestimadagraduacion'], 'B', 0, 'C', 0);
            $pdf->Cell(20, 7, $alumno['est_fechagraduacion'], 'B', 0, 'C', 0);

            $pdf->Ln(10);
        }

        $pdf->Output("Lista de alumnos.pdf", 'I');
    }
    function imprimir_grafico_disertacion(){
        require('fpdf/fpdf.php');
        require('fpdf/pdf.php');


        // Se obtienen los alumnos de la base de datos

        $alumnos = $this->Estudiante_model->get_disertacion_reportes();

        // Creacion del PDF

        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */
        $pdf = new Pdf('DISERTACION');
        // Agregamos una página
        $pdf->addPage('L');

        // Define el alias para el número de página que se imprimirá en el pie
        $pdf->AliasNbPages();


        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 90, ' ALUMNOS POR HORARIO', 0, 1,'C');
        $pdf->Ln(8);
        $valX = $pdf->GetX();
        $valY = $pdf->GetY();
        $pdf->BarDiagram(190, 70, $alumnos, '%l : %v (%p)', array(100,175,100));
        $pdf->SetXY($valX, $valY + 80);

        $pdf->Output("Lista de alumnos.pdf", 'I');
    }
    function imprimir_titulacion()
    {
        // Se carga la libreria fpdf
        require('fpdf/fpdf.php');
        require('fpdf/pdf.php');


        // Se obtienen los alumnos de la base de datos

        $alumnos = $this->Estudiante_model->get_titulacion_reportes();

        // Creacion del PDF

        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */

        $pdf = new Pdf('TITULACION');


        // Agregamos una página
        $pdf->addPage('L');

        // Define el alias para el número de página que se imprimirá en el pie
        $pdf->AliasNbPages();


        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */

        $pdf->SetLeftMargin(15);
        $pdf->SetRightMargin(15);
        $pdf->SetFillColor(200, 200, 200);


        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $pdf->SetFont('Arial', 'B', 4);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        $pdf->Cell(15, 7, 'COD. ESTUDIANTE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'COD. CARRERA',1,0, 'C', '1');
        $pdf->Cell(15, 7, 'PRI. NOMBRE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'SEG. NOMBRE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'PRI. APELLIDO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'SEG. APELLIDO',1,0, 'C', '1');
        $pdf->Cell(10, 7, 'TIP.ID', 1,0, 'C', '1');
        $pdf->Cell(10, 7, 'ID', 1,0, 'C', '1');
        $pdf->Cell(20, 7, 'DIRECCION', 1,0, 'C', '1');
        $pdf->Cell(12, 7, 'TELF', 1,0,'C', '1');
        $pdf->Cell(12, 7, 'CELULAR', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'CORREO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'CORREO PUCE', 1,0, 'C', '1');
        $pdf->Cell(18, 7, 'FECHA NACIMIENTO', 1,0, 'C', '1');
        $pdf->Cell(8, 7, 'SEXO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'FECHA INGRESO', 1,0, 'C', '1');
        $pdf->Cell(22, 7, 'FECHA EST.GRADUACION', 1,0, 'L', '1');
        $pdf->Cell(20, 7, 'FECHA GREADUACION', 1,0, 'L', '1');
        $pdf->Ln(6);

        foreach ($alumnos as $alumno) {


            // Se imprimen los datos de cada alumno
            $pdf->Cell(15, 7, $alumno['est_codigo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['carr_codigo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['est_nombre1'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_nombre2'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_apellido1'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_apellido2'], 'B', 0, 'L', 0);
            $pdf->Cell(10, 7, $alumno['est_tipoid'], 'B', 0, 'C', 0);
            $pdf->Cell(10, 7, $alumno['est_id'], 'B', 0, 'L', 0);
            $pdf->Cell(20, 7, $alumno['est_direccion'], 'B', 0, 'L', 0);
            $pdf->Cell(12, 7, $alumno['est_telefono'], 'B', 0, 'L', 0);
            $pdf->Cell(12, 7, $alumno['est_celular'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_mail'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_mailpuce'], 'B', 0, 'L', 0);
            $pdf->Cell(18, 7, $alumno['est_fechanac'], 'B', 0, 'C', 0);
            $pdf->Cell(8, 7, $alumno['est_sexo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['est_fechaingreso'], 'B', 0, 'C', 0);
            $pdf->Cell(22, 7, $alumno['est_fechaestimadagraduacion'], 'B', 0, 'C', 0);
            $pdf->Cell(20, 7, $alumno['est_fechagraduacion'], 'B', 0, 'C', 0);


            //Se agrega un salto de linea
            $pdf->Ln(10);
        }
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $pdf->Output("Lista de alumnos.pdf", 'I');
    }
    function imprimir_graduados(){
        // Se carga la libreria fpdf
        require('fpdf/fpdf.php');
        require('fpdf/pdf.php');


        // Se obtienen los alumnos de la base de datos

        $alumnos = $this->Estudiante_model->get_graduados_reportes();

        // Creacion del PDF

        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */

        $pdf = new Pdf('GRADUADOS');


        // Agregamos una página
        $pdf->addPage('L');

        // Define el alias para el número de página que se imprimirá en el pie
        $pdf->AliasNbPages();


        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */

        $pdf->SetLeftMargin(15);
        $pdf->SetRightMargin(15);
        $pdf->SetFillColor(200, 200, 200);


        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $pdf->SetFont('Arial', 'B', 4);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        $pdf->Cell(15, 7, 'COD. ESTUDIANTE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'COD. CARRERA',1,0, 'C', '1');
        $pdf->Cell(15, 7, 'PRI. NOMBRE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'SEG. NOMBRE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'PRI. APELLIDO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'SEG. APELLIDO',1,0, 'C', '1');
        $pdf->Cell(10, 7, 'TIP.ID', 1,0, 'C', '1');
        $pdf->Cell(10, 7, 'ID', 1,0, 'C', '1');
        $pdf->Cell(20, 7, 'DIRECCION', 1,0, 'C', '1');
        $pdf->Cell(12, 7, 'TELF', 1,0,'C', '1');
        $pdf->Cell(12, 7, 'CELULAR', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'CORREO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'CORREO PUCE', 1,0, 'C', '1');
        $pdf->Cell(18, 7, 'FECHA NACIMIENTO', 1,0, 'C', '1');
        $pdf->Cell(8, 7, 'SEXO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'FECHA INGRESO', 1,0, 'C', '1');
        $pdf->Cell(22, 7, 'FECHA EST.GRADUACION', 1,0, 'L', '1');
        $pdf->Cell(20, 7, 'FECHA GREADUACION', 1,0, 'L', '1');
        $pdf->Ln(6);

        foreach ($alumnos as $alumno) {


            // Se imprimen los datos de cada alumno
            $pdf->Cell(15, 7, $alumno['est_codigo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['carr_codigo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['est_nombre1'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_nombre2'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_apellido1'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_apellido2'], 'B', 0, 'L', 0);
            $pdf->Cell(10, 7, $alumno['est_tipoid'], 'B', 0, 'C', 0);
            $pdf->Cell(10, 7, $alumno['est_id'], 'B', 0, 'L', 0);
            $pdf->Cell(20, 7, $alumno['est_direccion'], 'B', 0, 'L', 0);
            $pdf->Cell(12, 7, $alumno['est_telefono'], 'B', 0, 'L', 0);
            $pdf->Cell(12, 7, $alumno['est_celular'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_mail'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_mailpuce'], 'B', 0, 'L', 0);
            $pdf->Cell(18, 7, $alumno['est_fechanac'], 'B', 0, 'C', 0);
            $pdf->Cell(8, 7, $alumno['est_sexo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['est_fechaingreso'], 'B', 0, 'C', 0);
            $pdf->Cell(22, 7, $alumno['est_fechaestimadagraduacion'], 'B', 0, 'C', 0);
            $pdf->Cell(20, 7, $alumno['est_fechagraduacion'], 'B', 0, 'C', 0);


            //Se agrega un salto de linea
            $pdf->Ln(10);
        }
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $pdf->Output("Lista de alumnos.pdf", 'I');
    }
    function imprimir_todos(){

        // Se carga la libreria fpdf
        require('fpdf/fpdf.php');
        require('fpdf/pdf.php');


        // Se obtienen los alumnos de la base de datos

        $alumnos = $this->Estudiante_model->get_todos_reportes();

        // Creacion del PDF

        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */

        $pdf = new Pdf('ESTUDIANTES');


        // Agregamos una página
        $pdf->addPage('L');

        // Define el alias para el número de página que se imprimirá en el pie
        $pdf->AliasNbPages();


        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */

        $pdf->SetLeftMargin(15);
        $pdf->SetRightMargin(15);
        $pdf->SetFillColor(200, 200, 200);


        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $pdf->SetFont('Arial', 'B', 4);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */
        $pdf->Cell(15, 7, 'COD. ESTUDIANTE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'COD. CARRERA',1,0, 'C', '1');
        $pdf->Cell(15, 7, 'PRI. NOMBRE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'SEG. NOMBRE', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'PRI. APELLIDO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'SEG. APELLIDO',1,0, 'C', '1');
        $pdf->Cell(10, 7, 'TIP.ID', 1,0, 'C', '1');
        $pdf->Cell(10, 7, 'ID', 1,0, 'C', '1');
        $pdf->Cell(20, 7, 'DIRECCION', 1,0, 'C', '1');
        $pdf->Cell(12, 7, 'TELF', 1,0,'C', '1');
        $pdf->Cell(12, 7, 'CELULAR', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'CORREO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'CORREO PUCE', 1,0, 'C', '1');
        $pdf->Cell(18, 7, 'FECHA NACIMIENTO', 1,0, 'C', '1');
        $pdf->Cell(8, 7, 'SEXO', 1,0, 'C', '1');
        $pdf->Cell(15, 7, 'FECHA INGRESO', 1,0, 'C', '1');
        $pdf->Cell(22, 7, 'FECHA EST.GRADUACION', 1,0, 'L', '1');
        $pdf->Cell(20, 7, 'FECHA GREADUACION', 1,0, 'L', '1');
        $pdf->Ln(6);

        foreach ($alumnos as $alumno) {


            // Se imprimen los datos de cada alumno
            $pdf->Cell(15, 7, $alumno['est_codigo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['carr_codigo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['est_nombre1'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_nombre2'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_apellido1'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_apellido2'], 'B', 0, 'L', 0);
            $pdf->Cell(10, 7, $alumno['est_tipoid'], 'B', 0, 'C', 0);
            $pdf->Cell(10, 7, $alumno['est_id'], 'B', 0, 'L', 0);
            $pdf->Cell(20, 7, $alumno['est_direccion'], 'B', 0, 'L', 0);
            $pdf->Cell(12, 7, $alumno['est_telefono'], 'B', 0, 'L', 0);
            $pdf->Cell(12, 7, $alumno['est_celular'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_mail'], 'B', 0, 'L', 0);
            $pdf->Cell(15, 7, $alumno['est_mailpuce'], 'B', 0, 'L', 0);
            $pdf->Cell(18, 7, $alumno['est_fechanac'], 'B', 0, 'C', 0);
            $pdf->Cell(8, 7, $alumno['est_sexo'], 'B', 0, 'C', 0);
            $pdf->Cell(15, 7, $alumno['est_fechaingreso'], 'B', 0, 'C', 0);
            $pdf->Cell(22, 7, $alumno['est_fechaestimadagraduacion'], 'B', 0, 'C', 0);
            $pdf->Cell(20, 7, $alumno['est_fechagraduacion'], 'B', 0, 'C', 0);


            //Se agrega un salto de linea
            $pdf->Ln(10);
        }
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $pdf->Output("Lista de alumnos.pdf", 'I');
    }







}