<!DOCTYPE html>
<html>
<head>
  <title>Original.uz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Original.uz</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" />
  <!-- Squad theme CSS -->
  <link href="css/style.css" rel="stylesheet">
  <link href="color/default.css" rel="stylesheet">

</head>

<?php


	
$message = "ORIGINAL.uz сайтидан хабар:";
$message = $message . "%0A" . "*Контакт: *"    .  $_POST['_contacts'];
$message = $message . "%0A" . "*Матн: *"       .  $_POST['_comments'];
$message = $message . "%0A" . "*Browser: *"    .  $_SERVER['HTTP_USER_AGENT'];
$message = $message . "%0A" . "*IP: *"         .  $_SERVER['REMOTE_ADDR'];

$bot_token = "412668160:AAF9CCsXmDLldklMLcD2d4xAzRf7xpZGxEw";
$chat_id1 = "3205512";	//  3205512 = 0 9811573; 115962921=7502155 HP
$chat_id2 = "49544375";	//  dl

$sending_message_url = "https://api.telegram.org/bot".$bot_token."/sendMessage?parse_mode=markdown"."&chat_id=".$chat_id1."&text=".$message;
$handle = fopen($sending_message_url, "r");


$sending_message_url = "https://api.telegram.org/bot".$bot_token."/sendMessage?parse_mode=markdown"."&chat_id=".$chat_id2."&text=".$message;
$handle = fopen($sending_message_url, "r");



?>

<body id="msg" data-spy="scroll" data-target=".navbar-custom">
 <!-- Preloader -->
  <div id="preloader">
    <div id="load"></div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html">
          <h1>ORIGINAL.UZ</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="#intro">Главная</a>
          </li>
          <li>
            <a href="#about">О нас</a>
          </li>
          <li>
            <a href="#service">Партнеры</a>
          </li>
          <li>
            <a href="#contact">Контакты </a>
          </li>

        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>


  <div class="container text-center bg">
    <br><br><br><br><br>
    <div class="alert alert-success" role="alert">
    <p class="para">Сообщение отправлено успешно. Спасибо. Нажмите <a href="index.html" class="alert-link"><strong>сюда </strong></a>чтоб перейти на главную страницу. </p>
    </div>
    <br><br>
  
    

 <meta http-equiv="refresh" content="10;url=http://www.original.uz/" /> 


  
  </div>
  <footer class="msg_footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
                   <p class="footer_text">&copy;Copyright in Tashkent 2018</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/wow.min.js"></script>
  <!-- Custom Theme JavaScript -->
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>



</body>
</html>