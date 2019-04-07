<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagination extends CI_Controller
 {   function __Construct(){ 
        parent::__Construct(); 
        $this->load->database();
        //load helper 
        $this->load->helper('url');
        //load model 
        $this->load->model('user_model');
        //load library 
        $this->load->library('pagination');    
    }
    
    public function index(){
        $config['base_url'] = base_url().'pagination/index';        
        $config['total_rows'] = $this->user_model->count_all_users();        
        $config['per_page'] = 5;        
        $config['uri_segment'] = 3;        
        $config['full_tag_open'] = '<ul class="pagination">';        
        $config['full_tag_close'] = '</ul>';        
        $config['first_link'] = 'First';        
        $config['last_link'] = 'Last';        
        $config['first_tag_open'] = '<li>';        
        $config['first_tag_close'] = '</li>';        
        $config['prev_link'] = '<i class="material-icons">chevron_left</i>';        
        $config['prev_tag_open'] = '<li class="prev">';        
        $config['prev_tag_close'] = '</li>';        
        $config['next_link'] = '<i class="material-icons">chevron_right</i>';        
        $config['next_tag_open'] = '<li>';        
        $config['next_tag_close'] = '</li>';        
        $config['last_tag_open'] = '<li>';        
        $config['last_tag_close'] = '</li>';        
        $config['cur_tag_open'] = '<li class="active"><a href="#">';        
        $config['cur_tag_close'] = '</a></li>';        
        $config['num_tag_open'] = '<li class="waves-effect">';        
        $config['num_tag_close'] = '</li>';

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);        
        $data['links'] = $this->pagination->create_links();        
        $data['users'] = $this->user_model->get_users($config["per_page"], $page);        
        $this->load->view('paginate',$data);    
    }
}