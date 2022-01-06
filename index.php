<?php
    include 'koneksi.php';
    include 'navbar.php';

    if(isset($_GET["ubah"])){
        $nama=$_GET['namaTester'];
        $email=$_GET['emailTester'];

    }
    else{
        $nama=NULL;
        $email=NULL;
    }
?>
    <!doctype html>
    <html lang="en">
        <head>
            <title>Qualtest</title>
        </head>
    <body>
        <div class="container">
            <div class="row text-center">
                <div>
                        <img src="namelogo.png" alt="" style="width: 350px; margin-bottom:30px">
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form action="use.php" method="GET">
                    <input type="number" name="tesID" hidden value=0>
                    <input style="margin-bottom: 10px;" required class="form-control" id="object" 
                            name="object" type="text" placeholder="Masukkan URL Website...">
                    <div class="row">
                        <div class="col-5">
                            <input class="form-control" required type="text" name="namaTester" 
                                    id="namaTester" placeholder="Masukkan nama..." value="<?= $nama ?>">
                        </div>
                        <div class="col-5">
                            <input class="form-control" required type="email" name="emailTester" 
                                    id="emailTester" placeholder="Masukkan email..." value="<?= $email ?>">
                        </div>
                        <div class="col-2">
                            <button class="btn btn-success" style="float: right; width: 100%;"  
                                type="submit" id="button" name="button"> 
                                Run Test
                            </button>
                            </form> 
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>