<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Login extends CI_Controller
{

	public function index()
	{
		$this->load->view('signup2');
	}

	public function logincontrol()
	{
		$user['email']=$this->input->post('email');
		$user['password']=$this->input->post('password');
		
		$url='http://localhost/webservice_scv/index.php/LoginC/loginControl';
		//print_r($user);
		//$url='http://api.baabtra.com/LoginService/login.php';
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


		//print_r($json['response_code']);
		#echo $json[0]['ResponseCode']
		
		if ($json['response_code']==200)
		{ 
			$this->load->view('homepage',$json);
		}
		if ($json['response_code']==500)
		{
			$this->load->view('wrongpassword',$json);
		}
		if ($json['response_code']==404)
		{
			$this->load->view('wronguserid',$json);
		}

	}

}
?>