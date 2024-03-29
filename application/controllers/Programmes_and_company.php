<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Programmes_and_company extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Programmes_and_company_model');
    } 

    /*
     * Listing of programmes_and_companies
     */
    function index()
    {
        $data['programmes_and_companies'] = $this->Programmes_and_company_model->get_all_programmes_and_companies();
        
        $data['_view'] = 'programmes_and_company/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new programmes_and_company
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
            );
            
            $programmes_and_company_id = $this->Programmes_and_company_model->add_programmes_and_company($params);
            redirect('programmes_and_company/index');
        }
        else
        {            
            $data['_view'] = 'programmes_and_company/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a programmes_and_company
     */
    function edit($programmes_id)
    {   
        // check if the programmes_and_company exists before trying to edit it
        $data['programmes_and_company'] = $this->Programmes_and_company_model->get_programmes_and_company($programmes_id);
        
        if(isset($data['programmes_and_company']['programmes_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                );

                $this->Programmes_and_company_model->update_programmes_and_company($programmes_id,$params);            
                redirect('programmes_and_company/index');
            }
            else
            {
                $data['_view'] = 'programmes_and_company/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The programmes_and_company you are trying to edit does not exist.');
    } 

    /*
     * Deleting programmes_and_company
     */
    function remove($programmes_id)
    {
        $programmes_and_company = $this->Programmes_and_company_model->get_programmes_and_company($programmes_id);

        // check if the programmes_and_company exists before trying to delete it
        if(isset($programmes_and_company['programmes_id']))
        {
            $this->Programmes_and_company_model->delete_programmes_and_company($programmes_id);
            redirect('programmes_and_company/index');
        }
        else
            show_error('The programmes_and_company you are trying to delete does not exist.');
    }
    
}
