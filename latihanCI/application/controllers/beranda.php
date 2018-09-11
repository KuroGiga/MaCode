<?php
defined("BASEPATH") or exit ('No Direct Script Case Acces Allowed');

/**
 * 
 */
class Beranda extends CI_Controller
{
	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('crud_siswa');
	}

	//Membuat Fungsi lnk tambah data
	public function linktambahdata(){
		$this->load->view('tambah_data.php');
	}


	public function index(){
		$data['siswa'] = $this->crud_siswa->tampil_siswa(); 
		$this->load->view('beranda.php' , $data);
	}

	public function tambahdata(){
		//Mendefinisikan inputan sesuai dengan tabel
		$siswa['nama'] = $this->input->post('nama');
		//Sesuaikan denganyang ada di view tambah data
		$siswa['kelas'] = $this->input->post('kelas');
		$siswa['password'] = $this->input->post('password');

		/*Membuat query untuk menampuung data yang ke tabel berdasarkan
		model tambah daa yang telah dibuat.*/
		$query = $this->crud_siswa->tambahdata($siswa);

		/* Mereferensiquery dari cclass crud siswa dan fungsitambah data yang ada di folder model
		->crid_siswa.php */


		//Fungsi if untuk mengembalikan halamanya ke bagian Index.php
		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}

	public function linkeditdata($id){
		$data['siswa'] = $this->crud_siswa->getuser($id);
		$this->load->view('editdatasiswa', $data);


	}

	public function update($id){
		$siswa['nama'] = $this->input->post('nama');
		$siswa['kelas']= $this->input->post('kelas');
		$siswa['password'] = $this->input->post('password');

		$query = $this->crud_siswa->editdatasiswa($siswa , $id);
		if ($query) {
			header('location:'.base_url().$this->index());
		}
	}

	public function deletesiswa($id){
		$query = $this->crud_siswa->deletesiswa($id);
		
		if ($query) {
			header('location:'.base_url().$this->index());
	}
}


}