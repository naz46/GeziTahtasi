<?php
 include 'ayar.php';
 header("Content-Type : text/html; charset = iso-8859-9");//turkçe uyumluluğu
 //Gelen degerleri alalım
 $a = $_POST["adsoyad"];
 $b = $_POST["eposta"];
 $c = iconv('UTF-8','ISO-8859-9', $_POST["yorum"]);

if(empty($a) || empty($b) || empty($c)){
	echo "hata1";
}else{
	$ekle = mysql_query("insert into yorum(yazan,eposta,yorum) values('$a','$b','$c')");
	if($ekle){
         $id = mysql_insert_id();// bu bizim son eklenen içeriğimizin otomatik artan değeri
		 $bul = mysql_query("select * from yorum where id ='$id'");
		 $goster = mysql_fetch_array($bul);
		 extract($goster);
		 echo "<div class='yorum'>
					<div class= 'demiski'><strong>{$yazan}</strong> demişki;</div>
					<div class = 'yorum_ic'>{$yorum}</div>
		       </div>";
	}else {
		echo "hata2";
	}
}

?>
