<?php

/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 28/03/2018
 * Time: 11:10
 */
class Home_site extends CI_Controller
{
    public function index()
    {

        $data['menu'] = false;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/site';
        $this->load->view('structure/container', $data);

    }

    public function sobre()
    {
        $data['menu'] = false;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/sobre';
        $this->load->view('structure/container', $data);
    }
    public function funciona()
    {
        $data['menu'] = false;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/funciona';
        $this->load->view('structure/container', $data);
    }
 public function baixar()
    {
        $data['menu'] = false;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/baixar';
        $this->load->view('structure/container', $data);
    }

}