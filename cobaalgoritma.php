<?php
include 'koneksi.php';
	$cekID = mysqli_query($koneksi,"SELECT test_id FROM testing");
	var_dump($cekID); ?> <br> <?php
	$id = mysqli_fetch_assoc($cekID);
	if($id > 0){
		var_dump($id)
		?> <br> <?php
		echo "masuk";	
	}
	else{
		echo "ggal";
	}
	?> <br> <?php
	var_dump($id);?> <br> <?php
	$tesID = count($id); ?> <br> <?php
	echo $tesID; ?> <br> <?php
	var_dump($tesID); 
?>
<?php
//     include 'koneksi.php';

//     if(isset($_POST["gender"]))  
//       {  
//            $query = "INSERT INTO tbl_gender(gender) VALUES (:gender)";  
//            $statement = $connect->prepare($query);  
//            $statement->execute(  
//                 array(  
//                     'gender'     =>     $_POST["gender"]  
//                 )  
//            );  
//            $count = $statement->rowCount();  
//            if($count > 0)  
//            {  
//                 echo "Berhasil Memasukan Data Jenis kelamin!";  
//            }  
//            else  
//            {  
//                 echo 'tidak ada yang di masukan';  
//            }  
//       }  
//     $cek = mysqli_query($koneksi, "SELECT * FROM `question` WHERE `quest_id` LIKE 'us_';");
//     while($question = mysqli_fetch_assoc($cek)){ 
//         var_dump($question) ;
//         ?> 
<!-- <br>  -->
<?php 

//     }

//     $cek = mysqli_query($koneksi, "SELECT * FROM `question` WHERE `quest_id` LIKE 'iq_';");
//     while($question = mysqli_fetch_assoc($cek)){ 
//         var_dump($question) ;
//         ?> 
			<!-- <br>  -->
			<?php
//     }

//     $cek = mysqli_query($koneksi, "SELECT * FROM `question` WHERE `quest_id` LIKE 'si_';");
//     while($question = mysqli_fetch_assoc($cek)){ 
//         var_dump($question) ;
//         ?> 
<!-- <br>  -->
<?php
        
//     }

// ?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<h2 class="text-center">Cara Insert ke Database dengan Radio Button</h2>
				<div class="input-group mt-3">
				  <div class="input-group-prepend">
				    <div class="input-group-text">
				      <input type="radio" aria-label="Radio button for following text input" name="gender" value="Pria">
				    </div>
				  </div>
				  <input type="text" class="form-control" aria-label="Text input with radio button" value="Pria" disabled>
				</div>
				<div class="input-group mt-3">
				  <div class="input-group-prepend">
				    <div class="input-group-text">
				      <input type="radio" aria-label="Radio button for following text input" name="gender" value="Wanita">
				    </div>
				  </div>
				  <input type="text" class="form-control" aria-label="Text input with radio button" value="Wanita" disabled>
				</div>
				<div class="input-group mt-3">
				  <div class="input-group-prepend">
				    <div class="input-group-text">
				      <input type="radio" aria-label="Radio button for following text input" name="gender" value="Tobat">
				    </div>
				  </div>
				  <input type="text" class="form-control" aria-label="Text input with radio button" value="Khusus" disabled>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 offset-md-2">
				<div id="result" class="d-none"></div>
			</div>
		</div>
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
<!-- <script>
	$(document).ready(function(){
		$('input[type="radio"]').click(function(){
			var jk = $(this).val();
			console.log(jk)
			function setHide(){
				setTimeout(function(){
					$("#result").removeClass("d-block")
					$("#result").addClass("d-none")
				},2000)
			}
			$.ajax({
				url: "cobaalgoritma.php",
				method: "POST",
				data: {gender: jk},
				success: function(data){
					$("#result").removeClass("d-none")
					$("#result").addClass("d-block")
					$("#result").html(data)
					setHide()
				}
			})
		})
	}) 
</script>
</body>
</html> -->