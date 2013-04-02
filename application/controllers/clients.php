<?php
class Clients extends CI_Controller{

		public function __construct()
		{

			parent:: __construct();
			$this->load->model('clients_model');
			$this->load->helper('html');
			$this->load->helper('url');
		}

		public function index()
		{
			$data['clients'] = $this->clients_model->findAllBySlug();
			$data['title'] = 'Clientes';

			$this->load->view('templates/header', $data);
			$this->load->view('clients/index', $data);
			$this->load->view('templates/footer');

		}

		function deletar($id) {

		$this->db->where('id', $id);

	    if ($this->db->delete('clients')) {
	        redirect('clients');
	    } else {
	        log_message('error', 'Erro ao deletar...');
	    }
	}

		public function create()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			
			$data['name'] = 'Create a news item';
			
			$this->form_validation->set_rules('name', 'name', 'required');
			$this->form_validation->set_rules('city', 'city', 'required');
			
			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('templates/header', $data);	
				$this->load->view('clients/create');
				$this->load->view('templates/footer');
				
			}
			else
			{
				$this->clients_model->set_clients();
				$this->load->view('clients/success');
			}
		}

		function editar($id)  {
			$this->load->helper('form');
			$this->db->where('id', $id);

			// se for post
			if(!empty($_POST)){
			    $data['name'] = $this->input->post('name');
			    $data['city'] = $this->input->post('city');
			 	    
		    	$this->db->set($data);
		    	
		    	if($this->db->update('clients')){
					redirect('clients');
				} else{
					log_message('error', 'error ao atualizar');
				}
			} else {

				$data['clients'] =  $this->db->get('clients')->row_array();

				$this->load->view('templates/header', $data);	
				$this->load->view('clients/editar', $data);
				$this->load->view('templates/footer');
			}
		}

		function view($id){

			$this->load->helper('form');
			$this->db->where('id', $id);

		}

	}