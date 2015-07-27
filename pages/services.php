<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>

    <div class="block">
      <div class="content">
        <h1>Services</h1>
        <div class="menu"> 
          <ul>
            <li><a href="#1" class="service-item rotated img1"><span class="img"><i></i></span>судебные споры и третейское разбирательство</a></li>
            <li><a href="#2" class="service-item rotated img2"><span class="img"><i></i></span>Корпоративное право, сделки, M&A</a></li>
            <li><a href="#3" class="service-item rotated img3"><span class="img"><i></i></span>Банкротство и&nbsp;реструктуризация</a></li>
            <li><a href="#1" class="service-item rotated img4"><span class="img"><i></i></span>Международный арбитраж</a></li>
            <li><a href="#1" class="service-item rotated img5"><span class="img"><i></i></span>Налоговое право</a></li>
            <li><a href="#1" class="service-item rotated img6"><span class="img"><i></i></span>Энергетика</a></li>
            <li><a href="#1" class="service-item rotated img7"><span class="img"><i></i></span>Недвижимость и&nbsp;строительство</a></li>
            <li><a href="#1" class="service-item rotated img8"><span class="img"><i></i></span>Государственно-частное партнерство</a></li>
            <li class="center"><a href="#1" class="service-item rotated img9"><span class="img"><i></i></span>Природоохрана и&nbsp;недропользование</a></li>
          </ul>
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