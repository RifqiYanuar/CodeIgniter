<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profil Admin</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/profil.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
    <style media="screen">
    *{
      margin: 0;
      padding: 0;
    }
    body,html{
      overflow-x: hidden;
    }

    body{
      background-image: url("<?=base_url()?>asset/adis.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;

    }
    header{
      width: 105%;
      background-color: maroon;

    }

    .atas{
      background-color: transparent;
      color: black;
      height:70px;
      width: 100%;
    }

    #logo img{
      height:100px ;
      width: 120px;
      margin-bottom:5%;
      margin-top: 10%;
    }

    nav ul{
        float:right;
        list-style-type:none;
    }
    li{
        display:inline;
        font-size: 23px;
        color: black;
    }

    #badan{
        margin-left: 25%;
        margin-right: 25%;
        background-color: rgba(239, 255, 255,0.8) ;

    }

    li a{
    color: black;
    }
    #logo{
        background-color: transparent;
    }
    </style>
  </head>
  <body>
    <header>
        <div class="atas">
    <span id="logo"><img src="<?=base_url()?>asset/adid.png"></span>
            <ul>
                <li><a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
                <li><a href="<?=base_url()?>index.php/welcome/event"> Event </a></li>
                <li><a href="<?=base_url()?>index.php/welcome/gallery"> Gallery </a></li>
                <li><a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
                <li><a href="<?=base_url()?>index.php/welcome/profil"> MyProfil </a></li>
            </ul>
        </div>
    </header>
    <div class="box">
      <img style="width:150px; height: auto;;"src="<?=base_url()?>asset/profil.JPG" alt="">
      <h2 style="color:blue;">Rifqi Yanuar Almuzaki Munandar</h2>
      <h3>Manajer Adidas</h3>
      <p>Download applikasi di smartphone Anda dan dapatkan promo khusus pengguna mobile app adidas addict.</p>
      <img style="width: 80px;border-radius:10%;float:left;margin:5px;"src="<?=base_url()?>asset/ig.png" alt="">
      <p style="margin-top:20px;"><b>@riefqi_yam83</p> <br>
      <img style="width: 50px;border-radius:10%; float:left; margin:5px; margin-left:20px;"src="<?=base_url()?>asset/twiter.png" alt="">
      <p style="margin-top:20px; margin-left:90px;">@riefqi_yam83</p> <br>
      <img style="width: 50px; border-radius:10%; float:left; margin:19px; margin-top:8px;"src="<?=base_url()?>asset/adi.png" alt="">
      <p style="height:20px;margin-top:15px;margin-right:-15px;">Adi_indo.com</p>

      <footer style="margin-top:50px;">
       <center>24 Hours Hotline - 085233324548<br>info@Adidas.com - Hak Cipta Dilindungi Undang-Undang</center>
     </footer>
    </div>

  </body>
</html>
