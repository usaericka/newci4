<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?= link_tag('public/styles/bootstrap.min.css') ?>
   <?= link_tag('public/styles/style.css') ?>
   <?= script_tag('public/scripts/bootstrap.bundle.min.js') ?>
   <title> Singapore Attractions</title>
</head>

<body class="bg-light">
   <div class="container bg-secondary">
      <h3 class="display-5 text-white mt-5 text-center text-uppercase">Singapore</h3>
      <div class="bg-secondary container-fluid">
         <h3 class="font-weight-normal text-center text-white "><?= $this->renderSection("title") ?></h3>
      </div>
   </div>

   <?= $this->renderSection("content") ?>

</body>

</html>
