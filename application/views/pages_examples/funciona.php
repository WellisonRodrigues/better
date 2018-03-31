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
        background-image: url("<?php echo base_url()?>img/03_como_funciona_1.png")
    }
    .full_img {
        margin: 0 auto;
        padding: 0 auto;
        background-size: cover;
        height: 900px;
        background-image: url("<?php echo base_url()?>img/03_como_funciona_2.png")
    }
</style>
<body>

<header>
    <!--    <div class="col-md-12">-->

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004D92">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <ul class="nav navbar-nav">

                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Home_site' ?>"><b>INÍCIO</b></a></h2>
                </li>
                <hr class="vl">
                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Home_site/sobre' ?>"><b>SOBRE</b></a></h2>
                </li>
                <hr class="vl">
                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Home_site/funciona' ?>"><b>COMO FUNCIONA</b></a></h2>
                </li>
                <hr class="vl">
                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Home_site/baixar' ?>"><b>BAIXE O APP</b></a></h2>
                </li>
<!--                <hr class="vl">-->
<!--                <li class="nav-item">-->
<!--                    <h2><a class="navbar-brand" href="#"><b>CADASTRE-SE</b></a></h2>-->
<!--                </li>-->
                <hr class="vl">
                <li class="nav-item">
                    <h2><a class="navbar-brand" href="<?php echo base_url() . 'Login' ?>"><b>LOGIN</b></a></h2>
                </li>
            </ul>
        </div>
    </nav>
    <!--    </div>-->
</header>
<div class="full_img1">
    <!--    <div style="margin-top: 35%;margin-left: 75%; margin-right: 0">-->
    <!--        <button type="button" class="btn btn-danger btn-lg">Entre para o Better-->
    <!--            Planning-->
    <!--        </button>-->
    <!--    </div>-->
</div>
<div class="full_img">
    <!--    <div style="margin-top: 35%;margin-left: 75%; margin-right: 0">-->
    <!--        <button type="button" class="btn btn-danger btn-lg">Entre para o Better-->
    <!--            Planning-->
    <!--        </button>-->
    <!--    </div>-->
</div>
</body>

