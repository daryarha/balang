    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class User_model extends CI_Model{ 
        
        private function _get_users_data(){ 
            $this->db->select('*'); 
            $this->db->from('users'); 
        }
        
        public function get_users($limit, $start){ 
            $this->_get_users_data(); 
            $this->db->limit($limit, $start); 
            $query = $this->db->get(); 
            return $query->result_array(); 
        }
        
        public function count_all_users(){ 
            $this->_get_users_data(); 
            $query = $this->db->count_all_results(); 
            return $query; 
        }
    }