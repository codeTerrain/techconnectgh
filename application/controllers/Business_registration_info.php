<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Business_registration_info extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Business_registration_info_model');
    } 

    /*
     * Listing of business_registration_info
     */
    function index()
    {
        $data['business_registration_info'] = $this->Business_registration_info_model->get_all_business_registration_info();
        
        $data['_view'] = 'business_registration_info/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new business_registration_info
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('company_id','Company Id','required|max_length[8]');
		$this->form_validation->set_rules('path_of_file','Path Of File','required|max_length[500]');
		$this->form_validation->set_rules('type_of_document','Type Of Document','required|max_length[100]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'company_id' => $this->input->post('company_id'),
				'path_of_file' => $this->input->post('path_of_file'),
				'type_of_document' => $this->input->post('type_of_document'),
            );
            
            $business_registration_info_id = $this->Business_registration_info_model->add_business_registration_info($params);
            redirect('business_registration_info/index');
        }
        else
        {            
            $data['_view'] = 'company/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a business_registration_info
     */
    function edit($bri_id)
    {   
        // check if the business_registration_info exists before trying to edit it
        $data['business_registration_info'] = $this->Business_registration_info_model->get_business_registration_info($bri_id);
        
        if(isset($data['business_registration_info']['bri_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('company_id','Company Id','required|max_length[8]');
			$this->form_validation->set_rules('path_of_file','Path Of File','required|max_length[500]');
			$this->form_validation->set_rules('type_of_document','Type Of Document','required|max_length[100]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'company_id' => $this->input->post('company_id'),
					'path_of_file' => $this->input->post('path_of_file'),
					'type_of_document' => $this->input->post('type_of_document'),
                );

                $this->Business_registration_info_model->update_business_registration_info($bri_id,$params);            
                redirect('business_registration_info/index');
            }
            else
            {
                $data['_view'] = 'business_registration_info/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The business_registration_info you are trying to edit does not exist.');
    } 

    /*
     * Deleting business_registration_info
     */
    function remove($bri_id)
    {
        $business_registration_info = $this->Business_registration_info_model->get_business_registration_info($bri_id);

        // check if the business_registration_info exists before trying to delete it
        if(isset($business_registration_info['bri_id']))
        {
            $this->Business_registration_info_model->delete_business_registration_info($bri_id);
            redirect('business_registration_info/index');
        }
        else
            show_error('The business_registration_info you are trying to delete does not exist.');
    }
    
}