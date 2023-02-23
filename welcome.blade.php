<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>لاراوی</title>
        <link rel="icon" type="image/x-icon" href="{{ URL::to('/assets/img/iconw.ico') }}">

        <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


        <!-- Fonts -->

        <link href="{{ URL::to('assets/css/app.css') }}" rel="stylesheet" id="bootstrap-css">

        

        
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">

<style>
body {
  margin: 0;
}



.tapnav0 {
  overflow: hidden;
  background-color: rgb(0,0,0);
  background-color: rgba(11,11,222, 5);
  height:75px;
}

.tapnav0 a {
  float: right;
  color: #f2f2f2;
  text-align: center;
  padding: 25px 15px;
  text-decoration: none;
  font-size: 17px;
  
}


.tapnav0 a:hover {
  background-color: #0b0bdd;
  color: black;
}

.tapnav0 a.active {
  background-color: #0b0bdd;
  color: white;
}


.tapnav0-left {
  float: left;
}

.tapnav0-center {
  border: 2px solid rgba(11,11,222, 5);
  border-radius: 8px;
  padding: 5px;
}

</style>


<style>
.container {
 
 
 
}

.bar1, .bar2, .bar3 {
  width: 35px;
  height: 2px;
  background-color: #fff;
  margin: 6px 0;
  transition: 0.4s;
}

.change .bar1 {
  transform: translate(0, 8px) rotate(-45deg);
}

.change .bar2 {opacity: 0;}

.change .bar3 {
  transform: translate(0, -8px) rotate(45deg);
}
</style>



<style>
body {
  
}

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 40px;
  margin top:30px;
  right: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.95);
  overflow-x: hidden;
  transition: 0.001s;
}

.overlay-content {
  position: relative;
  top: 2%;
  width: 100%;
  text-align: center;
  margin-top: 29px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 20px;
  color: #fff;
  display: block;
  transition: 0.3s;
  text-align: center;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: -20px;
  right: 25px;
  font-size: 70px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #DDD;
}

