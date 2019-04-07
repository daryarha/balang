<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Fungsi extends CI_Model{
    public function AmbilTable($table){
        $res=$this->db->get($table); // Kode ini berfungsi untuk memilih tabel yang akan ditampilkan
        return $res->result_array(); // Kode ini digunakan untuk mengembalikan hasil operasi $res menjadi sebuah array
    }
 
    public function Insert($table,$data){
        $res = $this->db->insert($table, $data); // Kode ini digunakan untuk memasukan record baru kedalam sebuah tabel
        return $res; // Kode ini digunakan untuk mengembalikan hasil $res
    }
 
    public function Update($table, $data, $where){
        $res = $this->db->update($table, $data, $where); // Kode ini digunakan untuk merubah record yang sudah ada dalam sebuah tabel
        return $res;
    }
 
    public function Delete($table, $where){
        $res = $this->db->delete($table, $where); // Kode ini digunakan untuk menghapus record yang sudah ada
        return $res;
    }
    
	public function GetWhere($table, $data){
    $res=$this->db->get_where($table, $data);//mencari table dan data yang diambil
    return $res->result_array();
	}
    
    public function CekLog($table, $data){
        return $this->db->get_where($table, $data);
    }

        
        public function hitungMenemukan(){ 
        $this->db->select('*');
        $this->db->from('apps_balang_menemukan');
            $query = $this->db->count_all_results(); 
            return $query; 
        }


        
        public function hitungKehilangan(){ 
        $this->db->select('*');
        $this->db->from('apps_balang_kehilangan');
            $query = $this->db->count_all_results(); 
            return $query; 
        }



    public function SearchMenemukan($data, $limit, $start){
        $this->db->select('*');
        $this->db->from('apps_balang_menemukan m');
        // $this->db->join('apps_balang_kategori k', "k.id_kategori = m.id_kategori OR m.nim LIKE %$data% OR m.nama_penemu LIKE %$data% OR m.nama_barang LIKE %$data% OR m.warna LIKE %$data% OR m.ciri_khusus LIKE %$data% OR m.waktu LIKE %$data% OR m.tempat_menemukan LIKE %$data% OR m.link_gambar LIKE %$data% OR m.contact_person LIKE %$data% OR m.email LIKE %$data% OR m.info_tambahan LIKE %$data%");
        $this->db->join('apps_balang_kategori k', "k.id_kategori = m.id_kategori");
        $this->db->like('m.nim', $data)
        ->or_like('m.nama_penemu', $data)
        ->or_like('m.nama_barang', $data)
        ->or_like('m.warna', $data)
        ->or_like('m.ciri_khusus', $data)
        ->or_like('m.waktu', $data)
        ->or_like('m.tempat_menemukan', $data)
        ->or_like('m.link_gambar', $data)
        ->or_like('m.contact_person', $data)
        ->or_like('m.email', $data)
        ->or_like('m.info_tambahan', $data);
        $this->db->limit($limit, $start); 
        $res = $this->db->get();
        return $res->result_array();
    }


    public function SearchKehilangan($data, $limit, $start){
        $this->db->select('*');
        $this->db->from('apps_balang_kehilangan kh');
        // $this->db->join('apps_balang_kategori kt', "kh.id_kategori = kt.id_kategori OR kh.nim LIKE %$data% OR kh.nama_pemilik LIKE %$data% OR kh.nama_barang LIKE %$data% OR kh.warna LIKE %$data% OR kh.ciri_khusus LIKE %$data% OR kh.waktu LIKE %$data% OR kh.tempat_menemukan LIKE %$data% OR kh.link_gambar LIKE %$data% OR kh.contact_person LIKE %$data% OR kh.email LIKE %$data% OR kh.info_tambahan LIKE %$data%");
        $this->db->join('apps_balang_kategori kt', "kh.id_kategori = kt.id_kategori");
        $this->db->like('kh.nim', $data)
        ->or_like('kh.nama_pemilik', $data)
        ->or_like('kh.nama_barang', $data)
        ->or_like('kh.warna', $data)
        ->or_like('kh.ciri_khusus', $data)
        ->or_like('kh.waktu', $data)
        ->or_like('kh.tempat_kehilangan', $data)
        ->or_like('kh.link_gambar', $data)
        ->or_like('kh.contact_person', $data)
        ->or_like('kh.email', $data)
        ->or_like('kh.info_tambahan', $data);
            $this->db->limit($limit, $start); 
        $res = $this->db->get();
        return $res->result_array();
    }

    public function MenemukanPagination($limit, $start){
        $this->db->select('*');
        $this->db->from('apps_balang_menemukan m');
        $this->db->join('apps_balang_kategori k', 'k.id_kategori = m.id_kategori');
            $this->db->limit($limit, $start); 
        $res = $this->db->get();
        return $res->result_array();
    }


    public function KehilanganPagination($limit, $start){
        $this->db->select('*');
        $this->db->from('apps_balang_kehilangan kh');
        $this->db->join('apps_balang_kategori kt', 'kh.id_kategori = kt.id_kategori');
            $this->db->limit($limit, $start); 
        $res = $this->db->get();
        return $res->result_array();
    }


    public function Menemukan(){
        $this->db->select('*');
        $this->db->from('apps_balang_menemukan m');
        $this->db->join('apps_balang_kategori k', 'k.id_kategori = m.id_kategori');
        $res = $this->db->get();
        return $res->result_array();
    }


    public function Kehilangan(){
        $this->db->select('*');
        $this->db->from('apps_balang_kehilangan kh');
        $this->db->join('apps_balang_kategori kt', 'kh.id_kategori = kt.id_kategori');
        $res = $this->db->get();
        return $res->result_array();
    }

    public function PostmuKehilangan($data){
        $this->db->select('*');
        $this->db->from('apps_balang_kehilangan kh');
        $this->db->join('apps_balang_kategori kt', "kh.id_kategori = kt.id_kategori AND kh.nim = $data");
        $res = $this->db->get();
        return $res->result_array();
    }

    public function PostmuMenemukan($data){
        $this->db->select('*');
        $this->db->from('apps_balang_menemukan m');
        $this->db->join('apps_balang_kategori k', "k.id_kategori = m.id_kategori AND m.nim = $data");
        $res = $this->db->get();
        return $res->result_array();
    }

    public function KehilanganWId(){
        $this->db->select('*');
        $this->db->from('apps_balang_kehilangan kh');
        $this->db->join('apps_balang_kategori kt', 'kh.id_kategori = kt.id_kategori');
        $res = $this->db->get_where('apps_balang_kehilangan','id_kehilangan');
        return $res->result_array();
    }

}

    ?>