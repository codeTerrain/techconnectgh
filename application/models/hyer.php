<?php
class hyer extends CI_Model{
    function saverecords($company_name,$geolocation,$email,$phone,$website,$physical_address,$postal_address,$company_type,$profile,$company_size, $path_of_file,$type_of_document){
        $query = "insert into company values('$company_name','$geolocation','$email','$phone','$website','$physical_address','$postal_address','$company_type','$profile','$company_size','$path_of_file','$type_of_document')";
        $this ->db->query($query);


    }

}



?>