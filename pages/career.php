<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>

    <div class="block">
      <div class="content"></div>
    </div>

    <script src="<?=SITE_TEMPLATE_PATH?>/scripts/main.concat.js?1">     </script>
    <script>
      $('.menu li')
        .removeClass('active')
        .each(function() {
          var i = $(this);
          if (location.pathname.indexOf(i.find('a').attr('href')) > -1) {
            i.addClass('active')
            return false;
          }
        })
      
    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>