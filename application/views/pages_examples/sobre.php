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
    .full_img1 {
        margin: 0 auto;
        padding: 0 auto;
        background-size: cover;
        height: 800px;
        background-image: url("<?php echo base_url()?>img/02_sobre_1.png")
    }

    .full_img {
        margin: 0 auto;
        padding: 0 auto;
        background-size: cover;
        height: 800px;
        background-image: url("<?php echo base_url()?>img/02_sobre_2.png")
    }

    html, body, article {
        height: 100%;
        width: 100%;
        /*overflow-x: hidden ;*/
        overflow-y: visible;
        /*background-color: #004D92*/

    }

    header {
        width: 100%;
    }

    .row {
        height: 100%;
        width: 100%;
        margin: 0;
    }

    .new {
        height: 100%;
        width: 100%;
        margin: 0;
    }
</style>
<body>

<header>
    <!--    <div class="col-md-12">-->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004D92">
        <!--            <div class="col-md-2"></div>-->
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
<div class="new">
    <div class="row">
        <img src="<?php echo base_url() ?>img/02_sobre_1.png" width="100%" height="auto"
        >
    </div>
    <div class="row">
        <img src="<?php echo base_url() ?>img/02_sobre_2.png" width="100%" height="auto"
             usemap="#shape" style="margin-left: -15px">
    </div>
</div>

<map name="shape">
    <area shape="rect" alt="parte 1" coords="252,67,1316,747" href="<?php echo base_url()?>/Home_site/funciona"/>
    <!--                <area shape="circle" alt="parte 2" coords="500, 250, 10" href="parte2.html"/>-->
    <!--                <area shape = “poly” alt=”parte 3” coords = “116, 207, 186, 299, 49, 296” href=”parte3.html”/>-->
</map>
</body>

