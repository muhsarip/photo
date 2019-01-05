<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CLIENT_Controller {

	public function index()
	{
		$data['page_title']		= "Home";
		$data['homepage'] 		= $this->db->get("homepage")->row();
		$data['recent_blog']	= $this->db->select("id,title,slug,image,created_at,summary")->order_by("created_at","desc")->get("blog",3);
		$data['services'] 		= $this->db->get("service",3);
		$data['content']    	= $this->load->view('frontend/page/homepage', $data, true);
        $this->load->view('frontend/master_template',$data); 
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */