<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Expertise_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get expertise by expertise_id
     */
    function get_expertise($expertise_id)
    {
        return $this->db->get_where('expertise',array('expertise_id'=>$expertise_id))->row_array();
    }
        
    /*
     * Get all expertise
     */
    function get_all_expertise()
    {
        $this->db->order_by('expertise_id', 'desc');
        return $this->db->get('expertise')->result_array();
    }
        
    /*
     * function to add new expertise
     */
    function add_expertise($params)
    {
        $this->db->insert('expertise',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update expertise
     */
    function update_expertise($expertise_id,$params)
    {
        $this->db->where('expertise_id',$expertise_id);
        return $this->db->update('expertise',$params);
    }
    
    /*
     * function to delete expertise
     */
    function delete_expertise($expertise_id)
    {
        return $this->db->delete('expertise',array('expertise_id'=>$expertise_id));
    }
}