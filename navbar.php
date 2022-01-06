<?php
    include 'koneksi.php';
?>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="logo.png"
            type="image/x-icon">
        <style>
            .navigation-bar {
                background-color: #198754;
                margin-bottom: 30px;
            }
            
            body {
                background-color: whitesmoke;
            }
            h5{
                color: white    ;
            }

            .navigation-bar a {
                padding-top: 15px;
                text-decoration: none;
                color: darkgrey;
            }
            
            .menu:hover {
                background-color: white;
                color: black;
            }

        </style>
    </head>

    <body>
        <nav class="row navigation-bar">
            <div class="col-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item brand">
                        <a class="nav-link" href="index.php"><h5>QUALTEST</h5></a>
                    </li>
                </ul>
            </div>
            <div class="col-8">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="menu nav-link active" aria-current="page" href="index.php">
                            <p>Pengujian</p>
                        </a>
                    </li>
                    <li class=" nav-item">
                        <a class="menu nav-link active" href="about.php">
                            <p>Tentang</p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>