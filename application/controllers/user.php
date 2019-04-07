<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{   
	function __construct(){
		parent::__construct();
        $this->load->model('fungsi');
		if($this->session->userdata('prev') != "2"){
        	if($this->session->userdata('prev') == "1"){
			 redirect(base_url("/admin"));
        	}else{
			 redirect(base_url("/"));
			}
		}
	}

	function index(){
    redirect('/user/post');
	}

	function form_kehilangan(){
        $data = $this->fungsi->AmbilTable('apps_balang_kategori');
        $data = array('data' => $data);
        $this->load->view('header');
        $this->load->view('user/nav');
		$this->load->view('user/form/form_kehilangan',$data);
        $this->load->view('footer');
	}

	function post(){
        $core=array();
        $nim = $this->session->userdata('nim');
        $menemukan = $this->fungsi->PostmuMenemukan($nim);
        $data = array('data' => $menemukan);
        $kehilangan = $this->fungsi->PostmuKehilangan($nim);
        $data2 = array('data2' => $kehilangan);
        $core = array_merge_recursive($core,$data);
        $core = array_merge_recursive($core,$data2);
        $this->load->view('header');
        $this->load->view('user/nav');        
        $this->load->view('user/index',$core);
        $this->load->view('footer');
	}

	function form_menemukan(){
        $data = $this->fungsi->AmbilTable('apps_balang_kategori');
        $data = array('data' => $data);
        $this->load->view('header');
        $this->load->view('user/nav');
		$this->load->view('user/form/form_menemukan',$data);
        $this->load->view('footer');
	}

	function buat_form_menemukan(){
        $tgl = $this->input->post('tgl');
        $jam = $this->input->post('jam');
        $date = $tgl.' '.$jam;
        $date = date_create($date)->format('Y-m-d H:i:s');
    $data = array(
            'nim' =>  $this->session->userdata('nim'),
            'nama_penemu' => $this->session->userdata('nama'),
        'nama_barang' => $this->input->post('nama_barang'),
        'warna' => $this->input->post('warna'),
        'waktu' => $date,
        'id_kategori' => $this->input->post('id_kategori'),
        'ciri_khusus' => $this->input->post('ciri_khusus'),
        'tempat_menemukan' => $this->input->post('tempat_menemukan'),
            'link_gambar' => $this->input->post('link_gambar'),
            'email' => $this->input->post('email'),
        'contact_person' => $this->input->post('contact_person'),
        'info_tambahan' => $this->input->post('info_tambahan')
    );
    $data = $this->fungsi->Insert('apps_balang_menemukan', $data);
    redirect('/user/post','refresh');
	}


    function edit_menemukan($id_menemukan){
        $core=array();
        $data = $this->fungsi->AmbilTable('apps_balang_kategori');
        $data = array('data' => $data);
        $core = array_merge_recursive($core,$data);
        $menemukan = $this->fungsi->GetWhere('apps_balang_menemukan', array('id_menemukan' => $id_menemukan));
        $data = array(
            'id_menemukan' => $menemukan[0]['id_menemukan'],
            'nim' => $menemukan[0]['nim'],
            'nama_penemu' => $menemukan[0]['nama_penemu'],
            'nama_barang' => $menemukan[0]['nama_barang'],
            'id_kategori' => $menemukan[0]['id_kategori'],
            'ciri_khusus' => $menemukan[0]['ciri_khusus'],
            'warna' => $menemukan[0]['warna'],
            'waktu' => $menemukan[0]['waktu'],
            'tempat_menemukan' => $menemukan[0]['tempat_menemukan'],
            'link_gambar' => $menemukan[0]['link_gambar'],
            'email' => $menemukan[0]['email'],
            'contact_person' => $menemukan[0]['contact_person'],
            'info_tambahan' => $menemukan[0]['info_tambahan'],
        );
        $core = array_merge_recursive($core,$data);
        $this->load->view('header');
        $this->load->view('admin/nav');
        $this->load->view('/admin/form/edit_menemukan', $core); 
        $this->load->view('footer');
    }


    function update_menemukan(){
        $tgl = $this->input->post('tgl');
        $jam = $this->input->post('jam');
        $date = $tgl.' '.$jam;
        $date = date_create($date)->format('Y-m-d H:i:s');
        $data = array(
            'nama_barang' => $this->input->post('nama_barang'),
            'warna' => $this->input->post('warna'),
            'waktu' => $date,
            'id_kategori' => $this->input->post('id_kategori'),
            'ciri_khusus' => $this->input->post('ciri_khusus'),
            'tempat_menemukan' => $this->input->post('tempat_menemukan'),
            'link_gambar' => $this->input->post('link_gambar'),
            'email' => $this->input->post('email'),
            'contact_person' => $this->input->post('contact_person'),
            'info_tambahan' => $this->input->post('info_tambahan')
        );
        $where = array('id_menemukan' => $this->input->post('id_menemukan'));
        $this->load->model('fungsi');
        $res = $this->fungsi->Update('apps_balang_menemukan', $data, $where);
        if ($res>0) {
            redirect('/user/post','refresh');
        }
    }

    function delete_menemukan($id_menemukan){
        $id_menemukan = array('id_menemukan' => $id_menemukan);
        $this->load->model('fungsi');
        $this->fungsi->Delete('apps_balang_menemukan', $id_menemukan);
        redirect('/user/post','refresh');
    }


    //KEHILANGAN

	function buat_form_kehilangan(){
        $tgl = $this->input->post('tgl');
        $jam = $this->input->post('jam');
        $date = $tgl.' '.$jam;
        $date = date_create($date)->format('Y-m-d H:i:s');
    $data = array(
            'nim' =>  $this->session->userdata('nim'),
            'nama_pemilik' => $this->session->userdata('nama'),
        'nama_barang' => $this->input->post('nama_barang'),
        'warna' => $this->input->post('warna'),
        'waktu' => $date,
        'id_kategori' => $this->input->post('id_kategori'),
        'ciri_khusus' => $this->input->post('ciri_khusus'),
        'tempat_kehilangan' => $this->input->post('tempat_kehilangan'),
            'link_gambar' => $this->input->post('link_gambar'),
            'email' => $this->input->post('email'),
        'contact_person' => $this->input->post('contact_person'),
        'info_tambahan' => $this->input->post('info_tambahan')
    );
    $data = $this->fungsi->Insert('apps_balang_kehilangan', $data);
    redirect('/user/post','refresh');
	}

    function edit_kehilangan($id_kehilangan){
        $core=array();
        $data = $this->fungsi->AmbilTable('apps_balang_kategori');
        $data = array('data' => $data);
        $core = array_merge_recursive($core,$data);
        $kehilangan = $this->fungsi->GetWhere('apps_balang_kehilangan', array('id_kehilangan' => $id_kehilangan));
        $data = array(
            'id_kehilangan' => $kehilangan[0]['id_kehilangan'],
            'nim' => $kehilangan[0]['nim'],
            'nama_pemilik' => $kehilangan[0]['nama_pemilik'],
            'nama_barang' => $kehilangan[0]['nama_barang'],
            'id_kategori' => $kehilangan[0]['id_kategori'],
            'ciri_khusus' => $kehilangan[0]['ciri_khusus'],
            'warna' => $kehilangan[0]['warna'],
            'waktu' => $kehilangan[0]['waktu'],
            'tempat_kehilangan' => $kehilangan[0]['tempat_kehilangan'],
            'link_gambar' => $kehilangan[0]['link_gambar'],
            'email' => $kehilangan[0]['email'],
            'contact_person' => $kehilangan[0]['contact_person'],
            'info_tambahan' => $kehilangan[0]['info_tambahan'],
        );
        $core = array_merge_recursive($core,$data);
        $this->load->view('header');
        $this->load->view('admin/nav');
        $this->load->view('/admin/form/edit_kehilangan', $core); 
        $this->load->view('footer');
    }


    function update_kehilangan(){
        $tgl = $this->input->post('tgl');
        $jam = $this->input->post('jam');
        $date = $tgl.' '.$jam;
        $date = date_create($date)->format('Y-m-d H:i:s');
    $data = array(
        'nama_barang' => $this->input->post('nama_barang'),
        'warna' => $this->input->post('warna'),
        'waktu' => $date,
        'id_kategori' => $this->input->post('id_kategori'),
        'ciri_khusus' => $this->input->post('ciri_khusus'),
        'tempat_kehilangan' => $this->input->post('tempat_kehilangan'),
        'contact_person' => $this->input->post('contact_person'),
        'info_tambahan' => $this->input->post('info_tambahan')
    );
    $where = array('id_kehilangan' => $this->input->post('id_kehilangan'));
    $res = $this->fungsi->Update('apps_balang_kehilangan', $data, $where);
        if ($res>0) {
            redirect('/user/post','refresh');
        }
    }

    function delete_kehilangan($id_kehilangan){
        $id_kehilangan = array('id_kehilangan' => $id_kehilangan);
        $this->fungsi->Delete('apps_balang_kehilangan', $id_kehilangan);
        redirect('/user/post','refresh');
    }

}