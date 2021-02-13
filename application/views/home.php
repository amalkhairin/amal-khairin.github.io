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
    <title>Amal Khairin</title>
    <style>
        /* * {
            border: 1px solid red;
        } */

        /* #desc {
            font-size: 24px;
        }

        #header {
            font-size: 36px;
            font-weight: 700;
        } */

        #btn-contact {
            background-color: #FF7A00;
            color: white;
            font-size: large;
            margin-top: 15vh;
            margin-right: 8px;
        }

        #btn-contact:hover {
            background-color: #FF9E45;
            color: white !important;
        }

        #btn-download {
            border: 1px solid #FF7A00;
            background-color: white;
            color: #FF7A00;
            font-size: large;
            margin-top: 15vh;
        }

        #btn-download:hover {
            background-color: #E7E7E7;
        }

        .material-icons {
            font-size: 14px;
            padding-right: 4px;
        }

        .iconify {
            width: 36px;
            height: 36px;
            color: #7C7C7C;
            margin-right: 14px;
        }

        #sosmed-btn {
            padding-top: 36px;
        }

        #content-item {
            padding-top: 12vh;
        }

        @media screen and (min-width: 601px) {
            #desc {
                font-size: 24px;
            }

            #header {
                font-size: 36px;
                font-weight: 700;
            }
        }

        @media screen and (max-width: 600px) {
            #desc {
                font-size: 16px;
            }

            #header {
                font-size: 24px;
                font-weight: 600;
            }
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
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('./Portofolio') ?>">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url('./Blog') ?>">Blog</a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="content-item" class="container-fluid">
        <div class="row mx-3">
            <div class="col-8 m-auto">
                <div id="header">Hi, My Name is <?= $data['name']?></div>
                <div id="desc"><?= $data['description']?></div>
                <div>
                    <a href="mailto:<?= $data['email']?>" target="_blank" rel="noopener noreferrer" id="btn-contact" class="btn btn-lg"><i class="small material-icons">mail</i>Contact Me</a>
                    <a href="<?= $data['cv_link']?>" id="btn-download" class="btn btn-lg"><i class="small material-icons">download</i>Download CV</a>
                </div>
                <div id="sosmed-btn" class="row m-auto">
                    <a href="https://instagram.com/amalkhrn" target="_blank"><span class="iconify" data-icon="mdi-instagram" data-inline="false"></span></a>
                    <a href="https://www.linkedin.com/in/amal-khairin" target="_blank"><span class="iconify" data-icon="ant-design:linkedin-outlined" data-inline="false"></span></a>
                    <a href="https://github.com/amalkhairin" target="_blank"><span class="iconify" data-icon="ant-design:github-filled" data-inline="false"></span></a>
                </div>
            </div>
            <div class="col m-auto">
                <div>
                    <img id="myimg" class="img-fluid align-self-center" src="<?= $data['image']?>" alt="amal pict" style="min-width: 200px;">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        (function($) {
            var myimg = $("#myimg");
            myimg.on("mousemove", function(e) {
                var x = e.clientX - $(this).offset().left + $(window).scrollLeft();
                var y = e.clientY - $(this).offset().top + $(window).scrollTop();

                var rY = map(x, 0, $(this).width(), -20, 20);
                var rX = map(y, 0, $(this).height(), -20, 20);

                $(this).css("transform", "rotateY(" + rY + "deg)" + " " + "rotateX(" + -rX + "deg)");
            });

            function map(x, in_min, in_max, out_min, out_max) {
                return (x - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
            };

            myimg.on('mouseenter', function() {
                $(this).css({
                    transition: "all " + 0.05 + "s" + " linear"
                });
            });

            myimg.on('mouseleave', function() {
                $(this).css({
                    transition: "all " + 0.2 + "s" + " linear"
                });

                $(this).css("transform", "rotateY(" + 0 + "deg)" + " " + "rotateX(" + 0 + "deg)");
            });

        })(jQuery);
    </script>
</body>

</html>