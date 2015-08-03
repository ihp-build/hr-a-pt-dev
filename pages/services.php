<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>

    <div class="block">
      <div class="content">
        <h1>Services</h1>
        <div class="menu slides">
          <div class="item"><a href="#1" class="service-item rotated img1"><span class="img"><i></i></span>судебные споры и третейское разбирательство</a></div>
          <div class="item"><a href="#2" class="service-item rotated img2"><span class="img"><i></i></span>Корпоративное право, сделки, M&A</a></div>
          <div class="item"><a href="#3" class="service-item rotated img3"><span class="img"><i></i></span>Банкротство и&nbsp;реструктуризация</a></div>
          <div class="item"><a href="#1" class="service-item rotated img4"><span class="img"><i></i></span>Международный арбитраж</a></div>
          <div class="item"><a href="#1" class="service-item rotated img5"><span class="img"><i></i></span>Налоговое право</a></div>
          <div class="item"><a href="#1" class="service-item rotated img6"><span class="img"><i></i></span>Энергетика</a></div>
          <div class="item"><a href="#1" class="service-item rotated img7"><span class="img"><i></i></span>Недвижимость и&nbsp;строительство</a></div>
          <div class="item"><a href="#1" class="service-item rotated img8"><span class="img"><i></i></span>Государственно-частное партнерство</a></div>
          <div class="item center"><a href="#1" class="service-item rotated img9"><span class="img"><i></i></span>Природоохрана и&nbsp;недропользование</a></div>
        </div>
        <div class="page"> 
          <h4>Litigation and Dispute Resolution</h4>
          <h5>What we do</h5>
          <p>If you have taken the decision to take your case to trial and you choose K&Ps to represent you in court, you will have at your disposal a highly skilled team of lawyers who will work proactively with you to develop the most effective strategy to protect your rights and legal and business interests.  </p>
          <p>
            <img src="<?=SITE_TEMPLATE_PATH?>/images/services/1.jpg">
            Using our experience and knowledge of local regulatory practices, we provide our clients with an initial evaluation and professional opinion of the most likely outcome of a court case.  We will distinguish those claims which may be resolved without going to trial and should instead follow the pre trial mediation route. However, if the decision is made to go to trial, our litigators will develop tactics to employ when pleading your case and deliver results in line with your objectives. 
          </p>
          <p>Attuned to the challenges facing our clients, we fully appreciate that you need to win the case as well as achieve enforcement of a court judgment or award.  A track record of broad experience and success of dealing with court bailiffs and enforcement officials, gives us the advantage of pursuing enforcement procedures in an efficient and results based manner.</p>
          <p>Our litigators have experience of successfully protecting the interests of large Russian and foreign companies in complex disputes in such industries as energy, oil production, construction, rail transportation and so forth.  K&Ps’ lawyers have acted in several court cases where the final rulings set legal precedents and which result in changes to the way the law in question is applied in practice.</p>
          <p>The firm’s lawyers will occasionally find themselves representing a client in parallel in several interrelated court cases and have therefore the ability to simultaneously coordinate procedural case strategies if the circumstances warrant it.</p>
          <p>The firm’s experience of protecting clients’ interests is not limited to Russian courts. K&P’s litigators successfully represent clients before international arbitration courts (London Court of International Arbitration, Stockholm Chamber of Commerce, International Commercial Arbitration Court at the Chamber of Commerce and Industry of the Russian Federation etc.) </p>
        </div>
      </div>
      <div class="scroll-top">Top</div>
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
      $(function() {
      
        var menu = $('.block .content .menu');
        var slider;
      
        $(document).on('enterState', function(e, state) {
          if (slider) {
            slider.destroySlider();
            slider = null;
          }
          
          var items = menu.find('.item')
          if (items.parent('.slide').length) {
            items.unwrap();
          }
      
          if (state.id == 'desktop') return;
      
          var itemsPerSlide = {
            'phone': 2,
            'tablet': 4,
          };
      
          wrapSlices(items, itemsPerSlide[state.id], '<div class="slide"></div>');
          
          slider = menu.bxSlider({
            pager: false,
            nextText: '',
            prevText: ''
          });
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