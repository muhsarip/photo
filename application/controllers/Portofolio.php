<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolio extends CLIENT_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    

    public function index($category_id=null)
    {
        $category = $this->db->where("id",$category_id)->get("portofolio_category",1)->row();

        $data['page_title']		= $category->name;
        $data['category']       = $category;
		$data['portofolio'] 	= $this->_getPortofolio($category_id);
		$data['content']    	= $this->load->view('frontend/page/portofolio', $data, true);
        $this->load->view('frontend/master_template',$data); 
    }
    public function detail($id=null)
    {
        $portofolio             = $this->db->where("id",$id)->get("portofolio",1)->row();

        $data['with_background']= true;
        $data['portofolio']     = $portofolio;
        $data['page_title']		= $portofolio->title;
		$data['content']    	= $this->load->view('frontend/page/portofolio_detail', $data, true);
        $this->load->view('frontend/master_template',$data); 
    }


    function _getPortofolio($category_id=null){
        return $this->db
            ->select("portofolio.* , portofolio_category.name as category")
            ->where("category_id",$category_id)
            ->join("portofolio_category","portofolio_category.id = portofolio.category_id")
            ->order_by("portofolio.created_at","desc")
            ->get("portofolio");
    }

}

/* End of file Controllername.php */
