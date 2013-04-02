<?php

class Clients_model extends CI_Model{

	public function __construct(){	

		$this->load->database();
	}
		
	public function findAllBySlug($slug = FALSE){

		if ($slug === FALSE){

			$query = $this->db->get('clients');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('clients', array('slug' => $slug));
		return $query->row_array();
	}

	public function set_clients()
	{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('name'), 'dash', TRUE);
	
	$data = array(
		'name' => $this->input->post('name'),
		'city' => $this->input->post('city')
	);
	
	return $this->db->insert('clients', $data);
}
}