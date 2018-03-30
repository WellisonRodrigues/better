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

        $this->load->library('table');
        $this->load->library('Restfull');
        $this->load->library('PerfectTable');
    }

    public function index()
    {
        $endpoint = 'api/v1/sub-company-holdings';
        $metodo = 'GET';
        $params['data']['type'] = 'users';
        $params['data'] ['attributes'] = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('senha')
        );
        $response = $this->restfull->cUrl($params, $endpoint, $metodo);
        $data['company'] = $response;
        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/company_table';
        $this->load->view('structure/container', $data);


    }

    public function new_company($id = null)
    {

        if ($this->input->post('salvar') == 'salvar' and $id == null) {
            $endpoint = 'api/v1/sub-company-holdings';
            $metodo = 'POST';
            $params['data']['type'] = 'sub_company_holdings';
            $params['data'] ['attributes'] = array(
                'name' => $this->input->post('name')
            );
            $params['data'] ['relationships']['subscription']['data'] = array(
                'type' => 'subscriptions',
                'id' => $this->input->post('subscriptions')
            );
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//            print_r($response);
//            die;
            $data['response'] = $response;
        }

        $data['menu'] = true;
        $data['view'] = 'pages_examples/company_form';
        $this->load->view('structure/container', $data);
    }

    public function delete($id)
    {
        if ($id != null or $id != '') {
            $endpoint = 'api/v1/sub-company-holdings/' . $id;
            $metodo = 'DELETE';
            $params = '';
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
            redirect('Company');
        }
    }
}
