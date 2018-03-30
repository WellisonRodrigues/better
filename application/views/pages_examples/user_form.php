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
                <h3><b>Cadastro de Usuários</b></h3>
            </div>

        </div>
    </div>
    <br>
    <?php
    echo form_open('Users/new_user', ['role' => 'form']);
    ?>

    <div class="form-group">


        <!-- Default input -->

        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Nome</label>
                <input type="text" id="exampleForm2" name="name" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Perfil de usuário</label>
                <select id="exampleForm2" name="role" class="form-control">
                    <option> --- Escolha uma opção ---</option>
                    <?php if ($this->session->userdata("user")['role'] == null
                        or $this->session->userdata("user")['role'] == '') {
                        ?>
                        <option value="master">Master</option><?php
                    } ?>

                    <option value="schedule">Schedule</option>
                    <option value="list">List</option>
                    <option value="list_schedule">List Schedule</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">E-mail</label>
                <input type="email" id="exampleForm2" name="email" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Número de registro</label>
                <input type="number" id="exampleForm2" name="register-number" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="exampleForm2">Senha</label>
                <input type="password" id="exampleForm2" name="password" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="exampleForm2">Empresa</label>
                <input type="text" id="exampleForm2" name="sub_company_holdings" class="form-control">
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
