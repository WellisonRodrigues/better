<?php
/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 28/03/2018
 * Time: 14:43
 */

class Calendar extends CI_Controller
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

        $data['menu'] = true;  // Menu true significa que a pagina tera o menu principal, false deixa a pagina sem menu(menu = header + navbar)
        $data['view'] = 'pages_examples/calendar_table';
        $this->load->view('structure/container', $data);


    }

    public function get_calendar()
    {
        $endpoint = 'api/v1/appointments';
        $metodo = 'GET';
        $params = '';
        $response = $this->restfull->cUrl($params, $endpoint, $metodo);
        $table = $response;
//        print_r($table);
        if ($table['data'] != null) {
            foreach ($table as $data) {
                foreach ($data as $row) {
                    $new[] = array('title' => $row['attributes']['action'],
                        'start' => $row['attributes']['start'],
                        'end' => $row['attributes']['finish']

                    );
                }

            }
            print_r(json_encode($new));
        } else {
            $new = array();
            print_r(json_encode($new));
        }
    }
}