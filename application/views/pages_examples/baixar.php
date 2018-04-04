<?php
/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 28/03/2018
 * Time: 11:13
 */
?>
<link href="<?php echo base_url() ?>CSSs/navcss.css" rel="stylesheet">

<style>
    /*body {*/
    /*    margin: 0 auto;*/
    /*    padding: 0 auto;*/
    /*    background-size: cover;*/
    /*    background-image: url("*/
    <?php //echo base_url()?> /*img/04_baixe_app.png")*/
    /*}*/
    .full_img1 {
        margin: 0 auto;
        padding: 0 auto;
        background-size: cover;
        height: 1450px;
        background-image: url("<?php echo base_url()?>img/04_baixe_app.png")
    }

    html, body, article {
        height: 100%;
        width: 100%;
        background-color: #004D92

    }

    .container-fluid, .row {
        height: 100%;
        width: 100%;
    }
</style>
<body>

<header>
    <!--    <div class="col-md-12">-->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004D92">
        <div class="mx-auto">
            <ul class="nav navbar-nav" style="margin-left: 0">

                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Home_site' ?>"><b>INÍCIO</b></a></h2>
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
                    <h2 class="active"><a class="navbar-brand" href="<?php echo base_url() . 'Home_site/baixar' ?>"><b>BAIXE O APP</b></a>
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
    <!--    <div class="col-md-12">-->
    <div class="row">
        <div class="col-md-12" style="margin-top: 10px">
<!--            <a href="http://play.google.com/store/apps/details?id=com.google.android.apps.maps">-->
<!--                <img style="display: block;position: ; z-index: 1000" src="--><?php //echo base_url() ?><!--img/playgoogle.png"></a>-->
            <img src="<?php echo base_url() ?>img/04_baixe_app.png" width="100%" height="auto"
                 usemap="#shape">
            <map name="shape">
                <area shape="rect" alt="parte 1" coords="200, 70,790,496" href="parte1.html"/>
                <!--                <area shape="circle" alt="parte 2" coords="500, 250, 10" href="parte2.html"/>-->
                <!--                <area shape = “poly” alt=”parte 3” coords = “116, 207, 186, 299, 49, 296” href=”parte3.html”/>-->
            </map>
        </div>
    </div>
</div>
</body>

