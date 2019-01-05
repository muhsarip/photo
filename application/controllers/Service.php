<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CLIENT_Controller {

	public function index()
	{
		$data['page_title']		= "Service";
		$data['services'] 		= $this->db->get("service",3);
		$data['content']    	= $this->load->view('frontend/page/service', $data, true);
        $this->load->view('frontend/master_template',$data); 
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */