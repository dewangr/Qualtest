<?php
    include 'koneksi.php';
    // include 'navbar.php';
    if(isset($_GET['kembali'])){
        $tesID = $_GET['tesID'];    
        $obj=$_GET['object'];
        $nama=$_GET['namaTester'];
        $email=$_GET['emailTester']; }

    if(isset($_GET['lanjut'])){
        $tesID = $_GET['tesID'];
        $obj=$_GET['object'];
        $nama=$_GET['namaTester'];
        $email=$_GET['emailTester'];
        $us1 = $_GET['us1'];
        $us2 = $_GET['us2'];
        $us3 = $_GET['us3'];
        $us4 = $_GET['us4'];
        $us5 = $_GET['us5'];
        $us6 = $_GET['us6'];
        $us7 = $_GET['us7'];
        $us8 = $_GET['us8'];

        $us_total = $us1 + $us2 + $us3 + $us4 + $us5 + $us6 + $us7 + $us8;
        $us_avg = $us_total/8;
        mysqli_query($koneksi,
        "UPDATE `us_quest` SET `us1`='$us1',`us2`='$us2',`us3`='$us3',`us4`='$us4',`us5`='$us5',`us6`='$us6',`us7`='$us7',`us8`='$us8',
        `us_total`='$us_total',`us_avg`='$us_avg' WHERE test_id = '$tesID'");
    }
    include 'detail.php';

?>
    <!doctype html>
    <html lang="en">

    <head>
        <title>Indicator: Information Quality </title>
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

        <div class="container col-8">
        <h4 class="text-center">INFORMATION QUALITY</h4>
            <p style="margin-bottom:40px">
            Kualitas Informasi (Information Quality), merupakan mutu dari isi yang terdapat pada website, pantas tidaknya informasi 
            untuk tujuan pengguna seperti  kompetensi, format, dan keterkaitannya. Kualitas informasi meliputi hal-hal seperti 
            informasi yang akurat, informasi yang bisa dipercaya, informasi yang up to date, dan sebagainya.
            </p>
            <h6>Pertanyaan:</h6>
                <form class="" action="interact.php">
                    <div class="question">
                    <input hidden id="id" name="tesID" type="text" value="<?= $tesID;?>">
                        <input hidden id="object" name="object" type="text" value="<?= $obj;?>">
                        <input hidden type="text" name="namaTester" id="namaTester" value="<?=$nama?>">
                        <input hidden type="email" name="emailTester" id="emailTester" value="<?=$email?>">
                    <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>1. Website menyediakan informasi yang akurat</h6>
                            </li>
                            <li class="rbox"   style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq1" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq1" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq1" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq1" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq1" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>2. Website menyediakan informasi yang dapat dipercaya</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq2" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq2" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq2" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq2" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq2" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>3. Website menyediakan informasi yang up to date</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq3" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq3" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq3" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq3" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq3" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>4. Website menyediakan informasi yang relevan</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq4" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq4" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq4" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq4" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq4" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>5. Terasa mudah untuk memahami informasi pada website</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq5" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq5" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq5" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq5" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq5" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>6. Website memberikan informasi yang cukup detail</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq6" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq6" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq6" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq6" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq6" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>7. Website menyajikan informasi dalam format yang sesuai</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq7" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq7" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq7" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq7" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="iq7" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                        <button class="btn btn-success" style="float:right; margin-right:40px; margin-top:20px" id="lanjut" name="lanjut">Selanjutnya</button>
                        <a href="use.php?&tesID=<?= $tesID;?>&object=<?= $obj?>&namaTester=<?= $nama?>&emailTester=<?= $email?>&kembali="
                        class="btn btn-outline-success" style="float:right; margin-right:10px; margin-top:20px" id="kembali" name="kembali" >Sebelumnya</a>
                    </form>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>