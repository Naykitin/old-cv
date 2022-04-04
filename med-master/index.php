<?php
session_start();

if(!isset($_SESSION["theme"]))
{
    $_SESSION["theme"] = "light";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
  <link rel="stylesheet" href="lightbox2/dist/css/lightbox.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script>
  <script type="text/javascript" src="exform/exform.js"></script>
  <script type="text/javascript" src="lightbox2/dist/js/lightbox.min.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function($){
  $('.callback').exform({theme:'callback', wrapper: "callback"});
  $('.callbackhead').exform({theme:'callbackhead'});
	$('.callback-consultation').exform({theme:'callback-consultation', wrapper: "callback-consultation"});
  });
  </script>

  <link rel="stylesheet" type="text/css" href="slick/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="slick/slick/slick-theme.css"/>
  <script type="text/javascript" src="slick/slick/slick.min.js"></script>
  <title>MedMaster</title>
</head>
<body>
  <a name="to-top"></a>
  <div class="container">
  <?php include "themes.php" ?>
    <?php include "header.php" ?>

    <div class="comp_block">
      <div class="comp_block-item">
        <div class="comp_block-box"><span>15</span></div>
        <p>полностью оборудованных цехов по ремонту машин</p>
      </div>
      <div class="comp_block-item">
        <div class="comp_block-box"><span>367</span></div>
        <p>полностью оборудованных цехов по ремонту машин</p>
      </div>
      <div class="comp_block-item">
        <div class="comp_block-box"><span>9</span></div>
        <p>полностью оборудованных цехов по ремонту машин</p>
      </div>
      <div class="comp_block-item">
        <div class="comp_block-box"><span>2743</span></div>
        <p>полностью оборудованных цехов по ремонту машин</p>
      </div>
    </div>


    <div class="prem_block fixed-bg">
      <h2 class="prem_block-head">Наши преимущества</h2>
      <div class="prem_block-item_wrapper">
        <div class="prem_block-item">
          <img src="img/stethoscope.png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, doloribus.</p>
        </div>
        <div class="prem_block-item">
          <img src="img/stethoscope.png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, omnis!</p>
        </div>
        <div class="prem_block-item">
          <img src="img/stethoscope.png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, incidunt!</p>
        </div>
        <div class="prem_block-item">
          <img src="img/stethoscope.png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, corrupti?</p>
        </div>
        <div class="prem_block-item">
          <img src="img/stethoscope.png" alt="">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, corrupti?</p>
        </div>
      </div>
    </div>

    <div class="expert_block">
      <h2 class="expert_block-head">Наши специалисты</h2>
      <div class="expert_block-item_wrapper">
        <div class="expert_block-item">
          <div class="expert_block-item_head">
            <p>Панкратова Е.В.<br>детские терапевт</p>
            <img src="img/smiling-baby.png" alt="">
          </div>
          <div class="btn">Записаться на прием</div>
        </div>
        <div class="expert_block-item">
          <div class="expert_block-item_head">
            <p>Панкратова Е.В.<br>детские терапевт</p>
            <img src="img/smiling-baby.png" alt="">
          </div>
          <div class="btn">Записаться на прием</div>
        </div>
        <div class="expert_block-item">
          <div class="expert_block-item_head">
            <p>Панкратова Е.В.<br>детские терапевт</p>
            <img src="img/smiling-baby.png" alt="">
          </div>
          <div class="btn">Записаться на прием</div>
        </div>
        <div class="expert_block-item">
          <div class="expert_block-item_head">
            <p>Панкратова Е.В.<br>детские терапевт</p>
            <img src="img/smiling-baby.png" alt="">
          </div>
          <div class="btn">Записаться на прием</div>
        </div>
      </div>
    </div>

    <div class="consultation_block">

      <h2 class="consultation_block-head">Бесплатная консультация по любой услуге</h2>
      <div class="callback-consultation"></div>

    </div>
    <a name="service"></a>
    <div class="problem_block">
      <h2 class="problem_block-head">Как мы решим Вашу проблему</h2>
      <div class="problem_block-body">
        <a href="img/problem.png" data-lightbox="problem_block"><img src="img/problem.png" alt=""></a>
        <div class="problem_block-p">
          <ul class="problem_block-ul">
            <li><span>Поиск клиеентов для продажи автомобиля</span></li>
            <li><span>Предпродажная подготовка</span></li>
            <li><span>Помощь в оформлении продажи Вашего авто</span></li>
            <li><span>Транспортировака необходимых запчастей</span></li>
            <li><span>Поиск клиентов для продажи автомобиля</span></li>
          </ul>
        </div>
      </div>
    </div>
    <a name="work"></a>
    <div class="how_work_block">
      <h2 class="how_work_block-head">Как мы работаем</h2>
      <div class="how_work_block-items">
        <div class="how_work_block-item">
          <img src="img/first-aid-kit.png" alt="">
          <p>Мы связываемся с Вами в удобное для Вас время</p>
        </div>
        <div class="how_work_block-item">
          <img src="img/first-aid-kit.png" alt="">
          <p>Мы связываемся с Вами в удобное для Вас время</p>
        </div>
        <div class="how_work_block-item">
          <img src="img/first-aid-kit.png" alt="">
          <p>Мы связываемся с Вами в удобное для Вас время</p>
        </div>
        <div class="how_work_block-item">
          <img src="img/first-aid-kit.png" alt="">
          <p>Мы связываемся с Вами в удобное для Вас время</p>
        </div>
      </div>
    </div>

    <div class="review_block fixed-bg">
      <h2 class="review_block-head">Что клиенты говорят о нас</h2>
       <div class="review_block-body">
         <div class="responsive_review">
           <div class="responsive_review-item">
             <img src="img/review.png" alt="">
             <h4>Елена</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum?</p>
             <a href="#">читать полный отзыв</a>
           </div>
           <div class="responsive_review-item">
             <img src="img/review.png" alt="">
             <h4>Елена</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum?</p>
             <a href="#">читать полный отзыв</a>
           </div>
           <div class="responsive_review-item">
             <img src="img/review.png" alt="">
             <h4>Елена</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum?</p>
             <a href="#">читать полный отзыв</a>
           </div>
           <div class="responsive_review-item">
             <img src="img/review.png" alt="">
             <h4>Елена</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum?</p>
             <a href="#">читать полный отзыв</a>
           </div>
           <div class="responsive_review-item">
             <img src="img/review.png" alt="">
             <h4>Елена</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum?</p>
             <a href="#">читать полный отзыв</a>
           </div>
           <div class="responsive_review-item">
             <img src="img/review.png" alt="">
             <h4>Елена</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum?</p>
             <a href="#">читать полный отзыв</a>
           </div>
           <div class="responsive_review-item">
             <img src="img/review.png" alt="">
             <h4>Елена</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum?</p>
             <a href="#">читать полный отзыв</a>
           </div>
           <div class="responsive_review-item">
             <img src="img/review.png" alt="">
             <h4>Елена</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, harum?</p>
             <a href="#">читать полный отзыв</a>
           </div>
         </div>
       </div>
    </div>

    <div class="partners_block">
      <div class="partners_block-item"><img src="img/oriflame.png" alt=""></div>
      <div class="partners_block-item"><img src="img/oriflame.png" alt=""></div>
      <div class="partners_block-item"><img src="img/oriflame.png" alt=""></div>
      <div class="partners_block-item"><img src="img/oriflame.png" alt=""></div>
    </div>

    <div class="our_work_block fixed-bg">
      <h2 class="our_work_block-head">Наши работы</h2>
      <div class="responsive_our_work_block">
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
        <div class="responsive_our_work_block-item">
          <img src="img/our_work.png" alt="">
        </div>
      </div>
    </div>

    <div class="ask_block">

      <h2 class="ask_block-head">Есть вопросы? Мы вам перезвоним</h2>
      <div class="callback-consultation"></div>

    </div>
    <a name="onas"></a>
    <div class="company_block">
      <h2 class="company_block-head">О компании</h2>
      <div class="company_block-body">
        <div class="company_block-img">
          <a href="img/comp1.png" data-lightbox="company_block"><img src="img/comp1.png" alt=""></a>
          <a href="img/comp2.png" data-lightbox="company_block"><img src="img/comp2.png" alt=""></a>
        </div>
        <div class="company_block-p">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda libero ducimus incidunt placeat quaerat, est magnam, rem quod cupiditate expedita facere. Culpa itaque perferendis, hic unde consectetur totam quibusdam soluta consequuntur quaerat officiis corporis ducimus non, sit inventore laboriosam mollitia molestiae quos iste. Labore explicabo, quis tempore obcaecati. Quod, quasi.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda libero ducimus incidunt placeat quaerat, est magnam, rem quod cupiditate expedita facere. Culpa itaque perferendis, hic unde consectetur totam quibusdam soluta consequuntur quaerat officiis corporis ducimus non, sit inventore laboriosam mollitia molestiae quos iste. Labore explicabo, quis tempore obcaecati. Quod, quasi.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda libero ducimus incidunt placeat quaerat, est magnam, rem quod cupiditate expedita facere. Culpa itaque perferendis, hic unde consectetur totam quibusdam soluta consequuntur quaerat officiis corporis ducimus non, sit inventore laboriosam mollitia molestiae quos iste. Labore explicabo, quis tempore obcaecati. Quod, quasi.</p>
        </div>
      </div>
    </div>
    <a name="certificates"></a>
    <div class="certificates_block">
      <h2 class="certificates_block-head">Наши сертификаты</h2>
      <div class="responsive_certificates_block">
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
        <div><img src="img/certificates.png" alt=""></div>
      </div>
    </div>

    <?php include "footer.php" ?>

    
   <script type="text/javascript" src="js/jquery.spincrement.js"></script>
  </div>
</body>
</html>
