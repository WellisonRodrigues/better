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
        $params = '';

        $response = $this->restfull->cUrl($params, $endpoint, $metodo);
        $data['table'] = $response;
        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/contact_table';
        $this->load->view('structure/container', $data);


    }

    public function new_contact($idcontact = null)
    {
        if ($this->input->post('salvar') == 'salvar' and $idcontact == null) {
            $endpoint = 'api/v1/contacts';
            $metodo = 'POST';
            $params['data']['type'] = 'contacts';
            $params['data'] ['attributes'] = array(
                'email' => $this->input->post('email'),
                'age' => $this->input->post('age'),
                'first-name' => $this->input->post('first-name'),
                'last-name' => $this->input->post('last-name'),
                'childrens-num' => $this->input->post('childrens-num'),
                'childrens-age' => $this->input->post('childrens-age'),
                'marital-status' => $this->input->post('marital-status'),
                'career' => $this->input->post('career'),
                'hobby' => $this->input->post('hobby'),
                'general-notes' => $this->input->post('general-notes'),

            );

//            print_r(json_encode($params));
//            die;
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
            $data['response'] = $response;
        }
        if ($this->input->post('salvar') == null and $idcontact != '') {

            $endpoint = 'api/v1/contacts/' . $idcontact;
            $metodo = 'GET';
            $params = '';
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
//            print_r($response);
            $data['response'] = $response;
        }

        if ($this->input->post('salvar') == 'salvar' and $idcontact != null) {
            $endpoint = 'api/v1/contacts/' . $idcontact;
            $metodo = 'PUT';
            $params['data']['id'] = $idcontact;
            $params['data']['type'] = 'contacts';
            $params['data'] ['attributes'] = array(
                'email' => $this->input->post('email'),
                'age' => $this->input->post('age'),
                'first-name' => $this->input->post('first-name'),
                'last-name' => $this->input->post('last-name'),
                'childrens-num' => $this->input->post('childrens-num'),
                'childrens-age' => $this->input->post('childrens-age'),
                'marital-status' => $this->input->post('marital-status'),
                'career' => $this->input->post('career'),
                'hobby' => $this->input->post('hobby'),
                'general-notes' => $this->input->post('general-notes'),

            );
            $response = $this->restfull->cUrl($params, $endpoint, $metodo);
            $data['response'] = $response;
//            print_r($response);
//            die;
        }
        $data['menu'] = true;
        $data['view'] = 'pages_examples/contact_form';
        $this->load->view('structure/container', $data);
    }

    public
    function csv()
    {

        $endpoint = 'api/v1/contact-csv-imports';
        $metodo = 'POST';
        $params = '';

        $response = $this->restfull->cUrl($params, $endpoint, $metodo);

    }

    public
    function delete($id)
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
