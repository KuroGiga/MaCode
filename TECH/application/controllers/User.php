<?php

class User extends CI_Controller {

public function __construct(){

        parent::__construct();
  			$this->load->helper('url');
  	 		$this->load->model('user_model');
        $this->load->library('session');

}

public function linkTambah(){
  $this->load->view("TambahView.php");

}

public function index()
{
$this->load->view("register.php");
}

public function dataP(){
  $data['project'] = $this->user_model->tampil_data();
  $this->load->view("data_project.php" , $data);
}

public function ChatV(){
  $data['chat'] = $this->user_model->tampil_chat();
  $this->load->view("ChatView.php" , $data);
}



public function register_user(){

      $user=array(
      'user_name'=>$this->input->post('user_name'),
      'user_email'=>$this->input->post('user_email'),
      'user_password'=>md5($this->input->post('user_password')),
      'user_age'=>$this->input->post('user_age'),
      'user_mobile'=>$this->input->post('user_mobile')
        );
        print_r($user);

$email_check=$this->user_model->email_check($user['user_email']);

if($email_check){
  $this->user_model->register_user($user);
  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
  redirect('user/login_view');

}
else{

  $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
  redirect('user');


}

}

public function login_view(){

$this->load->view("login.php");

}



function masuk(){
  $user_login=array(

  'user_email'=>$this->input->post('user_email'),
  'user_password'=>md5($this->input->post('user_password'))

    );

    $data=$this->user_model->login_user($user_login['user_email'],$user_login['user_password']);
      if($data)
      {
        $this->session->set_userdata('user_id',$data['user_id']);
        $this->session->set_userdata('user_email',$data['user_email']);
        $this->session->set_userdata('user_name',$data['user_name']);
        $this->session->set_userdata('user_age',$data['user_age']);
        $this->session->set_userdata('user_mobile',$data['user_mobile']);

        $this->load->view('user_profile.php');

      }
      else{
        $this->session->set_flashdata('error_msg', 'Error occured,Try again.');
        $this->load->view("login.php");

      }


}

public function user_profile(){
 $this->load->view('user_profile.php');

}
public function user_logout(){

  $this->session->sess_destroy();
  redirect('user/login_view', 'refresh');
}

public function tambah_data(){

      //Mendefinisikan inputan sesuai dengan tabel
    $project['name_project'] = $this->input->post('name_project');
    //Sesuaikan denganyang ada di view tambah data
    $project['link_project'] = $this->input->post('link_project');
    $project['publisher'] = $this->input->post('publisher');

    /*Membuat query untuk menampuung data yang ke tabel berdasarkan
    model tambah daa yang telah dibuat.*/
    $query = $this->user_model->tambahdata($project);

    /* Mereferensiquery dari cclass crud project dan fungsitambah data yang ada di folder model
    ->crid_project_project.php */


    //Fungsi if untuk mengembalikan halamanya ke bagian Index.php
    if ($project) {
      redirect('user/user_profile');
    }

}

  public function linkeditdata($id_project){
    $data['project'] = $this->user_model->getuser($id_project);
    $this->load->view('editView', $data);


  }

  public function update($id_project){
    $project['name_project'] = $this->input->post('nama');
    $project['link_project']= $this->input->post('kelas');
    $project['publisher'] = $this->input->post('password');

    $query = $this->user_model->editdatasiswa($project , $id_project);
    if ($query) {
      redirect('user/dataP');
    }
  }

  public function deleteproject($id_project){
    $query = $this->user_model->deleteproject($id_project);
    
    if ($query) {
      redirect('user/dataP');
  }
}

public function kirim(){

      //Mendefinisikan inputan sesuai dengan tabel
    $chat['user'] = $this->session->userdata('user_email');
    $chat['msg'] = $this->input->post('pesan');

    /*Membuat query untuk menampuung data yang ke tabel berdasarkan
    model tambah daa yang telah dibuat.*/
    $query = $this->user_model->tambahchat($chat);

    /* Mereferensiquery dari cclass crud siswa dan fungsitambah data yang ada di folder model
    ->crid_siswa.php */


    //Fungsi if untuk mengembalikan halamanya ke bagian Index.php
    if ($query) {
    redirect('user/chatV');
    }
}



}

?>
