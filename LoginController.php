<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {
 function __construct(){
 	parent::__construct();
	$this->load->model('IsazaModel'); 
 }

	public function index()
	{ 
		
		$this->load->view('IsazaView');

	} 


	public function login ()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE)
        {
                $this->index('IsazaView');
        }else
        {
        $var=$this->IsazaModel->getuser();

         if($var){
         	$data['thanks']='Welcome To the Main Page';
         	$this->load->view('IsazaView',$data);
         }else{
         $this->index();
         }
        }

       

	}
}
