<?php
/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 28/03/2018
 * Time: 14:43
 */

class Calendar extends CI_Controller {

    public function index()
    {
        $this->load->library('table');
        $this->load->library('Restfull');
        $this->load->library('PerfectTable');

        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/calendar_table';
        $this->load->view('structure/container', $data);


    }
}