<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
	public function index()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('service');
		$crud->set_subject('Service');


		$crud->columns('title','description','image');

        $crud->fields('title','description','image');
        $crud->set_field_upload('image','assets/frontend/images/service');

        $crud->unset_read();
        $crud->unset_export();
        $crud->unset_print();
        $crud->unset_texteditor(array("description"));


		$crud->required_fields('name');


		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Service";
		$data['crumb'] = array( 'Service' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
    }
}