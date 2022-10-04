<?php
session_start();


if(!isset($_SESSION["theme"]))
{
    $_SESSION["theme"] = "dark";
}
?>
<!DOCTYPE html>
<html lang="eng">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nikitin CV</title>
   <link rel="icon" type="image/x-icon" href="img/cv.png">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/<?php echo $_SESSION["theme"]; ?>.css" id="theme-link">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   <script src="js/javascript.js"></script>
</head>
<body>
   <div class="container">
   <?php include "themes.php" ?>
      <aside>
         <header class="header">
            <a href="files/Nikitin_Vladyslav_CV.pdf" class="header__download" download>
               <i class='bx bx-download'></i>
            </a>
            <div class="header__main">
               <img src="img/header.JPG" class="header__img">
               <h2 class="header__name upper">Nikitin Vladyslav</h2>
            </div>
            <div class="header__theme">
               <i class='theme-toggle bx bxs-sun' id="theme-button"></i>
            </div>
         </header>
         <section class="contact">
            <h2>Social</h2>
            <a href="mailto:vladnik1999@gmail.com" class="contact__item" target="_blank"><i class='bx bx-envelope'></i>vladnik1999@gmail.com</a>
            <a href="tel:380997644998" class="contact__item"><i class='bx bx-phone'></i>099-764-49-98</a>
            <a href="https://t.me/naykitin" class="contact__item" target="_blank"><i class='bx bxl-telegram'></i></i>Telegram</a>
         </section>
         <section class="skills">
            <h2>Skills</h2>
            <ul class="skills__list">
               <li>HTML</li>
               <li>CSS (SASS, SCSS)</li>
               <li>Responsive web design</li>
               <li>Experienced with (WordPress, Opencart, Joomla, ModX, WIX, Tilda)</li>
               <li>SEO optimization</li>
               <li>JavaScript, jQuery</li>
               <li>React (basic knowledge)</li>
               <li>PHP (basic knowledge)</li>
               <li>GitHub</li>
               <li>Intermediate English</li>
               </ul>
         </section>
      </aside>
      <main>
         <section class="profile">
            <h2 class="upper">Profile</h2>
            <p>I mainly worked with popular CMS: Worpress, Bitrix, Joomla, OpenCart, ModX.</p>
            <p>Tasks performed: layout of pages, creation of adaptive, accordions and burger menus, connection and configuration of sliders, seo optimization. Also, the tasks included a developing landings and transfer sites to CMS. Experience with: Wix, Tilda.</p>
            <p>I am looking for a remote job where I can learn new technologies and improve my professional skills.</p>
         </section>
         <section class="experience">
            <h2 class="upper">Experience</h2>
            <p>HTML coder | Aweb Systems | Feb 2021 – March 2022</p>
         </section>
         <section class="porfolio">
            <h2 class="upper">Portfolio</h2>
            <div class="wrapper">
               <div class="item" hover>
                  <img src="../img/kukuruza.png" alt="">
                  <a href="/projects/kukuruza/index.html" target="_blank">Kukuruza</a>
                  <a href="https://github.com/Naykitin/OmgTest" target="_blank">GitHub</a>
               </div>
               <div class="item" hover>
                  <img src="../img/med-master.png" alt="">
                  <a href="/projects/med-master/index.php" target="_blank">Med-Master</a>
                  <a href="https://github.com/Naykitin/Med-Master" target="_blank">GitHub</a>
               </div>
               <div class="item" hover>
                  <img src="../img/ticTacToe.png" alt="">
                  <a href="https://naykitin.github.io/" target="_blank">Tic-tac-toe</a>
                  <a href="https://github.com/Naykitin/tic-tac-toe" target="_blank">GitHub</a>
               </div>
               <div class="item" hover>
                  <img src="../img/todo.png" alt="">
                  <a href="/projects/todo-list/index.html" target="_blank">Todo List</a>
                  <a href="https://github.com/Naykitin/to-do-list" target="_blank">GitHub</a>
               </div>
            </div>
         </section>
         <section class="education">
            <h2 class="upper">Education</h2>
            <p class="education__title upper">Bachelor&nbsp;|&nbsp;sept 2018 &ndash; june 2021&nbsp;|&nbsp;kharkov national university of radio electronics</p>
            <ul class="education__list">
            <li>Specialization: Automation and computer-integrated technologies</li>
            <li>Diploma work: Development of a training web application for a workshop on automating testing of web applications</li>
            </ul>
         </section>

         <section class="contact">
            <h2 class="upper">Contact</h2>
            <form id="form">
               <!-- Hidden Required Fields -->
               <input type="hidden" name="project_name" value="Nikitin_CV">
               <input type="hidden" name="admin_email" value="vladnik1999@gmail.com">
               <input type="hidden" name="form_subject" value="Form Subject">
               <!-- END Hidden Required Fields -->

               <input type="text" name="E-mail" placeholder="E-mail..." required>
               <input type="text" name="Name" placeholder="Name..." required>
               <textarea type="text" name="text" placeholder="Text..."></textarea>
               <button>Send</button>
            </form>
         </section>

      </main>
   </div>
</body>
</html>