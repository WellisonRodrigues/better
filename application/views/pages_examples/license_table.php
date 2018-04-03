<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 01/03/2018
 * Time: 23:13
 */
//echo '<pre>';
//print_r($table);
?>

<div class="container" style="margin-top: 1%;">
    <div class="row">
        <div class="col-md-6">
            <div class="text-left">
                <h3><b>Licenças Cadastradas</b></h3>
            </div>
        </div>
        <?php if ($this->session->userdata('user')['role'] != 'list'
            and $this->session->userdata('user')['role'] != 'schedule'
            and $this->session->userdata('user')['role'] != 'list_schedule'
        ) { ?>
            <div class="col-md-6">
                <div class="text-right">
                    <a href="<?php echo base_url() ?>License/new_license">
                        <button type="button" class="btn btn-indigo"> Adicionar licença</button>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
    <!--	<div class="col-md-12" style="margin-top: 1%;">-->
    <div class="row" style="margin-top: 1%;">
        <?php
        $id_table = 'teste';
        $this->perfecttable->setTableTemplate($id_table);

        //        if ($this->session->userdata('user')['role'] == 'list'
        //            or $this->session->userdata('user')['role'] == 'schedule'
        //            or $this->session->userdata('user')['role'] == 'list_schedule'
        //        ) {
        //            $this->table->set_heading(array('Nome', 'Email', 'N° Registro', 'Empresa', ''));

        //        } else {
        $this->table->set_heading(array('Qtd. Clientes', 'Qtd. list', 'Qtd. Schedule',
            'Qtd. List Schedule', 'Qtd. Company', 'Valor', '', ''));
        //        }


        if (isset($table)) {
            foreach ($table as $row) {
                foreach ($row as $subrow) {

                    $url_del = base_url() . 'License/delete/' . $subrow['id'];
                    $url_edit = base_url() . 'license/new_license/' . $subrow['id'];
                    $button_del = '<div class="text-center"><a class="delete" href="' . $url_del . '">  <b style="color: grey" class="fas fa-times"></b></a></div>';
                    $button = '<div class="text-center"><a href="' . $url_edit . '"> <b style="color: grey"> <i class="fas fa-pencil-alt"></i></b></a></div>';
                    @$company = $subrow['relationships']['sub-company-holding']['data']['id'];
                    $this->table->add_row(array(@$subrow['attributes']['qtd-master-client'],
                        @$subrow['attributes']['qtd-slave-list'],
                        @$subrow['attributes']['qtd-slave-schedule'],
                        @$subrow['attributes']['qtd-slave-list-schedule'],
                        @$subrow['attributes']['qtd-sub-company-holding'],
                        @$subrow['attributes']['value'],
                        $button, $button_del));


                }
            }
        }

        echo $this->table->generate();
        ?>


        <script>
            $(document).ready(function () {
                $('#teste').DataTable();
                $('.delete').bind('click', function () {
                    var comf = confirm('Deseja mesmo excluir?');
                    if (comf == true) {
                    } else {
                        event.preventDefault();
                    }
                });

            });

        </script>
    </div>
</div>
<!--</div>-->



