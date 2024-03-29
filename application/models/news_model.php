<?php

class News_model extends CI_Model{

	public function __construct(){	

		$this->load->database();
	}
		
	public function findAllBySlug($slug = FALSE){

		if ($slug === FALSE){

			$query = $this->db->get('news');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}

	public function set_news()
{
	$this->load->helper('url');
	
	$slug = url_title($this->input->post('title'), 'dash', TRUE);
	
	$data = array(
		'title' => $this->input->post('title'),
		'slug' => $slug,
		'text' => $this->input->post('text')
	);
	
	return $this->db->insert('news', $data);
}

// 	function deletar($id) {
//     $this->db->where('id', $id);
//     return $this->db->delete('news');
// }

// 	function editar($id) {
//     $this->db->where('id', $id);
// 	return $this->db->get('news')->result();
// }

	function alterar($data) {
    $this->db->where('id', $data['id']);
    $this->db->set($data);
    return $this->db->update('news');
}


}