<?php

/**
 * Created by PhpStorm.
 * User: welli
 * Date: 28/03/2018
 * Time: 23:45
 */
class Subscription extends CI_Controller
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
        $endpoint = 'api/v1/subscriptions';
        $metodo = 'GET';
        $params = '';
        $response = $this->restfull->cUrl($params, $endpoint, $metodo);
        $data['company'] = $response;
        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/subscription_table';
        $this->load->view('structure/container', $data);


    }

//    public function get_subscription()
//    {
//        $endpoint = 'api/v1/sub-company-holdings';
//        $metodo = 'GET';
//        $params['data']['type'] = 'users';
//        $params['data'] ['attributes'] = array(
//            'email' => $this->input->post('email'),
//            'password' => $this->input->post('senha')
//        );
//        $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//        $data['company'] = $response;
//        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
//        $data['view'] = 'pages_examples/sub';
//        $this->load->view('structure/container', $data);
//    }

    public function new_subscription()
    {

        if ($this->input->post('salvar') == 'salvar') {
            $endpoint = 'api/v1/subscriptions';
            $metodo = 'POST';
            $params['data']['type'] = 'subscriptions';
            $params['data'] ['attributes'] = array(
//                'name' => $this->input->post('name'),
                "card-name" => $this->input->post('card-name'),
                "card-number" => $this->input->post('card-number'),
                "card-code" => $this->input->post('card-code'),
                "card-validate" => $this->input->post('card-validate')
            );
            $params['data'] ['relationships']['license']['data'] = array(
                'type' => 'licenses',
                'id' => $this->input->post('licenses')
            );
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//            print_r($response);
//            die;
            $data['response'] = $response;
            $data['mensagem'] = $response;


        }


        $newpoint = 'api/v1/licenses';
        $newmetodo = 'GET';
        $newparams = '';
        $newresponse = $this->restfull->cUrl($newparams, $newpoint, $newmetodo);
        $data['licenses'] = $newresponse;

        $data['menu'] = true;
        $data['view'] = 'pages_examples/subscription_form';
        $this->load->view('structure/container', $data);
    }

    public function edit_subscription($id)
    {
        $data['id'] = $id;
        if ($this->input->post('salvar') == null and $id != '') {

            $endpoint = 'api/v1/subscriptions/' . $id;
            $metodo = 'GET';
            $params = '';
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//            print_r($response);
            $data['response'] = $response;
        }

        if ($this->input->post('salvar') == 'salvar' and $id != null) {
            $endpoint = 'api/v1/subscriptions/' . $id;
            $metodo = 'PUT';
            $params['data']['id'] = $id;
            $params['data']['type'] = 'subscriptions';
            $params['data'] ['attributes'] = array(
//                'name' => $this->input->post('name'),
                "status" => $this->input->post('status'),
            );
//            $params['data'] ['relationships']['license']['data'] = array(
//                'type' => 'licenses',
//                'id' => $this->input->post('licenses')
//            );
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
            $data['response'] = $response;
            $data['mensagem'] = $response;
//            print_r($response);
//            die;
        }

        $data['menu'] = true;
        $data['view'] = 'pages_examples/edit_subscription_form';
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
