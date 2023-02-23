<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>لاراوی</title>
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
  <div class="w3-container">
  <a class="w3-button w3-green" href="#section2"><b>از صفر شروع کنید</b> </a>
<br>
</div> 
      
    
  
  
  
</header>
<div class="w3-panel w3-padding-large w3-card-4 w3-light-blue">
<h2 id="section2"> یادگیری برنامه نویسی تحت وب از صفر </h2>
<p>
  اگر به دنبال آموزش برنامه نویس تحت وب (برنامه نویس مخصوص ساخت وب سایت) هستید و قصد برنامه نویسی در این حوزه را 
  دارید، حتی اگر تا کنون برنامه نویسی نکرده اید می توانید با آموزش از صفر لاراوی این کار را انجام دهید. لاراوی به شما کمک خواهد کرد که 
  ابتدا درک درستی از برنامه نویسی تحت وب پیدا کنید و بعد از آن گام به گام همراه شماست تا اول وب سایت رسمی خود را 
   بالا بیاورید و بعد برنامه نویسی را شروع کنید. 

</p>
 <h2>راه اندازی یک سایت چگونه انجام می شود:</h2>
<ul dir="rtl">
                   <li>
                   <span style="color:red";>شبکه های کامپیوتری</span> مجموعه ای از کامپیوترهای مستقل و متصل به هم می باشند که با یکدیگر ارتباط برقرار می کنند.
                   </li>
                  
                      <br>
                      <img src="assets/img/shabake0.png" alt="شبکه">                
                      <br>
                     <li>
                         کامپیوترها را میتوان به چند روش باهم شبکه کرد که یکی از این روش ها روش ستاره (star) می باشد
                     </li>
                     <br>
                      <img src="assets/img/shabake2.png" alt="شبکه star">                
                      <br>
                      <br>

                      <li>
                          اگر در یک شبکه کامپیوتری یکی از کامپیوترها به بقیه کامپیوترها سرویس بدهد و بقیه مثل مشتری از آن کامپیوتر سرویس دریافت کنند، به کامپیوتری که سرویس می دهد <span style="color:red";>سرور</span> یا  <span style="color:red";>server</span> و به بقیه که سرویس دریافت میکنند مشتری یا <span style="color:red";>client</span> خواهند گفت    
                      </li> 
                      
                      

                      <br>
                      <img src="assets/img/shabake3.png" alt="کلاینت">                
                      <br>
                      <br>
                      
                      <li>
                          
                          در شکل فوق فقط یک عدد server وجود دارد ، حالا اگه فرض کنیم در سراسر جهان چندین عدد سرور وجود دارد و بقیه کلاینت ها به این سرورها وصل شده اند به صورت زیر می توان آن را نشان داد
                      </li>
                      
                     <br>
                      
                      <br>
                      <img src="assets/img/shabake5.png" alt="سرور">            <br>    
                      <br>
                      <li>
                          پس شما دوست عزیز که در این لحظه در حال خواندن این مطلب آموزشی هستید، با کلاینت خود (که میتواند گوشی همراه، لپ تاپ و یا کامپیوتر شخصی باشد ) به سروری که من این مطلب را در آن قرار داده ام وصل شده اید.
                      </li>
                      <br>
<li>
با توجه به اینکه یک برنامه نویس قصد دارد با ساخت یک وب سایت به مشتریان (کلاینت ها) سرویس دهد،  باید بر روی کلاینت خود یک وب سایت ایجاد کند سپس برای ارائه آن به مشتریان آن را روی یک سرور بار گذاری (upload)کند. 
                               

</li>
<li>شکل زیر نمونه ای از یک برنامه نوشته شده جهت ساخت وب سایت می باشد، همانگونه که مشاهده می کنید 
  مجموعه ای از فایل ها و فولدر ها در کنار هم قرار گرفته اند تا برنامه یک سایت نوشته شده است 
  ، به این مجموعه فایل ها و فولدرها <span style="color:red">فریم ورک</span> گفته می شود
</li>
<br>
<img src="assets/img/framework.png" alt="فریم ورک"> 


