<?php

/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 04/03/2018
 * Time: 21:40
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function index()
    {

        $data['menu'] = false;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/login_form';
        $this->load->view('structure/container', $data);
    }

    public function sign_in()
    {
        $this->load->library('Restfull');

//		print_r($this->input->post());
        if ($this->input->post('email') and $this->input->post('senha')) {
            $endpoint = 'auth/sign_in';
            $metodo = 'POST';
            $params['data']['type'] = 'users';
            $params['data'] ['attributes'] = array('email' => $this->input->post('email'), 'password' => $this->input->post('senha'));
            $response = $this->restfull->login($params, $endpoint, $metodo);
//			$ob = json_decode($response['response']);
            $meta = $response['data']['meta'];
            if (isset($response["response"]->errors[0])) {
                $data['alert'] =
                    [
                        'type' => 'erro',
                        'message' => 'Usuário/Senha inválidos.'
                    ];
                $this->session->set_flashdata('alert', $data['alert']);
                redirect('Login');
            } else {
                $data['alert'] =
                    [
                        'type' => 'sucesso',
                        'message' => 'Usuário logado com sucesso.'
                    ];

                $userAPI = array('auth_token' => $meta['auth_token'], 'auth_email' => $meta['auth_email'],
                    'role' => $response['data']['attributes']['role']);
                $this->session->set_flashdata('alert', $data['alert']);
                $this->session->set_userdata('user', $userAPI);
                redirect('Painel_admin');
            }
        }


    }

    public function sign_up()
    {

    }

}
