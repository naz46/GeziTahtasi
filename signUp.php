<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gezi Tahtası</title>
    <link rel="stylesheet" type="text/css" href="signUp.css">
     <!--Add icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/travel.png">
</head>
<body id="body-color">

<div id="Sign-Up"> 
    <fieldset style="width:30%">
        <legend>Kayıt Formu</legend> 
        <table border="0"> <tr> 
            <form method="POST" action="sign.php">
                <td>Ad</td> <td> <input type="text"      name="name"></td> </tr> <tr> 
                <td>Email</td><td> <input type="text"    name="email"></td> </tr> <tr> 
                <td>Kullanıcı Adı</td> <td> <input type="text"   name="user"></td> </tr> <tr> 
                <td>Şifre</td><td> <input type="password"        name="pass"></td> </tr> <tr>
                <td>Şifreyi Onayla</td><td><input type="password" name="cpass"></td> </tr> <tr>
                    
                <td><input id="button" type="submit" name="submit" value="Sign-Up"></td> </tr>
            </form> 
        </table> 
    </fieldset>
 </div>


</body>
</html>