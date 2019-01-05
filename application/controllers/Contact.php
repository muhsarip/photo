<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CLIENT_Controller {
    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }
    
    public function index()
	{
        $data['with_background']= true;
		$data['page_title']		= "Contact Us";
		$data['content']    	= $this->load->view('frontend/page/contact', $data, true);
        $this->load->view('frontend/master_template',$data); 
    }
    public function submitMessage(){
		$this->load->library('form_validation');
		$config = array(
	        array(
	                'field' => 'name',
	                'label' => 'Nama',
	                'rules' => 'required|max_length[50]'
	        ),
	        array(
	                'field' => 'email',
	                'label' => 'email',
	                'rules' => 'required|max_length[50]',
	                'errors' => array(
	                        'required' => 'You must provide a %s.',
	                ),
            ),
            array(
                'field' => 'subject',
                'label' => 'Subject',
                'rules' => 'required|max_length[255]',
                'errors' => array(
                        'required' => 'You must provide a %s.',
                ),
            ),
	        array(
	                'field' => 'message',
	                'label' => 'Isi Pesan',
	                'rules' => 'required|max_length[1000]',
	                'errors' => array(
	                        'required' => 'You must provide a %s.',
	                ),
	        ),
	        
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == TRUE) {
			$object = array(
				'name' 	=> htmlspecialchars($this->input->post('name')),
                'email'	=> htmlspecialchars($this->input->post('email')),
                'subject'	=> htmlspecialchars($this->input->post('subject')),
                'message' => htmlspecialchars($this->input->post('message')),
                "created_at"=> date("Y-m-d h:i:s",time())
			);
			$this->db->insert("message",$object);
			
            $this->session->set_flashdata('submit_success',true);
            
			redirect('contact', 'refresh');
		} else {
            $this->session->set_flashdata('submit_success',false);
            
            $this->session->set_flashdata('validation_message',validation_errors());
            
			redirect('contact', 'refresh');
		}
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */