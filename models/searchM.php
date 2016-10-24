<?php

	class searchM extends CI_Model
	{
		
	public function search_Model($data)
		{
			echo "ddhu";
			$query=$this->db
			            ->select('*')
			            ->from('user')
			            ->where($data)
			            ->get();
			//$result=mysql_fetch_array($query);
			$result=$query->result_array();
			        return $query;
			    }
			}
?>