<?php

/**
 * Created by PhpStorm.
 * User: welli
 * Date: 28/03/2018
 * Time: 23:37
 */
class Users extends CI_Controller
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
		$endpoint = 'api/v1/users';
		$metodo = 'GET';
		$params['data']['type'] = 'users';
		$params['data'] ['attributes'] = array('email' => $this->input->post('email'), 'password' => $this->input->post('senha'));
		$response = $this->restfull->cUrl($params, $endpoint, $metodo);
		$data['table'] = $response;
		$data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
		$data['view'] = 'pages_examples/painel_home';
		$this->load->view('structure/container', $data);


	}


	public function delete($id)
	{
		if ($id != null or $id != '') {
			$endpoint = 'api/v1/users/' . $id;
			$metodo = 'DELETE';
			$params = '';
			$response = $this->restfull->cUrl($params, $endpoint, $metodo);
			redirect('Users');
		}
	}

	public function new_user()
	{
		$data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
		$data['view'] = 'pages_examples/user_form';
		$this->load->view('structure/container', $data);
	}

}
