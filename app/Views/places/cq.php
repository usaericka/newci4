<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= link_tag('public/styles/bootstrap.min.css') ?>
    <?= link_tag('public/styles/style.css') ?>
    <?= script_tag('public/scripts/boostrap.bundle.min.js') ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body class="">
    <div class="container-fluid bg-secondary py-3"></div>

    <div class="container">
        <div class="row">
            <div class="col-5 mt-4 mx-2">
                <figure class="figure">
                    <img src="../images/clarke_quay.jpg" class="figure-img img-fluid rounded">
                    <figcaption class="figure-caption fw-medium text-end">Clarke Quay</figcaption>
                </figure>
            </div>

            <div class="col-5 mt-5 mx-5">
                <div class="card border border-success p-2 mb-2">
                    <p class="text-center">
                        Includes a high-end luxury hotel, a mall with a canal running through it, the ArtScience Museum,
                        and the Marina Bay Sands Skypark
                        Observation Deck–a vantage point for taking in the entire city. The Skypark's viewing deck and
                        infinity pool are found in the ship.
                    <div class="container text-center">
                        <a href="<?= base_url('public/home') ?>" class="btn btn-dark">Back</a>
                    </div>
                    </p>

                </div>

            </div>

        </div>

    </div>
    </div>
    </div>

</body>

</html>