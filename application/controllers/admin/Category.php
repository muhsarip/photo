<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
	public function index()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('portofolio_category');
		$crud->set_subject('Category');


		$crud->columns('name');

		$crud->fields('name');


        $crud->add_action('Isi Portofolio', '', 'admin/portofolio/sub', '');

        $crud->unset_read();
        $crud->unset_export();
        $crud->unset_print();


		$crud->required_fields('name');


		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Brand Lists";
		$data['crumb'] = array( 'Brand Lists' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
    }
}