tr:hover {background-color: #D6EEEE;}

/* unvisited link */
a:link {
  color: red;
}

/* visited link */
a:visited {
  color: light blue;
}

/* mouse over link */
a:hover {
  color: black;
}

/* selected link */
a:active {
  color: blue;
}
a:link {
  text-decoration: none;
}
</style>
<style>
.button {
  background-color: #3366ff;
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline- inline-block;
  font-size: 16px;
  margin: 1px 1px;
  cursor: pointer;
}

.button1 {padding: 16px 32px;}
</style>
<style>
      img {
  max-width: 100%;
  height: auto;
} 
footer {
  text-align: right;
  padding: 100px;
  background-color: black;
  color: white;
}    
 </style>      
</head>
  
<body style="direction: rtl;">
<!-- Header -->
       <header class="w3-container w3-theme w3-padding" id="myHeader">

        <a>
          <div class="container" onclick="myFunction1(this) & testNav()">
            <div class="bar1"></div>
              <div class="bar2"></div>
                <div class="bar3"></div>
  
          </div>
       </a>



    <div style="padding-left:16px"></div>
      <div id="myNav" class="overlay">
        <div class="overlay-content">
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" id="mainIconPathAttribute" fill="#ff0000" stroke="#000000" stroke-width="0.5"></path> </svg>
             <table >
              <tr>
                  <td><a href="#">صفحه اصلی</a></td>
              </tr>
              <tr>
                  <td><a href="http://laraway.ir/laravel_0">لاراول</a></td>
              </tr>
              <tr>
                  <td><a href="#">داکر دسکتاپ</a></td>
              </tr>
              <tr>
                  <td><a href="#">Visuale Studio Code</a></td>
              </tr>
                <td> <a href="#">گیت و گیت هاب</a></td>
              </tr>
</table>

  </div>
</div>


 
  <div class="w3-center">
      
  <h1 class="w3-xxxlarge w3-animate-bottom">لاراوی آکادمی تخصصی آموزش لاراول</h1>

  <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" id="mainIconPathAttribute" fill="#ff0000" stroke="#000000" stroke-width="0.5"></path> </svg>

  <p id="demo77"></p>
</div>  
</header>




<div class="w3-row-padding w3-center w3-margin-top">

        <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:460px">
            <a href="http://localhost:8080/start_from_zero">
            <h3 style="color:blue;"> آموزش از صفر لاراول</h3><br>
            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor" height="200" width="200"><title>WebAuthn</title><path d="M15.2872 3.641a8.407 8.407 0 00-8.05 7.593h.55a7.805 7.805 0 012.24-4.713 5.825 5.825 0 00.923.695c-.608 1.177-.98 2.556-1.082 4.018h.135c.105-1.467.485-2.819 1.065-3.947.745.434 1.623.754 2.577.94a27.83 27.83 0 00-.25 3.763h-.847v.135h.847c.003 1.334.09 2.617.25 3.764-.954.185-1.832.506-2.577.94a9.997 9.997 0 01-.978-3.137h-.137c.164 1.16.502 2.25.997 3.208a5.825 5.825 0 00-.924.695 7.805 7.805 0 01-2.255-4.875h-.55a8.407 8.407 0 0016.779-.675 8.398 8.398 0 00-.689-3.333 8.407 8.407 0 00-8.025-5.072zm.315.546c.155 0 .31.005.464.014.365.34.708 1.07.983 2.114a16.518 16.518 0 01.357 1.79 10.173 10.173 0 01-1.804.16 10.173 10.173 0 01-1.805-.16 16.519 16.519 0 01.357-1.79c.275-1.045.618-1.775.983-2.114a7.97 7.97 0 01.465-.014zm-.665.028c-.345.392-.658 1.093-.913 2.065a16.639 16.639 0 00-.36 1.8c-.939-.183-1.802-.498-2.533-.926.686-1.283 1.635-2.264 2.73-2.775a7.874 7.874 0 011.076-.164zm1.33 0a7.856 7.856 0 011.084.168c1.092.513 2.037 1.492 2.721 2.771-.73.428-1.594.743-2.533.927a16.64 16.64 0 00-.36-1.8c-.255-.972-.568-1.673-.912-2.066zm-2.972.314c-.655.407-1.257.989-1.776 1.73a8.166 8.166 0 00-.506.825 5.69 5.69 0 01-.89-.67 7.814 7.814 0 013.172-1.885zm4.624.006a7.862 7.862 0 013.164 1.877 5.692 5.692 0 01-.893.672 8.166 8.166 0 00-.506-.825c-.516-.738-1.115-1.318-1.765-1.724zm3.26 1.985a7.858 7.858 0 011.638 2.419 7.802 7.802 0 01.642 3.051h-2.095c-.01-1.74-.398-3.396-1.11-4.774a5.823 5.823 0 00.925-.696zm-1.044.767c.68 1.32 1.084 2.945 1.094 4.703h-3.42a27.863 27.863 0 00-.25-3.763c.953-.186 1.832-.506 2.576-.94zm-6.357.965a10.299 10.299 0 001.824.16 10.299 10.299 0 001.823-.16c.16 1.138.246 2.413.25 3.738h-1.179a1.03 1.03 0 01-.093.135h1.27a27.71 27.71 0 01-.248 3.739 10.397 10.397 0 00-3.647 0 27.733 27.733 0 01-.248-3.739h1.294a.99.99 0 01-.09-.135h-1.204c.003-1.325.088-2.6.248-3.738zm-11.22 1.129a2.585 2.585 0 00-2.547 2.35c-.142 1.541 1.064 2.842 2.566 2.842 1.26 0 2.312-.917 2.533-2.124h4.44v.972h.946v-.972h.837v1.431h.945v-2.376h-7.168a2.586 2.586 0 00-2.552-2.123zm-.058.965a1.639 1.639 0 011.707 1.637 1.64 1.64 0 01-1.639 1.638 1.639 1.639 0 01-.068-3.275zm13.09.388a.75.75 0 00-.345 1.404l-.383 1.958h1.5l-.383-1.958a.75.75 0 00.384-.654.75.75 0 00-.773-.75zm2.218 1.391h3.421c-.01 1.758-.415 3.384-1.094 4.704-.744-.434-1.623-.755-2.577-.94a27.81 27.81 0 00.25-3.764zm3.556 0h2.095a7.805 7.805 0 01-2.28 5.47 5.825 5.825 0 00-.925-.696c.712-1.378 1.1-3.033 1.11-4.774zm-5.52 3.703a10.284 10.284 0 011.562.156 16.518 16.518 0 01-.357 1.791c-.275 1.045-.618 1.774-.982 2.114a7.972 7.972 0 01-.93 0c-.365-.34-.708-1.07-.983-2.114a16.519 16.519 0 01-.357-1.79 10.284 10.284 0 012.048-.157zm1.695.181c.94.184 1.803.5 2.533.926-.686 1.284-1.635 2.265-2.73 2.776a7.874 7.874 0 01-1.075.164c.344-.393.657-1.094.913-2.065a16.64 16.64 0 00.36-1.8zm-3.874 0a16.648 16.648 0 00.36 1.8c.254.973.567 1.674.912 2.066a7.873 7.873 0 01-1.075-.164c-1.096-.511-2.045-1.492-2.73-2.775.73-.428 1.593-.743 2.533-.927zm-2.652.997a8.16 8.16 0 00.506.825c.52.741 1.121 1.323 1.776 1.73a7.814 7.814 0 01-3.174-1.884 5.694 5.694 0 01.892-.67zm9.178 0a5.694 5.694 0 01.891.67 7.814 7.814 0 01-3.173 1.885c.654-.407 1.256-.989 1.775-1.73a8.16 8.16 0 00.507-.825z" id="mainIconPathAttribute" fill="blue"></path></svg>
            <p style="color:blue;">آشنایی با شبکه های کامپیوتری</p>
            <p style="color:blue;">سرویس دهنده یا سرور چیست</p>
            <p style="color:blue;">کاربر یا کلاینت چیست</p>
            <p style="color:blue;">نصب برنامه لاراول</p>
</a>
          </div>
        </div>

        <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:460px">
          <h3 style="color:red;">آموزش لاراول</h3><br>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="IconChangeColor" height="160" width="160"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z" id="mainIconPathAttribute" fill="#ff0000"></path></svg>
          <p>.</p>
          <p>.</p>
          <p>.</p>
          <p>.</p>
          <p>.</p>
        </div>
        </div>

        <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:460px">
              <a style="visited;" href="http://laraway.ir/installation0">
              <h3>آموزش پروژه محور لاراول</h3><br>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="IconChangeColor" height="150" width="150"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z" id="mainIconPathAttribute" fill="#ff0000"></path></svg>  
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="150" zoomAndPan="magnify" viewBox="0 0 30 30.000001" height="150" preserveAspectRatio="xMidYMid meet" version="1.0" id="IconChangeColor"><defs><clipPath id="id1"><path d="M 7.03125 2.902344 L 25.175781 2.902344 L 25.175781 26.128906 L 7.03125 26.128906 Z M 7.03125 2.902344 " clip-rule="nonzero" id="mainIconPathAttribute"></path></clipPath></defs><g clip-path="url(#id1)"><path fill="rgb(0%, 0%, 0%)" d="M 16.878906 2.921875 L 7.5625 2.921875 C 7.269531 2.921875 7.03125 3.15625 7.03125 3.449219 L 7.03125 25.597656 C 7.03125 25.886719 7.269531 26.125 7.5625 26.125 L 11.300781 26.125 C 11.59375 26.125 11.832031 25.886719 11.832031 25.597656 L 11.832031 18.738281 L 16.703125 18.738281 C 21.691406 18.738281 25.175781 15.457031 25.175781 10.757812 C 25.175781 6.070312 21.84375 2.921875 16.878906 2.921875 Z M 15.816406 15.042969 L 11.832031 15.042969 L 11.832031 6.601562 L 15.828125 6.601562 C 18.734375 6.601562 20.371094 8.085938 20.371094 10.855469 C 20.371094 13.542969 18.6875 15.042969 15.816406 15.042969 Z M 15.816406 15.042969 " fill-opacity="1" fill-rule="nonzero" id="mainIconPathAttribute"></path></g></svg>      
              <p>.</p>
          <p>.</p>
          <p>.</p>
          <p>.</p>
          <p>.</p>
            </a>
          </div>
      </div>
</div>
<br>
<footer>
<p>در باره لاراوی</p>
</footer>
<script>
function myFunction1(x) {
  x.classList.toggle("change");
}

</script>
  
<script>
var p = 0;
var txt77 = 'به آکادمی لاراوی خوش آمدید';
var speed = 20;
typeWriter77()==1
function typeWriter77() {
  if (p < txt77.length) {
    document.getElementById("demo77").innerHTML += txt77.charAt(p);
    p++;
    setTimeout(typeWriter77, speed);
  }
}
</script>           

<script>
var w=0;
function testNav() {
    if (w==0) {
  document.getElementById("myNav").style.width = "100%";w+=1;}
  
else{
  document.getElementById("myNav").style.width = "0%";w-=1;}
  
}
</script>

</body>
</html>

