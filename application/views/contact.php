<html lang="en">
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>asset/style.css">
    <style>
        #contact a{
            font-size:1cm;text-decoration: none;
            color: black;padding: 5px 20px;
            border: 1px solid transparent;
            transition: 0.6s ease;font-family: sans-serif;
        }
        #contact a:hover{
            background-color: white;color:blue;
            border: 2px solid tomato;
            border-radius: 40px;
            transition-duration: 0.5s;
        }
        #contact {
          text-align: center;
        }
        .contact {
          margin: 175px;
          font-family: fantasy;
          text-align: center;
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
          background-attachment: fixed;
          background-size: cover;

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
  <div id="contact">
    <img style="width: 200px;margin-bottom: 95px;" src="<?=base_url()?>asset/adi.png" alt="">
    <br>
    <a href="https://www.instagram.com/riefqi_yam83/?hl=en"><i>Silahkan Kunjungi instagram Toko y_ambon</i></a>
  </div>
</body>
</html>
