<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telusuri extends CI_Controller
{   
	function __construct(){
		parent::__construct();
        $this->load->model('fungsi');
        $this->load->library('pagination');   
	
		// if($this->session->userdata('prev') != "1"){
  //       	if($this->session->userdata('prev') == "2"){
		// 	redirect(base_url("/user"));
  //       	}else{
		// 	redirect(base_url("/login"));
		// 	}
		// }
	}

	function index(){


        
        $config['base_url'] = base_url().'telusuri/index';                
        $config['per_page'] = 6;        
        $config['uri_segment'] = 3;        
        $config['full_tag_open'] = '<ul class="pagination center">';        
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
        $config['prefix'] = "/".$this->uri->segment(3)."/";
        $config['suffix'] = "/".$this->uri->segment(4)."/";
        $config['total_rows'] = $this->fungsi->hitungMenemukan(); 

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $this->pagination->initialize($config);        

        $data['linkMenemukan'] = $this->pagination->create_links();

        
        $config['base_url'] = base_url().'telusuri/index';                
        $config['per_page'] = 6;        
        $config['uri_segment'] = 4;        
        $config['full_tag_open'] = '<ul class="pagination center">';        
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
        $config['prefix'] = "/".$this->uri->segment(3)."/";
        $config['suffix'] = "/".$this->uri->segment(4)."/";
        $config['total_rows'] = $this->fungsi->hitungKehilangan();

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->pagination->initialize($config);
        $data['linkKehilangan'] = $this->pagination->create_links();        


		$cari = $this->input->get('cari');
		if($cari!=null){
        $data['data'] = $this->fungsi->SearchMenemukan($cari, $config["per_page"], $page);
        $data['data2'] = $this->fungsi->SearchKehilangan($cari, $config["per_page"], $page);
    	}else{
        $data['data'] = $this->fungsi->MenemukanPagination($config["per_page"], $page);
        $data['data2'] = $this->fungsi->KehilanganPagination($config["per_page"], $page);
    	}
        $this->load->view('header');
        $this->load->view('home',$data);
        $this->load->view('footer');
	}

	

}