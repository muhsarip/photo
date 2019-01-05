<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CLIENT_Controller {

	public function index()
	{
		$data['page_title']		= "Blog";
		$data['blog'] 		    = $this->_getBlog();
		$data['content']    	= $this->load->view('frontend/page/blog', $data, true);
        $this->load->view('frontend/master_template',$data); 
    }
    function _getBlog(){
        return $this->db
            ->select("id,title,summary,image,slug,created_at")
            ->where("status",1)
            ->order_by("created_at","desc")
            ->get("blog");
    }
    public function read($slug=null)
	{
        $data['with_background']= true;
		$data['page_title']		= "Blog";
		$data['detail'] 		= $this->db->where("slug",$slug)->get("blog",1)->row();
		$data['content']    	= $this->load->view('frontend/page/blog_detail', $data, true);
        $this->load->view('frontend/master_template',$data); 
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */