<?php
class Data extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	
	function post_parent ($params = array()){
		$this->db->select('ID,TITLE,SUMMARY,DESCRIPTION,P_ID');
		$this->db->from('m_post');
		$this->db->order_by('ORDER');
		
		if (isset($params['ID']) && !(empty($params['ID']))){
			$this->db->where('P_ID',$params['ID']);
		}else{
			$this->db->where('P_ID', NULL);
			$this->db->or_where('P_ID', 0);
		}
		
		return $this->db->get()->result();
	}
	
	function post_detail ($params = array()){
		$this->db->select('ID,P_ID,TITLE,SUMMARY,DESCRIPTION,NEXT_ID');
		$this->db->from('m_post');
		$this->db->limit(1);
		
		if (isset($params['ID']) && !(empty($params['ID']))){
			$this->db->where('ID',$params['ID']);
			return $this->db->get()->result();
		}else{
			return array();
		}
	}
	
	function post_list ($params = array()){
		$this->db->select('ID,P_ID,TITLE');
		$this->db->from('m_post');
	
		return $this->db->get()->result();
	}
	
	function post_search ($params = array()){
		$this->db->select('ID,P_ID,TITLE,SUMMARY,DESCRIPTION');
		$this->db->from('m_post');
		$this->db->group_by('ID');
		
		if (isset($params) && !(empty($params))){
			$this->db->like('KEYWORD',mysql_real_escape_string($params));
			
			$params = explode(' ', $params);
			
			if (count($params)){
				foreach ($params as $key => $val){
					$this->db->or_like('KEYWORD',mysql_real_escape_string($val));
				}
			}
			
			return $this->db->get()->result();
		}else{
			return array();
		}
	}
}