<p>
  شکل فوق فریم ورک <span style="color:red">لاراول</span> می باشد، یعنی این فریم ورک موجود است و نیاز نیست شما تمام این فایل و فولدر ها را ایجاد کنید.
</p>
<br>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="IconChangeColor" height="200" width="200"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z" id="mainIconPathAttribute" fill="#ff0000"></path></svg>
<br>
<br>
<p>
    فریم ورک لاراول با زبان برنامه نویسی <span style="color:red">php</span> نوشته شده است   
</p>

<svg width="200" height="200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor"> <path d="M12 5.5C5.27148 5.5 0 8.35547 0 12C0 15.6445 5.27148 18.5 12 18.5C18.7285 18.5 24 15.6445 24 12C24 8.35547 18.7285 5.5 12 5.5ZM10.7539 7.5H12.0645L11.6484 9.5H12.8184C13.5605 9.5 14.0586 9.60352 14.3418 9.86328C14.6191 10.1191 14.7031 10.5391 14.5918 11.1113L14.0723 13.5H12.7402L13.2188 11.291C13.2773 10.9883 13.2539 10.7773 13.1523 10.666C13.0508 10.5547 12.8281 10.5 12.4941 10.5H11.4453L10.8125 13.5H9.5L10.7539 7.5ZM5 9.5H7.66602C8.9375 9.5 9.70703 10.3516 9.40625 11.623C9.05664 13.0996 8.11914 13.5 6.39648 13.5H5.57227L5.31055 15H3.98633L5 9.5ZM15.5 9.5H18.166C19.4375 9.5 20.207 10.3516 19.9062 11.623C19.5566 13.0996 18.6191 13.5 16.8965 13.5H16.0723L15.8105 15H14.4863L15.5 9.5ZM6.13477 10.5L5.75781 12.5H6.61328C7.35352 12.5 8.04102 12.416 8.15625 11.3125C8.19922 10.8848 8.02148 10.5 7.16602 10.5H6.13477ZM16.6348 10.5L16.2578 12.5H17.1133C17.8535 12.5 18.541 12.416 18.6562 11.3125C18.6992 10.8848 18.5215 10.5 17.666 10.5H16.6348Z" fill="#000000" id="mainIconPathAttribute"></path> </svg>

<p>
    <span style="color:red">سیستم عامل سرورها</span>، یا ویندوز است یا لینوکس و چون زبان php با سیستم عامل لینوکس تعامل بهتری دارد   
 بهتر است با سیستم عامل لینوکس پروژه خود را بسازیم.  
</p>
<img src="assets/img/linux.png" alt="لینوکس"> 
</ul>
<ul>
<h2>مراحل ساخت یک سایت با فریم ورک لاراول</h2>
<p>
  با توجه به اینکه مراحل ساخت یک سایت در سیستم عامل های ویندوز ، لینوکس و ios متفاوت می باشد ، پس لطفا ابتدا نوع سیستم کلاینت خود را انتخاب کنید.(شما با چه سیستمی قصد دارید برنامه نویسی کنید و سایت خود را بسازید؟)
</p>
<br>
<div class="w3-row-padding w3-center w3-margin-top">

       <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:460px">
              <a href="#section3">
                
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                 <img src="assets/img/windows11.png" alt="windows11">
              </a>
          </div>
      </div>

      <div class="w3-third">
          <div class="w3-card w3-container" style="min-height:460px">
              
          <br>
                  <br>
                  <br>
                  <br>
                  <br>
              <img src="assets/img/windows10.png" alt="windows10">
          </div>
       </div>

</div>

</ul>





