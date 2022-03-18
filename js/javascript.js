$(document).ready(function(){
var btn = document.getElementById("theme-button");
var link = document.getElementById("theme-link");
var themeToggle = document.querySelector(".theme-toggle");

btn.addEventListener("click", function () { ChangeTheme(); });

function ChangeTheme()
   {
      let lightTheme = "css/light.css";
      let darkTheme = "css/dark.css";
   
      var currTheme = link.getAttribute("href");
      var theme = "";
      
   
      if(currTheme == lightTheme && localStorage.getItem('currTheme') == 'true') {
         currTheme = darkTheme;
         theme = "dark";
         localStorage.setItem('currTheme', 'false');
         themeToggle.classList.toggle("bxs-moon");
         themeToggle.classList.toggle("bxs-sun");
      }
      else {    
         currTheme = lightTheme;
         theme = "light";
         localStorage.setItem('currTheme', 'true');
         themeToggle.classList.toggle("bxs-sun");
         themeToggle.classList.toggle("bxs-moon");
      }
      link.setAttribute("href", currTheme);
      Save(theme);
   }

   function Save(theme) {
         var Request = new XMLHttpRequest();
         Request.open("GET", "themes.php?theme=" + theme, true);
         Request.send();
      }
})

// делаете переменную в начале кода
var isMobile = false;
// проверка на размер экрана (размер я брал вроде с Bootstrap-а)
$(document).ready( function() {
    if ($('body').width() <= 480) {
        isMobile = true;
    }
    // и потом если нужен код только для телефона:
    if (isMobile) {
      var header = $(".porfolio .wrapper .item");
      var scrollChange = 700;
      $(window).scroll(function() {
          var scroll = $(window).scrollTop();
  
          if (scroll >= scrollChange) {
              header.addClass('hover');
          } else {
              header.removeClass("hover");
          }
      });
    }
});