<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
     require 'src/Facebook/Facebook.php';
     $facebook = new Facebook\Facebook([
        'app_id' => '205343576560750',
        'app_secret' => 'eafeb4d4a976a2e7aecba3f75467681f',
        'default_graph_version' => 'v2.5',
]);
    
      $userid = $facebook->getUser();
      if($userid){
          try{
              $profile = $facebook->api('/me');
                          
          }catch(FacebookApiException $e){
               print $e->getMessage();  
               $userid =null;
          }
      }
      if($userid){
          $logout = $facebook->getLogoutUrl();
      }
      else{
          $login = $facebook->getLoginUrl(array(
              'scope' =>'user_birthday, read_friendList'
          ));
      }
      if($userid){
          print_r ($profile);
      }else{
          print '<a href="'.$login.'">Giriş Yap</a>';
      }
    ?>

   
       <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
       <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
       <script type="text/javascript" src="js/popUp.js"></script>
  
</body>
</html>