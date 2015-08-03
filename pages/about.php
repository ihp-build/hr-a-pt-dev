<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>

    <div class="block">
      <div class="content">
        <h1>About Us</h1>
        <p>Khrenov and Partners has secured a solid reputation and a prominent position in Russia’s legal market since its establishment in 2003.  The firm draws on the collective experience of 50 lawyers from across its network of offices from Moscow to St. Petersburg, Krasnodar and Ekaterinburg, providing a comprehensive range of legal services to domestic and international clients. As well as being accredited with the Ministry of Justice of the Russian Federation, Khrenov & Partners is on the panel of preferred law firms to act as legal advisors to Russian governmental agencies and government-owned corporations, banks and financial institutions. </p>
        <p>The firm’s interdisciplinary teams of lawyers are experienced in complex dispute resolution matters including litigation, arbitration and mediation.  We have won trials at the highest level of the Russian court system concerning shareholder litigation and derivate suits, insolvency, contentious tax, construction, energy and infrastructure disputes, real estate and regulatory investigations. </p>
        <p>The firm has advised on a number of well known Russian reorganisations and insolvencies where asset tracing, freezing and repatriation formed a major component of the legal work.  The scope of Khrenov & Partners’ legal services has steadily expanded to include Russian law advice on mergers and acquisitions, bankruptcy and financing, energy projects, intellectual property arguments, corporate transactions.</p><a href="#" class="pdf rotated with-line"><span class="img"><i></i></span>LAW OFFICE PRESENTATION</a>
      </div>
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