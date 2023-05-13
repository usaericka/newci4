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

    <div class="container bg-secondary">
        <h3 class="display-5 text-white mt-5 text-center text-uppercase">Singapore</h3>
        <div class="bg-secondary container-fluid">
            <h3 class="font-weight-normal text-center text-white ">Tourist Attractions</h3>
        </div>
    </div>

    <div class="container-fluid py-5 mb-5">
        <div class="row bg-dark py-4">
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/marina_bay_sands.jpg" class="card-img-top" style=width:320px; />
                    <div class="card-body text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Marina Bay Sands</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Marina Bay
                                Sands</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="images/marina_bay_sands.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                A resort complex includes a high-end luxury hotel, a mall with a
                                canal running
                                through it, the<a href="<?= base_url('public/places/mbs#ASM') ?>"
                                    class="text-decoration-none"> ArtScience Museum</a>, and the Marina Bay Sands
                                <a href="<?= base_url('public/places/mbs#SO') ?>" class="text-decoration-none">Skypark
                                    Observation</a>
                                Deck–a vantage point for taking in the entire city. The Skypark's viewing deck
                                and infinity pool are found in the ship. From the Skypark, you can see the
                                innovative
                                <a href="<?= base_url('public/places/mbs#DHB') ?>" class="text-decoration-none">double
                                    helix
                                    bridge</a>, the port, the Gardens by the Bay, and the impressive skyline.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/gardens-by-the-bay.jpg" class="card-img-top" style=width:320px; />
                    <div class="card-body text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop2">Gardens by the Bay</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Gardens by the Bay</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="images/gardens-by-the-bay.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                Gardens by the Bay is a recent addition to Singapore’s tourist attractions, but is
                                one
                                that gardeners won’t want to miss visiting. Open less than a decade, Gardens by the
                                Bay
                                is built on reclaimed land in central Singapore. It consists of three gardens.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/clarke_quay.jpg" class="card-img-top" style=width:320px; />
                    <div class="card-body text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop3">Clarke Quay</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Clarke Quay</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="images/clarke_quay.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                One of the key tourist attractions in Singapore, the quay, at the
                                mouth of the Singapore River, was the city’s hub of commerce in the late 19th
                                century.
                                It still hustles and bustles today, but with a different kind of commerce: trendy
                                restaurants, unique boutiques, pushcart vendors and more, all of which blend Asian
                                and
                                European influences. Once a market, always a market, except at night when Clarke
                                Quay
                                teems with chic nightspots. Nearby attractions include the <a
                                    href="<?= base_url('public/places/cq') ?>" class="text-decoration-none"> Asian
                                    Civilisation Museum,
                                    the Civil Defence Heritage Gallery, and the Hong San See Temple.</a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card" style="width: 20rem;">
                    <img src="images/uss.jpg" class="card-img-top" style=width:320px; />
                    <div class="card-body text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop4">Universal Studio</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Universal Studio
                                Singapore</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="images/uss.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                Occupies 49 acres of Resorts World Sentosa. The park is arranged thematically, with each
                                area paying tribute to a location, film, or television show. Destinations include New
                                York City, Hollywood, Madagascar, and a trip back to Ancient Egypt. Fiction-themed areas
                                includes Shrek's Far Far Away, Lost World, and Sci-Fi City, where Battlestar
                                Galactica-themed dueling roller coasters and an indoor dark coaster, Revenge of the
                                Mummy, dominate the thrill rides.
                            </p>
                            <p>
                                In addition to the many rides–that range from kiddie-friendly to daredevil –the park
                                also has diverse dining options, shopping, and live shows throughout the day and night.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card" style="width: 20rem;">
                    <img src="images/sentosa-island.jpg" class="card-img-top" style=width:320px; />
                    <div class="card-body text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop5">Sentosa Island</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop5" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Sentosa Island</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="images/sentosa-island.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                Sentosa is Singapore’s premier island resort getaway. This 500-hectare resort island is
                                home to an exciting array of themed attractions, award-winning spa retreats, and resort
                                accommodations alongside lush rainforests and golden sandy beaches. Popular attractions
                                among business and leisure visitors include Wings of Time – an award winning night show,
                                the iconic Sentosa Merlion, as well as Madame Tussauds Singapore. There are a lot of
                                places that you can find in the Sentosa Island <a
                                    href="<?= base_url('public/places/si') ?>"
                                    class="text-decoration-none fw-bold">-></a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card" style="width: 20rem;">
                    <img src="images/chinatown.jpg" class="card-img-top" style=width:320px; />
                    <div class="card-body text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop6">Chinatown</button>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="staticBackdrop6" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Chinatown</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="images/chinatown.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                From the small mom-and-pop stores and authentic Chinese food to the bright red lanterns,
                                there's excitement and hustle in this district. You can visit the <a
                                    href="<?= base_url('public/places/ct') ?>" class="text-decoration-none">
                                    Chinese Heritage
                                    Centre, Sri Mariamman Hindu temple, and the Buddha Tooth Relic temple. </a>

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark container-fluid d-flex py-4"></div>
</body>

</html>