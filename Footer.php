<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
     <div class="follow">       
             <a href="https://www.instagram.com/nazlcan.ozturk/" target="_blank"> 
             <button type="button" class="btn btn-danger" style="font-weight:bold;"> FOLLOW ME @Nazlcan.ozturk ON INSTAGRAM </button>
             </a>
    </div>
          
    <div>
        <?php 
            $query=mysql_query("select *from footer");
           
            
            while($row1 = mysql_fetch_array($query))
            {
            
            ?>
             <ul class="position">
               <ol>
                <a href="https://www.instagram.com/nazlcan.ozturk/" target="_blank">
               <img src="<?php echo $row1['i_path']; ?>" title="It's here!! My EPIC 2016 Travel Montage" class="img-insta">
               </a>
               </ol>
              
              </ul>           
              
             <?php 
                
            }
           
             ?>
         
     </div>
       
    <footer id="footer">
		<div id="footer-social">	
		   <a href="https://www.facebook.com/nazlican.ozturk2" target="_blank"><i class="fa fa-facebook iconPos"></i> <span class="spanPro">FACEBOOK</span></a>	
           <a href="https://www.instagram.com/nazlcan.ozturk/" target="_blank"><i class="fa fa-instagram iconPos"></i> <span class="spanPro">INSTAGRAM</span></a>
           <a href="http://weheartit.com/nazlican_ozturk2" target="_blank">    <i class="fa fa-heart iconPos"></i> <span class="spanPro">WE HEART IT</span></a>
           <a href="https://www.youtube.com/" target="_blank"><i class="fa fa-youtube-play iconPos"></i> <span class="spanPro">YOUTUBE</span></a>	
           <hr />																						
		   <div id="footer-copyright">
           <p class="copyright">©2017 - Gezi Tahtası . All Rights Reserved. </p>
		   </div>	
		</div>
	</footer>
    
</body>
</html>