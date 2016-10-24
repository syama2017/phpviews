<?php
class FriendC extends CI_Controller
	{
		function search($data){
			
		$this->load->model('searchM');
				$result=$this->searchM->search_Model($data);
				print_r($result);
			}
	}


?>