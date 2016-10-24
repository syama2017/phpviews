<?php
	/**
	* 
	*/
	class SignupC extends CI_Controller
	{	
		public function SignupControl()
			{
		$user['firstname']=$this->input->get_post('fname');
		$user['surname']=$this->input->get_post('lname');
		$user['mobile number or email address']=$this->input->get_post('email');
		$reemail=$insrt['re-enter mobile number or email address']=$this->input->get_post('re-enteremail');
		$user['new password']=$this->input->get_post('password');
		$user['profilepicture']=$this->input->get_post('choosefile');
		$insrt['filesize']=$this->input->get_post('profilepic_size');
		$user['Birthday']=$this->input->get_post('birthday');
		$user['gender']=$this->input->get_post('gender');
		$user['active']='1';
		//print_r($user);
		$email=$user['mobile number or email address']=$this->input->get_post('email');
		$flsze=$insrt['filesize']=$this->input->get_post('file');
		$psswd=$user['new password']=$this->input->get_post('password');
		$date1=$user['Birthday']=$this->input->get_post('Birthday');

		//$url='http://localhost/webservice_scv/index.php/SignupC/SignupControl';
				//print_r($user);
				 $date2= date('Y-m-d');

					$diff = abs(strtotime($date2) - strtotime($date1));

					$years = floor($diff / (365*60*60*24));
					$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
					$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
					//printf("%d years, %d months, %d days\n", $years, $months, $days);
					  
			
					  $user1=strlen($user['firstname']);
					  //echo $user;
					  if($user1>3)
					{
						//echo "syama";
					}
					$pass1=substr($psswd,0,1);
					$pass2=substr($psswd,1,1);
					$pass3=substr($psswd,2,1);
					$pass4=substr($psswd,3,1);
					$pass5=substr($psswd,4,1);
					$pass6=substr($psswd,-3,1);
					$pass7=substr($psswd,6,1);
						//echo $pass7;
						if (($pass6)) 
						{
							//echo "ff";# code...
						}
					$pass8=substr($psswd,7,2);
						if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $psswd))
						{
		
						}
					/*if($email=$reemail)
					{
						// echo "hg";
					}
					if($flsze>5000)
					{
						//echo "df";
					}
					else
					{
						//echo "df";
					}*/
					if($user1<3)
					{
						$json=array('response code'=>301,'messge'=>'first name at least 3 characters');
						echo json_encode($json);
					}
					else
					{
						if($years<13)
						{
							$json=array('response code'=>101,'message'=>'minimum age for joining facebook is 13 years');
							echo json_encode($json);
						}
						else{
							if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $psswd))
							{
								$json=array('response code'=>401,'message'=>' incorrect password');
									echo json_encode($json);
							}
						else{
								if($email!==$reemail)
								{
									$json=array('response code'=>601,'message'=>'enter a valid email');
									echo json_encode($json);
								}
						else{
								if($flsze>5000)
								{
									$json=array('response code'=>701,'message'=>'profile pic greater than 5mb');
									echo json_encode($json);
								}

								else
								{
									$this->load->model('SignupM');
									$result=$this->SignupM->SignupModel($user);

								}
							
							}
						}
						}
					}
			//$this->load->model('SignupM');
			//$result=$this->SignupM->SignupModel
			}
	}  
	?>