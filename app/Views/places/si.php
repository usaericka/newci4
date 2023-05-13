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
    <h4 class="container bg-secondary display-5 text-center text-white fs-3 mt-5 fw-bold">Places you can find in Sentosa
        Island</h4>
    <div class="container-fluid"> <a href="<?= base_url('public/home') ?>"
            class="btn-link text-decoration-none text-white">Back</a></div>


    <div class="container bg-dark py-5 mb-4 mt-4 mx-5">
        <div class="row">
            <div class="col-md-4">
                <div class="flip-card mx-5">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/siloso_beach.jpg" style="width:300px;height:300px;">
                            <figcaption class="figure-caption fw-bold text-center text-white">Siloso Beach
                            </figcaption>
                        </div>
                        <div class="flip-card-back">
                            <br><br>
                            <p class="fs-5 text-justify">Siloso Beach Resort is an eco resort located on Sentosa with a
                                range of
                                accommodations and amenities, including a natural spring water swimming pool, waterfall
                                feature, water slides, hot water spa pool and a gym room.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="flip-card mx-5">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/ocean-dome.jpg" style="width:300px;height:300px;">
                            <figcaption class="figure-caption fw-bold text-center text-white">S.E.A. Aquarium
                            </figcaption>
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <p class="fs-5 text-justify">Enter and explore the marine realm of S.E.A. Aquarium, home to
                                more than
                                100,000 marine animals of over 1,000 species, across into 50 different habitats, each
                                one as fascinating as the next. It's an experience you won’t forget.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="flip-card mx-5">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <img src="../images/merlion-park.jpg" style="width:300px;height:300px;">
                            <figcaption class="figure-caption fw-bold text-center text-white">Merlion Park
                            </figcaption>
                        </div>
                        <div class="flip-card-back">
                            <br>
                            <p class="fs-5 text-justify">Singapore's famous statue like the figure of a mythical
                                creature that
                                has the head of a lion and the body of a
                                fish. The Merlion represents the city's humble start as a fishing village combined with
                                its traditional Malay name Singapura, "lion city."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>