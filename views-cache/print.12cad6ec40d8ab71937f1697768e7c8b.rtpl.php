<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPN Web | Impressão de Senha</title>
  <!-- Favicon HTML -->
  <link rel="shortcut icon" type="image/png" href="/res/site/img/favicon32x32.ico">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Favicon HTML -->
  <link rel="shortcut icon" type="image/png" href="/res/site/img/favicon32x32.ico">
  <!-- Bootstrap 3.3.6 
    <link rel="stylesheet" href="/res/admin/bootstrap/css/bootstrap.min.css">-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Ionicons 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
    <!-- Theme style   <link rel="stylesheet" href="/res/admin/dist/css/AdminLTE.min.css">-->

    <style type="text/css" media="screen">

    .text-center {
      text-align: center;
    }
    .ttu {
      text-transform: uppercase;
    }
    .printer-ticket {
      display: table !important;
      width: 100%;
      max-width: 400px;
      font-weight: light;
      line-height: 1.1em;
    }
    .printer-ticket,
    .printer-ticket * {
      font-family: Tahoma, Geneva, sans-serif;
      font-size: 14px;
    }
    .printer-ticket th:nth-child(2),
    .printer-ticket td:nth-child(2) {
      width: 200px;
    }
    .printer-ticket th:nth-child(3),
    .printer-ticket td:nth-child(3) {
      width: 90px;
      text-align: right;
    }
    .printer-ticket th {
      font-weight: inherit;
      padding: 10px 0;
      text-align: center;
      border-bottom: 2px dashed #BCBCBC;
    }
    .printer-ticket tbody tr:last-child td {
      padding-bottom: 10px;
    }
    .printer-ticket tfoot .sup td {
      padding: 10px 0;
      border-top: 2px dashed #BCBCBC;
    }
    .printer-ticket tfoot .sup2 td {
      padding: 20px 0;
      margin: 20px 0;
      border-top: 2px solid #000;
    }
    .printer-ticket tfoot .sup.p--0 td {
      padding-bottom: 0;
    }
    .printer-ticket .title {
      font-size: 1.5em;
      padding: 15px 0;
    }
    .printer-ticket .top td {
      padding-top: 10px;
    }
    .printer-ticket .last td {
      padding-bottom: 10px;
    }
    .printer-ticket span{
      font-size: 18px
    }

    .printer-ticket img{
      margin: 0 25% 
    }
    .ta-center { 
      text-align: center; 
    }
    .flex { display: flex; }

    .f-d-column { flex-direction: column; }

    hr{
      border:0;
      border-bottom:1px solid #000;
      width: 400px;
      text-align: left;

    }
    #nota {
      background: #ffe3a0;
      width: 400px;
      height: 100%;
      font-family: Calibri;
      font-size: 9pt;
    }

    * {
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
    }

    #body {
      width: 400px;
      margin-top: 70px;
      background-color: #ffe3a0;
      font-family: 'Open Sans', sans-serif;
    }



  </style>

