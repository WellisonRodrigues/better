<?php
/**
 * Created by PhpStorm.
 * User: welli
 * Date: 29/03/2018
 * Time: 17:34
 */
//if (isset($response)) {
//    print_r($this->session->userdata("user"));
//}
//print_r($mensagem);

$title = 'Cadastro de Licenças';
$false = true;

?>
<div class="container" style="margin-top: 1%;">
    <div class="row">
        <div class="col-md-12">

            <div class="text-left">
                <h3><b><?php echo $title ?></b></h3>
            </div>

        </div>
        <div class="col-md-12">
            <?php if (isset($mensagem['data'])) {

                echo '<div class=\'alert alert-success\' role=\'alert\'>Salvo com sucesso!</div>';

            } ?>

            <?php if (isset($mensagem['errors'][0]['detail'])) {
                $erro = $mensagem['errors'][0]['detail'];
                echo "<div class='alert alert-danger' role='alert'>$erro!</div>";

            } ?>
        </div>
    </div>
    <br>
    <?php
    if (isset($response['data']['id'])) {
        echo form_open('License/new_license/' . $response['data']['id'], ['role' => 'form']);
    } else {
        echo form_open('License/new_license', ['role' => 'form']);
    } ?>

    <div class="form-group">

        <div class="row">
            <div class="col-md-6">
                <label for="qtd-master-client">Qtd Clientes Masters</label>
                <input type="number" id="qtd-master-client" name="qtd-master-client"
                       value="<?php echo @$response['data']['attributes']['qtd-master-client'] ?>" required
                       class="form-control">
            </div>


            <div class="col-md-6">
                <label for="qtd-slave-list">Qtd Slave List</label>
                <input type="number" id="qtd-slave-list" name="qtd-slave-list"
                       value="<?php echo @$response['data']['attributes']['qtd-slave-list'] ?>" required
                       class="form-control">
            </div>

            <div class="col-md-6">
                <label for="qtd-slave-schedule">Qtd Slave Schedule</label>
                <input type="number" id="qtd-slave-schedule" name="qtd-slave-schedule"
                       value="<?php echo @$response['data']['attributes']['qtd-slave-schedule'] ?>" required
                       class="form-control">
            </div>
            <div class="col-md-6">
                <label for="qtd-slave-list-schedule">Qtd List Schedule</label>
                <input type="number" id="qtd-slave-list-schedule" name="qtd-slave-list-schedule"
                       value="<?php echo @$response['data']['attributes']['qtd-slave-list-schedule'] ?>" required
                       class="form-control">
            </div>
            <div class="col-md-6">
                <label for="value">Valor</label>
                <input type="number" id="value" name="value"
                       value="<?php echo @$response['data']['attributes']['value'] ?>" required
                       class="form-control">
            </div>

        </div>
        <div class="text-right">
            <a href="<?php echo base_url() ?>License">
                <button type="button" class="btn btn-outline-primary"> Cancelar</button>
            </a>
            <button type="submit" class="btn btn-indigo" value="salvar" name="salvar"> Salvar</button>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>
