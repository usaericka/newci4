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
        <a href="<?= base_url('public/home') ?>" class="btn-link text-decoration-none text-white">Back</a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-5 mx-3">
                <figure class="figure">
                    <img src="../images/acm.webp" class="figure-img img-fluid rounded">
                    <figcaption class="figure-caption fw-bold text-center text-white">Asian Civilisation Museum
                    </figcaption>
                </figure>
            </div>
            <div class="col-6 mt-5 mx-4 my-5">
                <div class="card border border-dark p-2 mb-2">
                    <p class="text-justify mt-1">
                        The Asian Civilisations Museum traces its roots to the Raffles Museum and focuses on historical
                        connections between Asia and the world. Singapore's history as a port city that brought people
                        together from all over the world is used as a means of examining the history of Asia. Special
                        exhibitions and River Nights encourage visitors to connect with culture and the arts.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-5 mt-1 mx-3">
                <figure class="figure">
                    <img src="../images/cdhg.jpg" class="figure-img img-fluid rounded">
                    <figcaption class="figure-caption fw-bold text-center text-white">Civil Defence Heritage Gallery
                    </figcaption>
                </figure>
            </div>
            <div class="col-6 mt-5 mx-4 my-5">
                <div class="card border border-dark p-2 mb-2">
                    <p class="text-justify mt-1">
                        The Civil Defence Heritage Gallery is one of Singapore’s most interesting museumsis a popular
                        attraction in Singapore, featuring historic fire trucks and equipment from the late 19th century
                        to present day. Visitors can climb into a Dennis F12 fire engine and watch a video of the
                        bravery
                        of the firemen. This is a vivid depiction of the bravery of the firemen.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-5 mt-1 mx-3">
                <figure class="figure">
                    <img src="../images/hss.png" class="figure-img img-fluid rounded">
                    <figcaption class="figure-caption fw-bold text-center text-white">Hong San See Temple
                    </figcaption>
                </figure>
            </div>
            <div class="col-6 mt-5 mx-4 my-5">
                <div class="card border border-dark p-2 mb-2">
                    <p class="text-justify mt-1">
                        The Hong San See temple is built between 1908 and 1913. The temple is dedicated to Guang Ze Zun Wang, 
                        the God of Fortune and draws worshippers from different dialect groups.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>