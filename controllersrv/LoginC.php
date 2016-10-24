<?php
	/**
	* 
	*/
	class LoginC extends CI_Controller
	{

		
		public function loginControl()
			{
				$user['vchr_user_email']=$this->input->get_post('email');
				$user['vchr_user_password']=$this->input->get_post('password');
				#print_r($user);
				$this->load->model('LoginM');
				$result=$this->LoginM->login_Model($user);
				#print_r($result);
				echo json_encode($result);
		
			}
			/*public function store()
			{
				$user=array('enrollment'=>1,'name'=>'jhon','city'=>'kannur','mobileno'=>'666536','dob'=>'1995-1-18','status'=>'good');
				$this->load->model('SignupM');
				ini_set('max_execution_time',50000);
				for ($i=0; $i=1000000 ; $i++) { 
					$this->SignupM->ProcedureModel($user);
				}
			}*/
	}   
?>