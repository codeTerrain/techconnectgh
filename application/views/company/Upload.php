<?php 
class Upload extends CI_Controller{
   public function index(){
    $this->load->view('vi');

   }
    function upload_file(){
    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'pdf|doc|docx';
    
    $this->load->library('upload',$config);
    
    if( $this->upload->do_upload('path_of_file') ){
    print_r($this ->upload->data());    
    }
    else{
        print_r($this ->upload->display_errors());     
    }
}

}