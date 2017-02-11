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
<body>
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
             <li><a href="index.php">HAKKIMDA</a></li>
             <li><a href="index.php">BLOG</a></li>
             <li><a href="index.php">GEZİ İPUÇLARI</a></li>
             <li><a href="#contact">İLETİŞİM</a></li>
             <li><a href="#" id="signUp"><span class="glyphicon glyphicon-user"></span>ÜYE OL</a></li>
             <li ><a href="#" id="loginBtn"><span class="glyphicon glyphicon-log-in"></span>GİRİŞ YAP</a></li>        
             
            </ul> 
          </div>
        </nav>
     
     </header>
     <!-- Home -->
     <section id="home" style="background: url(images/yaprak.jpg) no-repeat center center fixed; background-size: cover;margin-left: -9px; width: 1449px;">
        <div>
            <img src="" class="siteheader "> 
            <img src="images/girl.png" class="girl" >
        </div>
     </section>
     <!-- Yazılar -->
     <section id="middle"> 
        <?php
             include 'ayar.php';

         if(isset($_GET["id"]))
          {
             $id = mysql_real_escape_string($_GET['id']);
          }

         $res = mysql_query("select * from resimler r inner join geziler g on r.i_id = g.g_id where  r.i_id ='$id'");
            
             if($row=mysql_fetch_array($res)){
                 ?>
                 <h1> <?php echo $row["i_baslik"] ; ?><i class="fa fa-heart-o color"></i></h1>
                 <p class="date"> <?php echo $row["i_tarih"] ; ?> <p> 
                 <p> <img src="<?php echo $row["i_path"]; ?>" class="img1"> <p>
                 <p> <img src="<?php echo $row["i_path2"]; ?>" class="img2"><p>
                 <p class="text"> <?php echo $row["i_text"]; ?> <p> 
                 <p class="text2"> <?php echo $row["i_text2"]; ?> <p> 
                 <p class="text3"> <?php echo $row["i_text3"]; ?> <p> 
                 <p class="text4"> <?php echo $row["i_text4"]; ?> <p> 
                                 
            <?php
             }

         if(isset($_GET["id"]))
          {
             $id1 = mysql_real_escape_string($_GET['id']);
          }

         $res = mysql_query("select * from advice a inner join ipuclari i on a.a_id = i.id where  i.id ='$id1'");
            
             if($row=mysql_fetch_array($res)){
                 ?>
                 <h1> <?php echo $row["baslik"]; ?><i class="fa fa-heart-o color"></i></h1>
                 <p class="date"> <?php echo $row["i_tarih"]; ?> <p> 
                 <p> <img src="<?php echo $row["resim1"]; ?>" class="img1"> <p>
                 <p> <img src="<?php echo $row["resim2"]; ?>" class="img2"><p>
                 <p class="text"> <?php echo $row["yazi1"]; ?> <p> 
                 <p class="text2"> <?php echo $row["yazi2"]; ?> <p> 
                 <p class="text3"> <?php echo $row["yazi3"]; ?> <p> 
                 <p class="text4"> <?php echo $row["yazi4"]; ?> <p> 
                 <p class="text5"> <?php echo $row["yazi5"]; ?> <p> 
                 <p class="text6"> <?php echo $row["yazi6"]; ?> <p> 
               
               
            <?php
             }
          
             ?>
     </section>
     <!-- Yorum -->
     <section id="comment">
          <!--yorumlar -->
        <div id="yorumlar" >
            <?php
            $bul = mysql_query("select * from yorum order by id asc");
            while($goster = mysql_fetch_array($bul)){
            extract($goster);
                    echo "<div class='yorum'>
					<div class= 'demiski'><strong>{$yazan}</strong> demişki;</div>
					<div class = 'yorum_ic'>{$yorum}</div>
		             </div>";
            }
        
          ?>
        </div> 
         <!--yorumlar --> 
         <!--yorum gönder -->
        <div id = "genel">  
            <div class="ybas">Yorum Gönder</div>   
                <div id ="yorum_gonder">   
                    <form action="" method ="post" onsubmit = "return false">
                        <span>Ad-Soyad:</span>
                        <span><input type="text" name="adsoyad" class="yinput" ></span>
                        <span>E-Posta:</span>
                        <span><input type="text" name="eposta" class="yinput" ></span>
                        <span>Yorum:</span>
                        <span><textarea name="yorum" id="" cols="0" rows="0"></textarea></span>
                        <span><input type="submit" value="Gönder Gitsin" class="ygonder" onclick="gonder()" ></span>
                    </form>
                </div>
        </div>

        
     </section>
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
    <script type="text/javascript" src="js/yorum.js"></script>
    <script type="text/javascript" src="js/popUp.js"></script>
</body>
</html>