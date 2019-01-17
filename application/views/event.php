<html lang="en">
<head>
    <title>Profil Admin</title>
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
    #a {
    margin: 175px;
    font-family: monospace;
    font-style: italic;
    font-size: 5mm;
    text-align: center
    }

    p {
      text-align: center;
      color: black;
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
  <div id="a">
    <img style="width: 500px;" src="<?=base_url()?>asset/munchen.jpg" alt="">
    <h1> LIMITED EDITION </h1>
    <p>Toko y_ambon lelang jaket berkualitas + hanya 1 di Dunia</p>
    <p>Minggu,13 Januari 2019</p>
  </div>
</body>
</html>