<div class="w3-row-padding w3-center w3-margin-top">
       <div class="w3-third">

          <div class="w3-card w3-container" style="min-height:460px">
              <a style="text-decoration: none" href="http://laraway.ir/laravel_0">
                  <h3>آموزش php</h3><br>


                  <svg width="200" height="200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor"> <path d="M12 5.5C5.27148 5.5 0 8.35547 0 12C0 15.6445 5.27148 18.5 12 18.5C18.7285 18.5 24 15.6445 24 12C24 8.35547 18.7285 5.5 12 5.5ZM10.7539 7.5H12.0645L11.6484 9.5H12.8184C13.5605 9.5 14.0586 9.60352 14.3418 9.86328C14.6191 10.1191 14.7031 10.5391 14.5918 11.1113L14.0723 13.5H12.7402L13.2188 11.291C13.2773 10.9883 13.2539 10.7773 13.1523 10.666C13.0508 10.5547 12.8281 10.5 12.4941 10.5H11.4453L10.8125 13.5H9.5L10.7539 7.5ZM5 9.5H7.66602C8.9375 9.5 9.70703 10.3516 9.40625 11.623C9.05664 13.0996 8.11914 13.5 6.39648 13.5H5.57227L5.31055 15H3.98633L5 9.5ZM15.5 9.5H18.166C19.4375 9.5 20.207 10.3516 19.9062 11.623C19.5566 13.0996 18.6191 13.5 16.8965 13.5H16.0723L15.8105 15H14.4863L15.5 9.5ZM6.13477 10.5L5.75781 12.5H6.61328C7.35352 12.5 8.04102 12.416 8.15625 11.3125C8.19922 10.8848 8.02148 10.5 7.16602 10.5H6.13477ZM16.6348 10.5L16.2578 12.5H17.1133C17.8535 12.5 18.541 12.416 18.6562 11.3125C18.6992 10.8848 18.5215 10.5 17.666 10.5H16.6348Z" fill="#000000" id="mainIconPathAttribute"></path> </svg>

               <p>داکر دسکتاپ چیست؟</p>
  <p>چرا داکر دسکتاپ؟</p>
  <p>مزیت داکر دسکتاپ</p>
  <p></p>
  <p></p>
              </a>
          </div>
      </div>







<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>آموزش داکر دسکتاپ</h3><br>
  

<svg id="changeColor" fill="#DC7633" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" zoomAndPan="magnify" viewBox="0 0 375 374.9999" height="200" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><path id="pathAttribute" d="M 7.09375 7.09375 L 367.84375 7.09375 L 367.84375 367.84375 L 7.09375 367.84375 Z M 7.09375 7.09375 " fill="blue"></path></defs><g><path id="pathAttribute" d="M 187.46875 7.09375 C 87.851562 7.09375 7.09375 87.851562 7.09375 187.46875 C 7.09375 287.085938 87.851562 367.84375 187.46875 367.84375 C 287.085938 367.84375 367.84375 287.085938 367.84375 187.46875 C 367.84375 87.851562 287.085938 7.09375 187.46875 7.09375 " fill-opacity="1" fill-rule="nonzero" fill="blue"></path></g><g id="inner-icon" transform="translate(85, 75)"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" id="IconChangeColor" height="236" width="236"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M349.9 236.3h-66.1v-59.4h66.1v59.4zm0-204.3h-66.1v60.7h66.1V32zm78.2 144.8H362v59.4h66.1v-59.4zm-156.3-72.1h-66.1v60.1h66.1v-60.1zm78.1 0h-66.1v60.1h66.1v-60.1zm276.8 100c-14.4-9.7-47.6-13.2-73.1-8.4-3.3-24-16.7-44.9-41.1-63.7l-14-9.3-9.3 14c-18.4 27.8-23.4 73.6-3.7 103.8-8.7 4.7-25.8 11.1-48.4 10.7H2.4c-8.7 50.8 5.8 116.8 44 162.1 37.1 43.9 92.7 66.2 165.4 66.2 157.4 0 273.9-72.5 328.4-204.2 21.4.4 67.6.1 91.3-45.2 1.5-2.5 6.6-13.2 8.5-17.1l-13.3-8.9zm-511.1-27.9h-66v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm78.1 0h-66.1v59.4h66.1v-59.4zm-78.1-72.1h-66.1v60.1h66.1v-60.1z" id="mainIconPathAttribute" fill="#ffffff" stroke-width="0.3" stroke="#ff0000"></path></svg> </g></svg>



  <p>داکر دسکتاپ چیست؟</p>
  <p>چرا داکر دسکتاپ؟</p>
  <p>مزیت داکر دسکتاپ</p>
  <p></p>
  <p></p>
  
  </div>
