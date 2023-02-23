<!DOCTYPE html>
<html dir="rtl">
<title>آموزش لاراول</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="{{ URL::to('assets/css/app.css') }}" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
video {
  max-width: 100%;
  height: auto;
}
</style>
<style>
.w3-theme {color:#fff !important;background-color:#3366ff !important}
.w3-btn {background-color:#4CAF50;margin-bottom:4px}
.w3-code{border-left:4px solid #4CAF50}
.myMenu {margin-bottom:150px}

.topnav {
  overflow: hidden;
  background-color: #000;
  position: fixed;
  top: 0;
  width: 100%;
}

.topnav a {
  float:right;
  display:  inline-block;
  color: white;
  text-align: center;
  padding: 1px 20px;
  text-decoration: none;
  font-size: 14px;
}

.topnav a:hover {
  background-color: #ddd;
  color: white;
}

.topnav a.active {
  background-color: #fff;
  color: white;
  padding: 1px 20px;
}

.topnav .search-container {
  float: left;
}

.topnav input[type=text] {
  padding: 9px;
  margin-top: 20px;
  font-size: 22px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 9px 10px;
  margin-top: 20px;
  margin-right: 6px;
  background: #000;
  font-size: 22px;
  border: none;
  cursor: pointer;
}
.search-container  {
  float: right;
  padding: 5px 5px;
  margin-top: 1px;
  margin-right: 15px;
  background: #fff;
  font-size: 22px;
  border: none;
  cursor: pointer;
}


.topnav .search-container button:hover {
  background: #000;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display:  inline-block;
    text-align: right;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color: #000;}


<style>
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
  margin: 4px 20px;
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
<style>
.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 80px;
  margin top:30px;
  right: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 1);
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
.container23 {
 
 
 
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
<body>
<header>
<div class="topnav">
   <table >
        
        <td>
        <a>
          <div class="container23" onclick="myFunction120(this) & testNav()">
            <div class="bar1"></div>
              <div class="bar2"></div>
                <div class="bar3"></div>
  
          </div>
       </a>
        </td>
        
        <td> 
            <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="http://laraway.ir/start_from_zero">آموزش از صفر لاراول</a></td>
        </td>
        <td>
       <td>
        <a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="#">آموزش php </a></td>
    </td>
    <td>
    <td><a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="#">آموزش فریم ورک لاراول</a></td>
    </td>
    <td>
    <td><a class="w3-bar-item w3-button w3-hide-medium w3-hide-small w3-hover-white w3-padding-16" href="#">آموزش پروژه محور لاراول</a></td>
    </td>
<td>
            <td>
                <a href="http://laraway.ir/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" id="mainIconPathAttribute" fill="#ff0000" stroke="#000000" stroke-width="0.5"></path> </svg>
                </a>
            </td>
        </td>
   
    </td>
   
</div>
   
  </td>
 
</table>
  
 
</div>
<div style="padding-left:16px"></div>
      <div id="myNav" class="overlay">
        <div class="overlay-content">
        <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" id="mainIconPathAttribute" fill="#ff0000" stroke="#000000" stroke-width="0.5"></path> </svg>
             <table >
              <tr>
                  <td><a href="http://laraway.ir/">صفحه اصلی</a></td>
              </tr>
              <tr>
                  <td><a href="http://laraway.ir/start_from_zero">آموزش از صفر لاراول</a></td>
              </tr>
              <tr>
                  <td><a href="#">آموزش php</a></td>
              </tr>
              <tr>
                  <td><a href="#">آموزش فریم ورک لاراول</a></td>
              </tr>
                <td> <a href="#">آموزش پروژه محور لاراول</a></td>
              </tr>
</table>

  </div>
</div>
</header>
<!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-collapse" style="z-index:3;margin-right:80%;margin-top:3px;">
<div class="w3-panel w3-padding-large w3-card-4 w3-light-grey">
      <a href="#"> 
        <div class="search-container">
          <form action="/action_page.php">
            <button type="submit"><i class="fa fa-search"></i></button>
            <input type="text" placeholder="جستجو..." name="search">
          </form>
        </div>
      </a>
    


    
               <h3 dir="rtl">آموزش از صفر لاراول</h3> 
               <a class="w3-button" href="http://laraway.ir/start_from_zero#section1">شروع از صفر</a>
             <br> 
            <a class="w3-button" href="http://laraway.ir/start_from_zero#section2">شبکه کامپیوتری</a>
            <br>
               <a class="w3-button" href="http://laraway.ir/start_from_zero#section3">سرور چیست؟</a>
               <br>
               <a class="w3-button" href="http://laraway.ir/start_from_zero#section4">کلاینت چیست؟</a>
               <br>
               <a class="w3-button" href="http://laraway.ir/start_from_zero#section5">اینترنت چیست؟</a>     
               <br>
               <a class="w3-button" href="http://laraway.ir/start_from_zero#section6">فریم ورک چیست؟</a>
               <br>
               <a class="w3-button" href="http://laraway.ir/start_from_zero#section7">فریم ورک لاراول</a>
                <br>
               <a class="w3-button" href="http://laraway.ir/start_from_zero#section8">سیستم عامل سرورها</a>
                <br>
               <a class="w3-button" href="http://laraway.ir/start_from_zero#section9"> ساخت یک سایت</a>
                <br>
 <br>
          </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    
  
            

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

</div>

<!-- Main content: shift it to the right by 270 pixels when the sidebar is visible -->

<div class="w3-main w3-container" style="margin-left:20%;margin-top:80px;">
<div class="w3-panel w3-padding-large w3-card-4 w3-light-blue">
<svg id="changeColor" fill="#DC7633" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" zoomAndPan="magnify" viewBox="0 0 375 374.9999" height="200" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><path id="pathAttribute" d="M 8.238281 8.238281 L 366.738281 8.238281 L 366.738281 366.738281 L 8.238281 366.738281 Z M 8.238281 8.238281 " fill="#000000"></path></defs><g><path id="pathAttribute" d="M 187.488281 8.238281 L 204.875 22.945312 L 224.960938 12.152344 L 238.894531 30.136719 L 260.796875 23.734375 L 270.664062 44.203125 L 293.425781 42.46875 L 298.800781 64.535156 L 321.429688 67.542969 L 322.074219 90.238281 L 343.578125 97.863281 L 339.464844 120.191406 L 358.902344 132.09375 L 350.210938 153.085938 L 366.738281 168.75 L 353.84375 187.488281 L 366.738281 206.222656 L 350.210938 221.886719 L 358.902344 242.878906 L 339.464844 254.78125 L 343.578125 277.113281 L 322.074219 284.734375 L 321.429688 307.429688 L 298.800781 310.4375 L 293.425781 332.503906 L 270.664062 330.769531 L 260.796875 351.238281 L 238.894531 344.835938 L 224.960938 362.820312 L 204.875 352.027344 L 187.488281 366.738281 L 170.097656 352.027344 L 150.011719 362.820312 L 136.078125 344.835938 L 114.175781 351.238281 L 104.308594 330.769531 L 81.546875 332.503906 L 76.171875 310.4375 L 53.542969 307.429688 L 52.898438 284.734375 L 31.394531 277.113281 L 35.511719 254.78125 L 16.070312 242.878906 L 24.761719 221.886719 L 8.238281 206.222656 L 21.128906 187.488281 L 8.238281 168.75 L 24.761719 153.085938 L 16.070312 132.09375 L 35.511719 120.191406 L 31.394531 97.863281 L 52.898438 90.238281 L 53.542969 67.542969 L 76.171875 64.535156 L 81.546875 42.46875 L 104.308594 44.203125 L 114.175781 23.734375 L 136.078125 30.136719 L 150.011719 12.152344 L 170.097656 22.945312 L 187.488281 8.238281 " fill-opacity="1" fill-rule="nonzero" fill="#000000"></path></g><g id="inner-icon" transform="translate(85, 75)"> <svg xmlns="http://www.w3.org/2000/svg" width="199.8" height="199.8" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" id="mainIconPathAttribute" fill="#ff0000" stroke-width="0" stroke="#ffffff"></path> </svg> </g></svg>
<h2> یادگیری برنامه نویسی تحت وب از صفر </h2>
<p>
  اگر به دنبال آموزش برنامه نویس تحت وب (برنامه نویس مخصوص ساخت وب سایت) هستید و قصد برنامه نویسی در این حوزه را 
  دارید، حتی اگر تا کنون برنامه نویسی نکرده اید می توانید با آموزش از صفر لاراوی این کار را انجام دهید. لاراوی به شما کمک خواهد کرد که 
  ابتدا درک درستی از برنامه نویسی تحت وب پیدا کنید و بعد از آن گام به گام همراه شماست تا اول وب سایت رسمی خود را 
   بالا بیاورید و بعد برنامه نویسی را شروع کنید. 

</p>
<br id="section2">
<br>
 <h2>شبکه  کامپیوتری</h2>
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
                      <br id="section3">
                      <br>
<h2 >سرور چیست؟</h2>
                      <li>
                          اگر در یک شبکه کامپیوتری یکی از کامپیوترها به بقیه کامپیوترها سرویس بدهد و بقیه مثل مشتری از آن کامپیوتر سرویس دریافت کنند، به کامپیوتری که سرویس می دهد <span style="color:red";>سرور</span> یا  <span style="color:red";>server</span>خواهند گفت    
                      </li> 
                      <br>
                      <img src="assets/img/shabake3.png" alt="سیستم کاربری (کلاینت)">                
                      <br>
                      <br id="section4">
                      <br>
                      <h2 >کلاینت چیست؟</h2>
                      <li>
                              در یک شبکه کامپیوتری به کامپیوترهایی که از سرور، سرویس دریافت میکنند کاربر یا <span style="color:red";>client</span>  گفته می شود.    
                      </li> 
                      
                      

                      <br>
                      <img src="assets/img/shabake3.png" alt="سیستم کاربری (کلاینت)">                
                      <br>
                      <br>
                      <br id="section5">
                      <br>
                      <h2 >اینترنت چیست؟</h2>
                      <li>
                          
                          در شکل فوق فقط یک عدد server وجود داشت ، حالا اگه فرض کنیم در سراسر جهان  میلیون ها سرور وجود دارد که به هم وصل شده اند و بقیه سیستم های کاربری (کلاینت ها) به این سرورها وصل شده باشند، به این شبکه گسترده جهانی ،  <span style="color:red";>اینترنت</span> گفته می شود و به صورت زیر می توان آن را نشان داد
                      </li>
                      
                     <br>
                      
                      <br>
                      <img src="assets/img/shabake5.png" alt="سرور">            <br>    
                      <br>
                      <li>
                          پس شما دوست عزیز که در این لحظه در حال خواندن این مطلب آموزشی هستید، با سیستم کاربری (کلاینت) خود (که میتواند گوشی همراه، لپ تاپ و یا کامپیوتر شخصی باشد ) به سروری که من این مطلب را در آن قرار داده ام وصل شده اید.
                      </li>
                      <br>
                      <br id="section6">
                      <br>
                      <h2 >فریم ورک چیست؟</h2>
<li>شکل زیر نمونه ای از یک برنامه نوشته شده جهت ساخت وب سایت می باشد، همانگونه که مشاهده می کنید 
  مجموعه ای از فایل ها و فولدر ها در کنار هم قرار گرفته اند تا برنامه یک سایت نوشته شده است 
  ، به این مجموعه فایل ها و فولدرها <span style="color:red">فریم ورک</span> گفته می شود
</li>
<br>
<img src="assets/img/framework.png" alt="فریم ورک"> 
<p>
فریم ورک یک چارچوب به حساب می‌آید که معمولاً برنامه نویس‌ها برای توسعه و طراحی نرم افزار از آن استفاده می‌کنند. استفاده از فریم ورک به ساده شدن توسعه پردازش‌ها کمک می‌کند. یکی از دلیل‌های این سادگی این موضوع است که فریم ورک از نوشتن مکرر کدهای مشابه جلوگیری خواهد کرد. همچنین باعث ایجاد شیوه‌های خوب و مناسب و سازگاری در کدها می‌شود. بنابراین می‌توان گفت که فریم ورک، مجموعه‌ای از ابزارها و ماژول‌های گوناگون است که می‌توانند در پروژه‌های مختلف مورد استفاده قرار بگیرند.
</p>

                      <br id="section7">
                      <br>
                      <br>
                      <h2>فریم ورک لاراول چیست؟</h2>
<p>
  شکل فوق <span style="color:red">فریم ورک لاراول</span> می باشد، یعنی این فریم ورک موجود است و نیاز نیست شما تمام این فایل و فولدر ها را ایجاد کنید.
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
<br  id="section8">
                      <br>
                      <h2>سیستم عامل سرور ها</h2>
    <span style="color:red">سیستم عامل سرورها</span>، یا ویندوز است یا لینوکس و چون زبان php با سیستم عامل لینوکس تعامل بهتری دارد   
 بهتر است حتی اگر سیستم عامل شما ویندوز است، با سیستم عامل لینوکس پروژه خود را بسازید. لازم به ذکر است که در ادامه خواهید دید که چگونه بر روی ویندوز خود، لینوکس را اضافه کنید.  
</p>
<img src="assets/img/linux.png" alt="لینوکس"> 
</ul>
<ul>
    <br id="section9">
    <br>
<h2 >مراحل ساخت یک سایت با فریم ورک لاراول</h2>
<p>
  با توجه به اینکه مراحل ساخت یک سایت در سیستم عامل های ویندوز ، لینوکس و ios متفاوت می باشد ، پس لطفا ابتدا نوع سیستم کاربری (کلاینت) خود را انتخاب کنید.(شما با چه سیستمی قصد دارید برنامه نویسی کنید و سایت خود را بسازید؟)
</p>
<br>


       <a href="http://laraway.ir/windows11">
       <img src="assets/img/windows11.png" alt="windows11">
       </a>
       <hr>
        <a href="">
        <img src="assets/img/windows10_2.png" alt="windows10">
        </a>
        <hr>
        <a href="">
        <img src="assets/img/ios.png" alt="windows10">
        </a>
        <hr>
        <a href="">
        <img src="assets/img/linux1.png" alt="windows10">
        </a>
          

</div>

</ul>





<script>
function myFunction1(x) {
  x.classList.toggle("change");
}

function myFunction120(x) {
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
