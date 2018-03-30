<?php

/**
 * Created by PhpStorm.
 * User: welli
 * Date: 29/03/2018
 * Time: 18:53
 */
class Contact extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("user")) {
			redirect('sair');

		}
		$this->load->library('table');
		$this->load->library('Restfull');
		$this->load->library('PerfectTable');
	}

	public function index()
	{


		$endpoint = 'api/v1/contacts';
		$metodo = 'GET';
		$params['data']['type'] = 'users';
		$params['data'] ['attributes'] = array('email' => $this->input->post('email'), 'password' => $this->input->post('senha'));
		$response = $this->restfull->cUrl($params, $endpoint, $metodo);
		$data['table'] = $response;
		$data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
		$data['view'] = 'pages_examples/contact_table';
		$this->load->view('structure/container', $data);


	}

	public function new_contact()
	{
		$data['menu'] = true;
		$data['view'] = 'pages_examples/contact_form';
		$this->load->view('structure/container', $data);
	}

	public function csv()
	{

		$endpoint = 'api/v1/contact-csv-imports';
		$metodo = 'POST';
		$params = '';

		$response = $this->restfull->cUrl($params, $endpoint, $metodo);

	}

	public function delete($id)
	{
		if ($id != null or $id != '') {
			$endpoint = 'api/v1/contacts/' . $id;
			$metodo = 'DELETE';
			$params = '';
			$response = $this->restfull->cUrl($params, $endpoint, $metodo);
			redirect('Contact');
		}
	}
}