</div>
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>آموزش فریم ورک لاراول</h3><br>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="IconChangeColor" height="200" width="200"><!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. --><path d="M504.4,115.83a5.72,5.72,0,0,0-.28-.68,8.52,8.52,0,0,0-.53-1.25,6,6,0,0,0-.54-.71,9.36,9.36,0,0,0-.72-.94c-.23-.22-.52-.4-.77-.6a8.84,8.84,0,0,0-.9-.68L404.4,55.55a8,8,0,0,0-8,0L300.12,111h0a8.07,8.07,0,0,0-.88.69,7.68,7.68,0,0,0-.78.6,8.23,8.23,0,0,0-.72.93c-.17.24-.39.45-.54.71a9.7,9.7,0,0,0-.52,1.25c-.08.23-.21.44-.28.68a8.08,8.08,0,0,0-.28,2.08V223.18l-80.22,46.19V63.44a7.8,7.8,0,0,0-.28-2.09c-.06-.24-.2-.45-.28-.68a8.35,8.35,0,0,0-.52-1.24c-.14-.26-.37-.47-.54-.72a9.36,9.36,0,0,0-.72-.94,9.46,9.46,0,0,0-.78-.6,9.8,9.8,0,0,0-.88-.68h0L115.61,1.07a8,8,0,0,0-8,0L11.34,56.49h0a6.52,6.52,0,0,0-.88.69,7.81,7.81,0,0,0-.79.6,8.15,8.15,0,0,0-.71.93c-.18.25-.4.46-.55.72a7.88,7.88,0,0,0-.51,1.24,6.46,6.46,0,0,0-.29.67,8.18,8.18,0,0,0-.28,2.1v329.7a8,8,0,0,0,4,6.95l192.5,110.84a8.83,8.83,0,0,0,1.33.54c.21.08.41.2.63.26a7.92,7.92,0,0,0,4.1,0c.2-.05.37-.16.55-.22a8.6,8.6,0,0,0,1.4-.58L404.4,400.09a8,8,0,0,0,4-6.95V287.88l92.24-53.11a8,8,0,0,0,4-7V117.92A8.63,8.63,0,0,0,504.4,115.83ZM111.6,17.28h0l80.19,46.15-80.2,46.18L31.41,63.44Zm88.25,60V278.6l-46.53,26.79-33.69,19.4V123.5l46.53-26.79Zm0,412.78L23.37,388.5V77.32L57.06,96.7l46.52,26.8V338.68a6.94,6.94,0,0,0,.12.9,8,8,0,0,0,.16,1.18h0a5.92,5.92,0,0,0,.38.9,6.38,6.38,0,0,0,.42,1v0a8.54,8.54,0,0,0,.6.78,7.62,7.62,0,0,0,.66.84l0,0c.23.22.52.38.77.58a8.93,8.93,0,0,0,.86.66l0,0,0,0,92.19,52.18Zm8-106.17-80.06-45.32,84.09-48.41,92.26-53.11,80.13,46.13-58.8,33.56Zm184.52,4.57L215.88,490.11V397.8L346.6,323.2l45.77-26.15Zm0-119.13L358.68,250l-46.53-26.79V131.79l33.69,19.4L392.37,178Zm8-105.28-80.2-46.17,80.2-46.16,80.18,46.15Zm8,105.28V178L455,151.19l33.68-19.4v91.39h0Z" id="mainIconPathAttribute" fill="#ff0000"></path></svg>



  <p>داکر دسکتاپ چیست؟</p>
  <p>چرا داکر دسکتاپ؟</p>
  <p>مزیت داکر دسکتاپ</p>
  <p></p>
  <p></p>
  
  </div>
</div>
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>آموزش گیت  </h3><br>
  
