<html>
    <head>
        <title>Dinamik Form</title> 
        <meta http-equiv="Content Type" content="text/html; charset=utf=8" />  
        <meta name="viewport" content="width=device-width, initial -scale=1"/>
        <meta name="description" content="Dinamik form uygulamasİ." /> 
        <meta name="keywords" content="dinamik form,html,css"/> 
        <link rel="shortcut icon" href="icon.png" />
        <style>
        /* Web Sitesi Stil kodları */
        anaFormAlani{
            max-width:300;
            height:auto;
            border:3px solid #ccc;
            padding:10px;
            margin:0 auto 0 auto;
            display:table;
        }
        #iletisimFormu input[type=text]{
            width:96%;
            margin:0 0 15px 0;
            padding:5px %2 5px 2%;
        }
        #iletisimFormu textarea{
            width:100%;
            margin:0 0 15px 0;
            padding:5px 2% 5px 2%;
        }
        </style> 
    </head>
<body>
    <?php error_reporting(0);
    $adSoyadVerisi =  $_POST["adsoyad"];
    $telefonVerisi =  $_POST["telefon"];
    $konuVerisi    =  $_POST["konu"];
    $mesajVerisi   =  $_POST["mesajbolumu"];
    $gonderVerisi  = $_POST["gonder"];
    if($gonderVerisi =="Gönder")   {
        echo $adSoyadVerisi. "<br>";
        echo $telefonVerisi. "<br>";
        echo $konuVerisi. "<br>";
        echo $mesajVerisi. "<br>";
        
    }
    ?>
    <div class="anaFormAlani">  
    <h2>İletisim Formu <h2>
    <form  name="bilgiFormu" id="bilgiFormu" action="/" method="POST"> 
        <input type="text" placeholder="Ad, Soyad" name ="adsoyad" />

        <input type="text" placeholder="Telefon Numarasi" name ="telefon" />

        <input type="text" placeholder="Konu" name ="konu" id="konu" />

        <textarea  name="mesajbolumu" id="mesajbolumu" placeholder="Mesajiniz"> </textarea>
        
        <input type="submit" value="Gönder" name="gonder" id="gonder"/>
    </form>
    </div>
</body>
</html>