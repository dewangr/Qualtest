<?php
    include 'koneksi.php';
    include 'navbar.php';

    if(isset($_GET['lanjut'])){
        $tesID = $_GET['tesID'];
        $obj=$_GET['object'];
        $nama=$_GET['namaTester'];
        $email=$_GET['emailTester'];
        $si1 = $_GET['si1'];
        $si2 = $_GET['si2'];
        $si3 = $_GET['si3'];
        $si4 = $_GET['si4'];
        $si5 = $_GET['si5'];
        $si6 = $_GET['si6'];
        $si7 = $_GET['si7'];
        $ov1 = $_GET['ov1'];

        $si_total = $si1 + $si2 + $si3 + $si4 + $si5 + $si6 + $si7;
        $si_avg = $si_total/7;
        mysqli_query($koneksi,"UPDATE `si_quest` SET `si1`='$si1',`si2`='$si2',`si3`='$si3',`si4`='$si4',`si5`='$si5',
            `si6`='$si6',`si7`='$si7', `si_total`='$si_total',`si_avg`='$si_avg' WHERE test_id = '$tesID'");

        mysqli_query($koneksi, "UPDATE `detail` SET `ov1`='$ov1' WHERE `test_id`='$tesID'");
    }

    $us = array();
    $iq = array();

    $sus = mysqli_query($koneksi,"SELECT * FROM us_quest WHERE test_id = '$tesID'");
    $siq = mysqli_query($koneksi,"SELECT * FROM iq_quest WHERE test_id = '$tesID'");
    $ssi = mysqli_query($koneksi,"SELECT * FROM si_quest WHERE test_id = '$tesID'");

    while($cek_us = mysqli_fetch_assoc($sus)){
        $us = $cek_us;
    }
    while($cek_iq = mysqli_fetch_assoc($siq)){
        $iq = $cek_iq;
    }
    while($cek_si = mysqli_fetch_assoc($ssi)){
        $si = $cek_si;
    }

    $totNilaiTest = $si_total + $us['us_total'] + $iq['iq_total'];
    $avgTest = $totNilaiTest / 23;

    mysqli_query($koneksi, "UPDATE `detail` SET `totnilai_test`=$totNilaiTest,`avg_test`=$avgTest WHERE test_id = $tesID");

    $question = array();

    $kriteria;
    if($ov1 == 1){
        $kriteria = "Sangat Tidak Setuju";
    }
    elseif ($ov1 == 2){
        $kriteria = "Tidak Setuju";
    }
    elseif ($ov1 == 3){
        $kriteria = "Netral";
    }
    elseif ($ov1 == 4){
        $kriteria = "Setuju";
    }
    else{
        $kriteria = "Sangat Setuju";
    }
?>

<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Result Summary</title>
        <style>
            body {
                background-color: whitesmoke;
            }
            .indikator{
                margin-top: 40px;
            }
            .card{
                margin-bottom: 5%;
                margin-left: 2%;
            }
            .info{
                top:20;
            }
        </style>
    </head>
    <body>
        <div class="container col-8">
            <h5 style="color:black;margin-bottom:15px;" class="text-center">RINGKASAN HASIL</h5>
            <p>Secara ringkas hasil penilaian terhadap webiste <strong> <?= $obj ?> </strong> dari 
                <strong><?= $nama ?></strong> selaku penilai adalah sebagai berikut: </p>

            <h6>Total Poin: </h6>
            <div class="row text-center">
                <div class="col"><p>Usability: <?= $us['us_total'] ?></p> </div>
                <div class="col"><p>Information Quality: <?= $iq['iq_total'] ?></p></div>
                <div class="col"><p>Service Information: <?= $si_total ?></p></div>
                <div class="col"></a></div>
            </div>
            <h6>Secara keseluruhan, <?= $nama ?> <?= $kriteria ?> (nilai: <?= $ov1 ?>) 
                bahwa tampilan website sudah baik </h6>
            <a href="result.php?&object=<?=$obj?>" style="margin-top: 10px;">overall result</a>
            <h6 class="indikator">Poin setiap dimensi: </h6>
            <div class="card card-body">
                <h6>Dimensi: Usability</h6>
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col-1  text-center">Nomor</th>
                                <th class="text-center" scope="col-1  text-center">ID</th>
                                <th class="text-center" scope="col-8  text-center">Pertanyaan</th>
                                <th class="text-center" scope="col-1  text-center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor=0; 
                        $cek = mysqli_query($koneksi, "SELECT * FROM `question` WHERE `quest_id` LIKE 'us_';");
                        while($question = mysqli_fetch_assoc($cek)){ 
                            $nomor=$nomor+1;?>
                            <tr>
                                <th class="text-center" scope="row"><?= $question['nomor'] ?></th>
                                <td class="text-center"><?= $question['quest_id'] ?></td>
                                <td ><?= $question['quest'] ?></td>
                                <td class="text-center"><?= $us['us'.$nomor]?></td>
                            </tr>
                            <?php } ?>  
                        </tbody>
                    </table>
                    <h6>Nilai rata - rata : <?= $us['us_avg'] ?></h6>
                </div>
            </div>
            <div class="card card-body">
                <h6>Dimensi: Information Quality</h6>
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col-1  text-center">Nomor</th>
                                <th class="text-center" scope="col-1  text-center">ID</th>
                                <th class="text-center" scope="col-8  text-center">Pertanyaan</th>
                                <th class="text-center" scope="col-1  text-center">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $nomor=0; 
                        $cek = mysqli_query($koneksi, "SELECT * FROM `question` WHERE `quest_id` LIKE 'iq_';");
                        while($question = mysqli_fetch_assoc($cek)){ 
                            $nomor=$nomor+1;?>
                            <tr>
                                <th class="text-center" scope="row"><?= $question['nomor'] ?></th>
                                <td class="text-center"><?= $question['quest_id'] ?></td>
                                <td ><?= $question['quest'] ?></td>
                                <td class="text-center"><?= $iq['iq'.$nomor]?></td>
                            </tr>
                            <?php } ?>  
                        </tbody>
                    </table>
                    <h6>Nilai rata - rata : <?= $iq['iq_avg'] ?></h6>
                </div>
            </div>
            <div class="card card-body">
                <div class="">
                    <h6>Dimensi: Service Interaction</h6>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col-1  text-center">Nomor</th>
                                    <th class="text-center" scope="col-1  text-center">ID</th>
                                    <th class="text-center" scope="col-8  text-center">Pertanyaan</th>
                                    <th class="text-center" scope="col-1  text-center">Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php $nomor=0; 
                            $cek = mysqli_query($koneksi, "SELECT * FROM `question` WHERE `quest_id` LIKE 'si_';");
                            while($question = mysqli_fetch_assoc($cek)){ 
                                $nomor=$nomor+1;?>
                                <tr>
                                    <th class="text-center" scope="row"><?= $question['nomor'] ?></th>
                                    <td class="text-center"><?= $question['quest_id'] ?></td>
                                    <td ><?= $question['quest'] ?></td>
                                    <td class="text-center"><?= $si['si'.$nomor]?></td>
                                </tr>
                                <?php } ?>  
                            </tbody>
                        </table>
                        <h6>Nilai rata - rata : <?= $si['si_avg'] ?></h6>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

</html>