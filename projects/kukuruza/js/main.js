window.onload=function(){
   document.querySelector('.menu-btn').addEventListener('click', () => {
      document.querySelector('.header__menu').classList.toggle('active');
   });
   document.querySelector('.close__btn').addEventListener('click', () => {
      document.querySelector('.header__menu').classList.toggle('active');
   });
 }