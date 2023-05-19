<?= $this->extend('layouts/frontend') ?>
<?= $this->section('title') ?>
<?= $title ?>
<?= $this->endSection() ?>


<?= $this->section('content') ?>
<div class="content">
    <button type="button" class="btn btn-info float-end mt-4 mx-5" data-bs-toggle="modal"
        data-bs-target="#addstaticBackdrop">
        New Attraction</button>

    <div class="container d-flex py-5 mb-5">
        <div class="d-flex">
            <?php foreach ($attractions as $attraction): ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $attraction['img_url'] ?>" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title fs-5">
                            <?= $attraction['name'] ?>
                        </h4>
                        <p class="card-text">
                            <?= $attraction['description'] ?>
                        </p>
                        <a href="<?= base_url("edit/$attraction[id]") ?>" class="btn btn-success">Edit</a>
                        <a href="<?= base_url("delete/$attraction[id]") ?>" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>


<div class="modal fade" id="addstaticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Attraction</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card container mt-3" style="width: 18rem;">
                    <div class="card-body">
                        <?= form_open('create') ?>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="img_url" class="form-label">Image URL</label>
                            <input type="text" class="form-control" id="img_url" name="img_url">
                        </div>
                        <button class="btn btn-info">Submit</button>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container bg-secondary py-2">
    <div class="container-fluid py-3 mb-2">
        <div class="row bg-dark py-4">
            <div class="col-md-4">
                <div class="card" style="width: mx-auto;">
                    <img src="public/images/marina_bay_sands.jpg" class="card-img-top" style=width:mx-auto; />
                    <div class="card-body text-center">
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
                        <img src="public/images/marina_bay_sands.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                A resort complex includes a high-end luxury hotel, a mall with a
                                canal running
                                through it, the<a href="<?= base_url('places/mbs#ASM') ?>" class="text-decoration-none">
                                    ArtScience Museum</a>, and the Marina Bay Sands
                                <a href="<?= base_url('places/mbs#SO') ?>" class="text-decoration-none">Skypark
                                    Observation</a>
                                Deck–a vantage point for taking in the entire city. The Skypark's viewing deck
                                and infinity pool are found in the ship. From the Skypark, you can see the
                                innovative
                                <a href="<?= base_url('places/mbs#DHB') ?>" class="text-decoration-none">double
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
                <div class="card" style="width: mx-auto;">
                    <img src="public/images/gardens-by-the-bay.jpg" class="card-img-top" style=width:mx-auto; />
                    <div class="card-body text-center">
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
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Gardens by the
                                Bay</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="public/images/gardens-by-the-bay.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                Gardens by the Bay is a recent addition to Singapore’s tourist attractions, but
                                is
                                one
                                that gardeners won’t want to miss visiting. Open less than a decade, Gardens by
                                the
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
                <div class="card" style="width: mx-auto;">
                    <img src="public/images/clarke_quay.jpg" class="card-img-top" style=width:mx-auto; />
                    <div class="card-body text-center">
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
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Clarke Quay
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="public/images/clarke_quay.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                One of the key tourist attractions in Singapore, the quay, at the
                                mouth of the Singapore River, was the city’s hub of commerce in the late 19th
                                century.
                                It still hustles and bustles today, but with a different kind of commerce:
                                trendy
                                restaurants, unique boutiques, pushcart vendors and more, all of which blend
                                Asian
                                and
                                European influences. Once a market, always a market, except at night when Clarke
                                Quay
                                teems with chic nightspots. Nearby attractions include the <a
                                    href="<?= base_url('places/cq') ?>" class="text-decoration-none"> Asian
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

            <div class="container bg-secondary py-2 mt-3"></div>

            <div class="col-md-4 mt-3">
                <div class="card" style="width: mx-auto;">
                    <img src="public/images/uss.jpg" class="card-img-top" style=width:mx-auto; />
                    <div class="card-body text-center">
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
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Universal
                                Studio
                                Singapore</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="public/images/uss.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                Occupies 49 acres of Resorts World Sentosa. The park is arranged thematically,
                                with each
                                area paying tribute to a location, film, or television show. Destinations
                                include New
                                York City, Hollywood, Madagascar, and a trip back to Ancient Egypt.
                                Fiction-themed areas
                                includes Shrek's Far Far Away, Lost World, and Sci-Fi City, where Battlestar
                                Galactica-themed dueling roller coasters and an indoor dark coaster, Revenge of
                                the
                                Mummy, dominate the thrill rides.
                            </p>
                            <p>
                                In addition to the many rides–that range from kiddie-friendly to daredevil –the
                                park
                                also has diverse dining options, shopping, and live shows throughout the day and
                                night.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card" style="width: mx-auto;">
                    <img src="public/images/sentosa-island.jpg" class="card-img-top" style=width:mx-auto; />
                    <div class="card-body text-center">
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
                            <h1 class="modal-title fs-5 text-uppercase" id="staticBackdropLabel">Sentosa Island
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <img src="public/images/sentosa-island.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                Sentosa is Singapore’s premier island resort getaway. This 500-hectare resort
                                island is
                                home to an exciting array of themed attractions, award-winning spa retreats, and
                                resort
                                accommodations alongside lush rainforests and golden sandy beaches. Popular
                                attractions
                                among business and leisure visitors include Wings of Time – an award winning
                                night show,
                                the iconic Sentosa Merlion, as well as Madame Tussauds Singapore. There are a
                                lot of
                                places that you can find in the Sentosa Island <a href="<?= base_url('places/si') ?>"
                                    class="text-decoration-none fw-bold">-></a>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-3">
                <div class="card" style="width:mx-auto;">
                    <img src="public/images/chinatown.jpg" class="card-img-top" style=width:mx-auto; />
                    <div class="card-body text-center">
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
                        <img src="public/images/chinatown.jpg" style=width:500px height="150px" ; />
                        <div class="modal-body">
                            <p class="text-justify">
                                From the small mom-and-pop stores and authentic Chinese food to the bright red
                                lanterns,
                                there's excitement and hustle in this district. You can visit the <a
                                    href="<?= base_url('places/ct') ?>" class="text-decoration-none">
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
</div>


<div class="bg-dark container py-1 mt-3"></div>

<?= $this->endSection() ?>
