<?php
    include 'koneksi.php';
    include 'navbar.php';
    $obj=$_GET['object'];

    $cekobj = mysqli_query($koneksi, "SELECT `test_id`, `ov1`, `totnilai_test`, `avg_test` FROM detail WHERE obj_tester = '$obj'");
    $oby = [];
    while($row = mysqli_fetch_assoc($cekobj)){
        $oby[] = $row;
    }

    $tesID=[];
    foreach($oby as $val){
        $tesID[] = $val['test_id'];
    }

    $jml = count($tesID);

    $us = [];
    $iq = [];
    $si = [];
    $i = 0; $j=0; $k=0;
    while($i < $jml){
        $sus = mysqli_query($koneksi,"SELECT * FROM us_quest WHERE test_id = '$tesID[$i]'");
        while($row = mysqli_fetch_assoc($sus)){
            $us[] = $row;
        }
        $i=$i+1;
    }

    while($j < $jml){
        $siq = mysqli_query($koneksi,"SELECT * FROM iq_quest WHERE test_id = '$tesID[$j]'");
        while($row = mysqli_fetch_assoc($siq)){
            $iq[] = $row;
        }
        $j=$j+1;
    }

    while($k < $jml){
        $ssi = mysqli_query($koneksi,"SELECT * FROM si_quest WHERE test_id = '$tesID[$k]'");
        while($row = mysqli_fetch_assoc($ssi)){
            $si[] = $row;
        }
        $k=$k+1;
    }
    $us_total = [];
    $iq_total = [];
    $si_total = [];

    foreach($us as $val){
        $us_total[] = $val['us_total'];
    }

    foreach($iq as $val){
        $iq_total[] = $val['iq_total'];
    }

    foreach($si as $val){
        $si_total[] = $val['si_total'];
    }
    $totus=0; $totiq=0; $totsi=0;
    foreach($us_total as $val){
        $totus = $totus+$val;
    }
    foreach($iq_total as $val){
        $totiq = $totiq+$val;
    }
    foreach($si_total as $val){
        $totsi = $totsi+$val;
    }

    //jumlah jwaban responden perindikator
    $a = 1; $b=1; $c=1;
    $us_ss=array(0,0,0,0,0,0,0,0,0); $us_s=array(0,0,0,0,0,0,0,0,0); $us_n=array(0,0,0,0,0,0,0,0,0);
    $us_ts=array(0,0,0,0,0,0,0,0,0); $us_sts=array(0,0,0,0,0,0,0,0,0);
    while($a < 9){
        foreach($us as $poin){
            $val = $poin['us'.$a];
            if($val == 1){
                $us_sts[$a] = $us_sts[$a] + 1;
            }
            elseif($val == 2){
                $us_ts[$a] = $us_n[$a] + 1;
            }
            elseif($val == 3){ 
                $us_n[$a] = $us_n[$a] + 1;
            }
            elseif($val == 2){
                $us_s[$a] = $us_s[$a] + 1;
            }
            else{
                $us_ss[$a] = $us_ss[$a] + 1;
            }
        }
        $a=$a+1;
    }

    $a = 1; $b=1; $c=1;
    $iq_ss =array(0,0,0,0,0,0,0,0); $iq_s=array(0,0,0,0,0,0,0,0); $iq_n=array(0,0,0,0,0,0,0,0);
    $iq_ts=array(0,0,0,0,0,0,0,0); $iq_sts=array(0,0,0,0,0,0,0,0);
    while($a < 8){
        foreach($iq as $poin){
            $val = $poin['iq'.$a];
            if($val == 1){
                $iq_sts[$a] = $iq_sts[$a] + 1;
            }
            elseif($val == 2){
                $iq_ts[$a] = $iq_n[$a] + 1;
            }
            elseif($val == 3){ 
                $iq_n[$a] = $iq_n[$a] + 1;
            }
            elseif($val == 2){
                $iq_s[$a] = $iq_s[$a] + 1;
            }
            else{
                $iq_ss[$a] = $iq_ss[$a] + 1;
            }
        }
        $a=$a+1;
    }

    $a = 1; $b=1; $c=1;
    $si_ss =array(0,0,0,0,0,0,0,0); $si_s=array(0,0,0,0,0,0,0,0); $si_n=array(0,0,0,0,0,0,0,0);
    $si_ts=array(0,0,0,0,0,0,0,0); $si_sts=array(0,0,0,0,0,0,0,0);
    while($a < 8){
        foreach($si as $poin){
            $val = $poin['si'.$a];
            if($val == 1){
                $si_sts[$a] = $si_sts[$a] + 1;
            }
            elseif($val == 2){
                $si_ts[$a] = $si_n[$a] + 1;
            }
            elseif($val == 3){ 
                $si_n[$a] = $si_n[$a] + 1;
            }
            elseif($val == 2){
                $si_s[$a] = $si_s[$a] + 1;
            }
            else{
                $si_ss[$a] = $si_ss[$a] + 1;
            }
        }
        $a=$a+1;
    }

    //skala linkert
    $liUs_ss =array(0,0,0,0,0,0,0,0,0); $liUs_s=array(0,0,0,0,0,0,0,0,0); $liUs_n=array(0,0,0,0,0,0,0,0,0);
    $liUs_ts=array(0,0,0,0,0,0,0,0,0); $liUs_sts=array(0,0,0,0,0,0,0,0,0);
    for ($i=1; $i < 9; $i++) { 
        $liUS_ss[$i] = $us_ss[$i] * 5;
        $liUs_s[$i] = $us_s[$i]*4;
        $liUs_n[$i] = $us_n[$i]*3;
        $liUs_ts[$i] = $us_ts[$i]*2;
        $liUs_sts[$i] = $us_sts[$i]*1;
    }

    $liIq_ss =array(0,0,0,0,0,0,0,0); $liIq_s=array(0,0,0,0,0,0,0,0); $liIq_n=array(0,0,0,0,0,0,0,0);
    $liIq_ts=array(0,0,0,0,0,0,0,0); $liIq_sts=array(0,0,0,0,0,0,0,0);
    for ($i=1; $i < 8; $i++) { 
        $liIq_ss[$i] = $iq_ss[$i] * 5;
        $liIq_s[$i] = $iq_s[$i]*4;
        $liIq_n[$i] = $iq_n[$i]*3;
        $liIq_ts[$i] = $iq_ts[$i]*2;
        $liIq_sts[$i] = $iq_sts[$i]*1;
    }

    $liSi_ss =array(0,0,0,0,0,0,0,0); $liSi_s=array(0,0,0,0,0,0,0,0); $liSi_n=array(0,0,0,0,0,0,0,0);
    $liSi_ts=array(0,0,0,0,0,0,0,0); $liSi_sts=array(0,0,0,0,0,0,0,0);
    for ($i=1; $i < 8; $i++) { 
        $liSi_ss[$i] = $si_ss[$i]*5;
        $liSi_s[$i] = $si_s[$i]*4;
        $liSi_n[$i] = $si_n[$i]*3;
        $liSi_ts[$i] = $si_ts[$i]*2;
        $liSi_sts[$i] = $si_sts[$i]*1;
    }
    
    //skor observasi
    $us_obs = array(0,0,0,0,0,0,0,0,0);
    $iq_obs = array(0,0,0,0,0,0,0,0);
    $si_obs = array(0,0,0,0,0,0,0,0);
    $tempus=0; $tempiq=0; $tempsi=0;
    for ($i=1; $i < 9; $i++) { 
        $tempus = $liUs_ss[$i] + $liUs_s[$i] + $liUs_n[$i] + $liUs_ts[$i] + $liUs_sts[$i];
        $us_obs[$i] = $tempus;
    }
    for ($i=1; $i < 8; $i++) { 
        $tempiq = $liIq_ss[$i] + $liIq_s[$i] + $liIq_n[$i] + $liIq_ts[$i] + $liIq_sts[$i];
        $tempsi = $liSi_ss[$i] + $liSi_s[$i] + $liSi_n[$i] + $liSi_ts[$i] + $liSi_sts[$i];
        $iq_obs[$i] = $tempiq;
        $si_obs[$i] = $tempsi;
    }

    //total skor observasi
    $us_totobs = 0; $iq_totobs=0; $si_totobs=0;
    for ($i=1; $i < 9; $i++) { 
        $us_totobs = $us_totobs + $us_obs[$i];
    }
    for ($i=1; $i < 8; $i++) { 
        $iq_totobs = $iq_totobs + $iq_obs[$i];
        $si_totobs = $si_totobs + $si_obs[$i];
    }

    //skor diharapkan/pertanyaan
    $skorharapan = 5*$jml;
    // total skor diharapkan
    $us_totharap = $skorharapan*8;
    $iqsi_totharap = $skorharapan*7;

    //presentase kelayakan/pertanyaan
    $us_persen = array(0,0,0,0,0,0,0,0,0);
    $iq_persen = array(0,0,0,0,0,0,0,0);
    $si_persen = array(0,0,0,0,0,0,0,0);
    $us_temper = 0; $iq_temper=0; $si_temper=0;
    for ($i=1; $i < 9  ; $i++) { 
        $us_temper = $us_obs[$i]/$skorharapan*100;
        $us_persen[$i] = $us_temper;
    }
    for ($i=1; $i < 8  ; $i++) { 
        $iq_temper = $iq_obs[$i]/$skorharapan*100;
        $iq_persen[$i] = $iq_temper;
        $si_temper = $si_obs[$i]/$skorharapan*100;
        $si_persen[$i] = $si_temper;
    }

    //total persentase kelayakan
    $us_totper = 0; $iq_totper=0; $si_totper=0;
    for ($i=1; $i < 9; $i++) { 
        $us_totper = $us_totper + $us_persen[$i];
    }
    for ($i=1; $i < 8; $i++) { 
        $iq_totper = $iq_totper + $iq_persen[$i];
        $si_totper = $si_totper + $si_persen[$i];
    }

    //rata - rata persentase kelayakan
    $us_peravg = $us_totper/8;
    $iq_peravg = $iq_totper/7; 
    $si_peravg = $si_totper/7;

    //status kelayakan 
    $us_status; $iq_status; $si_status;
    if($us_peravg > 80){
        $us_status = 'Sangat Layak';
    }
    elseif($us_peravg < 81 && $us_peravg > 60 ){
        $us_status = 'Layak';
    }
    elseif($us_peravg < 61 && $us_peravg > 40 ){
        $us_status = 'Cukup Layak';
    }
    elseif($us_peravg < 41 && $us_peravg > 20 ){
        $us_status = 'Tidak Layak';
    }
    else{
        $us_status = 'Sangat Tidak Layak';
    }

    if($iq_peravg > 80){
        $iq_status = 'Sangat Layak';
    }
    elseif($iq_peravg < 81 && $iq_peravg > 60 ){
        $iq_status = 'Layak';
    }
    elseif($iq_peravg < 61 && $iq_peravg > 40 ){
        $iq_status = 'Cukup Layak';
    }
    elseif($us_peravg < 41 && $qi_peravg > 20 ){
        $iq_status = 'Tidak Layak';
    }
    else{
        $iq_status = 'Sangat Tidak Layak';
    }

    if($si_peravg > 80){
        $si_status = 'Sangat Layak';
    }
    elseif($si_peravg < 81 && $si_peravg > 60 ){
        $si_status = 'Layak';
    }
    elseif($si_peravg < 61 && $si_peravg > 40 ){
        $si_status = 'Cukup Layak';
    }
    elseif($si_peravg < 41 && $si_peravg > 20 ){
        $si_status = 'Tidak Layak';
    }
    else{
        $si_status = 'Sangat Tidak Layak';
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
            
            .indikator {
                margin-bottom: 40px;
            }
            
            .card {
                margin-bottom: 5%;
                margin-left: 2%;
            }
        </style>
    </head>

    <body>
        <div class="container col-8">
            <h5 style="color: black;">ANALISIS KELAYAKAN</h5>
            <p><strong><?= $obj ?></strong> telah dinilai <strong><?= $jml ?></strong> kali. 
            Berikut ini adalah analisis kelayakan dari hasil penilaian terhadap <?= $obj ?> menggunakan metode WebQual 4.0.
            </p>
            <div class="card card-body">
            <h6>Total Poin: </h6>
            <div class="row text-center">
                <div class="col">
                    <p>Usability:
                        <?= $totus ?>
                    </p>
                </div>
                <div class="col">
                    <p>Information Quality:
                        <?= $totiq ?>
                    </p>
                </div>
                <div class="col">
                    <p>Service Information:
                        <?= $totsi ?>
                    </p>
                </div>
                <div class="col">
                    </a>
                </div>
            </div>
            </div>
            <div class="card card-body">
            <h6>Persentase Kelayakan:</h6>
            <div class="row text-center">
                <div class="col">
                    <p>Usability: <strong>
                        <?= $us_status ?></strong>
                    </p>
                </div>
                <div class="col">
                    <p>Information Quality: <strong>
                        <?= $iq_status ?></strong>
                    </p>
                </div>
                <div class="col">
                    <p>Service Information: <strong>
                        <?= $si_status ?></strong>
                    </p>
                </div>
            </div>
            </div>
            <p style="font-size:10px">*Bobot => Sangat Setuju:5 ; Setuju:4 ; Netral:3 ; Tidak Setuju:2 ; Sangat Tidak Setuju:1 </p>
            <div class="card card-body">
            <h6 class="indikator text-center">Analisis kelayakan setiap dimensi: </h6>
                <h6>Dimensi: Usability</h6>
                <div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">Quest_ID</th>
                                <th class="text-center" colspan="5">Jawaban Responden</th>
                                <th class="text-center" rowspan="2">Skor Observasi</th>
                                <th class="text-center" rowspan="2">Skor Diharapkan</th>
                                <th class="text-center" rowspan="2">Persentase Kelayakan</th>
                            </tr>
                            <tr>
                                <th class="text-center">SS</th>
                                <th class="text-center">S</th>
                                <th class="text-center">N</th>
                                <th class="text-center">TS</th>
                                <th class="text-center">STS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                        for ($n=1; $n < 9; $n++) { ?>
                            <tr>
                                <td class="text-center" scope="row">
                                    <?= 'us'.$n ?>
                                </td>
                                <td class="text-center">
                                    <?= $us_ss[$n] ?>
                                </td>
                                <td class="text-center">
                                    <?= $us_s[$n] ?>
                                </td>
                                <td class="text-center">
                                    <?= $us_n[$n] ?>
                                </td>
                                <td class="text-center">
                                    <?= $us_ts[$n] ?>
                                </td>
                                <td class="text-center">
                                    <?= $us_sts[$n] ?>
                                </td>
                                <td class="text-center">
                                    <?= $us_obs[$n] ?>
                                </td>
                                <td class="text-center">
                                    <?= $skorharapan ?>
                                </td>
                                <td class="text-center">
                                    <?= $us_persen[$n] ?>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <h6>Total Skor Observasi :
                        <?= $us_totobs ?>
                    </h6>
                    <h6>Total Skor Diharapkan :
                        <?= $us_totharap ?>
                    </h6>
                    <h6>Persentase Kelayakan :
                        <?= $us_peravg ?>
                    </h6>
                    <h6>Kategori Kelayakan :
                        <?= $us_status ?>
                    </h6>
                </div>
            </div>
        
            <div class="card card-body">
            <h6>Dimensi: Information Quality</h6>
            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" rowspan="2">Quest_ID</th>
                            <th class="text-center" colspan="5">Jawaban Responden</th>
                            <th class="text-center" rowspan="2">Skor Observasi</th>
                            <th class="text-center" rowspan="2">Skor Diharapkan</th>
                            <th class="text-center" rowspan="2">Persentase Kelayakan</th>
                        </tr>
                        <tr>
                            <th class="text-center">SS</th>
                            <th class="text-center">S</th>
                            <th class="text-center">N</th>
                            <th class="text-center">TS</th>
                            <th class="text-center">STS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        for ($n=1; $n < 8; $n++) { ?>
                        <tr>
                            <td class="text-center" scope="row">
                                <?= 'iq'.$n ?>
                            </td>
                            <td class="text-center">
                                <?= $iq_ss[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $iq_s[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $iq_n[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $iq_ts[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $iq_sts[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $iq_obs[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $skorharapan ?>
                            </td>
                            <td class="text-center">
                                <?= $iq_persen[$n] ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h6>Total Skor Observasi :
                    <?= $iq_totobs ?>
                </h6>
                <h6>Total Skor Diharapkan :
                    <?= $iqsi_totharap ?>
                </h6>
                <h6>Persentase Kelayakan :
                    <?= $iq_peravg ?>
                </h6>
                <h6>Kategori Kelayakan :
                    <?= $iq_status ?>
                </h6>
                </div>
            </div>
        
            <div class="card card-body">
                <h6>Dimensi: Service Interaction</h6>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" rowspan="2">Quest_ID</th>
                            <th class="text-center" colspan="5">Jawaban Responden</th>
                            <th class="text-center" rowspan="2">Skor Observasi</th>
                            <th class="text-center" rowspan="2">Skor Diharapkan</th>
                            <th class="text-center" rowspan="2">Persentase Kelayakan</th>
                        </tr>
                        <tr>
                            <th class="text-center">SS</th>
                            <th class="text-center">S</th>
                            <th class="text-center">N</th>
                            <th class="text-center">TS</th>
                            <th class="text-center">STS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        for ($n=1; $n < 8; $n++) { ?>
                        <tr>
                            <td class="text-center" scope="row">
                                <?= 'si'.$n ?>
                            </td>
                            <td class="text-center">
                                <?= $si_ss[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $si_s[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $si_n[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $si_ts[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $si_sts[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $si_obs[$n] ?>
                            </td>
                            <td class="text-center">
                                <?= $skorharapan ?>
                            </td>
                            <td class="text-center">
                                <?= $si_persen[$n] ?>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <h6>Total Skor Observasi :
                    <?= $si_totobs ?>
                </h6>
                <h6>Total Skor Diharapkan :
                    <?= $iqsi_totharap ?>
                </h6>
                <h6>Persentase Kelayakan :
                    <?= $si_peravg ?>
                </h6>
                <h6>Kategori Kelayakan :
                    <?= $si_status ?>
                </h6>
                </div>
            </div>
        <!-- berisi total poin keseluruhan dari test semuanya
        trus isi pertanyaan setiap indikator dengan berapa hasil kuisionernya (bisa di collapse) 
        trus di bawah setiap pertanyaan indikator diisi total nilai dan nilai rata - rata yang didapat dari indikator tersebut -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>