</head>
<body >
  <div id="nota">
    <table class="printer-ticket">
      <thead>
       <tr>
        <tr>
          <th class="title" colspan="3">
            <img  style="width: 200px; margin: 0px" src="/res/admin/dist/img/logoCent.png" alt="">
          </th>
        </tr>
        <tr>
          <th class="title" colspan="3" style="text-align: center">
            <h1 style="font-size: 14px; margin: 0">PREFEITURA MUNICIPAL DE CENTENÁRIO DO SUL</h1></br>
            <h1 style="font-size: 1em; margin: 0">PASSAPORTE DE SENHA DE NATAL</h1>
            <h1 style="font-size: 1em; margin: 2px 0">ANO (2018)</h1>
          </th>
          <!--<th><img  style="width: 70px; margin: -1px" src="/res/admin/dist/img/brasao.png" alt=""></th>-->
        </tr>
        <tr>

        </tr>
        <tr>
          <th colspan="3">
            <span>Emitido em:</span></br>
            <?php echo htmlspecialchars( $dateNow, ENT_COMPAT, 'UTF-8', FALSE ); ?>
          </th>
        </tr>
        <tr>
          <th colspan="3" >
            <span>Nome:</span><br />
            <p style="font-size: 2em;"><h1 style="font-size: 3em;line-height: 1em;"><?php echo htmlspecialchars( $data["deskid"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1></p>
          </th>
        </tr>
        <tr>
          <th class="ttu" colspan="3">
            <b>Sua senha é: <h1 style="font-size: 6em"><?php echo htmlspecialchars( $data["nrpassword"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1></b>
          </th>
        </tr>
        <tr>
          <th class="ttu" colspan="3">
            <b>Data entrega do presente: <h1 style="font-size: 4em; margin-bottom: 10px"><?php echo date('d/m/Y', strtotime($data["dtpassword"])); ?></h1></b></br>
            <b><h1 style="font-size: 2em; margin-top: 0"><?php echo htmlspecialchars( $dayW, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1></b>
          </th>
        </tr>
      </thead>
      <tbody>
  <!--<tr class="top">
    <td colspan="3">Dados Adicionais:</td>
  </tr>
  <tr>
    <td>R$7,99</td>
    <td>2.0</td>
    <td>R$15,98</td>

  </tr>
  <tr>
    <td colspan="3">Opcional Adicicional: grande</td>
  </tr>-->
  <tr>
    <td></td>
    <td><img  style="width: 250px" src="/res/admin/dist/img/qrcode.png" alt=""></td>
    <!-- <td><img  style="width: 250px" src="../../vendor/hcodebr/php-classes/src/DB/QRcode.php?"<?php echo htmlspecialchars( $data["deskid"], ENT_COMPAT, 'UTF-8', FALSE ); ?> alt="QR Code"></td>-->
    <td></td>
  </tr>

</tbody>
<tfoot>
  <tr class="sup ttu p--0">
    <td colspan="3">
      <b>Dados Adicionais:</b>
    </td>
  </tr>
  <tr class="ttu">
    <td colspan="2">Idade:</td>
    <td align="right"><b><?php echo date('Y') - date('Y', strtotime($data["dtbirthday"])); ?> Anos</b></td>
  </tr>
  <tr class="ttu">
    <td colspan="2">Sexo:</td>
    <td align="right"><b><?php if( $data["dessex"] == 1 ){ ?>Feminino<?php }else{ ?>Masculino<?php } ?></b></td>
  </tr>
  <tr class="ttu" style="width: 150">
    <td colspan="2">Responsável:</td>
    <td align="right"><b><?php echo htmlspecialchars( $data["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></td>
  </tr>
  <tr class="ttu" >
    <td colspan="2">Telefone:</td>
    <td align="right"><b><?php echo htmlspecialchars( $data["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></td>
  </tr>
  <tr class="ttu" >
    <td colspan="2">Escola:</td>
    <td align="right"><b><?php echo htmlspecialchars( $data["deslocal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></td>
  </tr>
  <tr class="ttu" >
    <td colspan="2">Matricula:</td>
    <td align="right"><b><?php echo htmlspecialchars( $data["nrmatriculation"], ENT_COMPAT, 'UTF-8', FALSE ); ?></b></td>
  </tr>
  <tr class="sup">
    <td colspan="3" align="center">
      <span>Local de entrega:</span> </br>
      <b>PRAÇA CENTRAL - ENFRENTE A PREFEITURA</b>
    </td>
  </tr>
  <tr class="sup">
    <td colspan="3" align="center">
      <b>ESTE PASSAPORTE É INDIVIDUAL E INTRANSFERÍVEL</b>
    </td>
  </tr>
  <tr class="sup">
    <td colspan="3" align="center">
      Seção de Infomática - Centenário do Sul <br/>
    P R Spiguel Tecnologia </br>
    SisPNWEB - V. 1.0
  </td>
</tr>

<tr class="sup">
  <td></td>
  <td><img  style="margin: 0 15%; width: 300px" src="/res/admin/dist/img/corteTesoura.png" alt=""></td>
  <td></td>
</tr>
</tfoot>
</table>
</div>
<div id="nota">
  <table style="width:100%">
    <tr>
      <td>
        <center>
          <h1>PASSAPORTE TRENZINHO</h1>
        </center>
      </td>
    </tr>
    <hr/>
  </table>
</div>

<div>
	<img  style="margin-top: 200px; width: 400px; transform: rotate(90deg)scale(1.60, 1.85)" src="/res/admin/dist/img/tren.png" alt="">
</dir>

 <!--<div id="body" class="transformed">
 <div class="tickt">
    <div class="contianer">
      <h1>PASSAPORTE TRENZINHO</h1>
      <div class="lef-1">
        <div class="date">
          <h2>23</h2>
        </div>
        <div class="text">
          <p>dj music event</p>
          <h2>live in sydney</h2>
          <div class="upper">
            <span class="s1"> <i class="fa fa-calendar" aria-hidden="true"></i></span>
            <span class="s2"><p>Wednesday 28 December 2014 08:55 pm to 12 am</p></span>
          </div>
          <div class="upper">
            <span class="s1"> <i class="fa fa-map-marker" aria-hidden="true"></i></span>
            <span class="s2"><p>nexen square for people australia,sydneym</p></span>
          </div>
        </div>
        <span class="l-last">tickets</span>
      </div>
    </div>



    <div class="ticket-design">
      <header>
        <div class="logo">
          <img src="https://i.stack.imgur.com/I7wrc.png">
        </div>
      </header>
      <div class="mainSection">
        <div class="leftSection">
          <div class="qrcode">
            <img src="https://i.stack.imgur.com/Rdojb.png">
          </div>
        </div>
        <div class="rightSection">
          <div class="eventDetails">
            <div class="eventDetail">
              <small>Demo Name</small>
              <strong>Ticketing Event</strong>
            </div>
          </div>
          <div class="infos">
            <div class="places">
              <div class="box">
                <small>Date and Time</small>
                <strong>Sunday 30th July 17 (12:00pm/4:00pm)</strong>
              </div>
            </div>
            <div class="times">
              <div class="box">
                <small>Location</small>
                <strong>97-99 Pitt Street
                  Sydney, New South Wales
                Australia, 2000</strong>
              </div>
            </div>
          </div>
          <div class="strap">
            <div class="box">
              <div class="passenger">
                <small>Ticket Type</small>
                <strong>Day 2 Ticket</strong>
              </div>
              <div class="date">
                <small>Payment Status</small>
                <strong>AUD 30</strong>
              </div>
            </div>
            <div class="eventLogo">
              <img src="https://i.stack.imgur.com/I7wrc.png">
            </div>
          </div>
        </div>
      </div>
    </div>-->



  </body>
  </html>
