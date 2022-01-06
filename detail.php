<?php
    include 'navbar.php';

    // if(isset($_GET["button"])){
    //     $tesID = $_GET['tesID'];
    //     $obj=$_GET['object'];
    //     $nama=$_GET['namaTester'];
    //     $email=$_GET['emailTester'];
        
    // }

    // if(isset($_GET["ubah"])){
    //     $obj=NULL;
    //     $nama=$_GET['namaTester'];
    //     $email=$_GET['emailTester'];

    // }
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="icon" href="https://th.bing.com/th/id/R.2767d1ec360df2264708a31ad6b57464?rik=FLKTQdoq7bNyrA&riu=http%3a%2f%2ffreevector.co%2fwp-content%2fuploads%2f2014%2f09%2f56292-qt-file-type-black-rounded-rectangular-interface-symbol.png&ehk=08txqMxyj0LW6lNRoI%2f5oGsfNrirlAn8gJRxL4kHXAU%3d&risl=&pid=ImgRaw&r=0"
            type="image/x-icon">
        <style>
            form{
                margin-bottom: 70px;
            }
        </style>
    </head>

    <body>
    <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form action="index.php">
                    <input style="margin-bottom: 10px;" class="form-control" placeholder="Masukkan URL Website ..." id="object" name="object" type="text" value="<?= $obj;?>">
                    <div class="row">
                        <div class="col-5">
                            <input class="form-control" type="text" name="namaTester" id="namaTester" placeholder="Masukkan nama..." value="<?=$nama?>">
                        </div>
                        <div class="col-5">
                            <input class="form-control" type="email" name="emailTester" id="emailTester" placeholder="Masukkan email..." value="<?=$email?>">
                        </div>
                        <div class="col-2">
                            <button class="btn btn-success" style="float: right; width: 100%;" type="submit" id="ubah" name="ubah"> 
                                Ubah URL
                            </button>
                </form>
                </div>
                </div>
            </div>
            </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>