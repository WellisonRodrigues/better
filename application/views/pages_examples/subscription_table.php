<?php
/**
 * Created by PhpStorm.
 * User: welli
 * Date: 28/03/2018
 * Time: 23:46
 */
//print_r($company)
?>

<div class="container" style="margin-top: 1%; margin-bottom: 2%">
    <div class="row">
        <div class="col-md-6">
            <div class="text-left">
                <h3><b>Assinaturas Cadastradas</b></h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-right">
                <a href="<?php echo base_url() ?>Subscription/new_subscription">
                    <button type="button" class="btn btn-indigo">
                        Cadastrar assinatura
                    </button>
                </a>
            </div>
        </div>
    </div>
    <!--	<div class="col-md-12" style="margin-top: 1%;">-->
    <div class="row" style="margin-top: 1%;">

        <?php
        $id_table = 'teste';
        $this->perfecttable->setTableTemplate($id_table);
        $this->table->set_heading(array('Status', 'Codigo', ''));
        foreach ($company as $row) {
            foreach ($row as $subrow) {
//				print_r($subrow);
                $url_del = base_url() . 'Subscription/edit_subscription/' . $subrow['id'];
                $button = '<div class="text-center"> <b style="color: grey"> <i class="fas fa-pencil-alt"></i></b></div>';
                $button_del = '<div class="text-center"><a class="delete" href="' . $url_del . '">  <b style="color: grey" class="fas fa-pencil-alt"></b></a></div>';
                $this->table->add_row(array($subrow['attributes']['status'], $subrow['attributes']['recurrency-code'], $button_del));


            }
        }
        echo $this->table->generate();
        ?>


        <script>
            $(document).ready(function () {
                $('#teste').DataTable();
                //
                // $('.delete').bind('click', function () {
                //     var comf = confirm('Deseja mesmo excluir?');
                //     if (comf == true) {
                //     } else {
                //         event.preventDefault();
                //     }
                // });
            });
        </script>
    </div>
</div>
<!--</div>-->
