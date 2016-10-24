<?php
	/**
	* 
	*/
	class LoginM extends CI_Model
	{
		
	public function login_Model($data)
		{
			//echo "ddhu";
			$query=$this->db
			            ->select('*')
			            ->from('user')
			            ->where($data)
			            ->get();
			//$result=mysql_fetch_array($query);
			$result=$query->result_array();
			#print_r($result);
			if($query->num_rows()==1)
			{
				$json=array('response_code'=>200,'message'=>'success','fname'=>$result[0]['vchr_user_fname'],'lname'=>$result[0]['vchr_user_lname'],'email'=>$result[0]['vchr_user_email'],'profilepicture'=>$result[0]['vchr_user_profilepicture']);
					return $json;
			}
			else
			{
			$query=$this->db
						->select('*')
						->from('user')
						->where('vchr_user_email',$data['vchr_user_email'])
						->get();
				$result=$query->result_array();

				if($query->num_rows()==1)
				{		
					$json=array('response_code'=>500,'message'=>'wrongpassword','fname'=>$result[0]['vchr_user_fname'],'lname'=>$result[0]['vchr_user_lname'],'email'=>$result[0]['vchr_user_email'],'profilepicture'=>$result[0]['vchr_user_profilepicture']);
				    return $json;
				}
				else
				{

					$json=array('response_code'=>404,'message'=>'wrongemailid and wronpassword');
					return $json;
				}
			}
		}
	}
 ?>