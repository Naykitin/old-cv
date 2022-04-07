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
      
   
      if(currTheme == lightTheme) {
         currTheme = darkTheme;
         theme = "dark";
         themeToggle.classList.toggle("bxs-moon");
         themeToggle.classList.toggle("bxs-sun");
      }
      else {    
         currTheme = lightTheme;
         theme = "light";
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
// проверка на размер экрана
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


    $("#form").submit(function() { //Change
        var th = $(this);
        $.ajax({
           type: "POST",
           url: "mail.php", //Change
           data: th.serialize()
        }).done(function() {
           alert("Thank you!");
           setTimeout(function() {
              // Done Functions
              th.trigger("reset");
           }, 1000);
        });
        return false;
     });
});

