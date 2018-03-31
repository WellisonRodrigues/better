<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 03/03/2018
 * Time: 23:49
 */
?>
<style>
    .new {
        padding-left: 50px;
        padding-right: 50px
    }
</style>
<!--<br>-->
<!---->
<body>
<div class="container-fluid">
    <!--    <div class="col-md-12">-->
    <div class="row">
        <div class="col-md-4">
            <img src="<?php echo base_url() ?>img/foto_login.png" width="500px" height="640px" style="margin-left: -15px">
        </div>
        <div class="col-md-8">
            <div class="row justify-content-md-center" style="margin-top: 15%">
                <!--            <div class="card">-->
                <!--			<div class="col-12">-->
                <!-- Default form register -->
                <?php
                echo form_open('Login/sign_in', ['role' => 'form']);
                ?>
                <br>
                <p class="h4 text-center mb-4"><strong>LOGIN</strong></p>
                <div class="text-center">Bem vindo de volta! Faça login para ver sua conta.</div>
                <!-- Default input email -->
                <br>
                <!--			<label for="defaultFormRegisterEmailEx" class="grey-text">Your email</label>-->
                <input type="email" name="email" id="defaultFormRegisterEmailEx" placeholder="email"
                       class="form-control">
                <br>
                <!-- Default input password -->
                <!--			<label for="defaultFormRegisterPasswordEx" class="grey-text">Your password</label>-->
                <input type="password" name="senha" id="defaultFormRegisterPasswordEx" placeholder="senha"
                       class="form-control">
                <div class="col-md-12">
                    <div class="mt-4">
                        <div class="row">

                            <div class="col-md-6"><input type="checkbox" name="lembrar_senha"
                                                         value="lembrar_senha">
                                <small> Lembrar-me.</small>
                                <br></div>
                            <div class="col-md-6">
                                <small><strong> Esqueci minha senha.</strong></small>
                            </div>
                        </div>
                    </div>
                </div>
                <!--			<div class="col-md-12">-->
                <div class="mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn new" style="background-color: #0e4377;" name="sign_in" type="submit">
                                Entrar
                            </button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn  btn-outline-primary" name="sign_in" type="submit"> Cadastrar
                            </button>
                        </div>
                    </div>
                    <!--				</div>-->
                </div>
                <br>
                <?php
                echo form_close();
                ?>
                <!--			</div>-->
                <!--            </div>-->
            </div>
        </div>
    </div>
</div>
