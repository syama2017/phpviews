<?php
	/**
	* 
	*/
	class SignupM extends CI_Model
	{
		
		public function SignupModel($data)
		{
			 //print_r($data);
			foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
				

			}
			$values=implode(',',$data);
			
			$this->db->query("call insert_user({$values})");
			//$this->db->query("call insert_user('jose','kk','eefff','dffg','img','26','male',1)");
			
		}
		public function ProcedureModel($data)
		{
			foreach (array_keys($data) as $i)
			{
				$data[$i]=$this->db->escape($data[$i]);
			}
			$values=implode(',',$data);

			$this->db->query("call student({$values})");
		}
		/*public function StoreModel($data)
			{
				$data[$i]=$this->db->escape($data[$i]);
			}
			$values=implode(',',$data);

			$this->db->query("call grade({$values})");*/
	}
 ?>