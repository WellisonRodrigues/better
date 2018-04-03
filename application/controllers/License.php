<?php

/**
 * Created by PhpStorm.
 * User: welli
 * Date: 28/03/2018
 * Time: 23:37
 */
class License extends CI_Controller
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
        $endpoint = 'api/v1/licenses';
        $metodo = 'GET';
        $params = '';
        $response = $this->restfull->cUrl($params, $endpoint, $metodo);
        $data['table'] = $response;
        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/license_table';
        $this->load->view('structure/container', $data);


    }


    public function delete($id)
    {
        if ($id != null or $id != '') {
            $endpoint = 'api/v1/licenses/' . $id;
            $metodo = 'DELETE';
            $params = '';
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
            redirect('License');
        }
    }

    public function new_license($id = null)
    {
        if ($this->input->post('salvar') == 'salvar' and $id == null) {
            $endpoint = 'api/v1/licenses';
            $metodo = 'POST';
            $params['data']['type'] = 'licenses';
            $params['data'] ['attributes'] = array(

                'qtd-master-client' => $this->input->post('qtd-master-client'),
                'qtd-slave-list' => $this->input->post('qtd-slave-list'),
                'qtd-slave-schedule' => $this->input->post('qtd-slave-schedule'),
                'qtd-slave-list-schedule' => $this->input->post('qtd-slave-list-schedule'),
                'value' => $this->input->post('value')
            );

            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//            print_r($response);
            $data['response'] = $response;
            $data['mensagem'] = $response;
        }
        if ($this->input->post('salvar') == null and $id != '') {

            $endpoint = 'api/v1/licenses/' . $id;
            $metodo = 'GET';
            $params = '';
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//            print_r($response);
            $data['response'] = $response;

        }

        if ($this->input->post('salvar') == 'salvar' and $id != null) {
            $endpoint = 'api/v1/licenses/' . $id;
            $metodo = 'PUT';
            $params['data']['id'] = $id;
            $params['data']['type'] = 'licenses';
            $params['data'] ['attributes'] = array(

                'qtd-master-client' => $this->input->post('qtd-master-client'),
                'qtd-slave-list' => $this->input->post('qtd-slave-list'),
                'qtd-slave-schedule' => $this->input->post('qtd-slave-schedule'),
                'qtd-slave-list-schedule' => $this->input->post('qtd-slave-list-schedule'),
                'qtd-slave-list-schedule' => $this->input->post('qtd-slave-list-schedule'),
                'value' => $this->input->post('value')
            );

            $response = $this->restfull->cUrl($params, $endpoint, $metodo);

            $data['response'] = $response;
            $data['mensagem'] = $response;

        }

        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/license_form';
        $this->load->view('structure/container', $data);
    }

}
