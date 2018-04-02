<?php
/**
 * Created by PhpStorm.
 * User: welli
 * Date: 29/03/2018
 * Time: 17:34
 */
//if (isset($response)) {
//    print_r($response);
//}

?>
<div class="container" style="margin-top: 1%;">
    <div class="row">
        <div class="col-md-12">

            <div class="text-left">
                <h3><b>Cadastro de contato</b></h3>
            </div>

        </div>
        <div class="col-md-12">
            <?php if (isset($mensagem['data'])) {

                echo '<div class=\'alert alert-success\' role=\'alert\'>Salvo com sucesso!</div>';

            } ?>
        </div>
    </div>
    <br>
    <?php
    if (isset($response['data']['id'])) {
        echo form_open('Contact/new_contact/' . $response['data']['id'], ['role' => 'form']);
    } else {
        echo form_open('Contact/new_contact', ['role' => 'form']);
    } ?>

    <div class="form-group">


        <!-- Default input -->

        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Prmeiro nome</label>
                <input type="text" id="exampleForm2" name="first-name"
                       value="<?php echo @$response['data']['attributes']['first-name'] ?>" required
                       class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Segundo nome</label>
                <input type="text" id="exampleForm2"
                       value="<?php echo @$response['data']['attributes']['last-name'] ?>"
                       name="last-name" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">E-mail</label>
                <input type="email"
                       value="<?php echo @$response['data']['attributes']['email'] ?>"
                       id="exampleForm2" name="email" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Idade</label>
                <input type="number" id="exampleForm2" name="age"
                       value="<?php echo @$response['data']['attributes']['age'] ?>" required
                       class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Qtd Filhos</label>
                <input type="number" id="exampleForm2" name="childrens-num"
                       value="<?php echo @$response['data']['attributes']['childrens-num'] ?>"
                       class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Idade dos Filhos( , )</label>
                <input type="text" id="exampleForm2" name="childrens-age"
                       value="<?php echo @$response['data']['attributes']['childrens-age'] ?>"
                       class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Estado Civil</label>
                <input type="text" id="exampleForm2"
                       value="<?php echo @$response['data']['attributes']['marital-status'] ?>" required
                       name="marital-status" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Profissão</label>
                <input type="text" id="exampleForm2" value="<?php echo @$response['data']['attributes']['career'] ?>"
                       name="career" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Hobby</label>
                <input type="text" id="exampleForm2"
                       value=" <?php echo @$response['data']['attributes']['hobby'] ?>"
                       name="hobby" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Observações</label>
                <input type="text" id="exampleForm2" name="general-notes"
                       value="<?php echo @$response['data']['attributes']['general-notes'] ?>"
                       class="form-control">
            </div>
        </div>

        <div class="text-right">
            <a href="<?php echo base_url() ?>Contact">
                <button type="button" class="btn btn-outline-primary"> Cancelar</button>
            </a>
            <?php
            if ($ready_only == false) {
                echo '<button type="submit" class="btn btn-indigo" value="salvar" name="salvar"> Salvar</button>';
            }
            ?>

        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>
<?php
if ($ready_only == true) {
    echo '<script>$(".form-control").attr("readonly",true)</script>';
}
?>