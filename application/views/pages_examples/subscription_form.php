<?php
/**
 * Created by PhpStorm.
 * User: welli
 * Date: 29/03/2018
 * Time: 17:34
 */
//if (isset($response)) {
//echo '<pre>';
//print_r($response);
//}

?>
<div class="container" style="margin-top: 1%;">
    <div class="col-md-6">

        <div class="text-left">
            <h3><b>Cadastro de assinaturas</b></h3>
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
        if (isset($response['data']['id'])) {
            echo form_open('Subscription/new_subscription/' . $response['data']['id'], ['role' => 'form']);
        } else {
            echo form_open('Subscription/new_subscription', ['role' => 'form']);
        } ?>
        <!-- Default input -->
        <div class="row">
            <div class="col-md-6">
                <label for="card-name">Nome do cartão</label>
                <input type="text" id="card-name" name="card-name" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="card-number">Número do cartão</label>
                <input type="text" id="card-number" name="card-number" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="card-code">Codígo do cartão
                </label>
                <input type="text" id="card-code" name="card-code" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="card-validate">Validade do cartão
                </label>
                <input type="text" id="card-validate" name="card-validate" class="form-control">
            </div>
        </div>

        <label for="exampleForm">Liçensas</label>
        <select class="form-control" id="exampleForm" name="licenses" required>
            <!--            "": "Inscrição Gui",-->
            <!--            "": "1234567",-->
            <!--            "": "123",-->
            <!--            "": "12/2021"-->
            <?php
            echo "<option> -- Escolha uma opção -- </option>";
            foreach ($licenses as $line) {
                foreach ($line as $row) {
                    $code = $row['attributes']['value'];
                    $ide = $row['id'];
                    echo "<option value='$ide'> $code </option>";
                }
            }
            ?>

        </select>
        <br>
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
