<?php
/**
 * Created by PhpStorm.
 * User: Wellison
 * Date: 01/03/2018
 * Time: 21:49
 */
$this->load->view('structure/head');
if ($menu == true) {
    $this->load->view('structure/header');

    ?>
    <div class="col-md-12" style="height: 100%">
        <div class="row" style="height: auto; min-height: 100%">
            <div class="col-md-2"
                 style="background-color:#43425D; padding: 20px; margin: 0; height:auto;">
                <ul class="nav flex-column md-pills">
                    <?php if ($this->session->userdata("user")['role'] == null or
                        $this->session->userdata("user")['role'] == 'master') { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() . 'company' ?>"><i
                                        class="fas fa-chart-bar"></i>
                                Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() . 'users' ?>"><i
                                        class="far fa-user"></i>
                                Usuários</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() . 'Contact' ?>"><i
                                        class="fas fa-users"></i>
                                Contatos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() . 'Subscription' ?>"><i
                                        class="fas fa-info"></i>
                                Assinaturas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() . 'License' ?>"><i
                                        class="fas fa-key"></i>
                                Licenças</a>
                        </li>
                    <?php }
                    if ($this->session->userdata("user")['role'] == 'list' or
                        $this->session->userdata("user")['role'] == 'list_schedule') {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url() . 'Contact' ?>"><i
                                        class="fas fa-users"></i>
                                Contatos</a>
                        </li>
                        <?php
                    }
                    if ($this->session->userdata("user")['role'] == 'schedule' or $this->session->userdata("user")['role'] == 'list_schedule') {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="<?php echo base_url() . 'users' ?>"><i
                                        class="far fa-user"></i>
                                Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url() . 'calendar' ?>"><i
                                        class="fas fa-calendar"></i>
                                Calendar</a>
                        </li>
                    <?php } ?>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="<?php echo base_url() . 'Users/new_user/' . $this->session->userdata("user")['id'] ?>"><i
                                    class="fas fa-cogs"></i>
                            Configurações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url() . 'Sair' ?>"><i class="fas fa-sign-out-alt"></i>
                            Sair</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-10">
                <article>
                    <div class="container">
                        <div class="col-md-10 col-md-offset-1">
                            <br>
                            <!--        --><?php
                            // p/ mesma pagina, sem redirect
                            if (isset($alert)) {
                                div_alerta($alert);
                            }
                            // p/ redirect
                            $v_temp = $this->session->flashdata('alert');
                            if (isset($v_temp)) {
                                div_alerta($v_temp);
                            }
                            //        ?>
                        </div>
                        <?php $this->load->view($view) ?>
                    </div>
                </article>
                <br>
            </div>

        </div>
    </div>


    <?php
    $this->load->view('structure/footer');
} else { ?>
    <article>
        <?php $this->load->view($view) ?>
    </article>
<?php }
?>
