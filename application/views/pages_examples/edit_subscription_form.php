<?php
/**
 * Created by PhpStorm.
 * User: welli
 * Date: 29/03/2018
 * Time: 17:34
 */
//if (isset($response)) {
//echo '<pre>';
//print_r($mensagem);
//}

?>
<div class="container" style="margin-top: 1%;">
    <div class="col-md-6">

        <div class="text-left">
            <h3><b>Editar assinatura</b></h3>
        </div>

    </div>
    <div class="col-md-12">
        <?php
        if (isset($mensagem)) {
            if (isset($mensagem['data'])) {

                echo '<div class=\'alert alert-success\' role=\'alert\'>Salvo com sucesso!</div>';

            }
            if (isset($mensagem['errors'])) {
                $erro = $mensagem['errors'][0]['detail'];
                echo "<div class='alert alert-danger' role='alert'>$erro !</div>";
            }
        }
        ?>
    </div>


    <div class="col-md-12" style="margin-top: 5%; margin-bottom: 20px">

        <?php
        //        if (isset($response['data']['id'])) {
        echo form_open('Subscription/edit_subscription/' . $id, ['role' => 'form']);
        //        }
        ?>
        <!-- Default input -->
        <div class="row">
            <div class="col-md-6">
                <label for="status">Status</label>
                <input type="text" id="status" value="<?php echo $response['data']['attributes']['status'] ?>"
                       name="status" class="form-control">
            </div>
        </div>
        <div class="text-right">
            <a href="<?php echo base_url() ?>Subscription">
                <button type="button" class="btn btn-outline-primary"> Cancelar</button>
            </a>
            <button type="submit" name="salvar" value="salvar" class="btn btn-indigo"> Salvar</button>
        </div>
        <?php
        echo form_close();
        ?>


    </div>
</div>
