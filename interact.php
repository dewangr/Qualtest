<?php
    include 'koneksi.php';
    if(isset($_GET['lanjut'])){
        $tesID = $_GET['tesID'];
        $obj=$_GET['object'];
        $nama=$_GET['namaTester'];
        $email=$_GET['emailTester'];
        $iq1 = $_GET['iq1'];
        $iq2 = $_GET['iq2'];
        $iq3 = $_GET['iq3'];
        $iq4 = $_GET['iq4'];
        $iq5 = $_GET['iq5'];
        $iq6 = $_GET['iq6'];
        $iq7 = $_GET['iq7'];

        $iq_total = $iq1 + $iq2 + $iq3 + $iq4 + $iq5 + $iq6 + $iq7;
        $iq_avg = $iq_total/7;
        mysqli_query($koneksi,"UPDATE `iq_quest` SET `iq1`='$iq1',`iq2`='$iq2',`iq3`='$iq3',`iq4`='$iq4',`iq5`='$iq5',`iq6`='$iq6',`iq7`='$iq7',
            `iq_total`='$iq_total',`iq_avg`='$iq_avg' WHERE test_id = '$tesID'");
    }
    include 'detail.php';
?>
    <!doctype html>
    <html lang="en">
    <head>
        <title>Indicator: Service Information</title>
        <style>
            body{
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
        <h4 class="text-center">SERVICE INFORMATION</h4>
            <p style="margin-bottom:40px">
            Kualitas Interaksi (Interaction Quality), yaitu mutu dari interaksi pelayanan yang dirasakan
            pengguna ketika mempelajari website secara lebih dalam, yang ditandai dengan adanya kepercayaan dan 
            empati pengguna terhadap website. Misalnya isu keamanan transaksi dan informasi, pengantaran produk, dan lain sebagainya.
            </p>
            <h6>Pertanyaan</h6>
                <form action="obj-result.php">
                    <div class="question">
                        <input hidden id="id" name="tesID" type="text" value="<?= $tesID;?>">
                        <input hidden id="object" name="object" type="text" value="<?= $obj;?>">
                        <input hidden type="text" name="namaTester" id="namaTester" value="<?=$nama?>">
                        <input hidden type="email" name="emailTester" id="emailTester" value="<?=$email?>">
                    <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>1. Website memiliki reputasi yang baik</h6>
                            </li>
                            <li class="rbox"   style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si1" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si1" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si1" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si1" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si1" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>2. Pengguna merasa aman untuk melakukan transaksi pada website</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si2" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si2" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si2" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si2" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si2" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>3. Pengguna merasa informasi pribadinya aman untuk disimpan oleh website</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si3" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si3" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si3" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si3" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si3" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>4. Kemudahan untuk berkomunikasi dalam website</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si4" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si4" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si4" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si4" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si4" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li class="rbox" style="list-style: none;">
                                <h6>5. Adanya suasana komunitas</h6>
                            </li>
                            <li style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si5" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si5" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si5" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si5" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si5" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>6. Website memberikan kemudahan untuk berkomunikasi dengan organisasi</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si6" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si6" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si6" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si6" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si6" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>7. Yakin bahwa barang/jasa akan diberikan sesuai dengan yang dijanjikan</h6>
                            </li>
                            <li class="rbox" style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si7" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si7" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si7" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si7" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="si7" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                        <ul class="list-group list">
                            <li style="list-style: none;">
                                <h6>8. Secara keseluruhan, tampilan website sudah baik</h6>
                            </li>
                            <li class="rbox"   style="list-style: none;">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ov1" id="STS" value="1">
                                    <label class="form-check-label" for="STS">Sangat Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ov1" id="TS" value="2">
                                    <label class="form-check-label" for="TS">Tidak Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ov1" id="Netral" value="3">
                                    <label class="form-check-label" for="Netral">Netral</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ov1" id="Setuju" value="4">
                                    <label class="form-check-label" for="Setuju">Setuju</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="ov1" id="SS" value="5">
                                    <label class="form-check-label" for="SS">Sangat Setuju</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <button class="btn btn-success" style="float:right; margin-right:40px; margin-top:20px" id="lanjut" name="lanjut">Submit</button>
                    <a href="inform.php?&tesID=<?= $tesID;?>&object=<?= $obj?>&namaTester=<?= $nama?>&emailTester=<?= $email?>&kembali="
                        class="btn btn-outline-success" style="float:right; margin-right:10px; margin-top:20px" id="kembali" name="kembali" >Sebelumnya</a>
                    </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>