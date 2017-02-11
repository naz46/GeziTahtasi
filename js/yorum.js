function gonder(){
    var adsoyad = $("input[name = adsoyad]").val();
        adsoyad = jQuery.trim(adsoyad);
    var eposta = $("input[name = eposta]").val();    
        eposta = jQuery.trim(eposta); 
    var yorum = $("textarea[name = yorum]").val();    
        yorum = jQuery.trim(yorum);     

        if(adsoyad == "" || eposta == "" || yorum == ""){
            alert("Boş Alan Bırakmayınız..");
        }else {
            var degerler = "adsoyad="+adsoyad+"&eposta="+eposta+"&yorum="+yorum;
            $.ajax({
                type: "POST",
                url:"ajax.php",
                data: degerler,
                success: function(sonuc){
                  if(sonuc == "hata1")  
                  {
                      alert("Tüm Alanlar Doldurulmalıdır.");
                  }else if(sonuc == "hata2"){
                      alert("Yorum Eklenirken Bir hata Oluştu.");
                  }else{
                      $("#yorumlar").append(sonuc);
                  }
                }
            })
        }
}