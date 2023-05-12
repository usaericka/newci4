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

<body>
    <div class="container-fluid d-flex bg-dark">
        <h3 class="font-weight-normal text-white py-1">Singapore</h3>
    </div>
    <div class="container">
        <h3 class="display-5 text-dark mb-5 mt-3 text-center">Tourist Attractions</h3>
    </div>

    <div class="container-fluid mb-5 mx-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/marina_bay_sands.jpg" class="card-img-top" style=width:319px; />
                    <div class="card-body text-center">
                        <a href="<?= base_url('public/places/mbs') ?>">
                            <div class="btn btn-primary btn-sm">Marina Bay Sands</div>
                        </a>
                        <!---
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">Marina Bay Sands</button>
--->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/gardens-by-the-bay.jpg" class="card-img-top" style=width:319px; />
                    <div class="card-body text-center">
                        <a href="<?= base_url('public/places/gbtb') ?>">
                            <div class="btn btn-primary btn-sm">Gardens by the Bay</div>
                        </a>

                        <!---
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">Merlion Park</button>
--->
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <img src="images/clarke_quay.jpg" class="card-img-top" style=width:319px; />
                    <div class="card-body text-center">
                        <a href="<?= base_url('public/places/cq') ?>">
                            <div class="btn btn-primary btn-sm">Clarke Quay</div>
                        </a>

                        <!---
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal3">Clarke Quay</button>
--->
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card" style="width: 20rem;">
                    <img src="images/uss.jpg" class="card-img-top" style=width:319px; />
                    <div class="card-body text-center">
                        <a href="<?= base_url('public/places/') ?>">
                            <div class="btn btn-primary btn-sm">Universal Studio</div>
                        </a>

                        <!---
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal4">Universal Studio</button>
--->
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card" style="width: 20rem;">
                    <img src="images/resorts_world_sentosa.jpg" class="card-img-top" style=width:319px; />
                    <div class="card-body text-center">
                        <a href="<?= base_url('public/places/') ?>">
                            <div class="btn btn-primary btn-sm">Resorts World Sentosa</div>
                        </a>

                        <!---
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal5">Resorts World Sentosa</button>
--->
                    </div>
                </div>
            </div>

            <div class="col-md-4 mt-5">
                <div class="card" style="width: 20rem;">
                    <img src="images/merlion-park.jpg" class="card-img-top" style=width:319px; />
                    <div class="card-body text-center">
                        <a href="<?= base_url('public/places/') ?>">
                            <div class="btn btn-primary btn-sm">Merlion Park</div>
                        </a>

                        <!---
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal6">Gardens by the Bay</button>
--->
                    </div>
                </div>
            </div>

            <!---
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Marina Bay Sands</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    Description
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

--->

</body>

</html>