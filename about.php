<?php
    include 'koneksi.php';
    include 'navbar.php';
?>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>Tentang Qualtest</title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap');
            body {
                font-family: 'Poppins', sans-serif;
                background-color: whitesmoke;
            }

            .card{
                margin-top: 5%;
                padding: 20px 70px 10px 70px;
            }
            
            p {
                font-weight: 400;
                line-height: 30px;
                text-align: justify;
            }
            
            h3 {
                margin-bottom: 20px;
                font-size: 35px;
                font-weight: 900;
            }
        </style>
    </head>

    <body>
        <div class="container col-6 card card-body">
            <h3>Tentang Qualtest</h3>
            <div class="col-2"></div>
            <div class="col">
                <p>
                    <strong>Qualtest</strong> merupakan sebuah aplikasi website yang diperuntukan untuk melakukan penilaian kualitas website. Kualitas sebuah website diukur menggunakan metode WebQual 4.0. Metode WebQual merupakan salah satu metode yang paling banyak digunakan untuk mengukur kualitas
                    sebuah website berdasarkan persepsi pengguna tingkat akhir. Setiap pengguna yang menggunakan website ini, akan diminta untuk menjawab setiap variabel yang terdapat pada metode WebQual, yang berfokus pada tiga dimensi utama yaitu usabiliy,
                    kualitas informasi dan kualitas pelayanan interaksi. Setiap jawaban pengguna akan diberikan bobot berdasarkan skala Likert. Kemudian Qualtest akan melakukan analisis kelayakan terhadap jawaban dari seluruh pengguna. Analisis
                    kelayakan ini bertujuan untuk mendapatkan informasi dari hasil dari pengujian yang dilakukan, yang nantinya dapat dimanfaatkan dalam proses pengembangan website.
                </p>
            </div>
            <div class="col-2"></div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>

    </html>