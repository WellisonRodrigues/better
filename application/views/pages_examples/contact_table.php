<?php
//print_r($this->session->userdata('user'));

//print_r($table);

?>
<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 01/03/2018
 * Time: 23:13
 */

?>

<div class="container" style="margin-top: 1%;">
    <div class="row">
        <div class="col-md-6">
            <div class="text-left">
                <h3><b>Contatos</b></h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="text-right">

                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-indigo"> Importar
                    contatos
                </button>
                <a href="<?php echo base_url() ?>Contact/new_contact">
                    <button type="button" class="btn btn-indigo"> Adicionar contato</button>
                </a>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
         style="display: none;">
        <div class="modal-dialog">
            <?php
            echo form_open('Contact/csv', ['role' => 'form']);
            ?>
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Importar CSV</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>CSV</label>
                        <input id="imageinput" type="file" accept="file_extension|.csv"
                               onchange="readURL(this);"/>
                    </div>
                    <input type="hidden" name="new_image" id="new_image" value="">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" name="salvar"
                           value="Salvar">
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>
    <!--	<div class="col-md-12" style="margin-top: 1%;">-->
    <div class="row" style="margin-top: 1%;">

        <?php
        $id_table = 'teste';

        $this->perfecttable->setTableTemplate($id_table);

        $this->table->set_heading(array('Nome', 'Email', 'N° Registro', 'Empresa', '', '', ''));
        foreach ($table as $row) {
            foreach ($row as $subrow) {
                $url_del = base_url() . 'Contact/delete/' . $subrow['id'];
                $button = '<div class="text-center"> <i class="fas fa-pencil-alt" style="color: grey"></i></div>';
                $button_del = '<div class="text-center"><a class="delete" href="' . $url_del . '">  <b style="color: grey" class="fas fa-times"></b></a></div>';
                $button_detail = '<div class="text-center"><b style="color: grey" class="fas fa-eye"></b></div>';
                @$company = $subrow['relationships']['sub-company-holding']['data']['id'];
                $this->table->add_row(array(@$subrow['attributes']['first-name'], @$subrow['attributes']['email'],
                    @$subrow['attributes']['register-number'], @$company,
                    $button_detail, $button, $button_del));
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

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#falseinput').attr('src', e.target.result);
                        $('#new_image').val(e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
    </div>
</div>

