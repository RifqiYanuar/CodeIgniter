<html lang="en">
<head>
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
    <style>
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
      background-size: 150px 150px;

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
<span id="logo"><img src="<?=base_url()?>asset/adi.png"></span>
        <ul>
            <li><a href="<?=base_url()?>index.php/welcome/utama"> Home </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/event"> Event </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/gallery"> Gallery </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/contact"> Contact </a></li>
            <li><a href="<?=base_url()?>index.php/welcome/profil"> MyProfil </a></li>
        </ul>
    </div>
</header>
<div id="badan">
<h1 align="center" style="color:black;
text-align: left;
font-size: 10.3mm;
margin-top:197px;
margin-left: 12px;
font-family:sans-serif;"><b>Selamat Datang di Toko y_ambon</b></h1>
<p style="font-size: 30px;color:black;margin-left: 56px;margin-top: 39px;">Kick start the year with upbeat workouts in new sport bras and tights. </p>
</div>

</body>
</html>
