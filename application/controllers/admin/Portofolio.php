<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
    public function index()
	{
        
        if(!$this->input->get('category_id')){
            $category_id = $this->uri->segment(5);
        }else{
            $category_id = $this->input->get('category_id');
        }
        
        
        //echo $this->input->get('category_id'); die();
        
        $crud = new grocery_CRUD();


		$crud->set_table('portofolio');
        $crud->set_subject('Portofolio ');
        $crud->set_relation("category_id","portofolio_category","name");
        $crud->set_relation("sub_category_id","portofolio_sub_category","name",array("category_id"=>$category_id));

        $crud->columns('title','image');

        $crud->fields('category_id','sub_category_id','title','image','youtube_link','description');
        
        
        $crud->set_field_upload('image','assets/frontend/images/portofolio');

        $crud->display_as("category_id","Category");
        $crud->display_as("sub_category_id","Sub Category");


        $crud->unset_read();
        $crud->unset_export();
        $crud->unset_print();
        $crud->unset_texteditor(array("description"));


		$crud->required_fields('title','category_id','sub_category_id');


		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Portofolio ";
		$data['crumb'] = array( 'Portofolio ' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
    }
    
}