<?php
	$comment = $_POST["komentar"];

	if(strlen($comment) < 5){
		echo "KOMENTAR HARUS LEBIH DARI 5!";
		echo "<br><a href ='komentar.php'>RE-COMMENT</a>";
	} else{
		echo $comment . "<br><br>";
		echo "Panjang Kata Komentar : " . strlen($comment);
	}
?>