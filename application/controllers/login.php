<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{   
	function __construct(){
		parent::__construct();
        $this->load->model('fungsi');
        $this->load->library('session');
	
		// if($this->session->userdata('prev') != "1"){
  //       	if($this->session->userdata('prev') == "2"){
		// 	redirect(base_url("/user"));
  //       	}else{
		// 	redirect(base_url("/login"));
		// 	}
		// }
	}

	function index(){

		$core=array();
        $this->load->model('fungsi');
        $this->load->view('header');
        // $this->load->view('main');
        
        $data4 = $this->fungsi->AmbilTable('apps_balang_kehilangan');
        $data4 = array('data' => $data4);
        $core = array_merge_recursive($core,$data4);
        $data5 = $this->fungsi->AmbilTable('apps_balang_menemukan');
        $data5 = array('data' => $data5);
        $core = array_merge_recursive($core,$data5);

        $this->load->view('home.php',$core);
		// $this->load->view('form/form_kehilangan');
        $this->load->view('footer');
	}


    function ceklog(){
        if (isset($_POST['nim']) AND isset($_POST['token'])) {
if ($_POST['token'] == '7af599ba071455b66f0b9408baab6ee9') {
$data = array('nim'=>$_POST['nim'],
'nama'=>$_POST['nama'],
'password'=>$_POST['nimpass'],
'fak'=>$_POST['fak'],
'jurusan'=>$_POST['jurusan'],
'prodi'=>$_POST['prodi'],
'last_page'=>$_POST['last_page'],
'auth_id'=>$_POST['auth_id'],
'token'=>$_POST['token'],
'telepon'=>$_POST['telepon'],
'no_hp_orangtua'=>$_POST['no_hp_orangtua']
);
var_dump($data); //contoh untuk mengecek data, silahkan di edit sesuai kebutuhan kamu
}
}
//         $nim = $this->input->post('nim');
//         if (isset($_POST['nim']) AND isset($_POST['token'])) {
//             if ($_POST['token'] == '7af599ba071455b66f0b9408baab6ee9') {
//             $prev = $this->fungsi->GetWhere('apps_balang_user', array('nim' => $nim));
//             $prev = $prev[0]['prev'];
//                 // $data = array('nim'=>$_POST['nim'],
//                 //                 'nama'=>$_POST['nama'],
//                 //                 'fak'=>$_POST['fak'],
//                 //                 'jurusan'=>$_POST['jurusan'],
//                 //                 'prodi'=>$_POST['prodi'],
//                 //                 'prev'=>$prev
//                 //                 );
//             $this->session->set_userdata('nim', $_POST['nim']);
//             $this->session->set_userdata('prev', $prev);
//             $this->session->set_userdata('nama', $_POST['nama']);
// 				echo isset($_SESSION['prev']);
//             if($this->session->userdata('prev') == 1){
//                 echo $this->session->userdata('prev');

// header('Location:/balang3/admin');
//             }else if($this->session->userdata('prev') == 2){
                

// header('Location:/user');
//                 echo $this->session->userdata('prev');
//             }else{
//                 redirect(base_url('/'));
//                 echo $this->session->userdata('prev');
//                 var_dump($data); //contoh untuk mengecek data, silahkan di edit sesuai kebutuhan kamu
//             }
//             }
//         }
    }
    

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('/login'));
    
}

	

}