<?php
$nim		= $_POST['nim'];
		$nama		= $_POST['nama'];
		$email		= $_POST['email'];
		$iputagain	= "<br><a href ='registrasi.php'>INPUT ULANG</a>";
		$line		= "<br>";

		if(strlen($nama) > 10){
			echo "Max length 25 word";
			echo $inputagain;
			echo $line;
		}
		if(!is_numeric($nim) || strlen((string)$nim) > 10){
			echo "NIM harus angka dan max lenth 10";
			echo $inputagain;
			echo $line;
		}
		if(!preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z.]{2,5}$/",$email)){
			echo "Format salah";
			echo $inputagain;
			echo $line;
		}else{
			header("Location: komentar.php");
		}				
?>
