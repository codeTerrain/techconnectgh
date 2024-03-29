<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Company_person_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get company_person by company_id
     */
    function get_company_person($company_id)
    {
        return $this->db->get_where('company_person',array('company_id'=>$company_id))->row_array();
    }
        
    /*
     * Get all company_person
     */
    function get_all_company_person()
    {
        $this->db->order_by('company_id', 'desc');
        return $this->db->get('company_person')->result_array();
    }
        
    /*
     * function to add new company_person
     */
    function add_company_person($params)
    {
        $this->db->insert('company_person',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update company_person
     */
    function update_company_person($company_id,$params)
    {
        $this->db->where('company_id',$company_id);
        return $this->db->update('company_person',$params);
    }
    
    /*
     * function to delete company_person
     */
    function delete_company_person($company_id)
    {
        return $this->db->delete('company_person',array('company_id'=>$company_id));
    }
}
