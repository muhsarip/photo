<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends ADMIN_Controller {
	function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
	public function index()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('blog');
		$crud->set_subject('Blog');
        $crud->order_by("created_at","desc");

		$crud->columns('title','summary','image');

		$crud->fields('title','summary','content','image','slug','status','created_at','updated_at');

        $crud->set_field_upload('image','assets/frontend/images/blog');
        $crud->field_type("slug","hidden");
        $crud->field_type("created_at","hidden");
        $crud->field_type("updated_at","hidden");

        $crud->field_type("status","dropdown",array(
            1=>"Yes",
            0=>"No"
        ));

        $crud->display_as("status","Publish");
        $crud->display_as("category_id","Category");

        $crud->callback_before_insert(array($this,'cb_before'));
        $crud->callback_before_update(array($this,'cb_before'));


        $crud->unset_read();
        $crud->unset_export();
        $crud->unset_print();


		$crud->required_fields('title','summary','content','image');
		$data['title_page'] = 'Blog';


		$output = $crud->render();
		$data['script'] = '';//$this->load->view('admin/population/penduduk');
		$data['script_grocery'] = "";
		$data['judul'] = "Blog";
		$data['crumb'] = array( 'Blog' => '' );

		$template = 'admin_template';
		$view = 'grocery';
		$this->outputview->output_admin($view, $template, $data, $output);
    }
    function cb_before($post_array) {
        $now = date("Y-m-d h:i:s",time());
        if($post_array['created_at']==''){
            $post_array['created_at'] = $now;
        }else{
            $post_array['updated_at'] = $now;
        }

        $post_array['slug'] = slugify($post_array['title']);
            
        return $post_array;
    }
      
}