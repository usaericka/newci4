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
    <div class="container-fluid">
        <a href="<?= base_url('./') ?>" class="btn-link text-decoration-none text-white">Back</a>
    </div>

    <div class="container" id="ASM">
        <div class="row">
            <div class="col-5 mx-3">
                <figure class="figure">
                    <img src="public/images/asm.jpg" class="figure-img img-fluid rounded">
                    <figcaption class="figure-caption fw-bold text-end text-white">ArtScience Museum
                    </figcaption>
                </figure>
            </div>
            <div class="col-6 mt-5 mx-4">
                <div class="card border border-dark p-2 mb-2">
                    <p class="text-justify mt-1">
                        It is located next to Marina Bay Sands. This museum features a fusion of science, technology,
                        art, and culture. The lotus-shaped structure houses galleries and exhibitions for visitors of
                        all ages. Visit state-of-the-art exhibitions and discover a breathtaking world through
                        videogames
                        and audiotapes.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container" id="SO">
        <div class="row">
            <div class="col-6 mt-5 mx-4">
                <div class="card border border-dark p-2 mb-2">
                    <p class="text-justify mt-1">
                        Located on the roof of Marina Bay Sands, the Sands SkyPark Observation Deck boasts scenic views
                        of the panoramic vistas of Marina Bay and Singapore’s world-class cityscape.
                    </p>
                </div>
            </div>
            <div class="col-5 mx-3">
                <figure class="figure">
                    <img src="images/sod.jpg" class="figure-img img-fluid rounded">
                    <figcaption class="figure-caption fw-bold text-start text-white">SkyPark Observation Deck
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>

    <div class="container" id="DHB">
        <div class="row">
            <div class="col-5 mx-3">
                <figure class="figure">
                    <img src="./images/dhb.jpg" class="figure-img img-fluid rounded">
                    <figcaption class="figure-caption fw-bold text-start text-white">The Helix Bridge
                    </figcaption>
                </figure>
            </div>
            <div class="col-6 mt-5 mx-4">
                <div class="card border border-dark p-2 mb-2">
                    <p class="text-justify mt-1">
                        Linking Marina Bay to Marina Centre, the Helix Bridge, is set to become Singapore’s next
                        landmark. Located beside the Benjamin Sheares Bridge, alongside the vehicular Bayfront
                        Bridge, it was officially opened on 24 April 2010 and is the world’s first curved bridge.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>