<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-git" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M15.698 7.287 8.712.302a1.03 1.03 0 0 0-1.457 0l-1.45 1.45 1.84 1.84a1.223 1.223 0 0 1 1.55 1.56l1.773 1.774a1.224 1.224 0 0 1 1.267 2.025 1.226 1.226 0 0 1-2.002-1.334L8.58 5.963v4.353a1.226 1.226 0 1 1-1.008-.036V5.887a1.226 1.226 0 0 1-.666-1.608L5.093 2.465l-4.79 4.79a1.03 1.03 0 0 0 0 1.457l6.986 6.986a1.03 1.03 0 0 0 1.457 0l6.953-6.953a1.031 1.031 0 0 0 0-1.457" id="mainIconPathAttribute" fill="#ff5f11"></path> </svg>

  <p>گیت چیست؟</p>
  <p>گیت هاب چیست؟</p>
  <p>چرا باید از گیت هاب استفاده کرد؟</p>
  <p></p>
  <p></p>
  
  </div>
</div>



<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>آموزش گیت هاب</h3><br>
  





  <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" id="mainIconPathAttribute"></path> </svg>





  <p>داکر دسکتاپ چیست؟</p>
  <p>چرا داکر دسکتاپ؟</p>
  <p>مزیت داکر دسکتاپ</p>
  <p></p>
  <p></p>
  
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>آموزش javascript</h3><br>
  



<svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 32 32" id="IconChangeColor"> <path d="M0 0h32v32h-32zM29.38 24.37c-0.234-1.464-1.188-2.688-4.005-3.833-0.979-0.458-2.073-0.781-2.396-1.521-0.12-0.438-0.141-0.677-0.063-0.938 0.203-0.865 1.219-1.12 2.021-0.88 0.521 0.161 1 0.557 1.302 1.198 1.38-0.901 1.38-0.901 2.339-1.5-0.359-0.557-0.536-0.802-0.781-1.036-0.839-0.943-1.958-1.422-3.776-1.38l-0.943 0.12c-0.901 0.219-1.76 0.698-2.281 1.339-1.516 1.719-1.078 4.719 0.76 5.964 1.818 1.359 4.479 1.656 4.823 2.938 0.318 1.563-1.161 2.063-2.625 1.88-1.078-0.24-1.677-0.781-2.339-1.781l-2.438 1.401c0.276 0.641 0.599 0.917 1.078 1.479 2.318 2.339 8.12 2.219 9.161-1.339 0.036-0.12 0.318-0.943 0.099-2.198zM17.401 14.708h-2.995c0 2.583-0.016 5.151-0.016 7.74 0 1.641 0.083 3.151-0.182 3.615-0.443 0.917-1.573 0.802-2.089 0.641-0.526-0.26-0.797-0.62-1.104-1.141-0.089-0.141-0.151-0.26-0.172-0.26l-2.432 1.5c0.406 0.839 1 1.563 1.766 2.021 1.141 0.682 2.672 0.901 4.276 0.542 1.042-0.302 1.943-0.922 2.411-1.88 0.682-1.24 0.536-2.76 0.531-4.464 0.016-2.74 0-5.479 0-8.24z" id="mainIconPathAttribute"></path> </svg>





  <p>داکر دسکتاپ چیست؟</p>
  <p>چرا داکر دسکتاپ؟</p>
  <p>مزیت داکر دسکتاپ</p>
  <p></p>
  <p></p>
  
  </div>
</div>
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>آموزش visual studio code</h3><br>
  




