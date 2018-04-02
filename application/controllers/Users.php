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
        $params = '';
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

    public function new_user($id = null)
    {
        if ($this->input->post('salvar') == 'salvar' and $id == null) {
            $endpoint = 'api/v1/users';
            $metodo = 'POST';
            $params['data']['type'] = 'users';
            $params['data'] ['attributes'] = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'register-number' => $this->input->post('register-number'),
                'role' => $this->input->post('role'),
                'password' => $this->input->post('password')
            );
            $params['data'] ['relationships']['sub-company-holding']['data'] = array(
                'type' => 'sub_company_holdings',
                'id' => $this->input->post('sub_company_holdings')
            );
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//            print_r($response);
            $data['response'] = $response;
            $data['mensagem'] = $response;
        }
        if ($this->input->post('salvar') == null and $id != '') {

            $endpoint = 'api/v1/users/' . $id;
            $metodo = 'GET';
            $params = '';
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//            print_r($response);
            $data['response'] = $response;

        }

        if ($this->input->post('salvar') == 'salvar' and $id != null) {
            $endpoint = 'api/v1/users/' . $id;
            $metodo = 'PUT';
            $params['data']['id'] = $id;
            $params['data']['type'] = 'users';
            $params['data'] ['attributes'] = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'register-number' => $this->input->post('register-number'),
//                    'role' => $this->input->post('role'),
//                    'password' => $this->input->post('password')
            );
                $params['data'] ['relationships']['sub-company-holding']['data'] = array(
                    'type' => 'sub_company_holdings',
                    'id' => $this->input->post('sub_company_holdings')
                );
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);

            $data['response'] = $response;
            $data['mensagem'] = $response;

        }

        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/user_form';
        $this->load->view('structure/container', $data);
    }

}
