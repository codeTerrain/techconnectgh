<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Area_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get area by person_id
     */
    function get_area($person_id)
    {
        return $this->db->get_where('areas',array('person_id'=>$person_id))->row_array();
    }
        
    /*
     * Get all areas
     */
    function get_all_areas()
    {
        $this->db->order_by('person_id', 'desc');
        return $this->db->get('areas')->result_array();
    }
        
    /*
     * function to add new area
     */
    function add_area($params)
    {
        $this->db->insert('areas',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update area
     */
    function update_area($person_id,$params)
    {
        $this->db->where('person_id',$person_id);
        return $this->db->update('areas',$params);
    }
    
    /*
     * function to delete area
     */
    function delete_area($person_id)
    {
        return $this->db->delete('areas',array('person_id'=>$person_id));
    }
}
