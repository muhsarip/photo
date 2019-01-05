<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_setting extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
	public function index()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('homepage');
		$crud->set_subject('Homepage Setting');


		$crud->columns('title','icon','description');
		$mode = (isset($_GET['mode'])?$_GET['mode']:'');
		switch ($mode) {
			case 'setting1':
			$crud->fields('background','moto','moto_description');
				break;
			case 'setting2':
				$crud->fields('company_image','company_title','company_description');
				break;
			default:
				$crud->fields('moto','moto_description','company_photo','short_company_description','vision','mission','gmap');
				break;
		}

		$crud->display_as("background","Photo / Image");

		

        $crud->set_field_upload('company_image','assets/frontend/images/homepage');
        $crud->set_field_upload('background','assets/frontend/images/homepage');


        $crud->unset_read();
        $crud->unset_export();
		$crud->unset_print();
		$crud->unset_back_to_list();
		$crud->unset_texteditor(array('moto_description'));


		//$crud->required_fields('title','icon','description');

		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Homepage Setting";
		$data['crumb'] = array( 'Homepage Setting' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
	}
}