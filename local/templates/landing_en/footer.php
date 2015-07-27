<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

    <div class="footer">
      <div class="content">   
        <div class="icon"></div>
        <div class="text">
          <p>Follow us</p><a href="#" class="facebook"><span class="logo"></span></a><a href="#" class="linkedin"><span class="logo"></span></a>
          <p>Email</p><a href="mailto:info@yklaw.ru">info@yklaw.ru</a>
        </div>
        <form>
          <input type="text" placeholder="КУДА">
          <input type="text" placeholder="ТЕМА ПИСЬМА">
          <div class="file">
            <button>ОБЗОР...</button>
            <div>ПРИКРЕПИТЬ ФАЙЛ</div>
            <input type="file">
          </div>
          <textarea placeholder="СООБЩЕНИЕ"></textarea>
          <input type="submit" value="Submit">
        </form>
        <div class="copy">
          &copy; 2003&mdash;2015, Khrenov & Partners Law Office
          
          
        </div>
      </div>
      <div class="bg">
        <div class="wrapper">
          <div class="sq1">
            <div class="img"></div>
          </div>
          <div class="sq2"></div>
          <div class="sq3"></div>
        </div>
      </div>
    </div>
    <script src="scripts/main.concat.js?1">     </script>
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
    <script>
      var i = 0;
      var card = $('.clients.block .card')
      var logos = $('.clients.block .logos .item').click(function(e) {
      	var item = $(e.target);
      	if (item.is('.active')) return;
      	logos.removeClass('active');
      	item.addClass('active');
      		
      	var delay = card.is('.animate') ? 700 : 0;
      
      	setTimeout(function() {
      		card.addClass('animate');
      		var f = card.find('.front');
      		var b = card.find('.back');
      
      		// шаблонизатор?
      		b.find('.title').text('sdsd' + (i++));
      		b.find('p').text('sdsd' + (i++));
      		//- b.find('.person .photo i').css({ backgroundImage: '' });
      		//- b.find('.person .name').text('' + ',');
      		//- b.find('.person .status').text('');
      
      
      		setTimeout(function( ) {
      			card.removeClass('animate');
      			b.removeClass('back').addClass('front');
      			f.removeClass('front').addClass('back');
      		}, 700)
      	}, delay);
      
      });
    </script>
  </body>
</html>