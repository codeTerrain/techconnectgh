<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Contact_person_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get contact_person by person_id
     */
    function get_contact_person($person_id)
    {
        return $this->db->get_where('contact_person',array('person_id'=>$person_id))->row_array();
    }
        
    /*
     * Get all contact_person
     */
    function get_all_contact_person()
    {
        $this->db->order_by('person_id', 'desc');
        return $this->db->get('contact_person')->result_array();
    }
        
    /*
     * function to add new contact_person
     */
    function add_contact_person($contact_params)
    
    {
        $this->db->insert('contact_person',$contact_params);
        return $this->db->insert_id();
        $this -> send_validation_email();
    }
    
    /*
     * function to update contact_person
     */
    function update_contact_person($person_id,$contact_params)
    {
        $this->db->where('person_id',$person_id);
        return $this->db->update('contact_person',$contact_params);
    }
    
    /*
     * function to delete contact_person
     */
    function delete_contact_person($person_id)
    {
        return $this->db->delete('contact_person',array('person_id'=>$person_id));
    }

    function send_validation_email(){



    }
}
