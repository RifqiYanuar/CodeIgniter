<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil admin</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
    <style>
            body{
            margin:51pxpx;
            font-family:sans-serif;
            text-align:center;
            }
            .judul{
              margin-bottom:51px;
              font-size:larger;
              margin-top:35px;
            }
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
            p {
              color: black;
              text-align: center;
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
    <p class="judul" style="margin-top:50px;"><b><h2><i>New Arrivals Toko y_ambon this week!!!</i></h2></b></p><br><br><br>
    <img style="height:200 ;width:400px;"src="<?=base_url()?>asset/tahiti.jpg" alt="">
    <p><i>Track Top Adidas Ecuador</i></p><br><br>
    <img style="height:200 ;width:400px;"src="<?=base_url()?>asset/jamaica.jpg" alt="">
    <p><i>Track Top Adidas Bhutan</i></p><br><br>
    <img style="height:200 ;width:400px;"src="<?=base_url()?>asset/gampang.jpg" alt="">
    <p><i>Track Top Adidas Adicolor Staten Island NYC</i></p><br><br>
</body>
</html>
