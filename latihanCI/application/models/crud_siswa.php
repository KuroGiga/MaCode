<?php 
defined("BASEPATH") or exit ('No Direct Script Case Acces Allowed');

/**
 * 
 */
class Crud_siswa extends CI_Model{

	// Menghimpun sebuah data
	function __construct(){
		parent::__construct();
		//Mengambil data kita daridatabase
		$this->load->database();
	}

// Fungsi untuk menampilkan data siswa
	public function tampil_siswa(){
		$query = $this->db->get('siswa');//query dari table siswa
		return $query->result();
	}

	//Fungsi Menambahkan data dengan nama tambahdata
	public function tambahdata($siswa){
		return $this->db->insert('siswa',$siswa);
		//Memasukkan Data Ke Dalam Tabel Dengan Parameter siswa.

	}

	public function editdatasiswa($siswa,$id){
		$this->db->where('siswa.id',$id);
		return $this->db->update('siswa',$siswa);
		//Mengedit data yang berada di dlam tabel sisswa.

	}
	//Untuk membuat atau mengambil id atau endefinisikan data
	//yang akan dipakai dan diedit
	

	public function getuser($id){
		$query = $this->db->get_where('siswa', array('id' => $id));
		return $query->row_array();

	}

	//Untuk Menghapus data siswa
	public function deletesiswa($id){
		$this->db->where('siswa.id',$id);
		return $this->db->delete('siswa');

	}


}