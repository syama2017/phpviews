<?php
defined('BASEPATH')OR exsists('no direct script access allowed');
class SignupC extends CI_controller
{
	public function fbemail()
				{
					$this->load->view('fbemail');
				}
				public function emailControl()
				{
					$this->load->view('emailerror');
				}
				public function password()
				{
					$this->load->view('passworderror');
				}
				public function home()
				{
					$this->load->view('homepage');
				}
				public function login()
				{

						//$user['email']=$this->input->post('email');
						//$user['password']=$this->input->post('password');
						//$url='http/localhost/fbsyama2/index.php/SignupC/CI_controller';
				}

	public function Signupcontrol()
	{
		//echo "hggfj";
		$user['fname']=$this->input->post('fname');
		$user['lname']=$this->input->post('lname');
		$user['email']=$this->input->post('email');
		$user['re-enteremail']=$this->input->post('re-email');
		$user['password']=$this->input->post('password');
		$user['choosefile']=$_FILES['profilepic']['name'];
		$user['profilepic_size']=$_FILES['profilepic']['size'];
		$user['Birthday']=$this->input->post('ddlyear')."-".$this->input->post('ddlmonth')."-".$this->input->post('ddlday');
		$user['gender']=$this->input->post('gender');
		print_r($user);
         $config['upload_path']   = './images/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 10000; 
         $config['max_width']     = 10024; 
         $config['max_height']    = 76800;  
         $this->load->library('upload', $config);
		 $this->load->library('session');
		 $this->session->set_userdata($user);

         if ( $this->upload->do_upload('profilepic'))
         {
            echo "uploaded";
         }
         $url='http://localhost/webservice_scv/index.php/SignupC/SignupControl';
         $options=array(
         				'http'=>array(
         				'header'=>"Content-type: application/x-www-form-urlencoded\r\n",
         				'method'=>'POST',
         				'content'=>http_build_query($user),
         				),
         			);
         $context=stream_context_create($options);
		$result=file_get_contents($url,false,$context);
		//print_r($result);
		$json=json_decode($result,true);
		print_r($json);

		if($json['response code']==301)
		{
			echo"<script>alert('first name at least 3 characters')</script>";
		}
		if($json['response code']==101)
		{
			echo"<script>alert('minimum age for joiningfacebook is 13 years')</script>";
		}
		if($json['response code']==401)
		{
			echo"<script>alert('incorrect password')</script>";
		}
		if($json['response code']==601)
		{
			echo"<script>alert('enter a valid email')</script>";
		}
		if($json['response code']==701)
		{
			echo "<script>alert('profile pic greater than 5mb)</script>";
		}


		$config = Array( 
				'protocol' => 'smtp', 
				'smtp_host' => 'ssl://smtp.gmail.com', 
				'smtp_port' => 465, 
				'smtp_user' => 'syamadamodharanmkl96@gmail.com', // here goes your mail 
				'smtp_pass' => 'ascii999', // here goes your mail password 
				'mailtype' => 'html', 
				'charset' => 'iso-8859-1', 
				'wordwrap' => TRUE
				); 
				//$this->email->initialize($config);    
				$message = 'hiiiiii'; 
				$this->load->library('email', $config); 
				$this->email->set_newline("\r\n"); 
				$this->email->from('syamadamodharanmkl96@gmail.com'); // here goes your mail 
				$this->email->to($user['email']);// here goes your mail 
				$this->email->subject('Resume from JobsBuddy'); 
				$this->email->message($message); 
				if($this->email->send()) 
				{ 
				echo 'Email sent.'; 
				$this->load->view('fbemail');
				} 
				else 
				{ 
				show_error($this->email->print_debugger()); 
				}		
	}
    
}
?>