<svg width="200" height="200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="IconChangeColor"> <path d="M0.228341 8.36915C0.228341 8.36915 -0.356212 7.94324 0.345251 7.37453L1.97956 5.89736C1.97956 5.89736 2.44721 5.40004 2.94164 5.83334L18.0231 17.375V22.9094C18.0231 22.9094 18.0158 23.7785 16.9124 23.6825L0.228341 8.36915Z" fill="blue" id="mainIconPathAttribute"></path> <path d="M4.11555 11.9367L0.228273 15.5089C0.228273 15.5089 -0.171172 15.8093 0.228273 16.346L2.03308 18.0053C2.03308 18.0053 2.46175 18.4706 3.09502 17.9413L7.21611 14.7827L4.11555 11.9367Z" fill="blue" id="mainIconPathAttribute"></path> <path d="M10.94 11.9661L18.0691 6.46362L18.0228 0.95865C18.0228 0.95865 17.7183 -0.242793 16.7027 0.382548L7.21589 9.11025L10.94 11.9661Z" fill="blue" id="mainIconPathAttribute"></path> <path d="M16.9121 23.69C17.3261 24.1183 17.8279 23.978 17.8279 23.978L23.3838 21.2108C24.0951 20.7208 23.9952 20.1127 23.9952 20.1127V3.58803C23.9952 2.86175 23.2596 2.61063 23.2596 2.61063L18.4441 0.264377C17.3919 -0.392968 16.7027 0.382548 16.7027 0.382548C16.7027 0.382548 17.5892 -0.262484 18.0228 0.95865L18.0228 22.8086C18.0228 22.9588 17.9911 23.1065 17.9278 23.2394C17.8011 23.4979 17.5259 23.7392 16.8658 23.6383L16.9121 23.69Z" fill="blue" id="mainIconPathAttribute"></path> </svg>





  <p>داکر دسکتاپ چیست؟</p>
  <p>چرا داکر دسکتاپ؟</p>
  <p>مزیت داکر دسکتاپ</p>
  <p></p>
  <p></p>
  
  </div>
</div>

<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <h3>  آموزش CSS</h3><br>
  


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor" height="200" width="200"> <g> <path fill="none" d="M0 0h24v24H0z" id="mainIconPathAttribute"></path> <path fill-rule="nonzero" d="M5 3l-.65 3.34h13.59L17.5 8.5H3.92l-.66 3.33h13.59l-.76 3.81-5.48 1.81-4.75-1.81.33-1.64H2.85l-.79 4 7.85 3 9.05-3 1.2-6.03.24-1.21L21.94 3z" id="mainIconPathAttribute"></path> </g> </svg>




  <p>داکر دسکتاپ چیست؟</p>
  <p>چرا داکر دسکتاپ؟</p>
  <p>مزیت داکر دسکتاپ</p>
  <p></p>
  <p></p>
  
  </div>
</div>
<div class="w3-third">
  <div class="w3-card w3-container" style="min-height:460px">
  <a style="text-decoration: none" href="http://laraway.ir/html_0">
  <h3>آموزش HTML </h3><br>
  
</a>

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" id="IconChangeColor" height="200" width="200"> <g> <path fill="none" d="M0 0h24v24H0z" id="mainIconPathAttribute"></path> <path fill-rule="nonzero" d="M12 18.178l4.62-1.256.623-6.778H9.026L8.822 7.89h8.626l.227-2.211H6.325l.636 6.678h7.82l-.261 2.866-2.52.667-2.52-.667-.158-1.844h-2.27l.329 3.544L12 18.178zM3 2h18l-1.623 18L12 22l-7.377-2L3 2z" id="mainIconPathAttribute"></path> </g> </svg>




<p>داکر دسکتاپ چیست؟</p>
  <p>چرا داکر دسکتاپ؟</p>
  <p>مزیت داکر دسکتاپ</p>
  <p></p>
  <p></p>
</a>
  </div>
</div>

</div>
<h2 id="section2"> یادگیری لاراول از صفر </h2>
<p>
  یادگیر لاراول از صفر مخصوص دوستانی است که نه تنها با فریم ورک لاراول آشنا نیستند بلکه حتی تا کنون برنامه نویسی نکرده اند و قصد دارند از 
  این طریق، برنامه نویسی وب را نیز یاد بگیرند.
</p>
<p>
  در این روش شما می توانید طی یک فلوچارت مشخص شده نوع سیستم عامل خود را مشخص کنید(مثلا windows 11) و  بسته به شرایطی که دارید گام به گام با لاراوی همراه شوید تا نهایتا وب سایت رسمی خود را بالا بیاورید. بعد از آن تازه آموزش ما برای شما شروع می شود. در این روش چون باید شما با لاراوی در ارتباط باشید بایستی در سایت ما با یک نام و ایمیل عضو شوید تا
  بتوانید مراحل را ادامه دهید.
</p>

