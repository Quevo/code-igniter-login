<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginModel extends CI_Model {

public function getuser(){
	  $name=$this->input->post('name');
      $password= sha1($this->input->post('password'));
      $this->db->where('name',$name);
      $this->db->where('password',$password);
      $query=$this->db->get('users');

      if($query->num_rows()==1){
      	$row=$query->row();
      	$userdata=array('name'=>$name,'loggedin'=>true,'userid'=>$row->id);
      	$this->session->set_userdata($userdata);
      	return true;

      } else {
      	return false;
}
}







}
?>
