<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CLIENT_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
	{
        $data['with_background']= true;
		$data['page_title']		= "About Us";
		$data['detail'] 		= $this->db->where("id",1)->get("page",1)->row();
		$data['content']    	= $this->load->view('frontend/page/page', $data, true);
        $this->load->view('frontend/master_template',$data); 
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */