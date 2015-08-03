<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="" class="no-js">
  <head>

  <?$APPLICATION->ShowHead()?>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khrenov&amp;Partners</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/styles/main.css">

  </head>

  <?php
    $body_class = "index";

    preg_match("/(.*)\\/(.*)/", $_SERVER['REQUEST_URI'], $split);

    if ( !empty($split[1]) )
    {
      $body_class = trim($split[1], '/');
    }
  ?>

  <body class="<?=$body_class;?>">

    <?$APPLICATION->ShowPanel();?>

    <div class="header">
      <div class="content">
        <div class="logo"><a href="/"></a></div>
        <div class="menu">
          <ul>
            <li><a href="/about/">About us</a></li>
            <li><a href="/team/">Our team</a></li>
            <li><a href="/services/">Services</a></li>
            <li><a href="/clients/">Clients</a></li>
            <li><a href="/recognition/">Recognition</a></li>
            <li><a href="/press/">Press-club</a></li>
            <li><a href="/career/">Career</a></li>
            <li><a href="/contacts/">Contacts</a></li>
          </ul>
        </div>
        <div class="lang">
          <ul>
            <li><a href="#">Ru</a></li>
            <li><a href="#">En</a></li>
          </ul>
        </div>
        <div class="burger"></div>
      </div>
    </div>