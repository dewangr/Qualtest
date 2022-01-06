<?php
    include 'koneksi.php';

    if(isset($_GET['button']) OR isset($_GET['kembali'])){
        $tesID = $_GET['tesID'];    
        $obj=$_GET['object'];
        $nama=$_GET['namaTester'];
        $email=$_GET['emailTester'];

        $result = array();

        if($tesID == 0){
            $cekID = mysqli_query($koneksi,"SELECT test_id FROM testing");
            $id = mysqli_fetch_array($cekID,MYSQLI_NUM);
            $result = [];
            if($id == NULL){
                $tesID = 1;
                mysqli_query($koneksi, "INSERT INTO testing(test_id) VALUES ($tesID)");
            }   
            else{
                while($id = mysqli_fetch_array($cekID,MYSQLI_NUM)){
                    $result[] = $id;
                }
                $tesID = count($result);
                $tesID = $tesID+1;
                mysqli_query($koneksi, "INSERT INTO testing (test_id) VALUES ($tesID)");               
            }
        }
        else{
            $tesID = $tesID;
        }
        mysqli_query($koneksi,
        "UPDATE `detail` SET `obj_tester`='$obj',`nama_tester`='$nama',`email_tester`='$email' WHERE test_id = '$tesID'");
    }

    include 'detail.php';
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <title>Indicator: Usability </title>
        <style>
            body {
                background-color: whitesmoke;
            }
            .question h6{
                margin-left: 15px;
            }
            .question label{
                margin-bottom: 25px;
                margin-right: 10px;
            }
            .form-check{
                margin-left: 40px;
            }
        </style>
    </head>

    <body>
        <div class="container col-8">
            <h4 class="text-center">USABILITY</h4>
            <p style="margin-bottom:40px">
            Usability, yaitu mutu yang berhubungan dengan rancangan website. Contohnya seperti tampilan, kemudahan penggunaan, navigasi, dan gambaran yang disampaikan kepada pengguna.
            </p>
            <h6>Pertanyaan</h6>
                <form class="" action="inform.php" >     
                    <div class="question">
                        <input hidden id="id" name="tesID" type="text" value="<?= $tesID;?>">
                        <input hidden id="object" name="object" type="text" value="<?= $obj;?>">
                        <input hidden type="text" name="namaTester" id="namaTester" value="<?=$nama?>">
                        <input hidden type="email" name="emailTester" id="emailTester" value="<?=$email?>">
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>1. Terasa mudah untuk belajar mengoperasikan website</h6>
                            </li>
                            <li class="rbox"   style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us1" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us1" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us1" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us1" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us1" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>2. Interaksi antara website dengan pengguna sudah jelas dan mudah dipahami</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us2" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us2" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us2" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us2" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us2" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>3. Terasa mudah untuk bernavigasi dengan website</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us3" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us3" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us3" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us3" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us3" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>4. Website mudah untuk digunakan</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us4" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us4" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us4" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us4" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us4" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>5. Website memiliki tampilan yang menarik</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us5" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us5" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us5" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us5" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us5" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>6. Desain website sesuai dengan jenis website</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us6" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us6" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us6" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us6" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us6" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>7. Website berkompeten</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us7" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us7" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us7" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us7" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us7" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>8. Website menciptakan pengalaman positif bagi pengguna</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us8" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us8" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us8" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us8" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="us8" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-success" style="float:right; margin-right:40px; margin-top:20px" id="lanjut" name="lanjut">Selanjutnya</button>
                </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>