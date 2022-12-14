<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Admin</title>
   <meta name="description" content="Tailwind CSS Starter template - Admin theme, dashboard, or web application UI!">
   <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,fixed header, admin starter template, admin template, admin console, example">
   
<link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
       <link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
       <link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
       <link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
       <link rel="manifest" href="../site.webmanifest">
       <link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
       <meta name="msapplication-TileColor" content="#00aba9">
       <meta name="theme-color" content="#3b7977">

       <!-- Primary Meta Tags -->
       <title>Admin</title>
       <meta name="title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
       <meta name="description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
         
       <!-- Open Graph / Facebook -->
       <meta property="og:type" content="website">
       <meta property="og:url" content="https://www.tailwindtoolbox.com/">
       <meta property="og:title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
       <meta property="og:description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
       <meta property="og:image" content="https://www.tailwindtoolbox.com/social.png">

       <!-- Twitter -->
       <meta property="twitter:card" content="summary_large_image">
       <meta property="twitter:url" content="https://www.tailwindtoolbox.com/">
       <meta property="twitter:title" content="Tailwind Toolbox - Free Starter Templates and Components for Tailwind CSS">
       <meta property="twitter:description" content="Free open source Tailwind CSS starter Templates and Components to get you started quickly to creating websites in Tailwind CSS!">
       <meta property="twitter:image" content="https://www.tailwindtoolbox.com/social.png">

   <script src="https://cdn.tailwindcss.com"></script>
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
   <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
   <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
   <!--Replace with your tailwind.css once created-->
   <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
   <!--Totally optional :) -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js" integrity="sha256-XF29CBwU1MWLaGEnsELogU6Y6rcc5nCkhhx89nFMIDQ=" crossorigin="anonymous"></script><style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

<script id="_carbonads_projs" type="text/javascript" src="https://srv.carbonads.net/ads/CK7D52JJ.json?segment=placement:wwwtailwindtoolboxcom&amp;callback=_carbonads_go"></script></head>
<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">

   <!--Nav-->
   <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">

       <div class="flex flex-wrap items-center">
           <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
               <a href="#">
                   <span class="text-xl pl-2"></i></span>
               </a>
           </div>

           <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
               <span class="relative w-full">
                   <input type="search" placeholder="S??g..." class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded py-3 px-2 pl-10 appearance-none leading-normal">
                   <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                       <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                           <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                       </svg>
                   </div>
               </span>
           </div>

           <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
               <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                   
              
                   <li class="flex-1 md:flex-none md:mr-3">
                       <div class="relative inline-block">
                           <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> <span class="pr-2"><i class="em em-robot_face"></i></span>
                  <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                   <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"></path></svg></button>
                           <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
              
                               <div class="border border-gray-800"></div>
                               <a href="logout.php" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fas fa-sign-out-alt fa-fw"></i> Log Ud</a>
                           </div>
                       </div>
                   </li>
               </ul>`
           </div>
       </div>

   </nav>


   <div class="grid grid-cols-5 gap8">
       <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48 col-span-1">

           <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
               <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                   <li class="mr-3 flex-1">
                       <a href="../index.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                          <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Trang chu??</span>
                       </a>
                   </li>
                   <li class="mr-3 flex-1">
                       <a href="index.php?act=add" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500">
                          <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Danh m???c</span>
                       </a>
                   </li>
                 
                   <li class="mr-3 flex-1">
                       <a href="index.php?act=addsp" class="block py-1 md:py-3 pl-1 align-middle  no-underline hover:text-white border-b-2 border-gray-800 hover:border-pink-500 ">
                         <span class="pb-1 md:pb-0 text-xs md:text-base  text-gray-600 md:text-gray-400 block md:inline-block">Tour</span>
                       </a>
                   </li>
                   
                   <li class="mr-3 flex-1">
                       <a href="index.php?act=dskh" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                          <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Kh??ch h??ng</span>
                       </a>
                   </li>
                   <li class="mr-3 flex-1">
                       
                        <a href="index.php?act=list_cmt" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                           <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">B??nh lu???n</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="index.php?act=thong_ke" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500">
                           <span class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block">Th???ng k??</span>
                        </a>
                    </li>
                  
               </ul>
           </div>


       </div>
