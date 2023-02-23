<!DOCTYPE html>
<html dir="rtl">
<title>نصب روی ویندوز11</title>
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
a:link {
  color: red;
}
/* mouse over link */
a:hover {
  color: blue;
}

/* selected link */
a:active {
  color: pink;
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
<svg id="changeColor" fill="#DC7633" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="60" zoomAndPan="magnify" viewBox="0 0 375 374.9999" height="60" preserveAspectRatio="xMidYMid meet" version="1.0"><defs><path id="pathAttribute" d="M 8.238281 8.238281 L 366.738281 8.238281 L 366.738281 366.738281 L 8.238281 366.738281 Z M 8.238281 8.238281 " fill="#000000"></path></defs><g><path id="pathAttribute" d="M 187.488281 8.238281 L 204.875 22.945312 L 224.960938 12.152344 L 238.894531 30.136719 L 260.796875 23.734375 L 270.664062 44.203125 L 293.425781 42.46875 L 298.800781 64.535156 L 321.429688 67.542969 L 322.074219 90.238281 L 343.578125 97.863281 L 339.464844 120.191406 L 358.902344 132.09375 L 350.210938 153.085938 L 366.738281 168.75 L 353.84375 187.488281 L 366.738281 206.222656 L 350.210938 221.886719 L 358.902344 242.878906 L 339.464844 254.78125 L 343.578125 277.113281 L 322.074219 284.734375 L 321.429688 307.429688 L 298.800781 310.4375 L 293.425781 332.503906 L 270.664062 330.769531 L 260.796875 351.238281 L 238.894531 344.835938 L 224.960938 362.820312 L 204.875 352.027344 L 187.488281 366.738281 L 170.097656 352.027344 L 150.011719 362.820312 L 136.078125 344.835938 L 114.175781 351.238281 L 104.308594 330.769531 L 81.546875 332.503906 L 76.171875 310.4375 L 53.542969 307.429688 L 52.898438 284.734375 L 31.394531 277.113281 L 35.511719 254.78125 L 16.070312 242.878906 L 24.761719 221.886719 L 8.238281 206.222656 L 21.128906 187.488281 L 8.238281 168.75 L 24.761719 153.085938 L 16.070312 132.09375 L 35.511719 120.191406 L 31.394531 97.863281 L 52.898438 90.238281 L 53.542969 67.542969 L 76.171875 64.535156 L 81.546875 42.46875 L 104.308594 44.203125 L 114.175781 23.734375 L 136.078125 30.136719 L 150.011719 12.152344 L 170.097656 22.945312 L 187.488281 8.238281 " fill-opacity="1" fill-rule="nonzero" fill="#000000"></path></g><g id="inner-icon" transform="translate(85, 75)"> <svg xmlns="http://www.w3.org/2000/svg" width="199.8" height="199.8" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16" id="IconChangeColor"> <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" id="mainIconPathAttribute" fill="#ff0000" stroke-width="0" stroke="#ffffff"></path> </svg> </g></svg>
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
                <h3 dir="rtl">ساخت سایت در ویندوز 11</h3> 
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

<h2>ساخت سایت در ویندوز 11</h2>
<p>
    با توجه به اینکه زبان php تعامل بهتری با سیستم عامل لینوکس دارد پس بهتر است پروژه لاراول خود را 
    با سیستم عامل لینوکس پیاده سازی کنیم.
</p>
<h2>ایجاد سیستم عامل لینوکس بر روی ویندوز 11</h2>
<p>
    در اینجا چون سیستم عامل اصلی ما ویندوز است و قصد داریم از همین سخت افزار استفاده کنیم و 
    یک سیستم عامل دوم به آن اضافه کنیم، به سیستم عامل دوم <span style="color:red;"> ماشین مجازی</span>  یا virtual machine گفته می شود. 

</p>
<img src="assets/img/VM.png" alt="virtual machine">
<br>
<br>
برای اینکه ویندوز امکان نصب ماشین مجازی لینوکس را به ما بدهد بایستی ابتدا از مسیر زیر وارد windows features شویم:
<br>
<h3>START-->CONTROL PANEL-->PROGRAMS-->TURN WINDOWS FEATURES ON OR OFF</h3> 
<br>
<video width="100%" controls>
  <source src="assets/film/feature/feature.mp4" type="video/mp4">
</video>
<p>
 پنجره windows features به صورت زیر باز خواهد شد و شما بایستی تیک مربوط به Hyper-V و Virtual Machine Platrorm و Windows Hypervisor Platform را بزنید و ok کنید و سیستم را ری استارت کنید.
</p>
<br>
<img src="assets/img/features.png" alt="vindows features">
<br>
<p>همچنین تیک Hyper-V را نیز به صورت زیر بزنید</p>
<img src="assets/img/features2.png" alt="vindows features">
<P>اگر هر سه تیک فوق را زده اید و سیستم خود را ریست کرده اید به مرحله بعد بروید.
</P>
<h2><span style="color:red;">W</span>indows <span style="color:red;">S</span>ubsystem for <span style="color:red;">L</span>inux</h2>

<P>
    <span style="color:red;">WSL</span> نرم افزاری است جهت ارتباط سیستم عامل ویندوز و لینوکس. 
</P>
<img src="assets/img/wsl.png" alt="wsl">
<p>
    WSL را باید روی سیستم خود نصب کنید اما قبل از آن مجددا وارد پنجره windows features شوید و به صورت زیر تیک مربوط به <span style="color:red;">Windows subsystem for linux</span> را بزنید و سیستم خود را ریست کنید
</p>
<img src="assets/img/sub.png" alt="windows subsystem for linux">
<p>
    اگر تیک فوق را زده و سیستم خود را ری استارت کرده اید فایل زیر را دانلود و نصب نمایید. 
</p>
<h2>نصب wsl</h2>
<p>روی فایل زیر کلیک کنید تا دانلود شود سپس روی فایل دانلود شده دابل کلیک کنید ، در عرض چند ثانیه نصب می شود روی 
    finish کلیک کنید .
</p>
<p><b><a href="/assets/download/wsl_update_x64.msi" download="wsl_update_x64.msi">wsl_update_x64.msi</a></b></p>
</a>

<br>
<img src="assets/img/wsl2.png" alt="windows subsystem for linux">
<p>
     بعد از پایان نصب سیستم خود را <span style="color:red">ری استارت</span> کنید تا شرایط برای نصب لینوکس روی سیستم شما فراهم  شود
</p>
<h2>
    نصب لینوکس
</h2>
<p>
 برای نصب لینوکس روی ویندوز خود وارد فروشگاه مایکروسافت microsoft store ویندوز خود شوید 
</p>
<br>

<img src="assets/img/microsoft.png" alt="microsoft store">
<br>

<p>بعد از باز کردن microsoft store در قسمت جستجو تایپ کنید <span style="color:red">ubuntu 20.04.5 Lts</span> سپس آن را انتخاب و نصب نمایید</p>
<br>

<img src="assets/img/ubuntu.png" alt="ubuntu">
<br>
<br>
<br>
با انتخاب ubuntu 20.04.5 پنجره ای مطابق شکل زیر باز می شود، روی <span style="color:red">get </span>کلیک کنید تا نصب  شود.  
<br>
<br>
<br>
<img src="assets/img/ubuntu3.png" alt="ubuntu">
<br>
<br>
<p>بعد از پایان نصب روی open کلیک کنید</p>
<br>
<br>
<img src="assets/img/ubuntu4.png" alt="ubuntu">
<br>
<br>
<p>بعد از کلیک روی open پنجره ubuntu مطابق شکل زیر باز می شود</p>
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
