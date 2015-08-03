<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>

    <div class="about block">
      <div class="bg rotated">
        <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/bg1.jpg);"></i>
          <div class="s1"></div>
          <div class="s2"></div>
        </div>
      </div>
      <div class="bg2 rotated"></div>
      <div class="content"> 
        <div class="logo"></div>
        <h1>About us
          <div class="small">&laquo;Khrenov and Partners&raquo;</div>
        </h1>
        <p>
          The firm draws on the collective experience of 50 lawyers from across its network of 
          <br>
          offices from Moscow to St. Petersburg, Krasnodar and Ekaterinburg, 
          <br>
          providing a comprehensive range of legal services 
          <br>
          to domestic and international clients.
          
        </p><a href="about.html" class="tr-button big">Read more</a>
      </div>
    </div>
    <div class="team block">
      <div class="content">
        <h1>Our team</h1>
        <p>
          Click through our Employee to learn more about our team 
          <br>
          and what motivates them.
          
        </p><a href="team.html" class="all-team tr-button">All team</a>
        <div class="partners"><a href="#" class="item left rotated with-line">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/team/1.jpg);"></i></div>Александр Хренов
            <div class="status">партнер</div></a><a href="#" class="item right rotated with-line">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/team/2.jpg);"></i></div>Игорь Николаенко
            <div class="status">партнер</div></a><a href="#" class="item center rotated with-line">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/team/3.jpg);"></i></div>Ольга Гончарова
            <div class="status">партнер</div></a><a href="#" class="item left rotated with-line">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/team/4.jpg);"></i></div>Евгений Колпаков
            <div class="status">партнер</div></a><a href="#" class="item right rotated with-line">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/team/1.jpg);"></i></div>Александр Коньков
            <div class="status">партнер</div></a></div>
      </div>
    </div>
    <div class="contacts block">
      <div class="bg rotated">
        <div class="img"></div>
      </div>
      <div class="content">
        <h1>Contacts</h1>
      </div>
      <div class="row">
        <div class="city msk"> 
          <div class="pin rotated">
            <div class="img"><i></i></div>
          </div>
          <div class="name">Moscow</div><span class="tr-button big">More</span>
        </div>
        <div class="city spb"> 
          <div class="pin rotated">
            <div class="img"><i></i></div>
          </div>
          <div class="name">Saint Petersburg</div><span class="tr-button big">More</span>
        </div>
      </div>
      <div class="row">
        <div class="city ekb"> 
          <div class="pin rotated">
            <div class="img"><i></i></div>
          </div>
          <div class="name">Yekaterinburg</div><span class="tr-button big">More</span>
        </div>
        <div class="city krd"> 
          <div class="pin rotated">
            <div class="img"><i></i></div>
          </div>
          <div class="name">Krasnodar</div><span class="tr-button big">More</span>
        </div>
      </div>
    </div>
    <div class="services block">
      <div class="content">
        <h1>Our<br>services</h1>
        <p>
          Since the appearance of the arbitration courts system in Russia our Attorneys-at-law activity has been based on 
          the representation of clients' interests in different kinds of judicial 
          disputes related to entrepreneurial activity.
          
        </p>
        <div class="list">
          <div class="row">
            <div class="item"><a href="#1" class="service-item rotated img1"><span class="img"><i></i></span>судебные споры и третейское разбирательство</a></div>
            <div class="item"><a href="#2" class="service-item rotated img2"><span class="img"><i></i></span>Корпоративное право, сделки, M&A</a></div>
            <div class="item"><a href="#3" class="service-item rotated img3"><span class="img"><i></i></span>Банкротство и&nbsp;реструктуризация</a></div>
            <div class="item"><a href="#1" class="service-item rotated img4"><span class="img"><i></i></span>Международный арбитраж</a></div>
          </div>
          <div class="row">
            <div class="item empty"></div>
            <div class="item"><a href="#1" class="service-item rotated img5"><span class="img"><i></i></span>Налоговое право</a></div>
            <div class="item"><a href="#1" class="service-item rotated img6"><span class="img"><i></i></span>Энергетика</a></div>
            <div class="item"><a href="#1" class="service-item rotated img7"><span class="img"><i></i></span>Недвижимость и&nbsp;строительство</a></div>
            <div class="item empty"></div>
          </div>
          <div class="row">
            <div class="item empty"></div>
            <div class="item empty"></div>
            <div class="item"><a href="#1" class="service-item rotated img8"><span class="img"><i></i></span>Государственно-частное партнерство</a></div>
            <div class="item"><a href="#1" class="service-item rotated img9"><span class="img"><i></i></span>Природоохрана и&nbsp;недропользование</a></div>
            <div class="item empty"></div>
            <div class="item empty"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="clients block">
      <div class="content">
        <div class="wrapper">
          <h1>Our<br>clients</h1>
          <p>Click through our Employee to learn more about our team and what motivates them.</p>
        </div>
        <div class="logos"> 
          <div class="item logo1 left"></div>
          <div class="item logo2"></div>
          <div class="item logo3 left"></div>
          <div class="item logo4"></div>
          <div class="item logo5 left"></div>
          <div class="item logo6"></div>
          <div class="item logo7 left"></div>
          
          
          <div class="item logo8 left"></div>
          <div class="item logo9"></div>
          <div class="item logo10 left"></div>
          <div class="item logo11"></div>
          <div class="item logo12 left"></div>
          <div class="item logo13"></div>
          <div class="item logo14 left"></div>
        </div>
      </div>
    </div>
    <div class="press block">
      <div class="bg31 rotated">
        <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/bg31.jpg);"></i></div>
      </div>
      <div class="bg32 rotated">
        <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/bg32.jpg);"></i></div>
      </div>
      <div class="bg33 rotated">
        <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/bg33.jpg);"></i></div>
      </div>
      <div class="content">
        <h1>Press center</h1>
        <p>
          Click through our Employee to learn more about our team
          <br>
          and what motivates them.
        </p><a href="press.html" class="all-press tr-button">All press</a>
        <div class="row first">
          <div class="item item1 rotated">
            <div class="img"><i>
                <div class="date"><span class="day">1</span><span class="month">July</span>, <span class="year">2015</span></div>
                <div class="text">
                  <h4> <a href="news_item.html" class="title">Yukov, Khrenov and Partners</a></h4>
                </div></i></div>
          </div>
          <div class="item item3 rotated">
            <div class="img"><i>
                <div class="date"><span class="day">14 </span><span class="month">July</span>, <span class="year">2011</span></div>
                <div class="text">
                  <h4> <a href="news_item.html" class="title">Law on controlled<br>foreign companies</a></h4>
                </div></i></div>
          </div>
          <div class="item item5 rotated">
            <div class="img"><i>
                <div class="date"><span class="day">30</span><span class="month">July</span>, <span class="year">2015</span></div>
                <div class="text">
                  <h4> <a href="news_item.html" class="title">Best Legal<br>Departments 2014</a></h4>
                </div></i></div>
          </div>
        </div>
        <div class="row even">
          <div class="item item2 rotated">
            <div class="img"><i>
                <div class="date"><span class="day">1</span><span class="month">July</span>, <span class="year">2015</span></div>
                <div class="text">
                  <h4> <a href="news_item.html" class="title">Yukov, Khrenov and Partners</a></h4>
                </div></i></div>
          </div>
          <div class="item item4 rotated">
            <div class="img"><i>
                <div class="date"><span class="day">14 </span><span class="month">July</span>, <span class="year">2011</span></div>
                <div class="text">
                  <h4> <a href="news_item.html" class="title">Law on controlled<br>foreign companies</a></h4>
                </div></i></div>
          </div>
          <div class="item item6 rotated">
            <div class="img"><i>
                <div class="date"><span class="day">30</span><span class="month">July</span>, <span class="year">2015</span></div>
                <div class="text">
                  <h4> <a href="news_item.html" class="title">Best Legal<br>Departments 2014        </a></h4>
                </div></i></div>
          </div>
        </div>
      </div>
    </div>
    <div class="ratings block">
      <div class="content">
        <h1>Ratings</h1>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          
          
        </p>
        <div class="item rotated left">
          <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/1.png);"></i></div>
          <h4>hambers & Partners</h4>
          <div class="wrap">
            <div class="details">
              <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
            </div>
          </div>
        </div>
        <div class="item rotated center">
          <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/2.png);"></i></div>
          <h4>LEGAL 500</h4>
          <div class="wrap">
            <div class="details">
              <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
              <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
            </div>
          </div>
        </div>
        <div class="item rotated right">
          <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/3.png);"></i></div>
          <h4>hambers & Partners</h4>
          <div class="wrap">
            <div class="details">
              <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
            </div>
          </div>
        </div>
        <div class="slider">
          <div class="item item1 rotated">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/1.png);"></i></div>
            <h4>hambers & Partners</h4>
            <div class="wrap">
              <div class="details">
                <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
              </div>
            </div>
          </div>
          <div class="item item2 rotated">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/2.png);"></i></div>
            <h4>LEGAL 500</h4>
            <div class="wrap">
              <div class="details">
                <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
                <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
              </div>
            </div>
          </div>
          <div class="item item3 rotated">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/3.png);"></i></div>
            <h4>hambers & Partners</h4>
            <div class="wrap">
              <div class="details">
                <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
              </div>
            </div>
          </div>
          <div class="item rotated">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/4.png); background-position: 62% center;"></i></div>
            <h4>hambers & Partners</h4>
            <div class="wrap">
              <div class="details">
                <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
              </div>
            </div>
          </div>
          <div class="item rotated">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/4.png); background-position: 62% center;"></i></div>
            <h4>hambers & Partners</h4>
            <div class="wrap">
              <div class="details">
                <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
              </div>
            </div>
          </div>
          <div class="item rotated">
            <div class="img"><i style="background-image: url(<?=SITE_TEMPLATE_PATH?>/images/ratings/4.png); background-position: 62% center;"></i></div>
            <h4>hambers & Partners</h4>
            <div class="wrap">
              <div class="details">
                <p>recommends “Khrenov and Partners” in the area of arbitration litigation.</p>
              </div>
            </div>
          </div>
        </div>
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
      // блок контактов по городам
      $(function() {
        var cities = $('.contacts.block .city');
      
        $(document).on('enterState', function(e, state) {
          var rows = cities.parent('.row').length;
          var wrapped = cities.length / rows;
      
          var citiesPerRow;
          if (state.id === 'desktop' && wrapped != 2) citiesPerRow = 2;
          if (state.id != 'desktop' && wrapped != 1) citiesPerRow = 1;
      
          if (citiesPerRow) {
            cities.unwrap()
            wrapSlices(cities, citiesPerRow, '<div class="row"></div>')
          } 
        });
      });
      
      
      // блок услуг
      $(function() {
        var list = $('.services.block .list')
        var services = list.find('.item:not(.empty)');
        var slider;
      
        $(document).on('enterState', function(e, state) {
          var rows = services.parent('.row').length;
          var slides = services.parent('.slide').length;
          if (slider) {
            slider.destroySlider();
            slider = null;
          }
          
          if (state.id === 'desktop' && rows == 0) {
            services.unwrap();
            wrapSlices(services, 4, '<div class="row"></div>');
          }
      
          if (state.id != 'desktop') {
            list.find('.item.empty').remove();
            var itemsPerSlide
            if (state.id === 'tablet') itemsPerSlide = 4;
            if (state.id === 'phone') itemsPerSlide = 2;
      
            services.unwrap();
            wrapSlices(services.not('.empty'), itemsPerSlide, '<div class="slide"></div>');
      
            slider = list.bxSlider({
              pager: false,
              nextText: '',
              prevText: ''
            });
          }
        });
      });
      
      // блок пресс-клуба
      //- (function() {
      //-   var news = $('.press.block .item');
      //-   var visible = { visibility: 'visible' };
      //-   var hidden = { visibility: 'hidden' };
      
      //-   $(document).on('enterState', function(e, state) {
      //-     if (state.id === 'desktop') {
      //-       news.css(visible).slice(6).css(hidden);
      //-     }
      //-     if (state.id === 'tablet') {
      //-       news.css(visible).slice(5).css(hidden);
      //-     }
      //-     if (state.id === 'phone') {
      //-       news.css(visible).slice(3).css(hidden);
      //-     }
      //-   });
      //- })();
      
      
      // блок рэйтингов
      $(function() {
        var ratings = $('.ratings.block .slider');
        var duplicated = ratings.find('.item1, .item2, .item3'); 
        var slider;
        var sliderOptions = {
          pager: false,
          nextText: '',
          prevText: ''
        };
      
        $(document).on('enterState', function(e, state) {
          //- console.log(state.id, ratings.has(duplicated).length)
          if (state.id === 'desktop') {
            if (slider) {
              slider.destroySlider();
              slider = null;
            }
            duplicated.remove();
            slider = ratings.bxSlider(sliderOptions);
      
          } else if (!ratings.has(duplicated).length) {
            if (slider) {
              slider.destroySlider();
              slider = null;
            }
            ratings.prepend(duplicated);
            
          } 
      
          if (!slider) slider = ratings.bxSlider(sliderOptions);
        });
      });
      
      // анимация какрточки с отзывом клиента
      //- $(function() {
        
      //-   var i = 0;
      //-   var card = $('.clients.block .card')
      //-   var logos = $('.clients.block .logos .item').click(function(e) {
      //-     var item = $(e.target);
      //-     if (item.is('.active')) return;
      //-     logos.removeClass('active');
      //-     item.addClass('active');
            
      //-     var delay = card.is('.animate') ? 700 : 0;
      
      //-     setTimeout(function() {
      //-       card.addClass('animate');
      //-       var f = card.find('.front');
      //-       var b = card.find('.back');
      
      //-       // шаблонизатор?
      //-       b.find('.title').text('sdsd' + (i++));
      //-       b.find('p').text('sdsd' + (i++));
      //-       //- b.find('.person .photo i').css({ backgroundImage: '' });
      //-       //- b.find('.person .name').text('' + ',');
      //-       //- b.find('.person .status').text('');
      
      
      //-       setTimeout(function( ) {
      //-         card.removeClass('animate');
      //-         b.removeClass('back').addClass('front');
      //-         f.removeClass('front').addClass('back');
      //-       }, 700)
      //-     }, delay);
      //-   });
      //- });
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
