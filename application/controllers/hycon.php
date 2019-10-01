<?php
class hycon extends CI_Controller{
    

    function __construct()
    {
        parent::__construct();
        
       
        $this->load->database();        
        $this->load->model('hyer');        
    } 

    public function savedata(){
        $this->load->view('add');
        if ($this ->input -> post('save')){


            $company_name = $this->input->post('company_name');
            $geolocation = $this->input->post('geolocation');
            $email = $this->input->post('email');
            
            
            $phone =$this->input->post('phone');
            $website = $this->input->post('website');
            $physical_address = $this->input->post('physical_address');
            $postal_address = $this->input->post('postal_address');
            $company_type = $this->input->post('company_type');
            $profile = $this->input->post('profile');
            $company_size = $this->input->post('company_size');
            $industry = $this->input->post('industry');
            $company_id = $this->input->post('company_name');
            $path_of_file = $this->input->post('path_of_file');
            $type_of_document = $this->input->post('type_of_document');

            $this ->hyer ->saverecords($company_name,$geolocation,$email,$phone,$website,$physical_address,$postal_address,$company_type,$profile,$company_size,$path_of_file,$type_of_document);
        } 
        }
    }

?>