<h2 id="section3">لطفا نوع ویندوز خود را انتخاب کنید</h2>
<button id="demo41" class="button button1" onclick="typeWriter26()">ویندوز 11</button>
<button id="demo40" class="button button1" onclick="typeWriter25()">ویندوز 10</button>
<button id="demo42" class="button button1"> نیاز به راهنمایی </button>


<h2 id="demo"></h2>
<button id="demo50" style="display:none" class="button button1" onclick="typeWriter1()">بله آپدیت است </button>
<button id="demo51" style="display:none" class="button button1" onclick="typeWriter206()">خیر آپدیت نیست </button>
<button id="demo52" style="display:none" class="button button1"> نیاز به راهنمایی </button>

<h2 id="demo206"></h2>
<button id="demo207" style="display:none" class="button button1" onclick="typeWriter1()">فروشگاه مایکروسافت باز  می شود</button>
<button id="demo208" style="display:none" class="button button1">فروشگاه مایکروسافت باز نمی شود </button>
<a href="https://apps.microsoft.com/store/apps" target="_blank">
<img id="demo209" style="display:none" src="assets/img/microsoft_store.png" alt="microsoft store">
</a>

<h2 id="demo1"></h2>
<button id="demo2" style="display:none" class="button button1"> 

<a style="text-decoration: none" href="http://laraway.ir/installation1">
ویندوز 64 بیتی x64
</a>
</button>
<button id="demo3" style="display:none" class="button button1">ویندوز 32 بیتی x32</button>
<h2 id="demo60"></h2>
<button id="demo15" style="display:none" class="button button1" onclick="typeWriter1000()"> باز کردم </button>
<button id="demo16" style="display:none" class="button button1" onclick="typeWriter2000()">
نیاز به راهنمایی دارم 
</button>
<video id="demo4" style="display:none" width="400" controls>
  <source src="assets/film/feature/feature.mp4" type="video/mp4">

</video>





</div>


               </div>
               
               </div> 
    </div>



   



<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Footer</h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>
</footer>

<script>
function myFunction1(x) {
  x.classList.toggle("change");
}

                 
             
function myFunction(event) {
  plusSlides(1);
  
}
    
</script>
  

<script>
var i = 0;
var txt = 'آیا ویندوز شما آپدیت است؟';
var speed = 50;
function typeWriter26() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter26, speed);
  }
  else{
        document.getElementById("demo50").style.display=' inline-block';
        document.getElementById("demo51").style.display=' inline-block';
        document.getElementById("demo52").style.display=' inline-block';
}
}
</script>  
<script>
var i6 = 0;
var txt6 = 'آیا میتوانید روی سیستم خود فروشگاه مایکروسافت (microsoft stor) را باز کنید؟';
var speed = 50;
function typeWriter206() {
  if (i6 < txt6.length) {
    document.getElementById("demo206").innerHTML += txt6.charAt(i6);
    i6++;
    setTimeout(typeWriter206, speed);
  }
  else{
        document.getElementById("demo207").style.display=' inline-block';
        document.getElementById("demo208").style.display=' inline-block';
        document.getElementById("demo209").style.display=' inline-block';
}
}
</script>  

<script>
var j = 0;
var txt2 = 'نوع ویندوز خود را انتخاب کنید';
var speed = 50;

function typeWriter1() {
  if (j < txt2.length) {
    document.getElementById("demo1").innerHTML += txt2.charAt(j);
    j++;
    setTimeout(typeWriter1, speed);
    }
    else{
        document.getElementById("demo2").style.display=' inline-block';
        document.getElementById("demo3").style.display=' inline-block';
  
   
  }
}



</script>
<script>
var i1 = 0;
var txt1 = 'پنجره windows features را باز کنید';
var speed = 50;

function typeWriter1000() {
  if (i1 < txt.length) {
    document.getElementById("demo60").innerHTML += txt1.charAt(i1);
    i1++;
    setTimeout(typeWriter1000, speed);
  }
  else{
        document.getElementById("demo15").style.display=' inline-block';
        document.getElementById("demo16").style.display=' inline-block';
}
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
