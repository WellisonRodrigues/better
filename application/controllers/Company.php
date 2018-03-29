<?php

/**
 * Created by PhpStorm.
 * User: welli
 * Date: 28/03/2018
 * Time: 23:45
 */
class Company extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata("user")) {
			redirect('sair');
		}
	}

	public function index()
	{


		$this->load->library('table');
		$this->load->library('Restfull');
		$this->load->library('PerfectTable');
		$endpoint = 'api/v1/sub-company-holdings';
		$metodo = 'GET';
		$params['data']['type'] = 'users';
		$params['data'] ['attributes'] = array('email' => $this->input->post('email'), 'password' => $this->input->post('senha'));
		$response = $this->restfull->cUrl($params, $endpoint, $metodo);
		$data['company'] = $response;
		$data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
		$data['view'] = 'pages_examples/company_table';
		$this->load->view('structure/container', $data);


	}

}
