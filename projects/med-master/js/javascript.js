$(document).ready(function(){
$('.responsive_certificates_block').slick({
dots: true,
infinite: false,
speed: 300,
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: true
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});

$('.responsive_our_work_block').slick({
dots: true,
infinite: false,
speed: 300,
slidesToShow: 4,
slidesToScroll: 4,
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: true
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});

$('.responsive_review').slick({
dots: true,
infinite: false,
speed: 300,
slidesToShow: 3,
slidesToScroll: 3,
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: true
  }
},
{
  breakpoint: 600,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
{
  breakpoint: 480,
  settings: {
    slidesToShow: 1,
    slidesToScroll: 1
  }
}
// You can unslick at a given breakpoint now by adding:
// settings: "unslick"
// instead of a settings object
]
});
})


$(document).ready(function () {
  var show = true;
  var countbox = ".comp_block";
  $(window).on("scroll load resize", function () {
      if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
      var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
      var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
      var w_height = $(window).height(); // Высота окна браузера
      var d_height = $(document).height(); // Высота всего документа
      var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
      if (w_top + 500 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
          $('.comp_block-box span').css('opacity', '1');
          $('.comp_block-box span').spincrement({
              thousandSeparator: "",
              duration: 1200
          });
           
          show = false;
      }
  });
});

$(document).ready(function(){

  var btn = document.getElementById("theme-button");
  var link = document.getElementById("theme-link");
  
  btn.addEventListener("click", function () { ChangeTheme(); });
  
  function ChangeTheme()
  {
      let lightTheme = "css/light.css";
      let darkTheme = "css/dark.css";
  
      var currTheme = link.getAttribute("href");
      var theme = "";
      var input = document.getElementById('checkbox');
      
  
      if(currTheme == lightTheme)
      {
        currTheme = darkTheme;
        theme = "dark";
        input.checked = true;
      }
      else
      {    
        currTheme = lightTheme;
        theme = "light";
        input.checked = false;
      }
  
      link.setAttribute("href", currTheme);
  
      Save(theme);
  }

  function Save(theme)
  {
    var Request = new XMLHttpRequest();
    Request.open("GET", "themes.php?theme=" + theme, true);
    Request.send();
  }

})