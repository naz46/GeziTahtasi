<?php
 include 'ayar.php';
 
function yeniKullanici()
{
    $ad = $_POST['name'];
    $k_adi = $_POST['user'];
    $email = $_POST['email'];
    $sifre = $_POST['pass'];
    $query ="insert into users (ad,k_adi,email,sifre) values('$ad','$k_adi','$email','$sifre')";

    $data = mysql_query($query) or die(mysql_error());
    if($data){
        echo "Kayıt işlemi tamamlandı!!";
        header("Location: index.php");
       


    }
}
function SignUp()
{
    if(!empty($_POST['user'])) //signUp.php'den 'kullanıcı' adını kontrol et, boş mu
    {
        $query = mysql_query("select * from users where k_adi='$_POST[user]' and sifre = '$_POST[pass]'") or die(mysql_error()); 
        if(!$row = mysql_fetch_array($query)or die(mysql_error()))
        {
             yeniKullanici();
        }else{
            echo "Bu Kullanıcı zaten var...";
        }


    }
}

if(isset($_POST['submit'])){
    SignUp();
}



?>