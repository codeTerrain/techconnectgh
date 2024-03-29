<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Area extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Area_model');
    } 

    /*
     * Listing of areas
     */
    function index()
    {
        $data['areas'] = $this->Area_model->get_all_areas();
        
        $data['_view'] = 'area/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new area
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('level','Level','required|matches['BEGINNER','INTERMEDIATE','PROFESSIONAL']');
		$this->form_validation->set_rules('years','Years','required|max_length[45]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'level' => $this->input->post('level'),
				'years' => $this->input->post('years'),
            );
            
            $area_id = $this->Area_model->add_area($params);
            redirect('area/index');
        }
        else
        {
			$this->load->model('Person_model');
			$data['all_person'] = $this->Person_model->get_all_person();
            
            $data['_view'] = 'area/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a area
     */
    function edit($person_id)
    {   
        // check if the area exists before trying to edit it
        $data['area'] = $this->Area_model->get_area($person_id);
        
        if(isset($data['area']['person_id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('level','Level','required|matches['BEGINNER','INTERMEDIATE','PROFESSIONAL']');
			$this->form_validation->set_rules('years','Years','required|max_length[45]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'level' => $this->input->post('level'),
					'years' => $this->input->post('years'),
                );

                $this->Area_model->update_area($person_id,$params);            
                redirect('area/index');
            }
            else
            {
				$this->load->model('Person_model');
				$data['all_person'] = $this->Person_model->get_all_person();

                $data['_view'] = 'area/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The area you are trying to edit does not exist.');
    } 

    /*
     * Deleting area
     */
    function remove($person_id)
    {
        $area = $this->Area_model->get_area($person_id);

        // check if the area exists before trying to delete it
        if(isset($area['person_id']))
        {
            $this->Area_model->delete_area($person_id);
            redirect('area/index');
        }
        else
            show_error('The area you are trying to delete does not exist.');
    }
    
}
