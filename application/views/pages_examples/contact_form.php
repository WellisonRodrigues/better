<?php
/**
 * Created by PhpStorm.
 * User: welli
 * Date: 29/03/2018
 * Time: 17:34
 */
if (isset($response)) {
    print_r($response);
}
?>
<div class="container" style="margin-top: 1%;">
    <div class="row">
        <div class="col-md-12">

            <div class="text-left">
                <h3><b>Cadastro de contato</b></h3>
            </div>

        </div>
    </div>
    <br>
    <?php
    echo form_open('Contact/new_contact', ['role' => 'form']);
    ?>

    <div class="form-group">


        <!-- Default input -->

        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Prmeiro nome</label>
                <input type="text" id="exampleForm2" name="first-name" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Segundo nome</label>
                <input type="text" id="exampleForm2" name="last-name" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">E-mail</label>
                <input type="email" id="exampleForm2" name="email" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Idade</label>
                <input type="number" id="exampleForm2" name="age" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Qtd Filhos</label>
                <input type="number" id="exampleForm2" name="childrens-num" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Idade dos Filhos( , )</label>
                <input type="text" id="exampleForm2" name="childrens-age" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Estado Civil</label>
                <input type="text" id="exampleForm2" name="marital-status" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Profissão</label>
                <input type="text" id="exampleForm2" name="career" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Hobby</label>
                <input type="text" id="exampleForm2" name="hobby" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Observações</label>
                <input type="text" id="exampleForm2" name="general-notes" class="form-control">
            </div>
        </div>

        <div class="text-right">
            <a href="<?php echo base_url() ?>Contact">
                <button type="button" class="btn btn-outline-primary"> Cancelar</button>
            </a>
            <button type="submit" class="btn btn-indigo" value="salvar" name="salvar"> Salvar</button>
        </div>
        <?php
        echo form_close();
        ?>
    </div>
</div>
