<?php
class User_model extends CI_model{



public function register_user($user){


$this->db->insert('user', $user);

}

public function login_user($email,$pass){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $this->db->where('user_password',$pass);

  if($query=$this->db->get())
  {
      return $query->row_array();
  }
  else{
    return false;
  }


}

// Fungsi untuk menampilkan data siswa
  public function tampil_data(){
    $query = $this->db->get('project');//query dari table siswa
    return $query->result();
  }

  public function tampil_chat(){
    $query = $this->db->get('chat');
    return $query->result();
  }

  //Fungsi Menambahkan data dengan nama tambahdata
  public function tambahdata($project){
    return $this->db->insert('project',$project);
    //Memasukkan Data Ke Dalam Tabel Dengan Parameter siswa.

  }

  public function tambahchat($chat){
    return $this->db->insert('chat',$chat);
  }

  public function editdatasiswa($project,$id_project){
    $this->db->where('project.id_project',$id_project);
    return $this->db->update('project',$project);
    //Mengedit data yang berada di dlam tabel sisswa.

  }
  //Untuk membuat atau mengambil id atau endefinisikan data
  //yang akan dipakai dan diedit
  

  public function getuser($id_project){
    $query = $this->db->get_where('project', array('id_project' => $id_project));
    return $query->row_array();

  }

  public function getmsg(){
    $query = $this->db->get_where('chat', array('id_chat' => $id_chat));
    return $query->row_array();
  }

  //Untuk Menghapus data siswa
  public function deleteproject($id_project){
    $this->db->where('project.id_project',$id_project);
    return $this->db->delete('project');

  }

  public function deletechat($id_chat){
    $this->db->where('chat.id_chat' , $id_chat);
    return $this->db->delete('chat');
  }

public function email_check($email){

  $this->db->select('*');
  $this->db->from('user');
  $this->db->where('user_email',$email);
  $query=$this->db->get();

  if($query->num_rows()>0){
    return false;
  }else{
    return true;
  }

}


}


?>
