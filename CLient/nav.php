<?php
?>
<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <link rel="stylesheet" href="style.css" />
 <!--<link rel=" icon" type="image/jpg" href="../images/favicon-logo1.jpg" />-->
 <link rel=" icon" type="image/png" href="../images/favicon-logo1.png"/>
 <title>Subscription Plans</title>
 <style>
     /* UTILITIES */
* {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
/*body {*/
/* font-family: cursive;*/
/*}*/
a {
 text-decoration: none;
}
li {
 list-style: none;
}
/* NAVBAR STYLING STARTS */
.navbar {
 display: flex;
 align-items: center;
 justify-content: space-between;
 margin-top: 5px;
 margin-left: -10px;
 width: 100%;
 margin-bottom: -30px;
 padding: 10px;
 background: linear-gradient(to right, rgba(25,4,42,100), rgba(59,11,88,100), rgba(35,5,59,100));
 color: #fff;
}
.nav-links a {
 color: #fff;
}
/* LOGO */
.logo {
 font-size: 32px;
}
/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 20px;
}
.menu a:hover {
 color: #1cffe1;
 /*font-size: 22px;*/
 transition: 0.8s ease;
}
.menu li {
 padding: 5px 14px;
}
/* DROPDOWN MENU */
.services {
 position: relative; 
}
.dropdown {
 background-color: rgb(1, 139, 139);
 padding: 1em 0;
 position: absolute; /*WITH RESPECT TO PARENT*/
 display: none;
 border-radius: 8px;
 top: 35px;
}
.dropdown li + li {
 margin-top: 10px;
}
.dropdown li {
 padding: 0.5em 1em;
 width: 8em;
 text-align: center;
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
.services:hover .dropdown {
 display: block;
}
/*RESPONSIVE NAVBAR MENU STARTS*/
/* CHECKBOX HACK */
input[type=checkbox]{
 display: none;
} 
/*HAMBURGER MENU*/
.hamburger {
 display: none;
 font-size: 24px;
 margin-right: 15px;
 margin-bottom: 15px;
 user-select: none;
}
/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
.menu { 
 display:none;
 position: absolute;
 background: linear-gradient(to right, rgba(25,4,42,100), rgba(59,11,88,100), rgba(35,5,59,100));
 right: 0;
 left: 0;
 text-align: center;
 padding: 16px 0;
}
.menu li:hover {
 display: inline-block;
 background-color:#b49fbf;
 font-size: 22px;
 transition: 0.3s ease;
}
.menu li + li {
 margin-top: 12px;
}
input[type=checkbox]:checked ~ .menu{
 display: block;
}
.hamburger {
 display: block;
}
.dropdown {
 left: 50%;
 top: 30px;
 transform: translateX(35%);
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
}

 </style>
 </head>
 <body>
 <nav class="navbar">
 <!-- LOGO -->
 <a href="https://phptest.avianglobes.com" style="text-decoration: none; color: white">
    <div style="display: flex; margin-left: 20px">
        <img src="./logok.png" style="width: 70px; margin-left: 10px;">
        <p style="margin-top: 15px; margin-left: 6px; font-size: 22px;">Knock On Brain</p>
    </div>
    </a>
 <!-- NAVIGATION MENU -->
 <ul class="nav-links">
 <!-- USING CHECKBOX HACK -->
 <input type="checkbox" id="checkbox_toggle" />
 <label for="checkbox_toggle" class="hamburger">&#9776;</label>
 <!-- NAVIGATION MENUS -->
 <div class="menu">
 <li><a href="#home" class="active" style="color: #1cffe1;">Subscription Plans</a></li>
 <li><a href="#addons">Add-Ons</a></li>
 <li><a href="https://phptest.avianglobes.com/CLient/test.php">Dashboard</a></li>
 </div>
 </ul>
 </nav>
 </body>
</html>