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
            <h3><b>Cadastro de Empresa</b></h3>
        </div>

    </div>
    <div class="col-md-12">
        <?php
        if (isset($mensagem)) {
            if (isset($mensagem['data']['id'])) {

                echo '<div class=\'alert alert-success\' role=\'alert\'>Salvo com sucesso!</div>';

            }
        }
        ?>
    </div>


    <div class="col-md-6" style="margin-top: 5%; margin-bottom: 20px">
        <?php
        echo form_open('Company/new_company', ['role' => 'form']);
        ?>
        <!-- Default input -->
        <label for="exampleForm2">Nome da Empresa</label>
        <input type="text" id="exampleForm2" name="name" class="form-control">
        <label for="exampleForm">Assinaturas</label>
        <select class="form-control" id="exampleForm" name="subscriptions" required>
            <?php
            echo "<option> -- Escolha uma opção -- </option>";
            foreach ($subscribe as $line) {
                foreach ($line as $row) {
                    $code = $row['attributes']['recurrency-code'];
                    $ide = $row['id'];
                    echo "<option value='$ide'> $code </option>";
                }
            }
            ?>

        </select>
        <br>
        <div class="text-right">
            <a href="<?php echo base_url() ?>Company">
                <button type="button" class="btn btn-outline-primary"> Cancelar</button>
            </a>
            <button type="submit" name="salvar" value="salvar" class="btn btn-indigo"> Salvar</button>
        </div>
        <?php
        echo form_close();
        ?>


    </div>
</div>
