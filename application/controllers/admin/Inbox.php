<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inbox extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
	public function index()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('message');
		$crud->set_subject('Inbox Message');


		$crud->columns('name','email','subject','message','craeted_at');


        


        $crud->unset_read();
        $crud->unset_export();
        $crud->unset_print();
        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();


		$data['title_page'] = 'Inbox Message';


		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Inbox Message";
		$data['crumb'] = array( 'Inbox Message' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
    }      
}