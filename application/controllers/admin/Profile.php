<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
	public function index()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('setting_frontend');
		$crud->set_subject('Company Profile');


		$crud->columns('company','large_logo','favicon','address','email','phone','footer_text');

		$crud->fields('company','large_logo','favicon','address','email','phone','footer_text');

        $crud->set_field_upload('large_logo','assets/frontend/images');
        $crud->set_field_upload('favicon','assets/frontend/images');


		$crud->display_as("brochure","Brochure (PDF)");
		$crud->display_as("large_logo","Logo");

        $crud->unset_read();
        $crud->unset_export();
        $crud->unset_print();
        $crud->unset_back_to_list();
		$crud->unset_texteditor(array('footer_text'));


		$crud->required_fields('company','large_logo','favicon','address','email','phone','footer_text');
		$data['title_page'] = 'Company Profile';


		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Company Profile";
		$data['crumb'] = array( 'Company Profile' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
    }
    function cb_before($post_array) {
        $post_array['slug'] = slugify($post_array['title']);
            
        return $post_array;
    }
      
}