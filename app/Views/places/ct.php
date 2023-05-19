<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= link_tag('public/styles/bootstrap.min.css') ?>
    <?= link_tag('public/styles/style.css') ?>
    <?= script_tag('public/scripts/bootstrap.bundle.min.js') ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body class="bg-dark">
    <div class="container-fluid mt-5">
        <a href="<?= base_url('./') ?>" class="btn-link text-decoration-none text-white">Back</a>
    </div>
    <div class="container-fluid mb-4 mt-4 mx-2">
        <div class="row">
            <div class="col-md-4">
                <div class="flip-card mx-5">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/chc.webp" style="width:300px;height:300px;">
                            <figcaption class="figure-caption fw-medium text-center text-white">Chinese Heritage Centre
                            </figcaption>
                        </div>
                        <div class="flip-card-back">
                            <p class="fs-5 text-justify"> It opened in 2002, is a key gateway for visitors to understand
                                the Chinatown story, with its rich collection of personal stories and enriching
                                programmes
                                that provide an intimate and accurate portrayal of Chinatown, from its early days as a
                                Chinese migrant settlement to today’s vibrant heritage precinct.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="flip-card mx-5">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/smht.avif" style="width:300px;height:300px;">
                            <figcaption class="figure-caption fw-medium text-center text-white">Sri Mariamman Hindu
                                Temple
                            </figcaption>
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <p class="fs-5 text-justify"> It is the oldest Hindu temple in Singapore. Sri Mariamman
                                Temple's ornate and elaborate detailing makes it a wonder to behold. Besides worship,
                                Sri Mariamman Temple is an important place for community activities.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="flip-card mx-5">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/buddha_tooth_relic_temple.jpg" style="width:300px;height:300px;">
                            <figcaption class="figure-caption fw-medium text-center text-white">Buddha Tooth Relic Temple
                            </figcaption>
                        </div>
                        <div class="flip-card-back">
                            <p class="fs-5 text-justify"> The Buddha Tooth Relic Temple and Museum (BTRTM) is dedicated
                                to the Maitreya Buddha and offers weekly guided tours and Discovering Buddhism, led by
                                Venerable Wu Xiang and Venerable Ru Zhi. Participants gain experiential taste of Chinese
                                Mahayana Buddhist etiquette, Basic Buddhist teachings and Basic Meditation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>