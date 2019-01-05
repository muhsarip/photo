<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_content extends ADMIN_Controller {
 
    function __construct()
    {
		parent::__construct();
		$this->load->library('grocery_CRUD');
		$this->load->library('OutputView');
    }
 	
    public function index()
    {
        $homepage = $this->db->get("homepage")->row();
        $output = (object)array('data' => '','homepage'=>$homepage , 'output' => '' , 'js_files' => null , 'css_files' => null);
			
        $data['title_page'] = 'Dashboard';


        $template = 'admin_template';
        $view = 'page/home_content';
        $this->outputview->output_admin($view, $template, $data, $output);
    }
}