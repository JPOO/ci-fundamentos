<?php
class News extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model('news_model');
		$this->load->helper('html');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['news'] = $this->news_model->findAllBySlug();
		$data['title'] = 'News INDEX';

		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');

	}

	public function view($slug = FALSE)
	{
		$data['news'] = $this->news_model->findAllBySlug($slug);

		if(empty($data['news']))
		{
			show_404();
		}

		$data['title'] = $data['news']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');


	}

	public function create()
{
	$this->load->helper('form');
	$this->load->library('form_validation');
	
	$data['title'] = 'Create a news item';
	
	$this->form_validation->set_rules('title', 'Title', 'required');
	$this->form_validation->set_rules('text', 'text', 'required');
	
	if ($this->form_validation->run() === FALSE)
	{
		$this->load->view('templates/header', $data);	
		$this->load->view('news/create');
		$this->load->view('templates/footer');
		
	}
	else
	{
		$this->news_model->set_news();
		$this->load->view('news/success');
	}
}

	function deletar($id) {

		$this->db->where('id', $id);

	    if ($this->db->delete('news')) {
	        redirect('news');
	    } else {
	        log_message('error', 'Erro ao deletar...');
	    }
	}

	function editar($id)  {
		$this->load->helper('form');
		$this->db->where('id', $id);

		// se for post
		if(!empty($_POST)){
		    $data['title'] = $this->input->post('title');
		    $data['text'] = $this->input->post('text');
		 	    
	    	$this->db->set($data);
	    	
	    	if($this->db->update('news')){
				redirect('news');
			} else{
				log_message('error', 'error ao atualizar');
			}
		} else {

			$data['news'] =  $this->db->get('news')->row_array();

			$this->load->view('templates/header', $data);	
			$this->load->view('news/editar', $data);
			$this->load->view('templates/footer');
		}
	}

}