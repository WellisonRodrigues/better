<?php
/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 28/03/2018
 * Time: 11:13
 */
?>
<link href="<?php echo base_url() ?>CSSs/navcss.css" rel="stylesheet" xmlns="http://www.w3.org/1999/html">

<style>
    /*body {*/
    /*    margin: 0 auto;*/
    /*    padding: 0 auto;*/
    /*    background-size: cover;*/
    /*    background-image: url("*/
    <?php //echo base_url()?> /*img/01_inicio.png")*/
    /*}*/
    html, body, article {
        height: 100%;
        width: 100%;
        /*overflow-x: hidden ;*/
        overflow-y: visible;
        /*background-color: #004D92*/

    }

    body {
        background-image: url("<?php echo base_url()?>img/01_inicio.png");
        background-size: cover;
    }

    header {
        width: 100%;
    }

    .row {
        height: 100%;
        width: 100%;
        margin: 0;
    }
</style>
<body>

<header>
    <!--    <div class="col-md-12">-->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004D92">
        <!--            <div class="col-md-3"></div>-->
        <div class="mx-auto">
            <ul class="nav navbar-nav" style="margin-left: 0">

                <li class="nav-item">
                    <h2 class="active"><a class="navbar-brand " href="<?php echo base_url() . 'Home_site' ?>"><b>INÍCIO</b></a></h2>
                </li>
                <hr class="vl">
                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Home_site/sobre' ?>"><b>SOBRE</b></a>
                    </h2>
                </li>
                <hr class="vl">
                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Home_site/funciona' ?>"><b>COMO
                                FUNCIONA</b></a></h2>
                </li>
                <hr class="vl">
                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Home_site/baixar' ?>"><b>BAIXE O APP</b></a>
                    </h2>
                </li>
                <!--                    <hr class="vl">-->
                <!--                    <li class="nav-item">-->
                <!--                        <h2><a class="navbar-brand" href="#"><b>CADASTRE-SE</b></a></h2>-->
                <!--                    </li>-->
                <hr class="vl">
                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Login' ?>"><b>LOGIN</b></a></h2>
                </li>
            </ul>
        </div>
    </nav>
    <!--    </div>-->
</header>
<div class="container-fluid">
    <div style="margin-top: 35%;margin-left: 75%; margin-right: 0">
        <a href="<?php echo base_url() ?>login">
        <button type="button" class="btn btn-danger btn-lg">Entre para o Better
            Planning
        </button>
        </a>
    </div>
</div>
</body>

