<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="" class="no-js">
  <head>

    <?$APPLICATION->ShowHead()?>

    <meta charset="utf-8">
    <meta name="description" content="">
    <title>Khrenov&amp;Partners</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/styles/main.css">
  </head>

  <?php
    $body_class = "index";
    if ($_SERVER['REQUEST_URI'] !== '/')
    {
      $body_class = trim($_SERVER['REQUEST_URI'], '/');
    }
  ?>

  <body class="<?=$body_class;?>">

    <?$APPLICATION->ShowPanel();?>

    <div class="header">
      <div class="content">
        <div class="logo"><a href="/"></a></div>
        <div class="menu">
          <ul>
            <li class="active"><a href="/about/">About us</a></li>
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
      </div>
    </div>
