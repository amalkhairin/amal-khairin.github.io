<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/bootstrap.min.css') ?>" />
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('./assets/js/bootstrap.min.js') ?>"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="<?php echo base_url('./assets/jquery-3.5.1.js') ?>"></script>
    <title>Blog</title>
    <style>
        /* * {
            border: 1px solid red;
        } */

        .card-img-top {
            background-color: lightgray;
            object-fit: cover;
            height: 10rem;
        }

        #title-app {
            color: #FF3D00;
        }

        #btn-details {
            background-color: #FF7A00;
            color: white;
        }

        #btn-details:hover {
            background-color: #FF9E45;
            color: white !important;
        }

        .navbar-nav {
            font-size: 18px;
        }

        .navbar-nav>li {
            margin-left: 5px;
            margin-right: 5px;
        }

        .navbar-nav>.active>a,
        a:hover {
            color: #FF7A00 !important;
            font-weight: 600;
        }

        .nav-item>a:hover {
            color: #FF7A00;
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar {
            border-bottom: 1px solid #A3A3A3;
            background-color: white;
        }

        .page-divider {
            border: none !important;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light">
        <div class="navbar-brand">AK</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto my-3">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('./Home') ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('./Portofolio') ?>">Portofolio</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="content-item" class="container-fluid">
        <h4 id="title-app" class="mx-3 my-3">Articles</h4>
        <div class="row mx-3">
            <?php foreach ($data as $item) { ?>
                <div class="card m-2" style="width: 18rem;">
                    <img class="card-img-top" src="<?= $item['thumbnail'] ?>" alt="thumbnail">
                    <div class="card-body">
                        <h5 class="card-title"><?= $item['title'] ?></h5>
                        <p class="card-text"><small class="text-muted">Published on <?= $item['published'] ?></small></p>
                        <p class="card-text"><?= $item['desc'] ?></p>
                        <a href="<?= $item['link'] ?>" target="_blank" id="btn-details" class="btn">Details</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>