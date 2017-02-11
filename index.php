<!DOCTYPE html>
<html>
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Gezi Tahtası</title>
    <!--Slick Carousel-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--Add fonts-->
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz&subset=latin-ext" rel="stylesheet" type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
     <!--Add icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/travel.png">
</head>
    <body style="background-color: #f5f5f5">
    <!-- NavBar -->
    <header>
          <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                    <div class="navbar-header">  
                        <a  href="index.php" class="navbar-brand">GEZİ TAHTASI</a>
                        <img src="images/travel.png" class="icon">
                    </div>
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home">   HOME</a></li>
                    <li><a href="#aboutUs">HAKKIMDA</a></li>
                    <li><a href="#carousel">BLOG</a></li>
                    <li><a href="#advice">GEZİ İPUÇLARI</a></li>
                    <li><a href="#contact">İLETİŞİM</a></li>
                    <li><a href="signUp.php" id="signUp"><span class="glyphicon glyphicon-user"></span>ÜYE OL</a></li>
                    <li ><a href="#" id="loginBtn"><span class="glyphicon glyphicon-log-in"></span>GİRİŞ YAP</a></li>        
                    </ul> 
                </div>
        </nav>
    </header>
          <?php   include 'ayar.php'; ?>
    <!--Home -->
    <section id="home">
        <div>
            <img src="images/car.jpg" class="site-header ">
            <img src="images/better.png" class="betterPos" >
        
        </div>
    </section>
    <!-- Hakkımda -->
    <section id="aboutUs">
                
        <div>
            <h1 class="h1-au">MERHABA BEN NAZLICAN ÖZTÜRK</h1>
            <img src="images/me.png" width="350" height="350" class="image-au">
            <p class="p-au"> Bloğuma hoşgeldiniz.Ben bir bilgisayar mühendisiyim.Sık sık seyahat ediyorum ve gezip yeni yerler
                görmekten hoşlanıyorum.Küçüklüğümden beri dünyayı gezmek en büyük hayalim.Bu bloğu
                açmamın sebebi gezip gördüğüm yerleri sizlerle paylaşmak ve 
                benim gibi hayali gezmek olan insanların tecrübelerimden yararlanmasını sağlamaktır.
            </p>
                <p class="p-au"> Gezmek, tarihi mekânlar görmek, yöresel yiyecekler, yöresel şiveler ve bu konularda yazı/resim/video paylaşımları 
                    yapmak yaparken en çok zevk aldığım şeylerin başlıcaları.Dünya’nın bir çok yerini gezdim, bir çok  yiyeceği yerinde  tatma şansım oldu.
            </p>
                <p class="p-end-au">Gelecekte saat sesiyle uyanmamak, her gün düzenli kahvaltı yapmak, 
                    teknoloji ve iletişim konularında proje bazlı danışmanlık yapmaya devam etmek istiyorum.Bloğumda bazen bilgi, 
                    çoğu zaman deneyim ve eğlenceli resimler bulabilirsiniz.Bana sitemin en aşağısındaki adreslerden ulaşabilirsiniz.
                </p>   
                <i class="fa fa-heart-o" style="color:#e0dede;"></i>
                
        </div>
    </section>
    <!-- Galeri -->
    <section id="carousel">

        <h1 class="h1-ad">TRAVEL  WİTH  ME</h1>

        <?php 
        
        $query=mysql_query("select *from geziler"); ?>
        <div class="slick-carousel">
            <?php
            
            while($row = mysql_fetch_array($query))
            {
            
            ?>
            <a class="imageCover image  slick-slide" href="data.php?id=<?php echo $row['g_id'] ?>" style="background-image: url('<?php echo $row['g_url']; ?>');" title="me" target="_blank">
            <h2 class="h2Properties spanProperties"><span><?php echo $row['g_text'] ?></span></h2>
            </a>

            <?php                 
            }          
                ?>

        </div>
                
        
    </section>
    <!-- İpuçları -->
    <section id="advice">
        <div class="popular-posts-entries clearfix" style="margin-left: -43px;" >
            <h3 class="h1-ad">Most Popular Travel Tips</h3>
            <?php 
            $query=mysql_query("select *from advice");
            
            
            while($row1 = mysql_fetch_array($query))
            {
            
            ?>
            <ol><a  href="data.php?id=<?php echo $row1['a_id'] ?>" target="_blank"><img src="<?php echo $row1['a_url'] ?>" alt="" style = "height:280px; width:375px;"class="adviceImg iconPos1"></a></ol>
            <?php 
                
            }
            
                ?>
        </div>
    </section>
    <!-- Footer -->
    <section id="contact">
        <?php
        include "Footer.php";
        ?>
    </section>
        
    <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/javascript.js"></script>
    <script type="text/javascript" src="js/popUp.js"></script>
      
     
    </body>
</html>