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
    <title><?= isset($name) ? $name : "Details" ?></title>
    <style>
        /* * {
            border: 1px solid red;
        } */

        #img-icon {
            width: 4rem;
            height: 4rem;
            background-color: lightgray;
            border-radius: 8%;
        }

        #header {
            font-size: 24px;
            font-weight: 700;
        }

        #title-app {
            color: #FF3D00;
        }

        #btn-download {
            background-color: #FF7A00;
            color: white;
        }

        #btn-download:hover {
            background-color: #FF9E45;
            color: white !important;
        }

        #btn-opensource {
            border: 1px solid #FF7A00;
            background-color: white;
            color: #FF7A00;
        }

        #btn-opensource:hover {
            background-color: #d5d5d5;
            color: #FF7A00 !important;
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
            font-size: 36px;
        }

        .navbar {
            border-bottom: 1px solid #A3A3A3;
            background-color: white;
        }

        .page-divider {
            border: none !important;
        }

        #row-bar {
            width: 100%;
        }

        #collection {
            overflow: auto;
            white-space: nowrap;
        }

        .img-screenshot {
            height: 360px;
            width: 240px;
            padding: 0px 10px;
            object-fit: fill;
        }

        .img-screenshot {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .img-screenshot:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */

            z-index: 10001;
        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content,
        #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-sm navbar-light">
        <a href="<?php echo base_url('./Portofolio') ?>" class="navbar-brand"><i class="material-icons">arrow_back</i></a>
        <div id="row-bar" class="row mx-3">
            <div class="row my-3">
                <img id="img-icon" class="ml-3" src="<?= $icon_image ?>" alt="app-icon">
                <div class="col m-auto">
                    <div id="header"><?= $name ?></div>
                    <div id="dev"><?= $dev ?></div>
                </div>
            </div>
            <div class="row ml-auto mt-auto mb-auto">
                <div class="col">
                    <?php if ($type == "open source") { ?>
                        <a href="<?= $source ?>" target="_blank" id="btn-opensource" class="btn">Open Source</a>
                    <?php } ?>
                    <a href="<?= $download_link ?>" target="_blank" id="btn-download" class="btn">Download</a>
                </div>
            </div>
        </div>
    </nav>
    <div id="content-item" class="container-fluid">
        <div class="mx-3 mt-3 mb-4">
            <h5 id="title-app">Description</h5>
            <p><?= $desc ?></p>
        </div>
        <div class="mx-3 mb-3">
            <h5 id="title-app">Screenshot</h5>
            <div id="collection">
                <img id="myImg1" class="img-screenshot" src="<?= $photo['photo_1'] ?>" alt="screenshot_1">
                <img id="myImg2" class="img-screenshot" src="<?= $photo['photo_2'] ?>" alt="screenshot_2">
                <img id="myImg3" class="img-screenshot" src="<?= $photo['photo_3'] ?>" alt="screenshot_3">
                <img id="myImg4" class="img-screenshot" src="<?= $photo['photo_4'] ?>" alt="screenshot_4">
                <img id="myImg5" class="img-screenshot" src="<?= $photo['photo_5'] ?>" alt="screenshot_5">
            </div>
        </div>
        <div class="mx-3 mb-5">
            <h5 id="title-app">Release Notes</h5>
            <p><?= nl2br($release_notes) ?></p>
        </div>
    </div>
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="img01">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <script>
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg1");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var img = document.getElementById("myImg2");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var img = document.getElementById("myImg3");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var img = document.getElementById("myImg4");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        var img = document.getElementById("myImg5");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function() {
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
</body>

</html>