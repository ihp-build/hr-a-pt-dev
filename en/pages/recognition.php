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
            i.addClass('active');
            return false;
          }
        });
      
      $('.header .menu').show();
      $('.header .burger').click(function() {
        $('.header .menu').toggleClass('opened');
      });
      
      $('.scroll-top').click(function(){
        var body = $('html, body');
        body.stop().animate({ scrollTop: 0 }, { duration: 400 });
      });
      
      
      $('form.feedback').each(function() {
        var form = $(this);
        var inputs = form.find('input, textarea');
      
        function clearErrors(inputEl) {
          var input = $(inputEl);
          input.removeClass('invalid');
        } 
      
        function validate(inputEl) {
          var input = $(inputEl);
          var isInvalid = false;
          var message = [];
          if (input.is('[required]') && !$.trim(input.val()).length) {
            isInvalid = true;
            message.push('заполните поле');
          }
      
          input.toggleClass('invalid', isInvalid);
          input.next('.error-message').toggle(!!message.length).html(message.join('<br>'));
        };
      
        var validatedInputs = inputs.filter('*[required]');
        var liveValidation = false;
      
        form.submit(function (e) {
          e.preventDefault();
          
          validatedInputs.each(function () {
            validate(this);
          });
      
          var hasInvalidInputs = inputs.filter('.invalid').length;
          if (hasInvalidInputs) {
            if (!liveValidation) {
              liveValidation = true;
              validatedInputs.on('keyup click', function (e) {
                validate(e.target);
              });  
            }
            
            return;
          }
      
          console.log('ajax');
          // form.serialize()
          // ajax(form_url, data, succes)
        });
      });
      
    </script>
    <script>
      ViewStates.add({
        id: 'desktop',
        query: '(min-width: 1001px)'
      });
      
      ViewStates.add({
        id: 'tablet',
        query: '(min-width: 768px) and (max-width: 1000px)'
      });
      
      ViewStates.add({
        id: 'phone',
        query: '(max-width: 767px)'
      });
      
      
      $(function() {
        ViewStates.init();
      });
    </script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>